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
    <nav class="navbar navbar-expand-lg navbar-light  bg- shadow-sm fixed-top ">
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


  

    <!-- section galeri -->
<section id="galeri">
    <div class="container">
      <div class="row text-center mb-5">
        <div class="col">
            <p><img src="asset/foto.png" style="width: 50px; height: 50px;"></p>
          <h3>Galeri</h3>
          <p> Potret kegitan </p>
        </div>
        <div class="row ">
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/gmbr1.jpeg" class="card-img-top" alt="gmbr1">
              <div class="card-body">
                
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/cmp1.jpeg" class="card-img-top" alt="hut6">
              <div class="card-body">
                
                <p class="card-text"></p><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/hut1.jpg" class="card-img-top" alt="hut1">
              <div class="card-body">
                
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/cmp2.jpeg" class="card-img-top" alt="cmp2">
              <div class="card-body">
                
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/gmbr3.jpeg" class="card-img-top" alt="gmbr3">
              <div class="card-body">
                
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/cmp3.jpeg" class="card-img-top" alt="cmp3">
              <div class="card-body">
               
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/gmbr5.jpeg" class="card-img-top" alt="gmbr5">
              <div class="card-body">
                
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/gmbr6.jpeg" class="card-img-top" alt="gmbr6">
              <div class="card-body">
               
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
          <div class="col-md-4 mb-5">
            <div class="card">
              <img src="asset/gmbr4.jpeg" class="card-img-top" alt="gmbr4">
              <div class="card-body">
               
                <p class="card-text"><i class="bi bi-star-fill text-warning"></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i><i class="bi bi-star-fill text-warning "></i>
                </p>
              </div>
            </div>
          </div>
  
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#273036" fill-opacity="0.6" d="M0,288L17.1,261.3C34.3,235,69,181,103,133.3C137.1,85,171,43,206,64C240,85,274,171,309,197.3C342.9,224,377,192,411,202.7C445.7,213,480,267,514,282.7C548.6,299,583,277,617,229.3C651.4,181,686,107,720,101.3C754.3,96,789,160,823,165.3C857.1,171,891,117,926,96C960,75,994,85,1029,117.3C1062.9,149,1097,203,1131,192C1165.7,181,1200,107,1234,64C1268.6,21,1303,11,1337,21.3C1371.4,32,1406,64,1423,80L1440,96L1440,320L1422.9,320C1405.7,320,1371,320,1337,320C1302.9,320,1269,320,1234,320C1200,320,1166,320,1131,320C1097.1,320,1063,320,1029,320C994.3,320,960,320,926,320C891.4,320,857,320,823,320C788.6,320,754,320,720,320C685.7,320,651,320,617,320C582.9,320,549,320,514,320C480,320,446,320,411,320C377.1,320,343,320,309,320C274.3,320,240,320,206,320C171.4,320,137,320,103,320C68.6,320,34,320,17,320L0,320Z"></path></svg>
  </section>
  
  <!-- akhir section -->

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