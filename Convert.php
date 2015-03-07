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

	public $arabic_yk = array( 'ي', '' );

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
	 * Convert English and Arabic number to True Persian form
	 **************************************************************************
	 * @params Integer $value
	 * @return Object
	 */
	public function number( $value = NULL ){

		if( $value == NULL )
			$value = $this->result;

		$this->result = str_replace( $this->english_number, $this->persian_number, $value );

		$this->result = str_replace( $this->arabic_number, $this->persian_number, $value );
		
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