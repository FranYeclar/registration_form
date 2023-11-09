<?php

error_reporting(1);
$servername = "localhost";

$username = "root";
$password = "";
$dbname = "FORM";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if ($conn) {
    echo "connected successfully";
}
else{
    echo " not Connected".mysqli_connect_error();
}
?>
