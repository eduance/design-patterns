There are two essential steps to make a proper singleton;

* make the default constructor private to prevent other objects from using the new operator with the Singleton class.
* create a static creation method that acts as a constructor; this will create an object and save it in a static field.
All following calls to this method will return the cached object.
