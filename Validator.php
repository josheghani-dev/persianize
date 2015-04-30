<?php
/*******************************************************
 * Persianize is persian language tools for PHP
 *******************************************************
 * @author Mehdi Hosseini <mehdi.hosseini.dev@gmail.com>
 * @license Apache License 2.0
 * @since 22 March 2015
 * @version 1.0.0

 \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
*/

namespace persianize\validator;

class Validator {

	private static $__temp;

	private static $result;

	private static $response;

	public function __construct( $value = NULL ) {

			self::$response = FALSE;

			if( $value != NULL )
				self::$result = $value;

			return $this;

	}

	/******************
	 * Validate Runner
	 ******************
	 * @param string $value
	 * @return boolean
	 */
	public function run( $pattern, $value = NULL ) {

		if( $value != NULL )
			self::$result = $value;

		self::$__temp = preg_match( $pattern, self::$result );

		if( ! empty( self::$__temp ) )
			self::$response = TRUE;

		return $this;

	}

	/*********************************
	 * Validate Persian Alphabet input
	 *********************************
	 * @param string $value
	 * @return boolean
	 */
	public function alpha( $value = NULL ) {

		return $this->run( '#^([\x{0600}-\x{06EF}]{1,})+$#u', $value );

	}

	/********************************************
	 * Validate Persian Alphabet and number input
	 ********************************************
	 * @param string $value
	 * @return boolean
	 */
	public function alpha_num( $value = NULL ) {

		return $this->run( '#^([\x{0600}-\x{06FF}]{1,})+$#u', $value );

	}


	/*****************************
	 * Validate Persian text input
	 *****************************
	 * @param string $value
	 * @return boolean
	 */
	public function text( $value = NULL ) {

		return $this->run( '#^([\x{0600}-\x{06FF}| |\x{200C}]{1,})+$#u', $value );

	}

	/*****************************
	 * Validate Persian num input
	 *****************************
	 * @param string $value
	 * @return boolean
	 */
	public function num( $value = NULL ) {

		return $this->run( '#^([\x{06F0}-\x{06F9}]{1,})+$#u', $value );

	}

	/*****************************
	 * Validate Iran Mobile input
	 *****************************
	 * @param string $value
	 * @return boolean
	 */
	public function mobile( $value = NULL ) {

		return $this->run( '/^(((98)|(\+98)|(0098)|0)(90|91|92|93){1}[0-9]{8})+$/', $value );

	}


	/*********************************
	 * Validate Iran Postal-Code input
	 *********************************
	 * @param string $value
	 * @return boolean
	 */
	public function postal( $value = NULL ) {

		return $this->run( '/^([0-9]{10})+$/', $value );

	}

	/******************************************
	 * Return result of all operations on value
	 ******************************************
	 * @return $string
	 */
	public function get() {

		$__temp = self::$response;

		self::$response = FALSE;

		return $__temp;

	}

}
?>
