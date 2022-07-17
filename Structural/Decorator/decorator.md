Decorator is a structural design pattern (a type of design pattern that explains how to assemble classes and classes into larger
structures) that lets you attach new behaviors to objects by placing these objects inside special wrapper
objects that contain the behaviors.

As you can tell in the problem directory; extending a class is the first thing that comes to mind when
you need to alter an object's behavior. However, inheritance has several caveats.

* You can't change the behavior of an existing object during runtime; you can only replace the whole object, but not
modify it.
* Subclasses can have just one parent class. 

To overcome these caveats; aggregation or composition over inheritance should always be remembered!
One object has a reference to another and delegates it some work.