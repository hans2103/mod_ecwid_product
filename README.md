Joomla Module Ecwid Product
=================

The Ecwid Product Module displays one product from your Ecwid shop in Joomla.
Ecwid is an online webstore. http://www.ecwid.com

Installation
=================
1. goto Github tags and download the most recent tagged version.
2. goto Joomla extension manager and install this module
3. the Ecwid Product Module can now be used as a normal module.

Configuration
=================
1. Store ID -> this is the ID of your Ecwid store. This code can be found on your Ecwid dashboard.
2. Product ID -> this is the ID of your Ecwid product. This code can be found in two places. In the weblink (products=edit#######) and in the tab "HTML code" of a product configuration (productid=#######).

In real life
=================
I always use NoNumber.nl extension 'Modules Anywhere'. When I want to add the image of an Ecwid product to a content item in Joomla I follow the procedure below:

1. Be sure you've installed NoNumber.nl extension 'Modules Anywhere'
2. Create a new module mod_ecwid_product and assign it to position 'non-position'.
3. Name the new module 'Ecwid Product Image Only'
4. Change the alternative layout to 'image only'
5. Open the content item and use Modules Anywhere to call the module using the following code: {module Ecwid Product Image Only|product_id=26352046}
6. With Modules Anywhere you can override parameters... I did an override on Ecwid product ID.

[![Analytics](https://ga-beacon.appspot.com/UA-2000642-17/mod_ecwid_product/readme)](https://github.com/igrigorik/ga-beacon)
