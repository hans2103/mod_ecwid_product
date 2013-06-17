<?php
/**
 * Joomla! module Ecwid Product
 *
 * @author Hans2103 (info@hkweb.nl)
 * @package mod_ecwid_product
 * @copyright Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license GNU Public License
 * @link http://www.hkweb.nl
 */

// No direct access
defined('_JEXEC') or die;

/*
 * Helper-class for the module
 */
abstract class modEcwidProductHelper
{

	private $data = null;

    /*
     * Fetch the content from the bridge
     * 
     * @access public
     * @param JParameter $params
     * @return string
     */
    static public function build($params = null)
    {
		$storeid	= $params->get('store_id');
		$productid	= $params->get('product_id');
		
		$URL	= 'http://app.ecwid.com/api/v1/' . $storeid . '/product?id=' . $productid;
		
		$data = json_decode(file_get_contents($URL));
		
        return $data;
        
    }
}
