<?php
/*------------------------------------------------------------------------
# revenue.php - Revenue Sharing Reports Component
# ------------------------------------------------------------------------
# author    Draze Golic
# copyright Copyright (C) 2013. OGO Sense All Rights Reserved
# license   GNU/GPL Version 2 or later - http://www.gnu.org/licenses/gpl-2.0.html
# website   www.ogosense.com
-------------------------------------------------------------------------*/

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Revenue component helper.
 */
abstract class TeamHelper
{
	/**
	 *	Configure the Linkbar.
	 */
	public static function addSubmenu($submenu) 
	{
		JSubMenuHelper::addEntry(JText::_('Soccer'), 'index.php?option=com_team&view=teamsoccer', $submenu == 'teamsoccer');
		JSubMenuHelper::addEntry(JText::_('Basketball'), 'index.php?option=com_team&view=teambasketball', $submenu == 'teambasketball');
		JSubMenuHelper::addEntry(JText::_('All'), 'index.php?option=com_team&view=teams', $submenu == 'teams');
		//JSubMenuHelper::addEntry(JText::_(''), 'index.php?option=com_revenue&view=', $submenu == '');
	}

	/**
	 *	Get the actions
	 */
	public static function getActions($Id = 0)
	{
		jimport('joomla.access.access');

		$user	= JFactory::getUser();
		$result	= new JObject;

		if (empty($Id)):
			$assetName = 'com_team';
		else:
			$assetName = 'com_team.message.'.(int) $Id;
		endif;

		$actions = JAccess::getActions('com_team', 'component');

		foreach ($actions as $action):
			$result->set($action->name, $user->authorise($action->name, $assetName));
		endforeach;

		return $result;
	}
}
?>