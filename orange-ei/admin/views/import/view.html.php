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

class OrangeEIViewImport extends JViewLegacy
{
	protected $form = null;

	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->smth = $this->get('Smth');
 
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JError::raiseError(500, implode('<br />', $errors));
 
			return false;
		}
 
 
		// Set the toolbar
		$this->addToolBar();
 
		// Display the template
		parent::display($tpl);
	}

	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;
 
		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);
 
		JToolBarHelper::title($title, 'import');
		JToolBarHelper::custom('result.display', null, null, 'Go', false);
		JToolBarHelper::back (  );
	}
}