<?php
$conn = mysqli_connect('localhost', 'root', '', 'tutorial_php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  
    <!-- css -->
    <link rel="stylesheet" href="style.css">


    <title>Montana Indonesia</title>
  </head>
  <body id="home">
   
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg- shadow-sm fixed-top">
      <div class="container">
        <div class="logo">
          <a href=""><img src="asset/montana.jpg" class="putih" style="width: 60px; height: 60px;" /></a>
          
        </div>
        <a class="navbar-brand" href="#">Montana </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item"></li>
              <a class="nav-link" href="galeri.php">Galeri</a>
            <li class="nav-item">
              
              <a class="nav-link" href="paket.php">Paket Kegiatan</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="lokasi.php">Lokasi</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Pesan.php">Pesanan</a>
            </li>
            <li class="nav-item"></li>
              <a class="nav-link" href="about.php">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- akhirnavbar -->


    <!-- about -->
<section id="about">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          <p><img src="asset/user.png" style="width: 50px; height: 50px; "></p>
          <h3>About Me</h3>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col">
          <p>
            Hutan pinus limpakuwus adalah wisata alam yang terletak di seputar kawasan wisata Baturraden. Dengan bentang alam pegunungan seluas 25 hektare, kami siap menjadi venue untuk aneka kegiatan luar ruangan. Dilengkapi dengan area parkir dengan kapasitas 150 kendaraan roda empat dan 250 kendaraan roda dua, memiliki aula untuk kapasitas 70-80 orang, masjid dengan kapasitas 50 orang dan toilet sebanyak 20 unit yang tersebar di seluruh lokasi.
        </div>  
        <div class="col">
          <p>
            Lokasi wisata kami merupakan area terbuka yang cocok untuk kegiatan seluruh keluarga karena memiliki beberapa wahana seperti Mountain Slide, Flying Fox, Golden Brigade, ATB Bike dan Play Ground yang berisi banyak permainan. 
  Disini juga mendukung untuk kegiatan dengan konsep menginap karena ada area camping ground untuk 200 tenda dan 7 unit cottage dengan kapasitas total hingga 20 orang yang bisa menjadi tempat nyaman untuk bermalam. 
  Hutan Pinus Limpakuwus juga memiliki tim fasilitator dan crew yang siap memandu dan melayani semua kebutuhan acara.
          </p>
        </div>
      </div>
    </div>
    
    
  </section>
  
  <!-- akhirabout -->



    <!-- footer -->
<footer id="contact">
    <div class="container">
    <div class="layar-dalam md-7 mb-5">
      
      <div>
        <h5>Contact</h5>
        <p><img src="asset/contact.png" style="width: 30px; height: 30px; "> </p>
        <p>Hendy  <a href="#"> <i class="fas fa-phone"></i> +6282251611550  </a></p> 
       
      </div>
    
      <div>
        <h5>Map</h5>
        <p><img src="asset/location.png" style="width: 30px; height: 30px; "></p>
        <p>Hutan Pinus Limpkuwus </p> 
        <p>Area Sawah, Limpakuwus, Kec. Sumbang, Kabupaten Banyumas, Jawa Tengah </p>
      </div>
    
  
     <div class="box">
        <h5>Follow Us</h5>
        <p><img src="asset/instagram.png" style="width: 30px; height: 30px; "> <a href="#"> <i class="fab fa-instagram "></i> montana.indonesia </a></p> 
        <p><img src="asset/instagram.png" style="width: 30px; height: 30px; "> <a href="#"> <i class="fab fa-instagram "></i> hutanpinuslimpakuwuss </a></p> 
    
      </div>
    </div>
    <div class="layar-dalam">
      <div class="copyright">&copy; 2022 Montana Indonesia</div>
    </div>
    </div>
  </footer>
  <!-- akhirfooter -->
  
  
  
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  
    </body>
  </html>