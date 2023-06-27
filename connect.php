<?php

define('LOCALHOST','localhost');
define('DB_USERNAME','root');
define('DB_PASSWORD','');
define('DB_NAME','Registration');

$conn = mysqli_connect(LOCALHOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_error());
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
 }
echo "Connected successfully";


