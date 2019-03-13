- Simpler to test
- No invalid state
- Thread safety
- More readable
- Maintainable code

One of the main causes of bugs in software is when the state of an object surprising changes, or its reference becomes null. Immutable objects can be passed around to any function and their states will always remain the same. You can count on having the peace mind that state is only permitted to grow but never change. It eases the “cognitive load” (the amount of state to keep track of in your head) of any single component of your system. 

Immutable data structures are important in shared memory multithreaded applications. We won’t talk much about concurrent processing in this talk because PHP processes run in isolation for the most part. Now, whether designing for parallelism or not, stateless objects is a widely used pattern seen in many common PHP deployments. For example, as a best practice, Symfony services (or service objects) should always be stateless. A service shouldn’t persist any state and provide a set of transient functions that take in the domain its working on, perform some kind of computation of business logic, and return the result.