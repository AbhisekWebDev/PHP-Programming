<?php 

    // Abstract class
    abstract class ABC {
        public abstract function xyz();
    }

    class def extends ABC {
        public function xyz() {
            echo "Welcome to GeeksforGeeks";
        }
    }

    // Create new object
    $obj = new def;

    echo $obj->xyz();
    

    // Here, we created an abstract class that has one abstract method 
    // but we haven't implemented the method in ABC base class. All the classes 
    // which will extend ABC class will have the implementation for function XYZ. 
    // Here you can not make the object for ABC class. ABC class works as a base class 
    // for all it's child classes and the implementation or object creation will be done 
    // for child classes. Declaring a class abstract class is enforcement that you don't 
    // want to create a direct object for that class.


    // Example
    abstract class BaseEmployee {

        protected $firstname;
        protected $lastname;
        
        public function getFullName() {
            return $this->firstname. " " .$this->lastname;
        }
        
        public abstract function getMonthlySalary();
        
        public function __construct($f, $l) {
            $this->firstname = $f;
            $this->lastname = $l;
        }
    }

    class FullTimeEmployee extends BaseEmployee {
        
        protected $annualSalary;
        
        public function getMonthlySalary() {
        return $this->annualSalary / 12;
        }
    }

    class ContractEmployee extends BaseEmployee {
        protected $hourlyRate;
        protected $totalHours;

        public function getMonthlySalary() {
            return $this->hourlyRate * $this->totalHours;
        }
    }

    $fulltime = new FullTimeEmployee('fulltime', 'Employee');
    $contract = new ContractEmployee('Contract', 'Employee');

    echo $fulltime->getFullName();
    echo $contract->getFullName();

    echo $fulltime->getMonthlySalary();
    echo $contract->getMonthlySalary();

?>