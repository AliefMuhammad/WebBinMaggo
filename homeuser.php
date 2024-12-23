<!DOCTYPE html>

<html lang="en">

<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with Steller landing page.">
    <meta name="author" content="Devcrud">
    <title>Home | BinMaggo</title>
    <link rel="icon" type="image/png" href="assets/images/maggot.png">
    <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
	<link rel="stylesheet" href="assets/css/style.css?v=<?php echo time();?>">
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
                        <a class="nav-link" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#layanan">Layanan</a>
                    </li>                   
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#edukasi">Edukasi Maggot</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#produk">Produk</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#pesan">Pemesanan</a>
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

    <!-- Page Header -->
    <header class="header" id="home">
        <div class="container">
            <div class="infos">
                <h6 class="subtitle">Selamat Datang, Mabroo!!!</h6>
                <h6 class="title">Zero Waste, Zero Smell.</h6>
                <!-- <p>Universitas Padjadjaran</p> -->
                <div class="socials mt-4">
                    <a class="social-item" href="javascript:void(0)"><i class="ti-instagram"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-sharethis"></i></a>
                    <a class="social-item" href="javascript:void(0)"><i class="ti-themify-favicon-alt"></i></a>
                </div>
            </div>              
            <div class="img-holder">
                <img src="assets/images/bgmaggot3.png" alt="" style="width: 800px;">
            </div>      
        </div>  

        <div class="widget">
            <div class="widget-item">
                <h2>98%</h2>
                <p>Mengurangi Food Waste</p>
            </div>
            <div class="widget-item">
                <h2>100%</h2>
                <p>Teruji Tidak Berbau</p>
            </div>
            <div class="widget-item">
                <h2>Harga</h2>
                <p>Affordable & Praktis</p>
            </div>
        </div>
    </header>

    <!-- Service section -->
    <section id="layanan" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Layanan</h6>
            <h6 class="section-title mb-4">What We Do</h6>
            <p class="mb-5 pb-4">Kami menyediakan layanan edukasi komprehensif untuk membantu Anda memahami cara penggunaan BinMaggo 
                secara efektif dan dampaknya terhadap pengelolaan sampah. Melalui konsultasi ahli, kami siap mendampingi Anda dalam 
                menerapkan solusi ini sesuai kebutuhan usaha, seperti warteg atau tempat makan lainnya. Selain itu, kami mempermudah 
                proses pemesanan BinMaggo, memastikan produk ini cepat tersedia untuk mendukung pengelolaan limbah makanan yang lebih 
                berkelanjutan.</p>

            <div class="row">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="ti-headphone-alt"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Konsultasi Ahli</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="ti-bookmark-alt"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Edukasi Penggunaan</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="ti-package"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Pemesanan Produk</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="icon ti-link"></i>
                            <?php
                            echo '<a href="#karir" class="link-sub" onclick="alert(\'Login Terlebih Dahulu!\');">
                                <h5>Group Forum</h5>
                            </a>';
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Studi Section -->
    <section id="kontak" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Kontak</h6>
            <h6 class="section-title mb-4">Binmaggo</h6>

            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/logo3.jpg" alt="">
                                <h1 class="title">instagram</h1>
                                <a href="https://www.instagram.com/binmaggo/profilecard/?igsh=MXY2NGM2emlvNTVsZQ==">
                                <h1 class="subtitle">@binmaggo</h1>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/logo3.jpg" alt="">
                                <h1 class="title">Telegram</h1>
                                <h1 class="subtitle">@KomunitasMaggot</h1>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="card testmonial-card border">
                            <div class="card-body">
                                <img src="assets/images/logo3.jpg" alt="">
                                <h1 class="title">Whassapp</h1>
                                <h1 class="subtitle">0812-1944-0881 Binmaggo Official</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section -->
    <section id="edukasi" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Informasi</h6>
            <h6 class="section-title mb-4">Penggunaan</h6>
            <!-- <p class="mb-5 pb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. In alias dignissimos. <br> rerum commodi corrupti, temporibus non quam.</p> -->

            <div class="row text-left">
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/images/maggobinblog.png" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Cara Penggunaan BinMaggo: Langkah Mudah Mengelola Limbah Makanan</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Agtan</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 112</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 15</a>
                            </div>
                            <p>
                                Gunakan BinMaggo dengan mudah untuk mengelola limbah makanan Anda. Cukup masukkan sisa makanan ke dalam 
                                BinMaggo, dan biarkan maggot bekerja menguraikan limbah secara alami. Proses ini tidak hanya ramah lingkungan 
                                tetapi juga menghasilkan maggot sebagai sumber protein alternatif yang bermanfaat.
                            </p>
                            <ul>
                                <li>Buka penutup BinMaggo dan masukkan limbah makanan.</li>
                                <li>Pastikan tidak ada bahan non-organik yang masuk.</li>
                                <li>Biarkan maggot memproses limbah secara alami.</li>
                                <li>Panen maggot setelah beberapa hari untuk dimanfaatkan sebagai pakan ternak.</li>
                            </ul>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                        <img src="assets/images/bgmaggot.jpg" alt="" class="card-img-top w-100">
                        <div class="card-body">
                            <h5 class="card-title">Panduan Lengkap Budidaya Maggot: Solusi Pengelolaan Limbah Organik</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: Bisnis Digital</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 45</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 12</a>
                            </div>
                            <p>
                                Budidaya maggot menjadi solusi efektif untuk mengelola limbah organik sekaligus menghasilkan sumber protein 
                                alternatif. Ikuti langkah-langkah berikut untuk memulai budidaya maggot dengan mudah dan efisien.
                            </p>
                            <ul>
                                <li>Persiapkan Tempat: Gunakan wadah tertutup namun memiliki ventilasi udara, seperti kotak plastik berlubang.</li>
                                <li>Siapkan Media: Campurkan limbah organik seperti sisa sayuran, buah-buahan, atau ampas dapur sebagai pakan.</li>
                                <li>Masukkan Telur Maggot: Tebarkan telur maggot pada permukaan media pakan secara merata.</li>
                                <li>Jaga Kelembapan: Pastikan media tidak terlalu kering atau basah untuk mendukung pertumbuhan maggot.</li>
                                <li>Panen Maggot: Setelah 10-14 hari, maggot siap dipanen untuk digunakan sebagai pakan ternak atau keperluan lain.</li>
                            </ul>
                            <p>
                                Dengan budidaya maggot, Anda tidak hanya membantu mengurangi limbah organik, tetapi juga menghasilkan produk yang 
                                bernilai ekonomi tinggi.
                            </p>
                            <a href="javascript:void(0)">Read More..</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card border mb-4">
                    <iframe src="https://www.youtube.com/embed/uA56npF-Ft8?si=xq5C2Pqw-XhstI0w" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" 
                        referrerpolicy="strict-origin-when-cross-origin" 
                        allowfullscreen>
                    </iframe>
                        <!-- <img src="assets/images/blog-3.jpg" alt="" class="card-img-top w-100"> -->
                        <div class="card-body">
                            <h5 class="card-title">Cara Budidaya Maggot: Panduan Praktis untuk Pemula</h5>
                            <div class="post-details">
                                <a href="javascript:void(0)">Posted By: FEB</a>
                                <a href="javascript:void(0)"><i class="ti-thumb-up"></i> 65</a>
                                <a href="javascript:void(0)"><i class="ti-comment"></i> 23</a>
                            </div>
                            <p>
                                Maggot atau larva lalat Black Soldier Fly (BSF) adalah salah satu solusi terbaik untuk mengolah limbah organik 
                                menjadi produk bernilai tinggi. Melalui video ini, Anda akan mempelajari cara praktis untuk memulai budidaya maggot 
                                di rumah atau dalam skala besar.
                            </p>
                            <ul>
                                <li><strong>Persiapan Wadah:</strong> Pelajari jenis wadah yang ideal untuk tempat berkembang maggot.</li>
                                <li><strong>Pakan yang Tepat:</strong> Ketahui jenis limbah organik yang cocok untuk mempercepat pertumbuhan maggot.</li>
                                <li><strong>Pemeliharaan Rutin:</strong> Ikuti tips merawat maggot agar tumbuh optimal.</li>
                                <li><strong>Panen dan Pemanfaatan:</strong> Panduan panen maggot dan cara memanfaatkannya untuk pakan ternak atau kompos.</li>
                            </ul>
                            <p>
                                Video ini memberikan langkah-langkah yang mudah dipahami, lengkap dengan tips dan trik untuk memastikan hasil 
                                budidaya Anda sukses. Dengan memanfaatkan maggot, Anda dapat berkontribusi pada pengurangan limbah organik 
                                sekaligus menciptakan peluang bisnis yang menjanjikan.
                            </p>
                            <a href="https://youtu.be/uA56npF-Ft8?si=JOOOoLc6jTq-KLQ9" target="_blank">Watch Video</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>   
    
    <section id="produk" class="section">
        <div class="container text-center">
            <h6 class="subtitle">Produk</h6>
            <h6 class="section-title mb-4">Produk Kami</h6>
            <!-- <p class="mb-5 pb-4">Kami menyediakan layanan edukasi komprehensif untuk membantu Anda memahami cara penggunaan BinMaggo 
                secara efektif dan dampaknya terhadap pengelolaan sampah. Melalui konsultasi ahli, kami siap mendampingi Anda dalam 
                menerapkan solusi ini sesuai kebutuhan usaha, seperti warteg atau tempat makan lainnya. Selain itu, kami mempermudah 
                proses pemesanan BinMaggo, memastikan produk ini cepat tersedia untuk mendukung pengelolaan limbah makanan yang lebih 
                berkelanjutan.</p> -->

            <div class="row d-flex justify-content-center">
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="ti-trash"></i>
                                <h5>Trash Bin</h5>
                                <p>Rp 200.000,00 / Item</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <img src="assets/images/maggot.png" alt="" style="width:50px; height:50px">
                                <h5>Telur Maggot</h5>
                                <p>Rp 25.000,00 / 10 gram</p>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 mb-4">
                    <div class="custom-card card border">
                        <div class="card-body">
                            <i class="ti-shopping-cart-full"></i>
                                <h5>Ampas Kopi</h5>
                                <p>Rp 10.000,00 / 500 gram</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="pesan" class="position-relative section">
        <div class="container text-center">
            <h6 class="subtitle">Form</h6>
            <h6 class="section-title mb-4">Pemesanan Produk Kami</h6>

            <div class="contact text-left">
               <div class="form">
                    <form action="models/pemesanan.php" method="post"  name="form3">
                        <div class="form-group"> Nama :
                            <input type="" class="form-control" id="nama_lengkap" aria-describedby="emailHelp" placeholder="Nama Lengkap" required name="nama_lengkap">
                        </div>
                        <div class="form-group"> No Telp :
                            <input type="" class="form-control" id="no_telp" aria-describedby="emailHelp" placeholder="No Telepon" required name="no_telp">
                        </div>
                        <div class="form-group"> Alamat Lengkap:
                            <input type="" class="form-control" id="alamat" aria-describedby="emailHelp" placeholder="Alamat Lengkap" required name="alamat">
                        </div>
                        <div class="form-group">
                            <label for="order">Apa Yang Dipesan:</label>
                                <select class="form-control" id="order" required name="order">
                                    <option value="" disabled selected>Pilih Pesanan</option>
                                    <option value="trash bin">Trash Bin | Rp 200.000,00 / Item</option>
                                    <option value="telur maggot">Telur Maggot | Rp 25.000,00 / 10 gram</option>
                                    <option value="ampas kopi">Ampas Kopi | Rp 10.000,00 / 500 gram</option>
                                </select>
                        </div>
                        <div class="form-group"> Berapa Yang Dipesan :
                            <input type="" class="form-control" id="jumlah" aria-describedby="emailHelp" placeholder="Kuantitas" required name="jumlah">
                        </div>
                    
                        <div class="form-submit d-flex justify-content-center">
                            <input type="submit" name="daftar" value="Pesan">';
                        </div>
                    </form>
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