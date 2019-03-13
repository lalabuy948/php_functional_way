1. Let's jump into a code

Square each element in the array

```php
$array = range(0, 10); //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

for($i = 0; $i < count($array); $i++) {
	$array[$i] = pow($array[$i], 2);
}

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

```php
$array = range(0, 10); //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

$square = function (int $num): int {
	return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]

$array; //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
```

Sum of elements in array

```php
$sum = 0;

for($i = 1; $i <= 10; $i++) {
   $sum += $i;
}

// $sum -> 55
```

```php
array_sum(range(1, 10));
```