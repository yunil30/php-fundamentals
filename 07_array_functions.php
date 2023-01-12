<?php
    $fruits = ['apple', 'orange', 'mango'];

    // Get the length of the array.
    // echo count($fruits); 

    // Search if a value is in the array.
    // var_dump(in_array('apple', $fruits));

    // Adding a value in array.
    $fruits[] = 'banana'; // simple way to add a value in array.
    array_push($fruits, 'grapes', 'coconut'); // array_push is used to add new value at the end of array.
    array_unshift($fruits, 'peach'); // array_push is used to add new value at the start of array.

    // Removing a value in array.
    array_pop($fruits); // array_pop() is used to removed the last value in array.
    array_shift($fruits); // array_shift() is used to removed the first value in array.
    unset($fruits[2]); // unset is used to removed and specific value together with its index.

    // print_r($fruits);

    // Spliting the array values.
    // $split_fruits = array_chunk($fruits, 2);
    // print_r($split_fruits);

    $arrNum1 = [1, 2, 3];
    $arrNum2 = [4, 5, 6];

    // Merge multiple arrays
    // $arrNum3 = array_merge($arrNum1, $arrNum2);
    // $arrNum4 = [...$arrNum1, ...$arrNum2];
    // print_r($arrNum4);

    $a = ['Apple', 'Mango', 'Orange'];
    $b = ['Banana', 'Coconut', 'Grape'];
    $c = array_combine($a, $b); // array_combine is used to combine 2 arrays where the first array becomes the index.
    $keys = array_keys($c); // array_keys is used to select the index of 2 arrays.
    // print_r($keys);
    $flipped = array_flip($c); // array_flipped is used to flip the combined array.
    // print_r($flipped); 




