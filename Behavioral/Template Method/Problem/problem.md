When you look at each of these classes, you'll see that they all contain duplicate code.

We would love to get rid of the code duplication, leaving the algorithm structure intact.
Another problem we face, is that you've noticed that it had lots of conditionals that
picked a proper course of action depending on the class of the processing object.

If all three processing classes had a common interface or a base class, you'd be able to eliminate the conditionals
in the client code and use polymorphism when calling methods on a processing object.