<?php
/*******************************************************
 * Persianize is persian language tools for PHP
 *******************************************************
 * @author Mehdi Hosseini <mehdi.hosseini.dev@gmail.com>
 * @license Apache License 2.0
 * @since 22 March 2015
 * @version 0.0.0

 \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
*/

class Validator{

	private $__temp;

	private $result;

	private $response;

	public function __construct( $value = NULL ){

			$this->response = FALSE;

			if( $value != NULL )
				$this->result = $value;

			return $this;

	}

	/*********************************
	 * Validate Persian Alphabet input
	 *********************************
	 * @param string $value
	 * @return boolean
	 */
	public function alpha( $value = NULL ){

		if( $value != NULL )
			$this->result = $value;

		$this->__temp = preg_match( '#^([\x{0600}-\x{06EF}]{1,})+$#u', $this->result );

		if( ! empty( $this->__temp ) )
			$this->response = TRUE;

		return $this;

	}

	/*****************************
	 * Validate Persian text input
	 *****************************
	 * @param string $value
	 * @return boolean
	 */
	public function text( $value = NULL ){

		if( $value != NULL )
			$this->result = $value;

		$this->__temp = preg_match( '#/^([a-z]{1,})+$/#u', $this->result );

		var_dump($this->__temp);

		if( ! empty( $this->__temp ) )
			$this->response = TRUE;

		return $this;

	}

	/******************************************
	 * Return result of all operations on value
	 ******************************************
	 * @return $string
	 */
	public function get(){

		return $this->response;

	}

}
?>