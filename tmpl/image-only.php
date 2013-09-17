<?php
/**
 * @package		Joomla.Site
 * @subpackage	mod_ecwid_product
 * @copyright	Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;
?>
<div class="ecwid-product <?php echo $moduleclass_sfx ?>" itemscope itemtype="http://schema.org/Book">
	<meta itemprop="name" content="<?php echo $data->name ?>"/>	
	<meta itemprop="isbn" content="<?php echo $data->sku ?>"/>	
	<a itemprop="url" title="<?php echo $data->name ?>" href="<?php echo $data->url ?>">
		<img itemprop="image" src="<?php echo $data->thumbnailUrl ?>" title="<?php echo $data->name ?>" alt="<?php echo $data->name ?>">
	</a>
</div>