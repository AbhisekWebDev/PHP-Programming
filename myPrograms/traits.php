<!-- What is a Trait?
In PHP, Traits are a mechanism for code reuse in single inheritance languages.
They let you define methods that can be used in multiple classes without using inheritance. -->

<?php

    trait Logger {
        public function log($message) {
            echo "[LOG]: " . $message . "\n";
        }
    }

    trait Timestamp {
        public function currentTime() {
            echo "Current time: " . date("Y-m-d H:i:s") . "\n";
        }
    }

    class User {
        use Logger, Timestamp; // Include both traits

        public function createUser($name) {
            $this->log("User '$name' created.");
            $this->currentTime();
        }
    }   

    class Product {
        use Logger; // Include only Logger trait

        public function addProduct($product) {
            $this->log("Product '$product' added.");
        }
    }

    class Time {
        use Logger, Timestamp; // Added Logger to fix log() call

        public function addTime($time) {
            $this->log("Time '$time' added.");
            $this->currentTime();
        }
    }

    // Testing
    $user = new User();
    $user->createUser("Abhisek");

    $product = new Product();
    $product->addProduct("Laptop");

    $ptime = new Time();
    $time->addTime("Time");

?>

<!-- Key Points:
use keyword imports trait methods into a class.
You can use multiple traits in one class.
Traits can have properties and methods.
If a class and trait define the same method, class method overrides the trait’s. -->