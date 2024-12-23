<?php
session_start();
include '../koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi,"SELECT * FROM akun WHERE username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if($cek > 0){
    $data = mysqli_fetch_assoc($login);

    if($data['level']=="admin"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";
        echo 
        '<script type="text/javascript">
        window.alert("Login Berhasil");window.location.href = "../admin.php";
        </script>';
    }else if($data['level']=="user"){
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "user";
        echo 
        '<script type="text/javascript">
        window.alert("Login Berhasil");window.location.href = "../homeuser.php";
        </script>';
    }else{
        echo 
        '<script type="text/javascript">
        window.alert("Login Gagal, Terdapat Username Atau Password Yang Salah atau field belum terisi");window.location.href = "../index.php";
        </script>';
    } 
}else{
    echo 
    '<script type="text/javascript">
    window.alert("Login Gagal, Terdapat Username Atau Password Yang Salah atau field belum terisi");window.location.href = "../index.php";
    </script>';
}

?>