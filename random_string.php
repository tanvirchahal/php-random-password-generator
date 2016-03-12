<?php 
	 /**
	 *
	 * @author  Tanvir Singh Chahal
	 * @version 1.0, 12-March-2016
	 * 
	 */
 
	//Defining The function to generate a randomised string
	function password_rand( $total = 6 ) 
	{
		$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()_-=+;:,.?";
		$pass = substr( str_shuffle( $string ), 0, $total );
		
		return $pass;
	}
	
	//Calling the Pasword Function
	$pass = password_rand(6);
?>