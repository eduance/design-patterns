Say you want to create an exact copy of an object. How would you go about it?

Prototype is a creational design pattern that lets you copy existing objects without making your code dependent on their
classes.

1. Not all objects can be copied by creating a new object of the same class; you have to copy
their values over to the new object but some fields may be private and not visible from outside of the object.

2. You have to know the object's class to create a duplicate; your code becomes dependent on that class.

### Solution

Prototype pattern delegates the cloning process to the actual objects that are being cloned. The pattern declares
a common interface for all objects that support cloning. By using this interface, it lets you clone an object without
coupling your code to the class of that object.

An object that supports cloning is called a prototype. When your objects have dozens of fields and hundreds
of possible configurations, cloning them might serve as an alternative to subclassing.