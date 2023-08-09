<?php

session_start();

$_SESSION['name']="Jhon Kabir";
$_SESSION['age']="21";
$_SESSION['email'] = "jhon45@gmail.com";

echo $_SESSION['name'];
 echo "<br>";
echo $_SESSION['age'];
echo "<br>";
echo $_SESSION['email'];

?>