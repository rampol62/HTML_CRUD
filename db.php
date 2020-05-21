<?php

session_start();

$servername = "localhost";
$database = "tareas";
$username = "secuencia01";
$password = "19479010";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);
// Check connection
if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
}

//   echo "Connected successfully";
