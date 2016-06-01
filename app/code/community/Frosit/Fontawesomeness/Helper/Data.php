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
class Frosit_Fontawesomeness_Helper_Data extends Mage_Core_Helper_Abstract {

	/**
	 * @param bool $field
	 *
	 * @return mixed
	 */
	public function getSettings( $field = false ) {
		if ( $field ) {
			return Mage::getStoreConfig( 'fontawesomeness/settings/' . $field, Mage::app()->getStore() );
		} else {
			return Mage::getStoreConfig( 'fontawesomeness/settings', Mage::app()->getStore() );
		}
	}
}