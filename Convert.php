<?php
/********************************************************
 * Convert tools for create true persian text format
 ********************************************************
 * @author Mehdi Hosseini <mehdi.hosseini.dev@gmail.com>
 * @since 07 March 2015
 * @varsion 1.0.0

 \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
 */

namespace persianize\convert;

class Convert {

	private $arabic_number = array( "\xD9\xA0", "\xD9\xA1", "\xD9\xA2", "\xD9\xA3", "\xD9\xA4", "\xD9\xA5", "\xD9\xA6", "\xD9\xA7", "\xD9\xA8", "\xD9\xA9" );

	private $arabic_yk = array( "\xD9\x8A", "\xD9\x83" );

	private $persian_yk = array( "\xDB\x8C", "\xDA\xA9" );

	private $persian_number = array( "\xDB\xB0", "\xDB\xB1", "\xDB\xB2", "\xDB\xB3", "\xDB\xB4", "\xDB\xB5", "\xDB\xB6", "\xDB\xB7", "\xDB\xB8", "\xDB\xB9" );

	private $english_number = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );

	private $result;

	public function __construct( $value = NULL ) {

		if( $value != NULL )
			$this->result = $value;

		return $this;

	}

	/**************************************************************************
	 * Convert english and arabic number to True Persian form
	 **************************************************************************
	 * @params Integer $value
	 * @return Object
	 */
	public function number( $value = NULL ) {

		if( $value == NULL )
			$value = $this->result;

		$this->result = str_replace( $this->english_number, $this->persian_number, $value );

		$this->result = str_replace( $this->arabic_number, $this->persian_number, $this->result );

		return $this;

	}

	/**********************************************
	 * Convert Arabic charachters from persian text
	 **********************************************
	 * @params String $value
	 * @return Object
	 */
	public function removeArabicChar( $value = NULL ) {

		if( $value == NULL )
			$value = $this->result;

		$this->result = str_replace( $this->arabic_yk, $this->persian_yk, $value );

		return $this;

	}

	/*******************************************************************
	 * Detect persian verbs and replace space after "mi" with half-space
	 *******************************************************************
	 * @params string $value
	 * @return Object
	 */
	public function halfSpace( $value = NULL ) {

		if( $value == NULL )
			$value = $this->result;

		/*
		 * Replace half-space between persian MI.
		 */
		$this->result = preg_replace("#((\x{0645}\x{06CC})+( )+([\x{0600}-\x{06EF}]{1,}){1,})#u", "$2\xE2\x80\x8C$4", $value, 1);

		/*
		 * Replace half-space between perisan De-Yii.
		 */
		$this->result = preg_replace("#(([\x{0600}-\x{06EF}]{1,})+( )+(ای|ایی|اند|ایم|اید|ام){1})#u", "$2\xE2\x80\x8C$4", $this->result, -1);

		return $this;

	}

	/**********************************************
	 * Add All persianize options to current string
	 **********************************************
	 * @param string $value
	 * @return Object
	 */
	public function allOptions( $value = NULL ) {

		if( $value == NULL )
			$value = $this->result;


		$this->number( $value );

		$this->removeArabicChar( $value );

		$this->halfSpace( $value );

		return $this;


	}

	/******************************************
	 * Return result of all operations on value
	 ******************************************
	 * @return $string
	 */
	public function get() {

		return $this->result;

	}

}
?>
