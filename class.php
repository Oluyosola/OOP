<?php
class person{
    public $name;
    public $age;
    public function sleep(){
        echo "I'm sleeping";</br>  
    }
        public function eat(){
        echo "I want Amala";
    }
            public function walk(){
                echo "I am almost there";
            }
        }


    $test = new person();
    $test ->sleep();
    $test->eat();
    $test->walk();

