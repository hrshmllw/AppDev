<?php
$connections = mysqli_connect("localhost", "root", "", "appdev");
if(mysqli_connect_errno()){
    echo "Failure to connect to MySQL: " . mysqli_connect_error();
}

$db = new PDO('mysql:dbname=appdev;host=localhost', 'root', '');
?>