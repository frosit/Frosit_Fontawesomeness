<?php
/**
 * Frosit URLRewriteToolset
 *
 * @category    magerun-addon
 * @package     URLRewriteToolset
 * @author      Fabio Ros <f.ros@fros.it>
 * @copyright   Copyright (c) 2016 Fabio Ros - FROSIT
 * @license http://opensource.org/licenses/gpl-license.php GNU Public License
 */

class Frosit_Fontawesomeness_Test_Config_Main extends EcomDev_PHPUnit_Test_Case_Config
{
    /**
     * @test
     * @return void
     */
    public function testCodePool()
    {
        $this->assertModuleCodePool('community');
    }

    /**
     * @test
     * @return void
     */
    public function testModuleVersion()
    {
        $this->assertModuleVersionGreaterThan('1.0.0');
    }

    /**
     * @test
     * @return void
     */
    public function testClassAliases()
    {
        $this->assertHelperAlias(
            'frosit_fontawesomeness',
            'Frosit_Fontawesomeness_Helper_Data'
        );
        $this->assertHelperAlias(
            'frosit_fontawesomeness/fonts',
            'Frosit_Fontawesomeness_Helper_Fonts'
        );

        $this->assertModelAlias(
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
        $this->assertConfigNodeHasChild(
            'frontend/layout/updates',
            'frosit_fontawesomeness'
        );
    }
}