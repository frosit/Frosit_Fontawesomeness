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
class Frosit_Fontawesomeness_Model_System_Config_Source_FontAwesome_FlipRotate extends Mage_Core_Model_Abstract
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'none', 'label' => 'none'),
            array('value' => 'rotate-90', 'label' => 'rotate 90 degrees'),
            array('value' => 'rotate-180', 'label' => 'rotate 180 degrees'),
            array('value' => 'rotate-270', 'label' => 'rotate 270 degrees'),
            array('value' => 'flip-horizontal', 'label' => 'flip horizontal'),
            array('value' => 'flip-vertical', 'label' => 'flip vertical')
        );
    }
}