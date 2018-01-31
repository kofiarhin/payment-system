<?php 

require_once "core/init.php";

var_dump($_POST);


if(isset($_POST['payment_method_nonce'])) {

	$result = Braintree_Transaction::sale([
		'amount' => $_POST['amount'],
		'paymentMethodNonce' => $_POST['payment_method_nonce'],
		'options' => [
			'submitForSettlement' => True
		]
	]);


	if($result->success) {

		echo "transaction success";
	} else {

		echo "error";
	}




}

	/*


	if(isset($_POST['payment_method_nonce'])) {

		

		$result = Braintree_Transaction::sale([
		  'amount' => $_POST['amount'],

		  'paymentMethodNonce' => $_POST['payment_method_nonce'],

		  'options' => [
		    'submitForSettlement' => True
		  ]

		]);


		if($result->success) {

			echo "transaction successful";
		} else {

			echo "show errors";
		}

		

	}

	*/


