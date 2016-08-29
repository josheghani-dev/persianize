<?php

use Persianize\Validator;
use Persianize\Convert;

require __DIR__.'/vendor/autoload.php';

$validator = new Validator;
$convert = new Convert;

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
