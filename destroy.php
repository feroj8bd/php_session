<?php
session_start();

// remove all session variables
unset($_SESSION['name']);
echo "remove session";

 ?>