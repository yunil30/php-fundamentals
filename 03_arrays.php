<?php 
    // Ways to create an Arrays.
    $names = ['Juan', 'Pedro', 'Diego'];
    $colors = array('red', 'blue', 'green');

    // Ways to access the values of an array.
    // print_r($names);
    // var_dump($colors);

    // Way to access and specific value in array.
    // echo "$names[0] ";
    // echo "$names[1] ";
    // echo "$names[2] ";

    // Associative Array - is a type of array where you can set the index of the
    $fruits = [
        2 => 'banana',
        4 => 'apple',
        6 => 'mango'
    ];
    // Way to access associative array with numerical index.
    // echo $fruits[2];

    // Associative array that uses string as index.
    $person = [
        'first_name' => 'Juan',
        'last_name' => 'Cruz',
        'user_age' => 23
    ];
    // Way to access associative array with string index.
    // echo $person['user_age'];

    // Multidimensional Array - is a collection of many arrays inside array.
    $people = [
        [
            'first_name' => 'Juan',
            'last_name' => 'Cruz',
            'user_age' => 23
        ],
        [
            'first_name' => 'Maria',
            'last_name' => 'Clara',
            'user_age' => 21
        ],
        [
            'first_name' => 'Diego',
            'last_name' => 'Santiago',
            'user_age' => 30
        ]
    ];
    // Way to access multidimensional array.
    // echo $people[0]['first_name'];
    // echo $people[1]['first_name'];
    // echo $people[2]['first_name'];

    // Tranlating an Array into json.
    var_dump(json_encode($people));

?>