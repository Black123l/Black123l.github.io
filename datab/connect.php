<?php
$host = "localhost";
$username = "root";
$password = "Blackk29103";
$dbname = "unitop-signup";
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error){
    die("Kết nối không thành công: ".$conn->connect_error);
}

?>
