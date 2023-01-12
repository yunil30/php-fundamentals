<?php
    /*
    From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
    */
    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere.
    // private - can only be accessed from inside the class.
    // protected - can only be accessed from inside the class and by inheriting classes.
    class User {
        public $fname;
        public $lname;
        public $age;
        // A constructor is a method that runs when and object is created.
        public function __construct($fname, $lname, $age){
            $this->fname = $fname;
            $this->lname = $lname;
            $this->age = $age;
        }
        // Method is a function that belongs to a class.
        function set_fname($fname){
            $this->fname = $fname;
        }
        function get_fname($fname){
            return $this->$fname;
        }
    }

    // Instantiate the "User()" object.
    $user1 = new User('Juan', 'Cruz', 23);
    $user1 = new User('Diego', 'Cruz', 26);

    // echo $user1->fname;
    // echo $user1->lname;
    // echo $user1->age;

    // Inheritance
    class Student extends User{
        public function __construct($fname, $lname, $age, $course)
        {
            parent::__construct($fname, $lname, $age);
            $this->course = $course;
        }

        public function get_course(){
            return $this->course;
        }
    }

    $student1 = new Student('Juan', 'Cruz', 23, 'BSIT');

    echo $student1->get_course();

?>