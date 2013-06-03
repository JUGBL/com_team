<?php

/**
 * @version		$Id: team.php 46 2010-11-21 17:27:33Z chdemko $
 * @package		Joomla16.Tutorials
 * @subpackage	Components
 * @copyright	Copyright (C) 2005 - 2010 Open Source Matters, Inc. All rights reserved.
 * @author		Christophe Demko
 * @link		http://joomlacode.org/gf/project/helloworld_1_6/
 * @license		License GNU General Public License version 2 or later
 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import the Joomla modellist library
jimport('joomla.application.component.modellist');

/**
 * HelloWorlds Model
 */
class TeamModelTeams extends JModelList
{
	/**
	 * Method to build an SQL query to load the list data.
	 *
	 * @return	string	An SQL query
	 */
	protected function getListQuery() 
	{
		// Create a new query object.
		$db = JFactory::getDBO();

        /*
        $query = $db->getQuery(true);

		// Select some fields
		$query->select('id,greeting');

		// From the hello table
        //Check for table name later!!!!
		$query->from('#__helloworld');

        */

        $query = "SELECT * FROM #__sports_teams";
		return $query;
	}
}
