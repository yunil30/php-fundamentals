<?php
    if (isset($_POST['submit'])) {
        // Setting a variable for the file that can be uploaded.
        $allowed_ext = array('png', 'jpg', 'jpeg', 'gif');
        if (!empty($_FILES['upload']['name'])) {
            // This are the variable for the info of the file that is uploaded.
            $file_name = $_FILES['upload']['name'];
            $file_size = $_FILES['upload']['size'];
            $file_tmp = $_FILES['upload']['tmp_name'];
            // This code is for the file directory where a file will be uploaded.
            $target_dir = "uploads/${file_name}"; 

            // Getting the file extension.
            $file_ext = explode('.', $file_name);
            $file_ext = strtolower(end($file_ext));

            // Validating the file extension.
            if (in_array($file_ext, $allowed_ext)) {
                if ($file_size <= 10000000) {
                    move_uploaded_file($file_tmp, $target_dir);
                    $message = '<p style="color: green;">File is uploaded.</>';
                } else {
                    $message = '<p style="color: red;">File is too large.</>';
                }
            } else {
                $message = '<p style="color: red;">Invalid file type.</>';
            }

        } else {
            // This is the message that will shows up if there is no file that is uploaded.
            $message = '<p style="color: red;">Please choose a file to upload.</>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Uploader</title>
</head>
<body>
    <h1>File Uploader</h1>
    <!-- Message used to show if a file is uploaded or not. -->
    <?php echo $message ?? null; ?>
    <!-- Form used as a visual for the example. -->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST" enctype="multipart/form-data">
    <p style="margin-bottom: 2px;">Select file to upload:</p>
    <input type="file" name="upload" style="margin-bottom: 5px;"><br>
    <input type="submit" value="Submit" name="submit" style="margin-bottom: 5px;"><br>
    </form>
</body>
</html>