
1. Functional programming? 

```
input -> f() -> output -> g() -> output 
	=> intput -> f(g()) -> output
```

2. State of the world 

> "An interactive program is a pure function that takes the current 'state of the world' as its argument and produces a modified world as result"

World -> (World, A)

3. Why functional programming matters 

> Microservices, clean architecture, domain driven development and so on, we are trying to solve the complex problem with modularity

- Simpler to test
- No invalid state
- Thread safety
- More readable
- Maintainable code

4. Language versions

- Closures were added to the PHP 5.3
- "strong typization" stict_type was added