GoCardless FuelPHP Package
==================

Quick implementation of the GoCarless PHP SDK to suit the FuelPHP package structure.

SDK Instructions
==================

You should consult the documentation of the GoCardless PHP SDK, as the changes made here were purely to support the structure of a FuelPHP package, the documentation can be found here:

http://blog.gocardless.com/post/17945439079/gocardless-php-library

https://github.com/gocardless/gocardless-php

Installation Instructions
==================

Place the folder gocardless in your fuel/packages folder.

Usage
==================

```php
Package::load('gocardless');

// Config vars
$account_details = array(
  'app_id'		=> 'XXXXX',
	'app_secret'	=> 'XXXXX',
	'merchant_id' 	=> 'XXXXX',
	'access_token' 	=> 'XXXXX'
);

// Initialize GoCardless
GoCardless::set_account_details($account_details);

$subscription_details = array(
	'amount'			=> '10.00',
	'interval_length' 	=> 12,
	'interval_unit'		=> 'month'
);

// Generate the url
$subscription_url = GoCardless::new_subscription_url($subscription_details);

// Display the link
echo '<a href="'.$subscription_url.'">New subscription</a>';
```