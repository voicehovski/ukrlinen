<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
 

class orangeEIModelorangeEI extends JModelItem
{
	protected $msg;

	public function getMsg() 
	{
		if (!isset($this->msg)) 
		{
			//����� ������ ������� ������, �� ��� �� ��� �����...
			$this->msg = 1;
			
			//���������� ���������� �� �������� ����, ������������ � ��������������� ���� �������
			//Uses JInput if magic quotes is turned off. Falls back to use JRequest.
			if(!get_magic_quotes_gpc()) {
				$id = JFactory::getApplication()->input->get('id', 1, 'INT' );
			} else {
				$id = JRequest::getInt('id');
			}
			
			$this->msg = $id;		
		}
		return $this->msg;
	}
}