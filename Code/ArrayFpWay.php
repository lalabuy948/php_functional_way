<?php

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

print_r($array);

$square = function (int $num): int {
	return pow($num, 2);
};
array_map($square, $array);

print_r($array);