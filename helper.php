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
		
		// get Product data
		$URLProduct	= 'http://app.ecwid.com/api/v1/' . $storeid . '/product?id=' . $productid;
		$dataProduct = json_decode(file_get_contents($URLProduct),true);
		
		// get Profile data
		$URLProfile = 'http://app.ecwid.com/api/v1/' . $storeid . '/profile';
		$dataProfile = json_decode(mb_convert_encoding(file_get_contents($URLProfile),'HTML-ENTITIES','UTF-8'));
		
		// combine output
		$data = (object) array_merge($dataProduct, (array) $dataProfile);

        return $data;
        
    }
}
