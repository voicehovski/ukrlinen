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
 * Базовые классы моделей находятся в директории \libraries\legacy\model
 */
class OrangeEIModelOrangeEI extends JModelAdmin
{
	/**
	 * smart-comment
	 * Метод возвращает объект-обертку таблицы базы данных, содержащую методы, делающие более безопасной и облегчающие работу с таблицей
	 * Чтобы система могла найти и использовать соответствующий класс, он должен быть объявлен в файле tables/$type.php в нижнем регистре, а класс должен иметь имя $prefix$type
	 *
	 * Наследует одноименный метод класса ...
	 *
	 * Используется в ...
	 * 
	 */
	public function getTable($type = 'OrangeEI', $prefix = 'OrangeEITable', $config = array())
	{
		return JTable::getInstance($type, $prefix, $config);
	}
 
	/**
	 * smart-comment
	 * Насколько я понял невероятно ясное и понятно описание, этот метод создаёт html-верстку формы и либо вставляет туда данные из первого аргумента, либо сообщает в метод getForm чтобы он сам загрузил данные
	 *
	 * Наследует абстрактный метод класса class JModelForm extends JModelLegacy из файла \libraries\legacy\model\form.php
	 *
	 * Используется в ...
	 * 
	 * @param   array    $data      Data for the form.
	 * @param   boolean  $loadData  True if the form is to load its own data (default case), false if not.
	 *
	 * @return  mixed    Объект формы (или все-таки верстку) или ФАЛЬШ если что-то пошло не так
	 *
	 * @since   1.6
	 */
	public function getForm($data = array(), $loadData = true)
	{
		// smart-comment
		// Метод из класса JModelForm extends JModelLegacy который расположен в файле \libraries\legacy\model\form.php
		// Первый аргумент, видимо, имя компонента и модели, исползующей данную форму, второй - имя xml-файла формы (вроде можно передавать и тупо xml-код)
		// Использует статический метод JForm::getInstance класса JForm из файла \libraries\joomla\form\form.php
		$form = $this->loadForm(
			'com_orangeei.orangeei',
			'orangeei',
			array(
				'control' => 'jform',
				'load_data' => $loadData
			)
		);
 
		if (empty($form))
		{
			return false;
		}
 
		return $form;
	}
 
	/**
	 * Method to get the data that should be injected in the form.
	 *
	 * @return  mixed  The data for the form.
	 *
	 * @since   1.6
	 */
	protected function loadFormData()
	{
		// Check the session for previously entered form data.
		$data = JFactory::getApplication()->getUserState(
			'com_orangeei.edit.orangeei.data',
			array()
		);
 
		if (empty($data))
		{
			$data = $this->getItem();
		}
 
		return $data;
	}
}