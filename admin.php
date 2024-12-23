<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Login | BinMaggo</title>
    <link rel="icon" type="image/png" href="assets/images/maggot.png">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/admin.css?v=<?php echo time();?>">
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <?php
        session_start();

        if($_SESSION['username']==""){
            header("location:index.php?pesan=gagal");
        }
    ?>

    <!-- Page navigation -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top" data-spy="affix" data-offset-top="0">
        <div class="container">
            <a class="navbar-brand" href="#">
                <!-- <img src="assets/images/logo-unpad.png" alt="" class="unpad"> -->
                <img src="assets/images/binmaggo-logo.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto align-items-center">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Layanan</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Edukasi Maggot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Pemesanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Logout</a>
                    </li>
                    <li class="nav-item">
                        <p class="nav-link" style="color: #000; font-size: 18px;"><i class="icon ti-user"></i> <?php echo $_SESSION['username'];?></p>
                    </li>
                </ul>
            </div>
        </div>          
    </nav>

    <!-- Contact Section -->
    <section id="contact" class="position-relative section">
        <div class="container text-center">
            <div class="contact text-center">
                <div class="form">

                    <h6 class="section-title mb-4">Pemesanan</h6>

                    <table class="table">
                        <tr>
                            <th>Id</th>
                            <th>Nama Lengkap</th>
                            <th>No Telepon</th>
                            <th>Alamat</th>
                            <th>Order</th>
                            <th>Jumlah</th>
                            <th>Tombol</th>
                        </tr> 
                        <tr>
                            <?php 
                            include 'koneksi.php';

                            $sql = "SELECT * FROM pemesanan";
                            $result = $koneksi->query($sql);
                            
                            while($row = $result->fetch_assoc()){
                                echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["nama_lengkap"] . "</td>
                                <td>" . $row["no_telp"] . "</td>
                                <td>" . $row["alamat"] . "</td>
                                <td>" . $row["order"] . "</td>
                                <td>" . $row["jumlah"] . "</td>
                                <td>
                                    <a href='https://mail.google.com/'>Email</a>
                                </td>
                                </tr>"
                                ;
                            }
                            ?>
                        </tr>                                                                                                   
                    </table>
                    

                </div>            
            </div>
        </div>  
    </section>

    <!-- Page Footer -->
    <footer class="page-footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-sm-6">
                    <p>Copyright <script>document.write(new Date().getFullYear())</script> &copy; <a href="https://www.instagram.com/binmaggo/" target="_blank">Binmaggo</a></p>
                </div>
            </div>
        </div>
    </footer> 
 
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
	<script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <script src="assets/js/steller.js"></script>

</body>
</html>
