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
class Frosit_Fontawesomeness_Block_Widget_FontAwesomeIcon extends Mage_Core_Block_Template implements Mage_Widget_Block_Interface
{

    protected $_config;

    /**
     * Constructor
     */
    protected function _construct()
    {
        parent::_construct();

    }

    protected function _toHtml()
    {
        $sp = ' ';
        $fa = 'fa-';

        $html = '<i class="fa';
        $html .= $sp;
        $html = $this->getIcon() ? $html . $sp . $fa . $this->getIcon() . $sp : $html . '';
        $html = $this->getSize() !== "default" ? $html . $sp . $fa . $this->getSize() . $sp : $html . '';
        $html = $this->getSpin() ? $html . $sp . $fa . 'spin' . $sp : $html . '';
        $html = $this->getFixed() ? $html . $sp . $fa . 'fw' . $sp : $html . '';
        $html = $this->getFlipRotate() !== "none" ? $html . $sp . $fa . $this->getFlipRotate() . $sp : $html . '';

        if ($this->getCustom()) {
            $custom = explode(",", $this->getCustom());
            foreach ($custom as $item) {
                $html .= $sp . $item;
            }
        }

        $html .= '"></i>';


        return $html;
    }

}