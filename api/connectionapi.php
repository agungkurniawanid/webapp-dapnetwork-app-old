<?php 
$host = "localhost";
$user = "root";
$password = "";
$database = "db_dapnetwork";

$connection_database = mysqli_connect($host, $user, $password, $database);

// Memeriksa koneksi
if (mysqli_connect_errno()) {
    die("Failed to connect to MySQL: " . mysqli_connect_error());
}
?>
