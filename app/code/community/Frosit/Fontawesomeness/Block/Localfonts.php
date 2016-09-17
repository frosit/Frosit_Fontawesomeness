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
class Frosit_Fontawesomeness_Block_Localfonts extends Mage_Core_Block_Template
{

    /**
     * Prepares styles
     * @return $this
     */
    protected function _prepareLayout()
    {
        parent::_prepareLayout();

        $helper = $this->helper('frosit_fontawesomeness/fonts');
        if ($helper->getLocalFonts()) {
            $headBlock = $this->getLayout()->getBlock('head');
            $fontsets = array();
            $settings = $helper->getLocalFonts();
            if (!is_array($settings['fontsets'] && strpos($settings['fontsets'], ","))) {
                $settings['fontsets'] = explode(",", $settings['fontsets']);
            }
            array_push($fontsets, $settings['fontsets']);
            foreach ($fontsets[0] as $fontset) {
                if ($settings['minified']) {
                    $fontset = $helper->CssToMinified($fontset);
                }
                $headBlock->addCss('frosit/fontawesomeness/fontsets/' . $fontset);
            }

        }
        return $this;
    }

}