<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  mod_menu
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

// Include the module helper classes.
if (!class_exists('ModMenuAdvHelper'))
{
	require __DIR__ . '/helper.php';
}

if (!class_exists('JAdminCssMenu'))
{
	require __DIR__ . '/menu.php';
}

if (!class_exists('ConfigHelperConfig'))
{
  require __DIR__ . '/configHelper.php';
}

$lang    = JFactory::getLanguage();
$user    = JFactory::getUser();
$input   = JFactory::getApplication()->input;
$menu    = new JAdminCSSMenu;
$enabled = $input->getBool('hidemainmenu') ? false : true;

// Render the module layout
require JModuleHelper::getLayoutPath('mod_menu_adv', $params->get('layout', 'default'));
