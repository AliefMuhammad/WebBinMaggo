<?php
session_start();
include '../koneksi.php';
$nama_lengkap = $_POST["nama_lengkap"];
$no_telp = $_POST["no_telp"];
$alamat = $_POST["alamat"];
$order = $_POST["order"];
$jumlah = $_POST["jumlah"];


$query_sql = "INSERT INTO pemesanan VALUES ('','$nama_lengkap', '$no_telp', '$alamat', '$order', '$jumlah')";

if (mysqli_query($koneksi, $query_sql)) {
    echo 
        '<script type="text/javascript">
        window.alert("Pesanan Anda berhasil diproses. Silakan menunggu email dari kami untuk informasi pembayaran.");window.location.href = "../homeuser.php";
        </script>';
} else {
    echo 
    '<script type="text/javascript">
    window.alert("Pemesanan Gagal Diproses");window.location.href = "../homeuser.php";
    </script>'.mysqli_error($koneksi);
}
return mysqli_affected_rows($koneksi);
?>
