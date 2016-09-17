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

class Frosit_Fontawesomeness_Adminhtml_Frosit_FontawesomenessController extends Mage_Adminhtml_Controller_Action {

    public function IndexAction(){
        $this->loadLayout();

        $block = $this->getLayout()->createBlock('core/template');
        $block->setTemplate('frosit/fontawesomeness/base.phtml');

        // Render the template to the browser
        $this->_addContent($block);

        $this->renderLayout();
    }

}