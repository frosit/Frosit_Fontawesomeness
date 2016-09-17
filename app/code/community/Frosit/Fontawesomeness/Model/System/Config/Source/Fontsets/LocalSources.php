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
 * Class Frosit_Fontawesomeness_Model_System_Config_Source_Fontsets_LocalSources
 */
class Frosit_Fontawesomeness_Model_System_Config_Source_Fontsets_LocalSources extends Mage_Core_Model_Abstract
{

    /**
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 'font-awesome/css/font-awesome.css', 'label' => 'Font Awesome'),
            array('value' => 'foundation-icons/foundation-icons.css', 'label' => 'Foundation Icons'),
            array('value' => 'ionicons/css/ionicons.css', 'label' => 'IonIcons'),
            array('value' => 'octicons/octicons.css', 'label' => 'OctIcons'),
            array('value' => 'open-iconic/css/open-iconic.css', 'label' => 'Open Iconic'),
            array('value' => 'open-iconic/css/open-iconic.css', 'label' => 'Open Iconic (Bootstrap)'),
            array('value' => 'open-iconic/css/open-iconic.css', 'label' => 'Open Iconic (Foundation)'),
            array('value' => 'themify-icons/css/themify-icons.css', 'label' => 'Themify Icons'),
        );
    }
}