# PHP: ~~Hypertext Preprocessor~~

# **PH**unctional **P**rogramming

## PHP 5.3+ (OOP + FP)

`Closure class was added to the language.`

## Types

```php
function increment($counter) { 
	return ++$counter; 
}

increment("Run time error is awesome"); //-> ?????
```

## PHP 7+

Strict types 

```php
declare(strict_types = 1);
```

Hello FP!

## Functional programming? 

input -> func f() -> output -> func g() -> output

### State of the world @TODO

Pure functions fix side effects

Functional programming is based on the premise that you will build immutable programs based on pure functions as the building blocks of your business logic. A pure function has the following qualities:

- It depends only on the input provided and not on any hidden or external state that may change during its evaluation or between calls.
- It doesn’t inflict changes beyond its scope, like modifying a global object or a parameter passed by reference, after its run.

> “...functional programming is not a framework or a tool, but a way of writing code.” 

Luis Atencio. “Functional PHP”. 

## Examples

### Square each element in the array

```php
$array = range(0, 10);

for($i = 0; $i < count($array); $i++) {
	$array[$i] = pow($array[$i], 2);
}

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

```php
$array = range(0, 10);

$square = function (int $num): int {
	return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```
--
```
$sum = 0;

for($i = 1; $i <= 10; $i++) {
   $sum += $i;
}

// $sum -> 55
```
```
array_sum(range(1, 10));
```

### Pros

- Easy to read
- Easy to test
- Easy to parallelize
- Modular out of the box

## Coding with immutable variables has many benefits such as:

- Simpler to test
- No invalid state
- Thread safety
- More readable
- Maintainable code

One of the main causes of bugs in software is when the state of an object surprising changes, or its reference becomes null. Immutable objects can be passed around to any function and their states will always remain the same. You can count on having the peace mind that state is only permitted to grow but never change. It eases the “cognitive load” (the amount of state to keep track of in your head) of any single component of your system. 

Immutable data structures are important in shared memory multithreaded applications. We won’t talk much about concurrent processing in this talk because PHP processes run in isolation for the most part. Now, whether designing for parallelism or not, stateless objects is a widely used pattern seen in many common PHP deployments. For example, as a best practice, Symfony services (or service objects) should always be stateless. A service shouldn’t persist any state and provide a set of transient functions that take in the domain its working on, perform some kind of computation of business logic, and return the result.

## Lambda

```
$add_one = function($x) {
   return $x + 1;
};
echo $add_one(4); // -> 5
```

## Closures

```php
$name = 'PHP';

$my_first_closure = function() use ($name):string {
    return "The first closure written in $name";
};

echo $my_first_closure();
```

## High order functions

[Why functional programming matters](http://www.cse.chalmers.se/~rjmh/Papers/whyfp.html)

[Introduction to Haskell](https://youtu.be/1jZ7j21g028)
