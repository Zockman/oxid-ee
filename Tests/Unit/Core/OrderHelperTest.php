<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

namespace Wirecard\Oxid\Core;

use OxidEsales\Eshop\Application\Model\Article;
use OxidEsales\Eshop\Application\Model\BasketItem;
use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Core\Registry;
use oxTestModules;
use Psr\Log\LoggerInterface;
use Wirecard\Oxid\Extend\Model\Basket;
use Wirecard\Oxid\Extend\Model\Order;
use Wirecard\Oxid\Extend\Model\Payment;
use Wirecard\PaymentSdk\BackendService;
use Wirecard\PaymentSdk\Entity\Status;
use Wirecard\PaymentSdk\Entity\StatusCollection;
use Wirecard\PaymentSdk\Response\FailureResponse;
use Wirecard\PaymentSdk\Response\FormInteractionResponse;
use Wirecard\PaymentSdk\Response\InteractionResponse;
use Wirecard\Test\WdUnitTestCase;

class OrderHelperTest extends WdUnitTestCase
{

    public function testCreateOrder()
    {
        $this->markTestIncomplete('Order#validateOrder returns Order::ORDER_STATE_INVALIDPAYMENT and that is quite hard to mock');

        $oBasketStub = $this->getMockBuilder(Basket::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oBasketStub->method('getPaymentId')
            ->willReturn('wdpaypal');

        $oBasketStub->method('getShippingId')
            ->willReturn('oxidstandard');

        $oBasketStub->method('getArtStockInBasket')
            ->willReturn(20);

        $oUserStub = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->setMethods(['onOrderExecute'])
            ->getMock();

        $oOrder = OrderHelper::createOrder($oBasketStub, $oUserStub);

        $this->assertInstanceOf(Order::class, $oOrder);
    }

    public function testCreateOrderFailed()
    {

        $oBasketStub = $this->getMockBuilder(Basket::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oUserStub = $this->getMockBuilder(User::class)
            ->disableOriginalConstructor()
            ->setMethods(['onOrderExecute'])
            ->getMock();

        $oBasketItemStub = $this->getMockBuilder(BasketItem::class)
            ->disableOriginalConstructor()
            ->setMethods(['getArticle'])
            ->getMock();

        $oBasketStub->method('getContents')
            ->willReturn([$oBasketItemStub]);

        $oArticleStub = $this->getMockBuilder(Article::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oArticleStub->method('checkForStock')
            ->willReturn(true);

        $oBasketItemStub->method('getArticle')
            ->willReturn($oArticleStub);

        $oOrder = OrderHelper::createOrder($oBasketStub, $oUserStub);

        $this->assertNull($oOrder);
    }

    /**
     * @dataProvider testIsPaymentFinishedProvider
     */
    public function testIsPaymentFinished($sSessionToken, $sPaymentRedirect, $bExpected)
    {
        $this->assertEquals($bExpected, OrderHelper::isPaymentFinished($sSessionToken, $sPaymentRedirect));
    }

    public function testIsPaymentFinishedProvider()
    {
        return [
            'is finished' => ['test', 'test', true],
            'is not finished' => ['test', 'other', false],
        ];
    }

    /**
     * @dataProvider testIsFinalizeOrderSuccessfulProvider
     */
    public function testIsFinalizeOrderSuccessful($iSuccess, $bExpected)
    {
        $this->assertEquals($bExpected, OrderHelper::isFinalizeOrderSuccessful($iSuccess));
    }

    public function testIsFinalizeOrderSuccessfulProvider()
    {
        return [
            'order state mailing error' => [Order::ORDER_STATE_MAILINGERROR, true],
            'order state okay' => [Order::ORDER_STATE_OK, true],
            'order state payment error' => [Order::ORDER_STATE_PAYMENTERROR, false],
        ];
    }

    /**
     *
     * @dataProvider testHandleFormResponseProvider
     */
    public function testHandleFormResponse($formPost)
    {
        $oSession = Registry::getSession();
        $oSession->setVariable('formPost', $formPost);
        $oPayment = oxNew(Payment::class);
        $oPayment->load('wdcreditcard');

        $oOrderStub = $this->getMockBuilder(Order::class)
            ->disableOriginalConstructor()
            ->getMock();

        OrderHelper::handleFormResponse($oSession, $oPayment, $oOrderStub, 'formPost');
    }

    public function testHandleFormResponseProvider()
    {
        $successResponse = file_get_contents(__DIR__ . '/../../resources/success_response.xml');
        return [
            'empty post body' => [[]],
            'filled post body' => [["eppresponse" => "$successResponse"]],
        ];
    }

    /**
     * @dataProvider testHandleResponseProvider
     */
    public function testHandleResponse($oResponse, $oResultRedirect)
    {
        oxTestModules::addFunction(
            'oxUtils',
            'redirect',
            '{ return $aA[0]; }');
        $oLoggerStub = $this->getMockBuilder(LoggerInterface::class)
            ->disableOriginalConstructor()
            ->getMock();
        $oOrderStub = $this->getMockBuilder(Order::class)
            ->disableOriginalConstructor()
            ->getMock();
        $oBackendServiceStub = $this->getMockBuilder(BackendService::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sRedirectUrl = OrderHelper::handleResponse($oResponse, $oLoggerStub, $oOrderStub, $oBackendServiceStub);

        $this->assertContains($oResultRedirect, $sRedirectUrl);
    }

    public function testHandleResponseProvider()
    {

        $oFailureResponseStub = $this->getMockBuilder(FailureResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        $statusCollection = new StatusCollection();
        $statusCollection->add(new Status("123", "description", "minor"));

        $oFailureResponseStub->method('getStatusCollection')
            ->willReturn($statusCollection);

        $oFormInteractionResponseStub = $this->getMockBuilder(FormInteractionResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        $oInteractionResponseStub = $this->getMockBuilder(InteractionResponse::class)
            ->disableOriginalConstructor()
            ->getMock();

        $sInteractionRedirect = 'http://this.is.a.redirect.com';
        $oInteractionResponseStub->method('getRedirectUrl')
            ->willReturn($sInteractionRedirect);

        return [
            'handle FailureResponse' => [$oFailureResponseStub, 'index.php?cl=payment'],
            'handle FormInteractionResponse' => [$oFormInteractionResponseStub, 'index.php?cl=wcpg_form_interaction'],
            'handle InteractionResponse' => [$oInteractionResponseStub, $sInteractionRedirect],
        ];
    }
}
