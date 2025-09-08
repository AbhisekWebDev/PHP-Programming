<?php 

class abc {
    public function test() {
        echo "test from class ABC";
    }
}

trait test { 
    public function test2() {
        echo "test2 method of test trait";
    }
}

class one extends abc {
    use test;
}

class two extends abc {
    use test;
}

class three extends abc {
    
}

class four extends abc {
    
}

class five extends abc {
    
}

$obj = new one;
$obj->test2();

// Here, taking a class abc and its functionality in all the child classes. 
// So accessing the properties of abc class in all the child classes. 
// Now consider a scenario where we need another function to be accessed only 
// in class one and two but not in the rest of the classes. If you will define that 
// function in the same class abc it will be available in all the classes which are extending class abc. 
// So the solution is we can define that method in trait. 
// Trait is also similar to the classes. 
// Here, define test2 function in trait test and use this trait by using 'use' keyword in child class. 
// So we have used this trait only in class one and two because we need to access this method 
// in class one and two.



// Method Overriding in Traits: If defining the same method implemented in class 
// and in trait also then preference will be given to the trait class method implementation. 
// It means a trait class method will override the parent class method.

class Base {
    public function abcx() {
        echo "ABC method from base class";
    }
}

Trait Testx {
    public function abcx() {
        echo "ABC method from test trait";
    }
}

class child extends Base {
    use Testx;
}

$obj = new Child;
$obj->abcx();



// Access level in traits: You can change the access level of traits in child class.

trait abcz {
    public function xyz() {
        echo "xyz method from trait abcz";
   }
}
 
class testz {
    use abcz {
        abcz::xyz as public abczXyz;
    }
}
 
$obj = new testz;
 
$obj->abczXyz();

?>