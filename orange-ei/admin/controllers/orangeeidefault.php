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
 
class OrangeEIControllerOrangeEIDefault extends JControllerAdmin
{
	public function getModel($name = 'OrangeEI', $prefix = 'OrangeEIModel', $config = array('ignore_request' => true))
	{
		$model = parent::getModel($name, $prefix, $config);
 
		return $model;
	}
}