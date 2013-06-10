<?php
/**
 * @version		$Id: edit.php 60 2010-11-27 18:45:40Z chdemko $
 * @package		Joomla16.Tutorials
 * @subpackage	Components
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @author		Christophe Demko
 * @link		http://joomlacode.org/gf/project/helloworld_1_6/
 * @license		License GNU General Public License version 2 or later
 */
// No direct access
defined('_JEXEC') or die('Restricted access');
JHtml::_('behavior.tooltip');
?>
<form action="<?php echo JRoute::_('index.php?option=com_team&layout=edit&id='.(int) $this->item->id); ?>" method="post" name="adminForm" id="team-form">
	<fieldset class="adminform">
		<legend><?php echo JText::_( 'COM_TEAM_TEAM_DETAILS' ); ?></legend>
		<ul class="adminformlist">
<?php foreach($this->form->getFieldset('team_deatils') as $field): ?>
			<li><?php echo $field->label;echo $field->input;?></li>
<?php endforeach; ?>
		</ul>
	</fieldset>
    <br /><br />
    <fieldset class="adminform">
        <legend><?php echo JText::_( 'COM_TEAM_TEAM_PYALER_DETAILS' ); ?></legend>
        <ul class="adminformlist">
            <?php foreach($this->form->getFieldset('player_deatils') as $field): ?>
                <li><?php
                    die('<pre>'.print_r($field, true).'</pre>');
                    echo $field->input;?>
                </li>
            <?php endforeach; ?>
        </ul>
    </fieldset>
	<div>
		<input type="hidden" name="task" value="team.edit" />
		<?php echo JHtml::_('form.token'); ?>
	</div>
</form>

