$(function(){


	$.get('braintree.php', function(data){

		braintree.setup(data, 'dropin', {

			container: 'dropin-container'

		});

	})
	
});