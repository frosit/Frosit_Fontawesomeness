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
class Frosit_Fontawesomeness_Helper_Data extends Mage_Core_Helper_Abstract
{

    const FONTAWESOMECDN = "https://maxcdn.bootstrapcdn.com/font-awesome/{{version}}/css/font-awesome.min.css";
    const FONTAWESOMELOCAL = "frosit/fontawesomeness/css/font-awesome.min.css";

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
     * @param $type
     * @return bool|string
     */
    public function getFontAwesome($type)
    {
        if ($this->getFontAwesomeSettings('active')) {
            if ($type === "CDN") {
                return self::FONTAWESOMECDN;
            } else {
                return self::FONTAWESOMELOCAL;
            }
        } else {
            return false;
        }

    }

    /**
     * @return bool|string
     */
    public function getFontAwesomeCdn()
    {
        return $this->getFontAwesome("CDN");
    }

    /**
     * @return bool|string
     */
    public function getFontAwesomeLocal()
    {
        return $this->getFontAwesome("local");
    }
}