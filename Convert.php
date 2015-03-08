<?php
/********************************************************
 * Convert tools for create true persian text format
 ********************************************************
 * @author Mehdi Hosseini <mehdi.hosseini.dev@gmail.com>
 * @since 07 March 2015

 \/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\/\
 */
class Convert{

	public $arabic_number = array( '٠', '١', '٢', '٣', '٤', '٥', '٦', '٧', '٨', '٩' );

	public $arabic_yk = array( 'ي', 'ك' );

	public $persian_yk = array( 'ی', 'ک' );

	public $persian_number = array( '۰', '۱', '۲', '۳', '۴', '۵', '۶', '۷', '۸', '۹' );

	public $english_number = array( 0, 1, 2, 3, 4, 5, 6, 7, 8, 9 );

	public $result;

	public function __construct( $value = NULL ){

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
	public function number( $value = NULL ){

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
	public function removeArabicChar( $value = NULL ){

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
	public function halfSpace( $value = NULL ){

		var_dump( preg_replace("#^((\x{0645}\x{06CC})|( )|([\x{0600}-\x{06EF}]){1,})+$#u", "$2 $1", "می روی", 1) );

		exit;

		return $this;

	}

	/******************************************
	 * Return result of all operations on value
	 ******************************************
	 * @return $string
	 */
	public function get(){

		return $this->result;

	}

}
?>