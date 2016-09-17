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
 * Class Frosit_Fontawesomeness_Helper_Data
 */
class Frosit_Fontawesomeness_Helper_Data extends Mage_Core_Helper_Abstract
{

    const FONTAWESOMECDN = "https://maxcdn.bootstrapcdn.com/font-awesome/{{version}}/css/font-awesome.css";
    const FONTAWESOMELOCAL = "frosit/fontawesomeness/fontsets/font-awesome/css/font-awesome.css";

    /**
     * @param bool $field
     * @param null $id
     * @return mixed
     */
    public function getFontAwesomeSettings($field = false, $id = null)
    {
        return Mage::getStoreConfig('fontawesomeness/font_awesome' . ($field ? '/' . $field : ''), Mage::app()->getStore($id));
    }

    /**
     * @param bool $field
     * @param null $id
     * @return mixed
     */
    public function getLocalFontSettings($field = false, $id = null)
    {
        return Mage::getStoreConfig('fontawesomeness/local_fonts' . ($field ? '/' . $field : ''), Mage::app()->getStore($id));
    }

    /**
     * @param bool $field
     * @param null $id
     * @return mixed
     */
    public function getCdnFontSettings($field = false, $id = null)
    {
        return Mage::getStoreConfig('fontawesomeness/cdn' . ($field ? '/' . $field : ''), Mage::app()->getStore($id));
    }

    /**
     * @param bool $field
     * @param null $id
     * @return mixed
     */
    public function getCustomFontSettings($field = false, $id = null)
    {
        return Mage::getStoreConfig('fontawesomeness/custom' . ($field ? '/' . $field : ''), Mage::app()->getStore($id));
    }


}