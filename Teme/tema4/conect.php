<?php


$dbhost = "localhost";
$username = "root";
$password = "";
$dbName = "tabel";

$con = mysqli_connect($dbhost, $username, $password, $dbName) or die("Unable to connect");


echo "Connected!";