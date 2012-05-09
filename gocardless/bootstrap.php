<?php
/**
 * Fuel is a fast, lightweight, community driven PHP5 framework.
 *
 * @package    Fuel
 * @version    1.0
 * @author     Fuel Development Team
 * @license    MIT License
 * @copyright  2010 - 2011 Fuel Development Team
 * @link       http://fuelphp.com
 */


Autoloader::add_core_namespace('GoCardless');


Autoloader::add_classes(array(
	'GoCardless\\GoCardless'           			=> __DIR__.'/classes/GoCardless.php',
	'GoCardless\\GoCardless_Bill'  				=> __DIR__.'/classes/GoCardless/Bill.php',
	'GoCardless\\GoCardless_Client'  			=> __DIR__.'/classes/GoCardless/Client.php',
	'GoCardless\\GoCardless_Exceptions'  		=> __DIR__.'/classes/GoCardless/Exceptions.php',
	'GoCardless\\GoCardless_Merchant'  			=> __DIR__.'/classes/GoCardless/Merchant.php',
	'GoCardless\\GoCardless_PreAuthorization'  	=> __DIR__.'/classes/GoCardless/PreAuthorization.php',
	'GoCardless\\GoCardless_Request'  			=> __DIR__.'/classes/GoCardless/Request.php',
	'GoCardless\\GoCardless_Resource'  			=> __DIR__.'/classes/GoCardless/Resource.php',
	'GoCardless\\GoCardless_Subscription'  		=> __DIR__.'/classes/GoCardless/Subscription.php',
	'GoCardless\\GoCardless_User'  				=> __DIR__.'/classes/GoCardless/User.php',
	'GoCardless\\GoCardless_Utils'  			=> __DIR__.'/classes/GoCardless/Utils.php',

));


/* End of file bootstrap.php */