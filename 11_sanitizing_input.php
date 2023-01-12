<!-- Sanitizing data means removing any illegal character from the data. Sanitizing user input is one of the most common tasks in a web application. To make this task easier PHP provides native filter extension that you can use to sanitize the data such as e-mail addresses, URLs, IP addresses, etc. -->

<?php
if(isset($_POST['submit'])) {
    // 'filter_input()'
    // $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $name;

    // $age = filter_input(INPUT_POST, 'age', FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $age;

    // 'filter_var()'
    // $name = filter_var($_POST['name'], FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $name;

    // $name = filter_var($_POST['age'], FILTER_SANITIZE_SPECIAL_CHARS);
    // echo $age;
}

?>

<form action="<?php echo $_SERVER['PHP_SELF']?>" method="POST">
    <div>
        <label for="name">Name:</label>
        <input type="text" name="name">
    </div>  
    <div>
        <label for="age">Age:</label>
        <input type="text" name="age">
    </div>
    <input type="submit" value="Submit" name="submit">
</form>