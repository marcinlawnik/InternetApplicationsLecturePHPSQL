<?php
//String
$x = "Hello world!";
$y = 'Hello world!';

echo $x;
echo "<br>";
echo $y;
//Integer
$x = 5985;
//Float (floating point numbers - also called double)
$x = 10.365;
//Boolean
$x = trUe;
$y = false;
//Array
$cars = array(5 => "Volvo","BMW","Toyota");
var_dump($cars);
//Object
class Car {
    function __construct() {
        $this->model = "VW";
    }
}

// create an object
$herbie = new Car();

// show object properties
echo $herbie->model;
//NULL
$x = "Hello world!";
$x = null;
var_dump($x);
//Resource
//Np. zasoby bazy danych czy pliki
