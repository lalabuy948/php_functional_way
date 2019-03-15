<?php
declare(strict_type=1);

$name = 'PHP';

$my_first_closure = function() use ($name):string {
    return "The first closure written in $name";
};

echo $my_first_closure(); //-> The first closure written in PHP