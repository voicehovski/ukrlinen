<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');

class OrangeEIViewOrangeEI extends JView
{
	function display($tpl = null) 
	{
		$this->msg = $this->get ( 'Msg' );
		
		parent::display($tpl);
	}
	
}