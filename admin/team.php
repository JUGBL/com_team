<?php

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

// import joomla controller library
jimport('joomla.application.component.controller');

JLoader::register('TeamHelper', dirname(__FILE__) . DS . 'helpers' . DS . 'team.php');
// Get an instance of the controller prefixed by HelloWorld
$controller = JController::getInstance('Team');

// Perform the Request task
$controller->execute(JRequest::getCmd('task'));

// Redirect if set by the controller
$controller->redirect();
