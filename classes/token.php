<?php 

	class Token {

		public static function generate() {

			return Braintree_ClientToken::generate();
		}
	}