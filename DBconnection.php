<?php
class DBconnection{
    private static $host = "localhost";
    private static $username = "root";
    private static $password = "";
    private static $database = "Registration";
    private static $tbname = "student";

    public static function connect()
    {
        $con = mysqli_connect(self::$host, self::$username, self::$password, self::$database);
        if(!$con) {
            die("connection failed: " . mysqli_connect_error());
        } else {
            return $con;
            echo "connected";
        }
    } 

    public static function exequery($sql)
    {
        $con = DBconnection::connect();
        $result = mysqli_query($con, $sql);
        if(!$result) {
            die("can not execute: " . mysqli_error($con));
        } else {
            return $result;
        }
    }
}
?>