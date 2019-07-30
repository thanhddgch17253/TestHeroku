<?php
$servername = "localhost";
$username = "root";
$password = "";
$port  ="3306";
$dbname = "gwcourse";

// Create connection
$conn = new mysqli($servername .":".$port, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo"done!";

?>