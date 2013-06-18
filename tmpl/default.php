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
<div class="ecwid-product<?php echo $moduleclass_sfx ?>">
	<a title="<?php echo $data->name ?>" href="<?php echo $data->url ?>">
		<img src="<?php echo $data->thumbnailUrl ?>" title="<?php echo $data->name ?>" alt="<?php echo $data->name ?>">
	</a>
	<div class="ecwid-product-name">
		<a title="<?php echo $data->name ?>" href="<?php echo $data->url ?>"><?php echo $data->name ?></a>
	</div>
	<div class="ecwid-product-price"><?php echo $data->currencyPrefix ?><?php echo $data->price ?></div>
	<div class="ecwid-product-add2cart">
		<script type="text/javascript" src="http://app.ecwid.com/script.js?<?php echo $params->get('store_id') ?>" charset="utf-8"></script>
		<script type="text/javascript">xAddToBag('productid=<?php echo $params->get('product_id') ?>');</script>
	</div>
</div>