<?php
define("host", "localhost");
define("username", "admin");
define("password", "1234");

$conn = mysqli_connect(host, username, password);

if (!$conn) {
    echo "There is no connection: " . mysqli_connect_error();
} else {
    echo "Successfully connected to the database!";
}
?>