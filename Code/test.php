<?php
declare(strict_types=1);

$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

array_walk($array, function(&$value, $key) {
    $value *= 2;
});