<?php
    // PHP has an exception model similar to that of other programming languages. An exception can be thrown, and caught ("catched") within PHP. Code may be surrounded in a try block, to facilitate the catching of potential exceptions. Each try must have at least one corresponding catch or finally block.

    function inverse($x){
        if(!$x){
            throw new Exception(' Division by Zero');
        }
        return 1/$x;
    }

    try {
        echo inverse(5);
        echo inverse(0);
    } catch (Exception $y) {
        echo ' Caught Exception', $y->getMessage(), ' '; 
    } finally {
        echo 'First finally';
    }

    try {
        echo inverse(0);
    } catch (Exception $y) {
        echo ' Caught Exception', $y->getMessage(), ' '; 
    } finally {
        echo 'Second finally';
    }

    
?>