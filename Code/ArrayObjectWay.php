<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

print_r($array);

for($i = 0; $i < count($array); $i++) {
	$array[$i] = pow($array[$i], 2);
}

print_r($array);