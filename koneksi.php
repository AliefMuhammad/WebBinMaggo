<?php
$servername = "localhost";
$database = "db_binmaggo"; 
$username = "root";
$password = ""; 


$koneksi = mysqli_connect($servername, $username, $password, $database);
if (!$koneksi) {
    die("Maaf koneksi anda gagal : " . mysqli_connect_error());
}else{
   echo "";
}
?>