Composite (object tree) is a structural design pattern that lets you compose objects into tree structures
and then work with these structures as if they were individual objects.

Imagine that you have two types of objects: products and boxes. A box can contain several products aswell
as a number of smaller Boxes. These little Boxes can also hold some Products or even smaller Boxes, and so on.

Say that you decide to create an ordering system that uses these classes. Orders can contain simple products without any
wrapping, as well as boxes stuffed with products.. and other boxes.

How would you determine the total price of such an order?

1. Unwrap all the boxes
2. Go over all the products
3. Add the price

You have to know the classes you're going through; the nesting level and other nasty details beforehand.

The composite pattern suggests that you work with products and boxes through a common interface which declares a method
for calculating the total price.

How would this method work? For a product, it'd simply retun the product's price.

For a box, it would go over each item, ask it's price and then return a total for this box.

The greatest benefit of this approach is that you don't need to care about the concrete
classes of objects that compose the tree. You can treat them all the same via the common interface.

When you call a method, the objects themselves pass the requests down the tree.


## When to use?
Use it when you have to implement a tree-like object structure.

It provides you with two basic element types that share a common interface:
simple leaves and complex containers. A container can be composed
of both leaves and other containers

All elements defined by the compsoite pattern share a common interface. The client doesn't
have to think about the concrete class of the objects it works with.