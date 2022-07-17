A singleton is a creational design pattern that lets you ensure that a class has only instance,
while providing  a global access point to this instance.

Using the Singleton pattern will solve two problems at the same time, violating the Single Responsibility Principle:

1. Ensure that a class has just a single instance.
   You sometimes want to access some shared resource-- like a database or a file. This behavior is impossible to
   implement with a regular constructor since a constructor call must always return a new object by design.

2. You can provide a global access point to that instance
   Remember global variables used to store some essential objects? They are very handy, yet they're also unsafe since any
   code can potentially overwrite the contents of those variables.

Just like with a global variable, the Singleton pattern lets you access some object from anywhere in the program.
However, it also protects that instance from being overwritten by other code.
