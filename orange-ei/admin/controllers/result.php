<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_orangeei
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
class OrangeEIControllerResult extends JControllerForm
{
	public function display ( $cachable = false, $urlparams = false ) {
		
		$this->setRedirect(JRoute::_('index.php?option=com_orangeei&view=result', false) );
	}

	public function problems ( $cachable = false, $urlparams = false ) {
		
		$this->setRedirect(JRoute::_('index.php?option=com_orangeei&view=problems', false) );
	}
	
	public function clear ( $cachable = false, $urlparams = false ) {
		
		$this->setRedirect(JRoute::_('index.php?option=com_orangeei', false) );
	}
}