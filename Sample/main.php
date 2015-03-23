<?php

require_once('../Persianize.php');

echo '<head><meta charset="UTF-8"></head>';
echo Persian::convert('آمده ای ولی من رفته ام و می آییم')->halfSpace()->get();

?>