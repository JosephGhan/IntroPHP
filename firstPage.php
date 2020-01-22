<?php
    echo "Hello world";

    //php variables and data types
    $count = 6; //int
    $price = 9.5; //double or floating point
    $first_name = 'Bob'; //String
    $first_name = "Bob"; //String
    $is_valid = true; //Boolean
    $nullVariable; //NULL ...declared, but has no value

    //arrays
    $cars = array("Ferrari", "Camaro", "BMW", "Ford");
    var_dump($cars);

    //Object
    class Experiment {
        function Experiment(){
            $this->version = NULL;
        }
    }

    //Create an object
    $stitch = new Experiment();
    $stitch->version = "626";

    //Show object
    echo $stitch->version;

    //Declare a constant
    define('PI', 3.14);
    echo(PI);

    //Concatenation with a period
    echo('hello ' . $first_name);

    //string interpolation
    echo("hello $first_name");
    echo("hello ${first_name}"); //Same thing