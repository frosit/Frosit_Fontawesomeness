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
class Frosit_Fontawesomeness_Model_System_Config_Source_FontAwesome_Version extends Mage_Core_Model_Abstract
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => '4.6.3', 'label' => '4.6.3'),
            array('value' => '4.6.2', 'label' => '4.6.2'),
            array('value' => '4.6.1', 'label' => '4.6.1'),
            array('value' => '4.5.0', 'label' => '4.5.0'),
            array('value' => '4.4.0', 'label' => '4.4.0'),
            array('value' => '4.3.0', 'label' => '4.3.0'),
            array('value' => '4.2.0', 'label' => '4.2.0'),
            array('value' => '4.1.0', 'label' => '4.1.0')
        );
    }
}