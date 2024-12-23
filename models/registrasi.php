
<?php
session_start();
include '../koneksi.php';
$username = $_POST["username"];
$password = $_POST["password"];
$nama = $_POST["nama_lengkap"];
$email = $_POST["email"];

$query_sql = "INSERT INTO akun VALUES ('','$username', '$nama', '$email', '$password', 'user')";

if (mysqli_query($koneksi, $query_sql)) {
    echo 
        '<script type="text/javascript">
        window.alert("Registrasi Berhasil");window.location.href = "../index.php";
        </script>';
} else {
    echo 
    '<script type="text/javascript">
    window.alert("Registrasi Gagal");window.location.href = "../index.php";
    </script>'.mysqli_error($koneksi);
}
return mysqli_affected_rows($koneksi);
?>
