<?php
    /*---- Function with parameter ----*/
    function addName($name){
        echo $name . ' is added!';
    };
    // addName('Juan');

    /*---- Function with return value ----*/
    function addnumbers($num1, $num2){
        return $num1 + $num2;
    };
    //This is the simple way to print a return type value.
    // echo addnumbers(1, 4);
    //This is another way to print a return type value.
    // $sum = addnumbers(5, 5);
    // echo $sum;

    /*---- Anonymous function ----*/
    $addition = function($num1, $num2){
        return $num1 + $num2;
    };
    // echo $addition(1, 5);

    $subtraction = function($num1, $num2){
        return $num1 - $num2;
    };
    // echo $subtraction(1, 5);

    $mutiplication = function($num1, $num2){
        return $num1 * $num2;
    };
    // echo $mutiplication(1, 5);

    $division = function($num1, $num2){
        return $num1 / $num2;
    };
    // echo $division(1, 5);

    /*---- Arrow function ----*/
    $addition = fn($num1, $num2) => $num1 + $num2;
    echo $addition(2, 2);

    $subtraction = fn($num1, $num2) => $num1 - $num2;
    echo $subtraction(2, 2);

    $mutiplication = fn($num1, $num2) => $num1 * $num2;
    echo $mutiplication(2, 2);

    $division = fn($num1, $num2) => $num1 / $num2;
    echo $division(2, 2);

?>