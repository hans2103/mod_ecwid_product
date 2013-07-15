<?php
/**
 * @package        Joomla.Site
 * @subpackage     mod_ecwid_product
 * @copyright      Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license        GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

// Call the helper
require_once (dirname(__FILE__).'/helper.php');
$data = modEcwidProductHelper::build($params);

$moduleclass_sfx = htmlspecialchars($params->get('moduleclass_sfx'));

// Include the layout-file
$layout = $params->get('layout', 'default');
require(JModuleHelper::getLayoutPath('mod_ecwid_product', $layout));
