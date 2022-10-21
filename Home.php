<?php

    $mysqli = new mysqli("localhost","root","","ternak");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ternak Milenial</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">
        <img src="img/logo.png" alt="" width="100" height="50">
      </a>
        <div class="d-flex m-1">
          <ul class="navbar-nav me-auto justify-content-center mb-2 mb-lg-0 ">
            <li class="nav-item">
              <a class="nav-link active fw-bold" aria-current="page" href="#">Home </a>
            </li>
            <li class="nav-item">
              <a class="nav-link  fw-bold" href="#artikel">Artikel </a>
            </li>
            <li class="nav-item">
              <a class="nav-link fw-bold" href="#about" tabindex="-1" aria-disabled="true">About </a>
            </li>
            <li class="nav-item">
              <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
              </form>
          </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <div class="header">
    <p>Ternak Milenial</p>
  </div>
  <div id="artikel" class="latepost"> 
    <p>LATEST POST</p>
  </div>
  <div class="card1">
    <img src="./img/card/card1.png" alt="">
    <p class="hijau"> Farmed Animal</p><br>
    <p class="judul">Cara Ternak Kambing Modal Kecil </p>
    <p class="isi">Prospek Ternak Kambing di Era Sekarang
      Kambing merupakan salah satu hewan yang mudah ditemui. 
      Sayangnya, aroma hewan satu ini tidaklah sedap.
      Di sisi lain, permintaan hewan ini tidak pernah sepi, khususnya
      di hari-hari tertentu, seperti Hari Raya Idul Adha.
      Tidak heran jika prospek ternak kambing bisa menjadi salah satu
      ladang basah untuk Anda.
      Terdapat beberapa keuntungan yang
      bisa Anda peroleh dari bisnis ini di antaranya...</p>
  </div>
  <div class="card2">
    <img src="./img/card/card2.png" alt="">
    <p class="hijau"> Farmed Animal</p><br>
    <p class="judul">Cara Ternak sapi Modal Kecil </p>
  </div>
  <div class="card3">
    <img src="./img/card/card3.png" alt="">
    <p class="hijau"> Farmed Animal</p><br>
    <p class="judul">Cara Ternak ayam Modal Kecil </p>
  </div>
    <div class="card4">
      <img src="./img/card/card4.png" alt="">
      <p class="hijau"> Farmed Animal</p><br>
      <p class="judul">Cara Ternak lobster Modal Kecil </p>
    </div>
    <div class="card5">
      <img src="./img/card/card5.png" alt="">
      <p class="hijau"> Farmed Animal</p><br>
      <p class="judul">Cara Ternak kelinci Modal Kecil </p>
    </div>
    <div class="btnall"><button type="button" class="btn btn-outline-dark">
      View ALL <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
</svg>
</button></div>
<div id="about" class="aboutus">
  <p class="textaboutus">ABOUT US</p>
 <img src="./img/about.png" alt="" style="margin-left: 35px;">
 <div class="textabout"><p style="font-weight: 600; font-size: 28px;">TERNAK MILENIAL Merupakan salah satu website yang dibuat untuk membantu para 
  pemula yang ingin belajar beternak hewan. 
  .......
  Pada umumnya Peternakan di Indonesia merupakan salah satu
  sektor kunci dalam pembangunan perekonomian Indonesia....
  </p></div>
  <div class="btnabout"><button type="button" class="btn btn-outline-dark">
    MORE <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
<path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"></path>
</svg>
</button></div>
</div>
<div class="komen">
  <form method="post" action="proses_input.php">
    <div class="form-group m-3">
      <label>Nama Lengkap</label>
      <input type="text" class="form-control" name="nama" placeholder="Masukan Nama Lengkap" autocomplete="off">
    </div>
    <div class="form-group m-3">
      <label>Email</label>
      <input type="email" class="form-control" name="email" placeholder="Masukan E-mail" autocomplete="off">
    </div>
    <div class="form-group m-3">
      <label>Komentar</label>
      <textarea class="form-control" name="komen" placeholder="Beri Komentar" rows="4" autocomplete="off"></textarea>
    </div>
    <div>
   <button style="float: right;" type="submit" value="kirim" class="btn btn-success m-3"> KIRIM </button>
  </div>
  </form>
</div>
<div class="ternak">
  <p style=" margin: 1; font-family: 'arial'; font-weight: 700; font-size: 46px; line-height: 44px;">Ternak</p>
  <p style=" margin: 1; font-family: 'arial'; font-weight: 900; font-size: 76px; line-height: 44px;">Milenial</p>
  <p style=" margin: 1; font-family: 'arial'; font-weight: 500; font-size: 26px; line-height: 44px;">for novice breeders</p>
  <a href="https://www.instagram.com/raiihan.rar/?hl=id"><img src="./img/facebook.png" alt=""></a>
  <a href="https://www.instagram.com/raiihan.rar/?hl=id"><img src="./img/ig.png" alt=""></a>
  <a href="https://www.instagram.com/raiihan.rar/?hl=id"><img src="./img/twt.png" alt=""></a>
  <a href="https://www.instagram.com/raiihan.rar/?hl=id"><img src="./img/wa.png" alt=""></a>
</div>
<a href="tampil_data.php"><section class="footer"><p>2022-TERNAK MILENIAL</p></section></a>
</body>
</html>