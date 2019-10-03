<?php
class Employee
    {
        public $firstname;
        public $lastnme;
        public $phoneNumber;
        public $department;

        // public function __construct(){
        //      $this->firstname = $firstname;
         //}
         public function _get(){
            echo $this->firstname . " ". $this->lastname . "</br>";
         }
        public function setPhoneNumber($phoneNumber){
            echo $this->phoneNumber = $phoneNumber . "</br>";
         }
         public function setdepartment($department){
            echo $this->department = $department . "</br>";
         }
         public function setName($firstname){
            echo $this->firstname = $firstname . "</br>";
         }
         public function setlastname($lastname){
            echo $this->lastname = $lastname;
         }
        public function firstname(){
        }
        public function lastname(){
        }
        public function age(){
        }
        public function date_of_birth(){
        }
        public function address(){
        }
        public function employee_profile(){
            echo "My name is  $this->firstname $this->lastname I was born on $this->date_of_birth and I am $this->age  years old</br>";
        }
        public function firstname_lastname(){
            echo "$this->firstname $this->lastname</br>";
        }
    }
class Employee_department extends Employee
    {
        public $department;
        public $designation;
        public $employee_name;
        public $employee_age;
        public function department(){
    }
        public function designation(){
        }
        public function employee_name(){
            echo "$this->firstname    </br>";
        }
        public function employee_age(){
            echo ' I am ' . $this->age;
        }
    } 
$employee = new Employee;
$department = new Employee_department;
$department->date_of_birth =" 10/01/1894";
$department->firstname = "Oluyosola";
$department->lastname = "AFOLABI";
$department->firstname_lastname();
$department->age = 35;
$department->employee_profile();
$department->employee_name();
$department->employee_age(); 
$department->_get();
$department->setPhoneNumber("07069688056");
$department->setdepartment("Sytems Engineering");
$department->setName("Nurudeen");
$department->setlastname("Obioha");