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
 * Class Frosit_Fontawesomeness_Test_Config_Main
 */
class Frosit_Fontawesomeness_Test_Config_Main extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     * @return void
     */
    public function testCodePool()
    {
        static::assertModuleCodePool('community');
    }

    /**
     * @test
     * @return void
     */
    public function testModuleVersion()
    {
        static::assertModuleVersionGreaterThan('1.0.0');
    }

    /**
     * @test
     * @return void
     */
    public function testClassAliases()
    {
        static::assertHelperAlias(
            'frosit_fontawesomeness',
            'Frosit_Fontawesomeness_Helper_Data'
        );
        static::assertHelperAlias(
            'frosit_fontawesomeness/fonts',
            'Frosit_Fontawesomeness_Helper_Fonts'
        );

        static::assertModelAlias(
            'frosit_fontawesomeness/system_config_source_fontsets_localSources',
            'Frosit_Fontawesomeness_Model_System_Config_Source_Fontsets_LocalSources'
        );
    }

    /**
     * @test
     * @return void
     */
    public function testConfigContainsXmlLocationNode()
    {
        static::assertConfigNodeHasChild(
            'frontend/layout/updates',
            'frosit_fontawesomeness'
        );
    }
}