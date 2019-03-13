<?php
declare(strict_types=1);

$array = range(0, 10); //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

for($i = 0; $i < count($array); $i++) {
    $array[$i] = pow($array[$i], 2);
}

$array;

$array = range(0, 10); //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

$square = function (int $num): int {
    return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]

$array;

$add_one = function(int $x):int {
    return $x + 1;
};

echo $add_one(4);

$name = 'PHP';

$my_first_closure = function() use ($name):string {
    return "The first closure written in $name";
};

echo $my_first_closure();

$factorial = function(int $n) use (&$factorial):int {
    if($n == 1) return 1;
    return $factorial( $n - 1 ) * $n;
};