<?php

require_once('../Persianize.php');

echo '<head><meta charset="UTF-8"></head>';
echo 'Correct half-sapce:';
echo Persian::convert('آمده ای ولی من رفته ام و می آییم')->halfSpace()->get();
echo '<br/>';
echo 'Validate text:';
var_dump( Persian::validator('asd')->text()->get() );
echo '<br/>';
?>