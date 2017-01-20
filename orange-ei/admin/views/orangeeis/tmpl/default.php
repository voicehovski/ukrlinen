<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_orangeei
 *
 * @copyright   Copyright (C) 2005 - 2015 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 *
 * smart-comment
 * Вызов JHtml::_('grid.checkall'), возможно, обращется к \libraries\joomla\grid\grid.php
 * Класс JHtml расположен в /libraries/cms/html/html.php
 * Класс JText расположен в /libraries/joomla/language/text.php
 * Для поиска этих классов было использована команда
 * grep -rE 'class\s+JText$' home-test.jv
 * поскольку они, блять, переносят открывающую скобку на следующую строку. Все * * нервы измотал, пока нашел!
 */
 
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<form action="index.php?option=com_orangeei&view=orangeeis" method="post" id="adminForm" name="adminForm">
	<table class="table table-striped table-hover">
		<thead>
		<tr>
			<th width="1%"><?php echo JText::_('COM_ORANGEEI_NUM'); ?></th>
			<th width="2%">
				<?php echo JHtml::_('grid.checkall'); ?>
			</th>
			<th width="30%">
				<?php echo JText::_('COM_ORANGEEI_ORANGEEIDEFAULT_PROFILE') ;?>
			</th>
			<th width="60%">
				<?php echo JText::_('COM_ORANGEEI_ORANGEEIS_OPTIONS') ;?>
			</th>
			<th width="5%">
				<?php echo JText::_('COM_ORANGEEI_PUBLISHED'); ?>
			</th>
			<th width="2%">
				<?php echo JText::_('COM_ORANGEEI_ID'); ?>
			</th>
		</tr>
		</thead>
		<tfoot>
			<tr>
				<td colspan="5">
					<?php echo $this->pagination->getListFooter(); ?>
				</td>
			</tr>
		</tfoot>
		<tbody>
			<?php if (!empty($this->items)) : ?>
				<?php foreach ($this->items as $i => $row) : 
					$link = JRoute::_('index.php?option=com_orangeei&task=orangeei.edit&id=' . $row->id);
				?>
 
					<tr>
						<td>
							<?php echo $this->pagination->getRowOffset($i); ?>
						</td>
						<td>
							<?php echo JHtml::_('grid.id', $i, $row->id); ?>
						</td>
						<td>
							<a href="<?php echo $link; ?>" title="<?php echo JText::_('COM_ORANGEEI_EDIT_ORANGEEI'); ?>">
								<?php echo $row->profile; ?>
							</a>
						</td>
						<td>
							<?php echo $row->options || " -- "; ?>
						</td>
						<td align="center">
							<?php echo JHtml::_('jgrid.published', $row->published, $i, 'orangeeis.', true, 'cb'); ?>
						</td>
						<td align="center">
							<?php echo $row->id; ?>
						</td>
					</tr>
				<?php endforeach; ?>
			<?php endif; ?>
		</tbody>
	</table>
	<input type="hidden" name="task" value=""/>
	<input type="hidden" name="boxchecked" value="0"/
	<?php echo JHtml::_('form.token'); ?>
</form>