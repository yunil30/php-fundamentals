<?php
/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

// $fruits = 'extras/fruits.txt';
// if (file_exists($fruits)) {
//     // echo readfile($fruits);
//     $handle = fopen($fruits, 'r');
//     $contents = fread($handle, filesize($fruits));
//     fclose($handle);
//     echo $content;
// } else {
//     $handle = fopen($fruits, 'w');
//     $contents = 'Juan' . PHP_EOL . 'Diego' . PHP_EOL . 'Diaz';
//     fwrite($handle, $contents);
//     fclose($handle);
// }

    $hello = 'extras/hello.txt';
    if (file_exists($hello)) {
        $handle = fopen($hello, 'r');
        $contents = fread($handle, filesize($hello));
        fclose($handle);
        echo $contents;
    } else {
        $handle = fopen($hello, 'w');
        $contents = 'hi1' . PHP_EOL . 'hi2' . PHP_EOL . 'hi3';
        fwrite($handle, $contents);
        fclose($handle);
    }
    
?>