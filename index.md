title: PHunctional Programming
author:
  name: D·Labs
  email: daniil.popov@dlabs.si
output: index.html
controls: false

--

# PHP: 
## Hypertext Preprocessor

--

# PHP: 
## ~~Hypertext Preprocessor~~

--

# PHP:
## **PH**_unctional_ **P**_rogramming_

--

### Functional programming? 

--

## `input -> f() -> output -> g() -> output`

--

## `input -> f() -> output -> g() -> output`

## `=> input -> f(g()) -> output`

--

### State of the world 

> "An interactive program is a pure function that takes the current 'state of the world' as its argument and produces a modified world as result"

--

### State of the world 

> "An interactive program is a pure function that takes the current 'state of the world' as its argument and produces a modified world as result"

> "Don't try to track real world state in your code.instead take it's argument, since only the world knows what state it's In."

--

### State of the world 

> "An interactive program is a pure function that takes the current 'state of the world' as its argument and produces a modified world as result"

> "Don't try to track real world state in your code.instead take it's argument, since only the world knows what state it's In."

World -> (World, A)

--

### State of the world 

> "An interactive program is a pure function that takes the current 'state of the world' as its argument and produces a modified world as result"

> "Don't try to track real world state in your code.instead take it's argument, since only the world knows what state it's In."

World -> (World, A) <img src="static/hard.gif" style="position:absolute;right: 200px;">

--

### Why functional programming matters?

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- No invalid state

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- No invalid state
- Simpler to test

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- No invalid state
- Simpler to test
- Thread safety

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- No invalid state
- Simpler to test
- Thread safety
- More readable

--

### Why functional programming matters?

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- No invalid state
- Simpler to test
- Thread safety
- More readable
- Maintainable code

--

### Language versions

--

### Language versions

**PHP 5.3**

Closure was added to the language

--

### Language versions

**PHP 5.3**

Closure was added to the language

**PHP 7**

"strong typization" strict_type was added to language

--

<img src="static/fpmem.png" width="400" style="margin-left: 25%">

--

### Let's jump into a code

--

### Square each element in the array

--

### Square each element in the array

OOP way

```php
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]; //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

for($i = 0; $i < count($array); $i++) {
	$array[$i] = pow($array[$i], 2);
}

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

--

### Square each element in the array

FP way

```php
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]; //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

$square = function (int $num): int {
	return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

--

### Square each element in the array

FP way

```php
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]; //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]

$square = function (int $num): int {
	return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]

$array; //-> [0, 1, 2, 3, 4, 5, 6, 7, 8, 9]
```

--

### Sum of elements in array

OOP way

```php
$sum = 0;

for($i = 1; $i <= 10; $i++) {
   $sum += $i;
}

// $sum -> 55
```

--

### Sum of elements in array

FP way

```php
array_sum(range(1, 10)); //-> 55
```


















