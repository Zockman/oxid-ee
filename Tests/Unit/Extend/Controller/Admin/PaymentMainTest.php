<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

use Wirecard\Oxid\Extend\Controller\Admin\PaymentMain;

use Wirecard\PaymentSdk\TransactionService;

class PaymentMainTest extends \Wirecard\Test\WdUnitTestCase
{

    /**
     * @var PaymentMain
     */
    private $_controller;

    protected function setUp()
    {
        $this->_controller = oxNew(PaymentMain::class);
        parent::setUp();
    }

    /**
     * @dataProvider renderProvider
     */
    public function testRender($bValidationResult, $bExpected)
    {
        $this->_controller->setEditObjectId('wdpaypal');
        $_POST['fnc'] = 'save';
        if ($bValidationResult) {
            $_POST['editval'] = [
                'oxpayments__wdoxidee_apiurl' => 'http://api.url',
                'oxpayments__wdoxidee_httpuser' => 'user',
                'oxpayments__wdoxidee_httppass' => 'mysecretpasswordnooneknows',
            ];
        }

        $oTransactionServStub = $this->getMockBuilder(TransactionService::class)
            ->disableOriginalConstructor()
            ->setMethods(['checkCredentials'])
            ->getMock();

        $oTransactionServStub->method('checkCredentials')
            ->willReturn($bValidationResult);

        $this->_controller->setTransactionService($oTransactionServStub);
        $this->_controller->render();

        $this->assertEquals($bExpected, $this->_controller->getViewData()['bConfigNotValid']);
    }

    public function renderProvider()
    {
        return [
            'validation successful' => [true, false],
            'validation failure' => [false, true],
        ];
    }

    public function testSave()
    {
        try {
            $this->_controller->save();
        } catch (\Exception $exc) {
            $this->fail($exc->getMessage());
        }
    }

    /**
     * @dataProvider creditorIdValidationProvider
     */
    public function testCreditorIdValidation($bResult, $sCreditorId)
    {
        // use an anonymous class to get access to protected methods and variables
        $cPaymentMain = $this->_createPaymentMainClassInstance();

        $bCreditorIdValid = $cPaymentMain->creditorIdValidation($sCreditorId);
        $this->assertEquals($bCreditorIdValid, $bResult);
    }

    public function creditorIdValidationProvider()
    {
        return [
            'creditor id valid' => [1, 'DE98ZZZ09999999999'],
            'creditor id invalid' => [0, 'DE98ZZZ09995999290'],
            'creditor id too long' => [0, 'DE98ZZZ09995999290000000000000000000'],
        ];
    }

    private function _createPaymentMainClassInstance()
    {
        $cPaymentMain = new class() extends PaymentMain
        {
            public function creditorIdValidation($sCreditorId)
            {
                return parent::_creditorIdValidation($sCreditorId);
            }
        };
        return $cPaymentMain;
    }

}
