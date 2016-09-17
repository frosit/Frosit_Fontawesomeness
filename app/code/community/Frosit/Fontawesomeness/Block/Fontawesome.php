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
 * Class Frosit_Fontawesomeness_Block_Fontawesome
 */
class Frosit_Fontawesomeness_Block_Fontawesome extends Mage_Core_Block_Template
{

    /**
     * Prepares styles
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $helper = $this->helper('frosit_fontawesomeness/fonts');
        if ($helper->getFontAwesomeSettings('active')) {
            $headBlock = $this->getLayout()->getBlock('head');
            $config = $helper->getFontAwesomeSettings();
            $method = $config['method'];

            if ($method === 'cdn') {
                $url = str_replace('{{version}}', $config['version'] ? $config['version'] : $this->getLatest(), $helper->getFontAwesome('cdn'));
                if ($config['minified']) {
                    str_replace(".css", ".min.css", $url);
                }
                $headBlock->addLinkRel('stylesheet', $url);
            } elseif ($method === 'local') {
                $url = $helper->getFontAwesome('local');
                if ($config['minified']) {
                    str_replace(".css", ".min.css", $url);
                }
                $headBlock->addCss($url);
            } else {
                Mage::log('font awesome loading method ' . $method . ' is undefined undefined');
            }
        }
        return $this;
    }

    /**
     * Get Latest version
     * @return mixed
     * @todo test & validate
     */
    protected function getLatest()
    {
        $model = Mage::getModel('frosit_fontawesomeness/system_config_source_fontAwesome_version');
        $options = $model->toOptionArray();
        return $options[0]['value'];
    }
}