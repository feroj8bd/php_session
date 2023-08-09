<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP-SESSION</title>
</head>

<body>
    <a href="upload.php">set session value</a><br><br>
    <a href="destroy.php"> session destroy</a>

    <?php
    
    if (isset($_SESSION['name'])) {
        echo "Welcome MR.". $_SESSION['name'];
    } else {
        echo "Hello guest";
    }
    
    ?>
</body>

</html>