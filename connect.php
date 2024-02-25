<?php
$servername = "localhost";
$username = "root";
$password = "root";
$db_name = "database1";
$conn = new mysqli($servername, $username, $password, $db_name,3307);
if ($conn->connect_error){
    die("Connection failed".$conn->connect_error);
}
echo "Connection Successful";
?>  