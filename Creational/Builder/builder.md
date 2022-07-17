Builder is a creational design pattern that lets you construct complex objects step by step. This pattern
allows you to produce different types and representations of an object using the same construction code.

Beyond the scope of this builder; you can go further and extract a series of calls to the builder steps you use
to construct a product into a separate class called _director_.

The director class defines the order in which to execute the building steps, while the builder provides
the implementation for those steps.

