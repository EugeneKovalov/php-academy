<?php

$result = 0;
$arr = array(
    26,
    17,
    136,
    12,
    79,
    15
);

foreach ($arr as $value) {
    $result += ($value * $value);
}

echo $result;