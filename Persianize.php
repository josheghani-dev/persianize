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

class Persian{
	
	/********************************
	 * Refer to Persian Convert class
	 ********************************
	 * @return Convert Class
	 */
	public static function convert(){
		return new Convert();
	}

	/**********************************
	 * Refer to Persian Validator class
	 **********************************
	 * @return Validator Class
	 */
	public static function validator(){

	}

}

Persian::convert()->number(10);
?>