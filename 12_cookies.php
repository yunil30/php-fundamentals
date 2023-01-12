<!-- Cookies are small pieces of text sent to your browser by a website you visit. They help that website remember information about your visit, which can both make it easier to visit the site again and make the site more useful to you. -->
<?php
    // Set cookies
    setcookie('name', 'Juan', time() + 86400 * 30);
    // to set a cookie first you need to set the name.
    // next is to set the value of the name.
    // also you can set the time for the cookie '+ 86400' is for one day.
    //
    
    if (isset($_COOKIE['name'])){
        echo $_COOKIE['name'];
    }

    setcookie('name', '', time() - 86400);
?>