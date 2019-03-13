1. Lambda

> Anything that requires a temporary function that you probably will only use once.

```php
$add_one = function(int $x):int {
    return $x + 1;
};

echo $add_one(4); // -> 5
```

`array_map()`, `array_reduce()`, `array_filter()`, `array_walk()

```php
array_walk($myArray, function(&$value, $index){
    $value *= 2;
});
```

2. Closures

```php
$name = 'PHP';

$my_first_closure = function() use ($name):string {
    return "The first closure written in $name";
};

echo $my_first_closure();
```

Recursive with lambda and closure

```php
$factorial = function(int $n) use (&$factorial):int {
    if($n == 1) return 1;
    return $factorial( $n - 1 ) * $n;
};
```