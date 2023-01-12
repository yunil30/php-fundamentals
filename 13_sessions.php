<?php
/*
  Sessions are a way to store information (in variables) to be used across multiple pages.
  Unlike cookies, sessions are stored on the server.
*/

session_start();

if(isset($_POST['submit'])) {
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_SPECIAL_CHARS);
    $password = $_POST['password'];
    if($username == 'Juan' && $password == 'password'){
        $_SESSION['username'] = $username;
        header('Location: /newprojectphp/extras/dashboard.php');
    }else{
        echo 'Incorrect Login';
    };
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
        <div style="margin-bottom: 10px;">
            <label for="username">Username:</label>
            <input type="text" name="username">
        </div>  
        <div style="margin-bottom: 10px;">
            <label for="password">Password:</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Submit" name="submit" style="font-size: 10px; width: 100px;">
        </form>
    </body>
</html>
