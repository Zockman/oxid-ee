<?php
/**
 * Shop System Plugins:
 * - Terms of Use can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/_TERMS_OF_USE
 * - License can be found under:
 * https://github.com/wirecard/oxid-ee/blob/master/LICENSE
 */

use Wirecard\Oxid\Core\PaymentMethodHelper;
use Wirecard\Oxid\Model\GiropayPaymentMethod;
use Wirecard\Oxid\Model\SepaCreditTransferPaymentMethod;

use Wirecard\PaymentSdk\Config\Config;
use Wirecard\PaymentSdk\Config\PaymentMethodConfig;
use Wirecard\PaymentSdk\Transaction\GiropayTransaction;

class GiropayPaymentMethodTest extends OxidEsales\TestingLibrary\UnitTestCase
{
    /**
     * @var GiropayPaymentMethod
     */
    private $_oPaymentMethod;

    protected function setUp()
    {
        parent::setUp();

        $this->_oPaymentMethod = new GiropayPaymentMethod();
    }

    public function testGetConfig()
    {
        $oConfig = $this->_oPaymentMethod->getConfig();

        $this->assertInstanceOf(Config::class, $oConfig);
        $this->assertInstanceOf(PaymentMethodConfig::class, $oConfig->get(GiropayPaymentMethod::getName()));
    }

    public function testGetTransaction()
    {
        $this->assertInstanceOf(GiropayTransaction::class, $this->_oPaymentMethod->getTransaction());
    }

    public function testAddMandatoryTransactionData()
    {
        $oTransaction = $this->_oPaymentMethod->getTransaction();
        $this->_oPaymentMethod->addMandatoryTransactionData($oTransaction);

        $this->assertObjectHasAttribute('bankData', $oTransaction);
    }

    public function testGetConfigFields()
    {
        $aFields = $this->_oPaymentMethod->getConfigFields();

        $this->assertEquals([
            'apiUrl',
            'httpUser',
            'httpPassword',
            'testCredentials',
            'maid',
            'secret',
            'descriptor',
            'additionalInfo',
            'deleteCanceledOrder',
            'deleteFailedOrder',
        ], array_keys($aFields));
    }

    public function testGetCheckoutFields()
    {
        $aFields = $this->_oPaymentMethod->getCheckoutFields();

        $this->assertEquals([
            'bic',
        ], array_keys($aFields));
    }

    public function testGetPublicFieldNames()
    {
        $aFieldNames = $this->_oPaymentMethod->getPublicFieldNames();

        $this->assertEquals([
            'apiUrl',
            'maid',
            'descriptor',
            'additionalInfo',
            'deleteCanceledOrder',
            'deleteFailedOrder',
        ], $aFieldNames);
    }

    public function testGetPostProcessingPaymentMethod()
    {
        $this->assertInstanceOf(
            SepaCreditTransferPaymentMethod::class,
            $this->_oPaymentMethod->getPostProcessingPaymentMethod('')
        );
    }
}
