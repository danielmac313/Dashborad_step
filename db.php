<?php
    $dbhost = "127.0.0.1";
    $dbuser = "root";
    $dbpass = "daniel777";
    $dbname ="bridgeit2";
    $conn = mysqli_connect($dbhost,$dbuser, $dbpass,$dbname);
    // Check connection
    if (mysqli_connect_errno()) {
    die("DB connection failed: " . mysqli_connect_error() . " (" . mysqli_connect_errno() . ")");
    }
?>
