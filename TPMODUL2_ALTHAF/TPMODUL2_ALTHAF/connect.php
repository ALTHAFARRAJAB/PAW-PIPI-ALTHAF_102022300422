<?php
// ==================1==================
// Definisikan variabel2 yang akan digunakan untuk melakukan koneksi ke database
//host
$host = "localhost";

//username
$username = "root";

//password
$password = "";

//database
$database = "db_TPMODUL2";

//port
$port = 3306;
// ==================2==================
// Definisikan $conn untuk melakukan koneksi ke database 
$conn = new mysqli($host, $username, $password, $database , $port);
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

?>