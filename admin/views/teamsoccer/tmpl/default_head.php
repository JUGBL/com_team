<?php
/**
 * default head template file for HelloWorlds view of HelloWorld component
 *
 * @version		$Id: default_head.php 51 2010-11-22 01:33:21Z chdemko $
 * @package		Joomla16.Tutorials
 * @subpackage	Components
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @author		Christophe Demko
 * @link		http://joomlacode.org/gf/project/helloworld_1_6/
 * @license		License GNU General Public License version 2 or later
 */
// No direct access to this file
defined('_JEXEC') or die('Restricted Access');
?>
<tr>
	<th width="5">
		<?php echo JText::_('COM_TEAM_TEAM_HEADING_ID'); ?>
	</th>
	<th width="20">
		<input type="checkbox" name="toggle" value="" onclick="checkAll(<?php echo count($this->items); ?>);" />
	</th>			
	<th>
		<?php echo JText::_('COM_TEAM_TEAM_HEADING_NAME'); ?>
	</th>
    <th>
        <?php echo JText::_('COM_TEAM_TEAM_HEADING_SCORE'); ?>
    </th>
    <th>
        <?php echo JText::_('COM_TEAM_TEAM_HEADING_SPORT'); ?>
    </th>
</tr>

