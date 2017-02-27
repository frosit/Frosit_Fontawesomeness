<?php
/**
 * Frosit Fontawesomeness
 *
 * @category    Frosit
 * @package     Frosit_Fontawesomeness
 * @author      Fabio Ros <info@frosit.nl>
 * @copyright   Copyright (c) 2016 Frosit
 * @license     http://opensource.org/licenses/osl-3.0.php Open Software License 3.0 (OSL-3.0)
 */

/**
 * Class Frosit_Fontawesomeness_Test_Helper_Data
 */
class Frosit_Fontawesomeness_Test_Helper_Data extends EcomDev_PHPUnit_Test_Case
{

    /** @var Frosit_Fontawesomeness_Helper_Data $_helper */
    protected $_helper;

    /**
     * Setup Method
     *
     * @return void
     */
    protected function setUp()
    {
        $this->_helper = Mage::helper('frosit_fontawesomeness');
        parent::setUp();
    }

    /**
     * @test
     * @return void
     */
    public function testGetFontAwesomeSettings()
    {
        $this->assertInternalType(
            'array',
            $this->_helper->getFontAwesomeSettings(),
            'Setting returns array'
        );

        $this->assertEquals(
            array('active'=>'0'),
            $this->_helper->getFontAwesomeSettings(),
            'Setting correct'
        );
    }

    /**
     * @test
     * @return void
     */
    public function testGetLocalFontSettings()
    {
        $this->assertInternalType(
            'array',
            $this->_helper->getLocalFontSettings(),
            'Setting returns array'
        );

        $this->assertEquals(
            array('active'=>'0'),
            $this->_helper->getLocalFontSettings(),
            'Setting correct'
        );
    }

    /**
     * @test
     * @return void
     */
    public function testGetCustomFontSettings()
    {
        $this->assertInternalType(
            'array',
            $this->_helper->getCustomFontSettings(),
            'Setting returns array'
        );

        $this->assertEquals(
            array('active'=>'0'),
            $this->_helper->getCustomFontSettings(),
            'Setting correct'
        );
    }


//    /**
//     * @test
//     * @loadFixture testMigrateFlag
//     * @return void
//     */
//    public function testCheckMigrationActivated()
//    {
//        $this->assertInternalType(
//            'bool',
//            $this->_helper->checkMigrationActivated(),
//            'Migration Flag is Boolean'
//        );
//
//        $this->assertEquals(
//            true,
//            $this->_helper->checkMigrationActivated(),
//            'Migration Flag has correct Setting'
//    }


}
