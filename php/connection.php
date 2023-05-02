<?php
$servername='localhost';
$username='root';
$password='Joric2020!!';
$db='student_db';
$connection=mysqli_connect($servername,$username,$password,$db);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>