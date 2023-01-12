<?php
// ---------- For Loop Syntax ----------- // 
/* 
    for (initialized; condition; increment;) {
        // Code to be executed.
    }
*/
// for ($num1 = 1; $num1 <= 5; $num1++) {
//     for ($num2 = 1; $num2 <= $num1; $num2++) {
//         echo  " * ";
//     }
//     echo  "<br>";
// };

// ---------- While Loop Syntax ----------- // 
/* 
    initialized;
    while (condition) {
        // Code to be executed.
        increment;
    }
*/
// $num1 = 1;
// while ($num1 <= 5) { 
//     $num2 = 1;
//     while ($num2 <= $num1) {
//         echo " * ";
//         $num2++;
//     };
//     echo "<br>";
//     $num1++;
// };

// ---------- Do While Loop Syntax ----------- // 
/* 
    initialized;
    do {
        // Code to be executed.
    } while (condition);
    increment;
*/
// $num1 = 1;
// do {
//     echo "$num1 Hello World <br>";
//     $num1++;
// } while ($num1 <= 5);

// ---------- Foreach Loop Syntax ----------- // 
$colors = ['red', 'blue', 'green', 'yellow', 'orange'];

// Accessing array using for loop.
// for($i = 0; $i < count($colors); $i++){
//     echo "$colors[$i] <br>";
// };

// Accessing array using while loop.
// $i = 0;
// while($i < count($colors)){
//     echo "$colors[$i] <br>";
//     $i++;
// };

// Accessing array using do while loop.
// $i = 0;
// do {
//     echo "$colors[$i] <br>";
//     $i++;
// } while($i < count($colors));

// foreach($colors as $color){
//     echo "$color <br>";
// };

// foreach($colors as $index => $color){
//     echo $index +  1 . ' - ' . $color . '<br>';
// };


?>