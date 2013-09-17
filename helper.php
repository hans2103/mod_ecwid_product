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
        $storeid = (int)$params->get('store_id'); 
        $productid = (int)$params->get('product_id');

        // get Product data
        $URLProduct    = 'http://app.ecwid.com/api/v1/' . $storeid . '/product?id=' . $productid;
        $contentsProduct = file_get_contents($URLProduct);
        if(!empty($contentsProduct)) $dataProduct = json_decode($contentsProduct,true);

        // get Profile data
        $URLProfile = 'http://app.ecwid.com/api/v1/' . $storeid . '/profile';
        $contentsProfile = file_get_contents($URLProfile);
        if(!empty($contentsProfile)) $dataProfile = json_decode(mb_convert_encoding($contentsProfile,'HTML-ENTITIES','UTF-8'));

        // combine output
        $data = (object) array_merge($dataProduct, (array) $dataProfile);

        return $data;

    }
}
