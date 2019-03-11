# Functional shit

## **PH**unctional **P**rogramming

Pure functions fix side effects

Functional programming is based on the premise that you will build immutable programs based on pure functions as the building blocks of your business logic. A pure function has the following qualities:

- It depends only on the input provided and not on any hidden or external state that may change during its evaluation or between calls.
- It doesn’t inflict changes beyond its scope, like modifying a global object or a parameter passed by reference, after its run.

> “...functional programming is not a framework or a tool, but a way of writing code.” 

Luis Atencio. “Functional PHP”. 

## Square each element in the array

```php
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

for($i = 0; $i < count($array); $i++) {
	$array[$i] = pow($array[$i], 2);
}

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

## FP way

```
$array = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];

$square = function (int $num): int {
	return pow($num, 2);
};

array_map($square, $array);  //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]

$array; //-> [0, 1, 4, 9, 16, 25, 36, 49, 64, 81]
```

## Coding with immutable variables has many benefits such as:

One of the main causes of bugs in software is when the state of an object inadvertently changes, or its reference becomes null. Immutable objects can be passed around to any function and their states will always remain the same. You can count on having the peace mind that state is only permitted to grow but never change. It eases the “cognitive load” (the amount of state to keep track of in your head) of any single component of your system. 

Immutable data structures are important in shared memory multithreaded applications. We won’t talk much about concurrent processing in this book because PHP processes run in isolation for the most part. Now, whether designing for parallelism or not, stateless objects is a widely used pattern seen in many common PHP deployments. For example, as a best practice, Symfony services (or service objects) should always be stateless. A service shouldn’t persist any state and provide a set of transient functions that take in the domain its working on, perform some kind of computation of business logic, and return the result.

[Introduction to Haskell](https://youtu.be/1jZ7j21g028)