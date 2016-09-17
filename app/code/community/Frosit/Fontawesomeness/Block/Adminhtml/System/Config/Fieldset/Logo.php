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
 * Class Frosit_Fontawesomeness_Block_Adminhtml_System_Config_Fieldset_Logo
 */
class Frosit_Fontawesomeness_Block_Adminhtml_System_Config_Fieldset_Logo extends Mage_Adminhtml_Block_Abstract implements Varien_Data_Form_Element_Renderer_Interface
{
    /**
     * @var string
     */
    protected $_template = 'frosit/fontawesomeness/logo.phtml';

    /**
     * Render fieldset html
     *
     * @param Varien_Data_Form_Element_Abstract $element
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $element)
    {
        return $this->toHtml();
    }
}
