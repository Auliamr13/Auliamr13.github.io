<?php
$conn = mysqli_connect('localhost', 'root', '', 'tutorial_php');
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

    <!-- maps -->
<section id="Pesan">
    <div class="container">
      <div class="row text-center mb-3">
        <h3 class="heading-title"> PESAN SEKARANG!</h3>
        <form action="" method="post" class="book-form">
        
        </form>
  </section>
  
  <!-- akhirmaps -->
<form method="POST" action="">
 <table>
  <tr>
   <td>
    Tanggal Kegiatan :
   </td>
   <td>
    <input type="text" placeholder=" Tanggal Kegiatan" name="tanggal_kegiatan">
   </td>
  </tr>
  <tr>
   <td>
    Nama Instansi :
   </td>
   <td>
    <input type="text" placeholder="Nama Instansi" name="nama_instansi">
   </td>
  </tr>
  <tr>
   <td>
    Nama Kegiatan :
   </td>
   <td>
    <input type="text" placeholder="Nama Kegiatan" name="nama_kegiatan">
   </td>
  </tr>
  <tr>
   <td>
    Asal Kota :
   </td>
   <td>
    <input type="mail" placeholder="Asal Kota" name="asal_kota">
   </td>
  </tr>
  <tr>
   <td>
    Jumlah peserta :
   </td>
   <td>
    <input type="text" placeholder="Jumlah peserta" name="jml_peserta">
   </td>
  </tr>
   <tr>
   <td>
    Paket Kegiatan  :
   </td>
   <td>
    <input type="text" placeholder="Paket Kegiatan" name="pkt_kegiatan ">
   </td>
  </tr>
  <tr>
   <td>
    <input type="Submit" value="Submit" name="submit">
   </td>
  </tr>
 </table>
</form>
<br/>



<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
<p></p>
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