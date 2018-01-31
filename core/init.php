<?php 


	session_start();

	require_once "vendor/braintree/braintree_php/lib/autoload.php";


	spl_autoload_register(function($class){

		require_once "classes/".$class.".php";	

	});


	Braintree_Configuration::environment('sandbox');
	Braintree_Configuration::merchantId('fg6ztt3bh5sm99kn');
	Braintree_Configuration::publicKey('zz9cm5q2tyk6fttp');
	Braintree_Configuration::privateKey('f598b5f64d4e912870bcfa7e97feb4d4');

