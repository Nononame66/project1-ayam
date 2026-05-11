<?php
$data = file_get_contents('data/menu.json');
$menu = json_decode($data, true)['menu'];

$kategori = [];
foreach ($menu as $item) {
    $kat = $item['kategori'] ?? 'Lainnya';
    $kategori[$kat][] = $item;
}
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTS-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>
    <style>
      ** {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* CARD */
.card {
    width: 200px;
    border: 1px solid #4bfac5;
    box-shadow: 8px 8px 8px rgba(0,0,0,0.1);
    background: #4bfac5;
    display: flex;             
    flex-direction: column;     
    justify-content: flex-end; 
    align-items: center;
    padding: 15px;
    text-align: center;
}

/* gambar tetap di atas */
.card img {
    margin-bottom: auto;
}

/* CONTAINER JUDUL */
.container {
    display: flex;
    justify-content: right;
    margin-top: 20px;
    color: black;
   padding: 15px; 
}

/* BODY */
body {
    font-family: Arial, sans-serif;
    background: #4bfac5;
    min-height: 10vh;
}

/* NAVBAR */
nav {
    background-color: #00f7b1ff;
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 10px 20px;
}

/* LOGO */
.logo {
    color: white;
    font-size: 20px;
    font-weight: bold;
    text-decoration: none;
}

/* NAV LINKS */
.nav-links a {
    color: white;
    text-decoration: none;
    margin-left: 20px;
    font-size: 16px;
    transition: color 0.3s;
}

.nav-links a:hover {
    color: #00bcd4;  
}

/* MENU CONTAINER */
.menu-container {
    display: flex;
    gap: 150px;
    justify-content: center;
    flex-wrap: wrap;
}

/* BUTTON */
.btn {
    display: inline-block;     
    padding: 8px 16px;
    background-color: #1c5f52;
    border-radius: 6px;
    text-decoration: none;
    font-weight: bold;
    transition: 0.2s;
    color: whitesmoke;
}

.btn:hover {
    background-color: #23312e;
}




      </style>
    </head>
<body>

<nav>
  <a href="#" class="logo">
    <img src="img/pi.png" width="120">
    </a>
    <div class="nav-links">
      <a href="#Home">Home</a>
      <a href="#About">About</a>
      <a href="Services">Services</a>
      <a href="Contact">Contact</a>
    </div>
    </nav>
    <div class="container">
      <div class="row mt-3">
        <div class="col">
          <h1> Menu Makan</h1>
    </div>
    </div>
    <div class="row">
      <div class="col-md-4"></div>
    </div>
    </div>
    </nav>
    <div class="menu-container">

    <!-- Baris 1 -->
    <div class="card">
        <img src="img/kentang.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 12.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/paha atas.png" width="120">
        <h3> Paha Atas</h3>
        <p>Renyah</p>
        <h3>Rp 19.500</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/paha bawah.png" width="120">
        <h3>Paha Bawah</h3>
        <p>Gurih</p>
        <h3>Rp 19.500</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <!-- Baris 2 (otomatis turun ke bawah) -->
    <div class="card">
        <img src="img/paket1.png" width="120">
        <h3>Panas 1</h3>
        <p> Chicken + 1 Rice</p>
        <h3>Rp 46.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/paket2.png" width="120">
        <h3>Panas 2</h3>
        <p>1 Chicken + 1 Rice</p>
        <h3>Rp 34.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/sundae.png" width="120">
        <h3>Sundae Coklat</h3>
        <p>Es Krim Lembut Dengan Saus Coklat Manis</p>
        <h3>Rp 12.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/aquaa.png" width="120">
        <h3>Aqua</h3>
        <p>Segar Pas Diminum Kapan Saja.</p>
        <h3>Rp 9.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/coca.png" width="120">
        <h3>Coca-Cola</h3>
        <p>Segarnya Cola Dingin</p>
        <h3>Rp 9.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

</div>

    </body>
    </html>
    
  
