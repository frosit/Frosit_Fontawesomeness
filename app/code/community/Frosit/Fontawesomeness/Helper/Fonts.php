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
 * Class Frosit_Fontawesomeness_Helper_Fonts
 */
class Frosit_Fontawesomeness_Helper_Fonts extends Frosit_Fontawesomeness_Helper_Data
{

    /**
     * Get font awesome by specified loading type if it's active.
     * @param $type
     * @return bool|string
     */
    public function getFontAwesome($type)
    {
        if ($this->getFontAwesomeSettings('active')) {
            if ($type === "cdn") {
                return self::FONTAWESOMECDN;
            } else {
                return self::FONTAWESOMELOCAL;
            }
        } else {
            return false;
        }
    }

    /**
     * Swaps the CSS file for the minified version
     * @todo add option to font awesome set
     * @param $cssString
     * @return mixed
     */
    public function CssToMinified($cssString)
    {
        return str_replace(".css", ".min.css", $cssString);
    }

}