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
class Frosit_Fontawesomeness_Model_System_Config_Source_Sources extends Mage_Core_Model_Abstract {

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'cdn', 'label' => Mage::helper('frosit_fontawesomeness')->__('CDN')),
            array('value' => 'local', 'label' => Mage::helper('frosit_fontawesomeness')->__('Local')),
        );
    }
}