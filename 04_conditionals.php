<?php

// if Statement in php
// $num1 = 10;
// if($num1 > 1){
//     echo "${num1} is greater than 1.";
// };

// if else Statement in php
// if ($num1 > 5) {
//     echo "${num1} is greater than 5.";
// } else {
//     echo "${num1} is less than 5.";
// }
   
// if else ladder statement
// $age = 65;
// if($age <= 17){
//     echo 'Adolescence';
// }elseif($age <= 60 ){
//     echo 'Adult';
// }else{
//     echo 'Senior';
// }

// $myDate = date("G");

// echo $myDate;

// if ($dDate < 12) {
//     echo 'Good Morning!';
// } else {
//     echo 'Good Afternoon!';
// }

// Switch statement
$dayNumber = 51;
switch($dayNumber){
    case 1:
        echo 'Monday';
        break;
    case 2:
        echo 'Tuesday';
        break;  
    case 3:
        echo 'Wednesday';
        break; 
    case 4:
        echo 'Thursday';
        break;
    case 5:
        echo 'Friday';
        break; 
    case 6:
        echo 'Saturday';
        break;
    case 7:
        echo 'Sunday';
        break;
    default:
        echo 'Not allowed';
};


?>