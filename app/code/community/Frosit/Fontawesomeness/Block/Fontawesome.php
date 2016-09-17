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
class Frosit_Fontawesomeness_Block_Fontawesome extends Mage_Core_Block_Template
{

    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $helper = $this->helper('frosit_fontawesomeness');

        if ($this->helper('frosit_fontawesomeness')->getFontAwesomeSettings('active')) {

            $headBlock = $this->getLayout()->getBlock('head');
            $method = $this->helper('frosit_fontawesomeness')->getFontAwesomeSettings('method');

            if ($method === 'cdn') {
                $url = str_replace('{{version}}',$helper->getFontAwesomeSettings('version') ? $helper->getFontAwesomeSettings('version') : 'x',$helper->getFontAwesomeCdn());
                $headBlock->addLinkRel('stylesheet', $url);
            } elseif ($method === 'local') {
                $headBlock->addCss($helper->getFontAwesomeLocal());
            } else {
                Mage::log('method ' . $method . ' undefined');
            }
        }
        return $this;
    }
}