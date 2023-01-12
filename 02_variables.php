<?php
// <!-- PHP Data Types -->
// String - these are series of characters surrounded by quotes.
// Integer - these are series of whole numbers.
// Float - these are series of decimal numbers.
// Boolean - true or false.
// Array - special variable, which can hold more than one value.
// Object - a class.
// Null - empty variable.
// Resource - special variable that holds a resource.

// <!-- Variable rules -->
// Variables must be prefixed with $.
// Variables must start with a letter or the underscore character.
// Variables cannot start with a number.
// Variables can only contain alpha-numeric characters and underscores (A-z, 0-9 and _).
// Variables are case-sensitive ($name and $NAME are two different variables).

$fname = 'Marvin'; //String DataType
$lname = 'Aquino'; //String DataType
$age = 23; //Integer DataType
$isMale = true; //Boolean DataType
$height = 5.7; //Float DataType
$friends = ['Diego', 'Pedro', 'Juan']; //Array

echo "Firstname: ${fname} ";//Displaying the string DataType. 
echo "Lastname: ${lname} "; //Displaying the string DataType.
echo "Age: ${age} "; //Displaying the integer DataType.
var_export("IsMale: ${isMale} "); //Displaying the boolean DataType.
echo "Height: ${height} "; //Displaying the float DataType.
echo "First friend: $friends[0] "; //Accessing and displaying and Array value.
echo "Second friend: $friends[1] ";//Accessing and displaying and Array value.
echo "Third friend: $friends[2] "; //Accessing and displaying and Array value.

$num1 = 2;
$num2 = 5;
$addition = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;

echo "Sum: ${num1} + $num2 = $addition ";
echo "Difference: $num1 - $num2 = $subtraction ";
echo "Product: $num1 x $num2 = $multiplication ";
echo "Qoutient: $num1 / $num2 = $division ";

//Ways to create an Array.
$number = [9, 18, 27, 36, 45];
$names = array('Pedro', 'Juan', 'Diego');
//You can access array using print_r and var_dump.
print_r($names);

?>
