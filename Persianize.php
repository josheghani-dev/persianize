<?php
/*******************************************************
 * Persianize is persian language tools for PHP
 *******************************************************
 * @author Mehdi Hosseini <mehdi.hosseini.dev@gmail.com>
 * @license Apache License 2.0
 * @since 07 March 2015
 * @version 0.0.0

 \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
*/

require_once('Convert.php');

require_once('Validator.php');

class Persian{
	
	/********************************
	 * Refer to Persian Convert class
	 ********************************
	 * @return Convert Class
	 */
	public static function convert( $value = NULL ){
		
		return new Convert( $value );

	}

	/**********************************
	 * Refer to Persian Validator class
	 **********************************
	 * @return Validator Class
	 */
	public static function validator( $value = NULL ){

		return new Validator( $value );

	}

}
?>