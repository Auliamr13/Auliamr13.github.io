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




<!-- paket kegiatan -->
<section id="paket">
    <div class="container">
      <div class="row text-center mb-3">
        <div class="col">
          
          <p><img src="asset/koper.png" style="width: 50px; height: 50px;"></p>
          <h3>Paket Kegiatan</h3>
        </div>
        <div class="row ">
          <div class="col-md-6 mb-5">
            <div class="card">
              <img src="asset/family.JPG" class="card-img-top" alt="family">
              <div class="card-body">
                <p class="card-text">Paket Family</p>
                <p class="card-text">Adalah paket acara kumpul bersama untuk karyawan, anggota organisasi ataupun keluarga dengan 
                  tema rekreasi dan diselingi dengan kegiatan fun games ringan ataupun kegiatan lain seperti offroad, 
                  paint ball dll. Durasi kegiatan halfday.</p>
                  <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="card">
              <img src="asset/outbon.jpeg" class="card-img-top" alt="outbon">
              <div class="card-body">
                <p class="card-text">Paket Outbound</p>
                <p class="card-text">Adalah program kegiatan pembelajaran segala ilmu terapan dengan simulasi permainan kreatif yang 
                  menggabungkan intelegensia, fisik dan mental untuk mendapatkan output peningkatan kapasitas, 
                  kerjasama, kepemimpinan dan komunikasi efektif. </p>
                  <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="card">
              <img src="asset/nginep.JPG" class="card-img-top" alt="nginep">
              <div class="card-body">
                <p class="card-text">Paket Penginapan</p>
                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-6 mb-5">
            <div class="card">
              <img src="asset/camping.JPG" class="card-img-top" alt="camping">
              <div class="card-body">
                <p class="card-text ">Paket Camping</p>
                <i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning"></i>
                </p>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="0.6" d="M0,160L17.1,138.7C34.3,117,69,75,103,101.3C137.1,128,171,224,206,245.3C240,267,274,213,309,202.7C342.9,192,377,224,411,202.7C445.7,181,480,107,514,106.7C548.6,107,583,181,617,186.7C651.4,192,686,128,720,101.3C754.3,75,789,85,823,117.3C857.1,149,891,203,926,202.7C960,203,994,149,1029,112C1062.9,75,1097,53,1131,48C1165.7,43,1200,53,1234,69.3C1268.6,85,1303,107,1337,112C1371.4,117,1406,107,1423,101.3L1440,96L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
  </section>
  <!-- akhir paket wisata -->

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