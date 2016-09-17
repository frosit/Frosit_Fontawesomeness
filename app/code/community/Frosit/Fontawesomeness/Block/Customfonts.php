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
 * Class Frosit_Fontawesomeness_Block_Customfonts
 */
class Frosit_Fontawesomeness_Block_Customfonts extends Mage_Core_Block_Template
{

    /**
     * Prepares styles
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $helper = $this->helper('frosit_fontawesomeness/fonts');
        if ($helper->getCustomFonts()) {
            $headBlock = $this->getLayout()->getBlock('head');
            $fontsets = array();
            $settings = $helper->getCustomFonts();
            if (!is_array($settings['links'] && strpos($settings['links'], ","))) {
                $settings['links'] = explode(",", $settings['links']);
                array_push($fontsets, $settings['links']);
            }
            foreach ($fontsets[0] as $fontset) {
                $headBlock->addLinkRel('stylesheet', $fontset);
            }
        }
        return $this;
    }

}