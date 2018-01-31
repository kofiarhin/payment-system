<?php 

	require_once "core/init.php";

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Payment System - Braintree</title>
	<link rel="stylesheet" href="css/styles.css">
	<script src='js/jquery.js'></script>
	<script src="https://js.braintreegateway.com/js/braintree-2.32.1.min.js"></script>

	<script src='js/main.js'></script>

</head>
<body>
	

		<?php 

			if(isset($_POST['payment_method_nonce'])) {

				
				$result = Braintree_Transaction::sale([
				  'amount' => $_POST['amount'],
				  'paymentMethodNonce' => $_POST['payment_method_nonce'],
				  'customer' => [
				      'firstName' => $_POST['firstName'],
				      'lastName' => $_POST['lastName'],
				    ],
				  'options' => [
				    'submitForSettlement' => True
				  ]
				]);


				if($result->success) {

					echo "transaction successful";
				} else {

					echo $result->errors->message;
				}


			}


		 ?>

	<h3 class='title'>Payment System</h3>
	<form action='' method='post'>
		<input type='text' name='firstName' placeholder='First Name'>
		<input type='text' name='lastName' placeholder='Last Name'>
		<input type='number' name='amount' placeholder='Amount'>
		<div id="dropin-container"></div>
		<button>Pay with Braintree</button>
	</form>

</body>
</html>