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
 
class OrangeEIViewOrangeEIDefault extends JViewLegacy
{
	function display($tpl = null)
	{
		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}

		$this->addToolBar (  );
		
		// Display the template
		parent::display($tpl);
	}
	
	/*
		Другие полезные функции которые можно назначить кнопочкам в тулбаре админпанели смотрим в
		\administrator\includes\toolbar.php
	*/
	protected function addToolBar (  ) {
		JToolBarHelper::title(JText::_('COM_ORANGEEI_MANAGER_ORANGEEI_DEFAULT'));
		JToolBarHelper::addNew('orangeei.add');
		JToolBarHelper::editList('orangeei.edit');
		JToolBarHelper::deleteList('', 'orangeeidefault.delete');
	}
}