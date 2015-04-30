<?php

require_once( '../Convert.php' );

require_once( '../Validator.php' );

use persianize\validator;

use persianize\convert;

$validator = new persianize\validator\Validator;

$convert = new persianize\convert\Convert;

echo '<head><meta charset="UTF-8"></head>';

echo 'Correct half-sapce:';

var_dump( $convert->halfSpace('آمده ای ولی من رفته ام و می آییم' )->get() );

echo '<br/>';

var_dump( $convert->halfSpace('آمده ای ولی من رفت ' )->get() );

echo '<br/>';

echo 'Validate text:';

//var_dump( Persian::validator('۴')->num()->get() );

var_dump( $validator->mobile('+989380105725')->get() );

var_dump( $validator->mobile('+=938010572534')->get() );

echo '<br/>';

?>
