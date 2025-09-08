<?php
    
    // Classes: A class is a blueprint or a template for creating objects. It defines the properties (data) 
    // and methods (functions) that objects of that class will have.

    class Car {
        public $brand;
        public $model;

        public function startEngine() {
            echo "Engine started!";
        }
    }

    // Objects: An object is an instance of a class. You create objects using the new keyword.

    $myCar = new Car();
    $myCar->brand = "Toyota";
    $myCar->model = "Camry";
    $myCar->startEngine(); // Output: Engine started!

?>

<?php

    // Encapsulation: is the bundling of data (properties) and methods (functions) that operate on 
    // that data within a single unit (the class). It also involves restricting direct access to some 
    // of an object's components, promoting data security and preventing accidental errors.

    // Access Modifiers: PHP uses access modifiers to control the visibility of properties and methods:
        // public: Accessible from anywhere (inside and outside the class, and by child classes).
        // protected: Accessible within the class itself and by its child classes.
        // private: Accessible only within the class where it's defined.

    class BankAccount {
        private $balance; // Private property

        public function __construct($initialBalance) {
            $this->balance = $initialBalance;
        }

        public function deposit($amount) {
            if ($amount > 0) {
                $this->balance += $amount;
            }
        }

        public function getBalance() { // Public getter method
            return $this->balance;
        }
    }

    $account = new BankAccount(1000);
    // $account->balance = 500; // This would cause an error because $balance is private
    $account->deposit(200);
    echo $account->getBalance(); // Output: 1200

?>

<?php

    // Inheritance: allows a new class (child class or subclass) to inherit properties and methods 
    // from an existing class (parent class or superclass). This promotes code reusability and 
    // establishes an "is-a" relationship (e.g., a Dog is a Animal).

    // extends keyword: Used to indicate inheritance.

    class Animal {
        public $name;

        public function eat() {
            echo $this->name . " is eating.\n";
        }
    }

    class Dog extends Animal { // Dog inherits from Animal
        public function bark() {
            echo $this->name . " is barking.\n";
        }
    }

    $dog = new Dog();
    $dog->name = "Buddy";
    $dog->eat(); // Output: Buddy is eating.
    $dog->bark(); // Output: Buddy is barking.
    
    // Method Overriding: Child classes can provide their own implementation of a method already 
    // defined in their parent class.

?>

<?php

    // Polymorphism: (meaning "many forms") allows objects of different classes to be treated as 
    // objects of a common superclass. It enables a single interface to represent different underlying forms.

    // In PHP, polymorphism is often achieved through:
    //     Method Overriding: As seen in inheritance, a child class can override a parent class method, 
    //                        leading to different behaviors for the same method call on different object types.
    //     Interfaces: (See next point)
    //     Abstract Classes: (See next point)

    // ******************************************************************************************************************
    
    // Abstraction: involves hiding the complex implementation details and showing only the essential 
    // features of an object. It focuses on "what" an object does rather than "how" it does it.

    // Abstract Classes:

        // Cannot be instantiated directly.
        // Can contain both abstract (without implementation) and concrete (with implementation) methods.
        // Any class extending an abstract class must implement all its abstract methods.
        // Declared using the abstract keyword.

    abstract class Shape {
        abstract public function calculateArea(); // Abstract method

        public function getDescription() {
            return "This is a geometric shape.";
        }
    }

    class Circle extends Shape {
        public $radius;

        public function __construct($radius) {
            $this->radius = $radius;
        }

        public function calculateArea() {
            return M_PI * $this->radius * $this->radius;
        }
    }

    // $shape = new Shape(); // Error: Cannot instantiate abstract class Shape
    $circle = new Circle(5);
    echo $circle->calculateArea();

?>

<?php

    // Interfaces: Define a contract that classes must adhere to.
        // Contain only abstract methods (no implementation).

    // A class can implement multiple interfaces, providing a way to achieve "multiple inheritance" 
    // of behavior (though not state).

    // Declared using the interface keyword.

    // Implemented using the implements keyword.

    interface Resizable {
        public function resize($factor);
    }

    class Image implements Resizable {
        public function resize($factor) {
            echo "Image resized by " . $factor . ".\n";
        }
    }

    class Window implements Resizable {
        public function resize($factor) {
            echo "Window resized by " . $factor . ".\n";
        }
    }

    $image = new Image();
    $image->resize(1.5);
    $window = new Window();
    $window->resize(2);
    
    


    // Constructors and Destructors:

        // Constructors (__construct()): Special methods that are automatically called when a new object is 
        // created. They are commonly used for initializing object properties.

        // Destructors (__destruct()): Special methods that are automatically called when an object is no 
        // longer referenced or when the script finishes. They are often used for cleanup tasks 
        // (e.g., closing database connections, releasing resources).

    
    
    
    
    // Static Properties and Methods:
        // static members belong to the class itself, not to any specific object instance.
        // Accessed using the class name and the :: operator (e.g., ClassName::staticMethod()).
        // Useful for utility functions or properties that are shared across all instances of a class.

    
    
    
    
    // Class Constants: Constants defined within a class using the const keyword.
        // cessed using the class name and the :: operator (e.g., ClassName::CONSTANT_NAME).

    
    
    
    
    // Traits: provide a mechanism for code reuse in single-inheritance languages like PHP.
        // They allow you to horizontally compose behaviors into classes without needing to inherit 
        // from a common base class.

        // Used with the 'use' keyword.

    
    
    
    
    // Namespaces: provide a way to encapsulate items (classes, interfaces, functions, and constants) 
    // to avoid naming collisions when working with large codebases or third-party libraries.

    
    
    
    
    // Benefits of using OOP in PHP:

        // Modularity: Code is organized into self-contained units (classes).

        // Reusability: Classes and objects can be reused across different parts of an application or in 
                        // future projects.

        // Maintainability: Easier to understand, modify, and debug code.

        // Scalability: New features can be added without significantly impacting existing code.

        // Code Organization: Promotes a structured and logical approach to coding.

        // Data Security: Encapsulation helps protect an object's internal state.

        // PHP's robust OOP implementation makes it a powerful choice for modern web development, allowing 
        // developers to create well-structured, efficient, and maintainable applications

?>