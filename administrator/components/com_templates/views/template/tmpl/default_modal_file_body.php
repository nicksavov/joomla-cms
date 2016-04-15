<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_templates
 *
 * @copyright   Copyright (C) 2005 - 2016 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

$input = JFactory::getApplication()->input;
?>
<div class="column">
	<?php echo $this->loadTemplate('folders');?>
</div>
<div class="column">
	<form method="post" action="<?php echo JRoute::_('index.php?option=com_templates&task=template.createFile&id=' . $input->getInt('id') . '&file=' . $this->file); ?>" class="well">
		<fieldset>
			<label><?php echo JText::_('COM_TEMPLATES_NEW_FILE_TYPE');?></label>
			<select name="type" required >
				<option value="null">- <?php echo JText::_('COM_TEMPLATES_NEW_FILE_SELECT');?> -</option>
				<option value="css">css</option>
				<option value="php">php</option>
				<option value="js">js</option>
				<option value="xml">xml</option>
				<option value="ini">ini</option>
				<option value="less">less</option>
				<option value="txt">txt</option>
			</select>
			<label><?php echo JText::_('COM_TEMPLATES_FILE_NAME');?></label>
			<input type="text" name="name" required />
			<input type="hidden" class="address" name="address" />
			<?php echo JHtml::_('form.token'); ?>
			<input type="submit" value="<?php echo JText::_('COM_TEMPLATES_BUTTON_CREATE');?>" class="btn btn-primary" />
		</fieldset>
	</form>
	<form method="post" action="<?php echo JRoute::_('index.php?option=com_templates&task=template.uploadFile&id=' . $input->getInt('id') . '&file=' . $this->file); ?>" class="well" enctype="multipart/form-data">
		<fieldset>
			<input type="hidden" class="address" name="address" />
			<input type="file" name="files" required />
			<?php echo JHtml::_('form.token'); ?>
			<input type="submit" value="<?php echo JText::_('COM_TEMPLATES_BUTTON_UPLOAD');?>" class="btn btn-primary" />
		</fieldset>
	</form>
	<?php if ($this->type != 'home'): ?>
		<form method="post" action="<?php echo JRoute::_('index.php?option=com_templates&task=template.copyFile&id=' . $input->getInt('id') . '&file=' . $this->file); ?>" class="well" enctype="multipart/form-data">
			<fieldset>
				<input type="hidden" class="address" name="address" />
				<div class="control-group">
					<label for="new_name" class="control-label hasTooltip" title="<?php echo JHtml::tooltipText('COM_TEMPLATES_FILE_NEW_NAME_DESC'); ?>"><?php echo JText::_('COM_TEMPLATES_FILE_NEW_NAME_LABEL')?></label>
					<div class="controls">
						<input type="text" id="new_name" name="new_name" required />
					</div>
				</div>
				<?php echo JHtml::_('form.token'); ?>
				<input type="submit" value="<?php echo JText::_('COM_TEMPLATES_BUTTON_COPY_FILE');?>" class="btn btn-primary" />
			</fieldset>
		</form>
	<?php endif; ?>
</div>