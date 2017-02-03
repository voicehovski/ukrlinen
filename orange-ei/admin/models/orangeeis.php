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
	 * smart-comment
	 * JModelList суперкласс для моделей для работы со списками (в админпанели?)
	 * Обычно нужно переопределить метод getListQuery. Используются также getItems, getPagination, но они реализованы в суперклассе
	 * В руководстве написано что нужны еще какие-то list.start, list.limit, но где их брать - неясно

	*/
class OrangeEIModelOrangeEIs extends JModelList
{
	/**
	 * smart-comment
	 * Это, судя по всему, единственный метод, который обязательно нужно переопределить в потомке JModelList
	 * Остальные вцелом работают и так
	 * Возвращать он должен, видимо, тупо тот список, который мы хотим отобразить
	*/
	protected function getListQuery()
	{
		// Initialize variables.
		$db    = JFactory::getDbo();
		$query = $db->getQuery(true);
 
		// Create the base select statement.
		$query->select('*')
                ->from($db->quoteName('#__orangeei'));
 
		return $query;
	}
}