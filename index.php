<?php
   $conn = new mysqli('localhost','root','','tutorial_php');
  if(isset($_POST['submit'])){
    $sql = $conn->prepare(
     "
      INSERT INTO customer
      (
        tanggal_kegiatan,
        nama_kegiatan,
        nama_instansi,
        asal_kota,
        jml_peserta,
        pkt_kegiatan
      )
      VALUES
      (?,?,?,?,?,?)
     "
    );
    
    $tanggal_kegiatan   = $_POST['tanggal_kegiatan'];
    $nama_instansi  = $_POST['nama_instansi'];
    $nama_kegiatan = $_POST['nama_kegiatan'];
    $asal_kota   = $_POST['asal_kota'];
    $jml_peserta  = $_POST['jml_peserta'];
    $pkt_kegiatan   = $_POST['pkt_kegiatan'];
    
    $sql->bind_param("ssssss", $tanggal_kegiatan, $nama_instansi, $nama_kegiatan, $asal_kota, $jml_peserta, $pkt_kegiatan);
    
    if($sql->execute()){
     Header('Location: index.php');
    }else{
     echo "ada Error";
    }
    
    $sql->close();
    $conn->close();
   }
  ?>

</form>
<br/>


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
    <nav class="navbar navbar-expand-lg navbar-light bg-light shadow-sm fixed-top">
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



<!-- jumbrotron -->
<section class="jumbotron text-center mb-3">
  <h1 class="display-4">Welcome to Montana!</h1>
  <p class="lead">Montana Digdaya Indonesia merupakan provider resmi perum </p>
  <p>perhutani KPH Banyumas Timur
    dan team Event Hutan Pinus Limpakuwus yang melayani berbagai acara dan kegiatan.</p>
  <p>  Seiring
    dengan kemajuan Teknologi, maka dibutuhkan sebuah</p>
  <p> website untuk media promosi agar tim
    event ini lebih dikenal oleh masyarakat.</p>

</section>
<!-- akhirjumbrotron -->

<section class="abuabu" id="support ">
  <div class="container"> </div>
  <div class="layar-dalam support">
    <div>
      <img src="asset/matahari.png" />
      <h6>In Every Condition</h6>
      <p>
    
      </p>
    </div>
    <div>
      <img src="asset/tas.png" />
      <h6>Professional Team</h6>
      <p>
     
      </p>
    </div>
    <div>
      <img src="asset/kompas.png" />
      <h6>Expert Hikers</h6>
      <p>
        
      </p>
    </div>
  </div>
</section>
<section class="quote">
  <div class="layar-dalam">
    <p>Ora Ngapak Ora Kepenak.</p>
  </div>
</section>
<section id="team">
  <div class="layar-dalam">
    <h3>Our Team</h3>
    <p class="ringkasan">
      Anggota Kelompok
    </p>
    <div class="tim">
      <div>
        
        <h6>Lintang</h6>
        <span>Indonesia</span>
      </div>
      <div>
        
        <h6>Aulia</h6>
        <span>Indonesia</span>
      </div>
      <div>
        
        <h6>Devin</h6>
        <span>Indonesia</span>
      </div>
      <div>
       
        <h6>Febi</h6>
        <span>Indonesia</span>
      </div>
      
    </div>
  </div>
</section>
<section class="abuabu" id="blog">
  <div class="container"></div>
  <div class="layar-dalam md-7 mb-5">
    <h3> Blog</h3>
    <p class="ringkasan">
      
    </p>
    <div class="blog">
      <div class="area">
        <div
          class="gambar"
          style="background-image: url('asset/pinus.webp')"
        ></div>
        <div class="text">
          <article>
            <h4><a href="#">Hutan Pinus Limpakuwus?</a></h4>
            <p>
              Hutan Pinus Limpakuwus menjadi salah satu objek wisata alam yang selalu ramai pengunjung. 
Apalagi didukung sarana dan prasarana yang memadai. Ditambah wahana yang ramah anak, 
menjadikan Hutan Pinus Limpakuwus cocok juga dikunjungi bersama dengan keluarga.
            </p>
          </article>
        </div>
      </div>
      <div class="area">
        <div
          class="gambar"
          style="background-image: url('asset/mas.jpg')"
        ></div>
        <div class="text">
          <article>
            <h4><a href="#">Kabupaten Banyumas?</a></h4>
            <p>
              sebuah wilayah kabupaten yang terletak di Provinsi Jawa Tengah, Indonesia. 
              Ibu kotanya adalah Kota Purwokerto, kabupaten ini berbatasan dengan Kabupaten Brebes di utara; 
              Kabupaten Purbalingga, Kabupaten Banjarnegara, dan Kabupaten Kebumen di timur, 
              serta Kabupaten Cilacap di sebelah selatan dan barat. 
              Gunung Slamet, gunung tertinggi di Jawa Tengah terdapat di ujung utara wilayah kabupaten ini.
            </p>
          </article>
        </div>
      </div>
    </div>
  </div>
</section>



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