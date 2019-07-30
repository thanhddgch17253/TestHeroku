<?php
$servername = "db4free.net";
$username = "root300599";
$password = "hihihihi";
$port  ="3306";
$dbname = "gwcourses1999";

// Create connection
$conn = new mysqli($servername .":" .$port, $username, $password, $dbname);
// Check connection
if (!$conn) {
    echo "fail";
} 
else {
    echo"done!";
}


?>