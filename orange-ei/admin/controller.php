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
 
/**
 * Это общий контроллер который будет вызван если параметр запроса task будет без точки, иначе будет вызван один из подконтроллеров каталога controllers
 *
 * Подконтроллеры обычно наследуют либо JControllerForm (для форм редактирования), либо JControllerAdmin (остальные задачи)
 * Для них существуют модели соответсствующих типов, правда названы как-то уебищно
 */
class OrangeEIController extends JControllerLegacy
{
	protected $default_view = 'orangeeis';
}