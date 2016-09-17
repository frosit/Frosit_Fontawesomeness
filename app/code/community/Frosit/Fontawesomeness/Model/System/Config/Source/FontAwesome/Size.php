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
 * Class Frosit_Fontawesomeness_Model_System_Config_Source_Sources
 */
class Frosit_Fontawesomeness_Model_System_Config_Source_FontAwesome_Size extends Mage_Core_Model_Abstract
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'default', 'label' => 'default'),
            array('value' => 'lg', 'label' => 'Large'),
            array('value' => '2x', 'label' => 'x2'),
            array('value' => '3x', 'label' => 'x3'),
            array('value' => '4x', 'label' => 'x4'),
            array('value' => '5x', 'label' => 'x5'),
        );
    }
}