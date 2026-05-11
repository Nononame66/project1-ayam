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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NAVBAR</title>

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
      }

      body {
        font-family: Arial, sans-serif;
        background-color: #71978c;
      }

      /* NAVBAR */
      nav {
        background-color: #4bfac5;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 10px 20px;
      }

      .logo img {
        width: 120px;
      }

      .nav-links a {
        color: white;
        text-decoration: none;
        margin-left: 20px;
        font-size: 16px;
        transition: 0.3s;
      }

      .nav-links a:hover {
        color: #005f4e;
      }

      /* CARD */
      .card {
        width: 200px;
        border: 1px solid #ccc;
        box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
        text-align: center;
        padding-bottom: 10px;
      }

      /* CONTAINER CARD */
      .menu-container {
        display: flex;
        gap: 20px;
        justify-content: center;
        flex-wrap: wrap;
        margin-top: 40px;
      }

      /* TOMBOL BUY */
      .btn {
        display: inline-block;
        padding: 8px 16px;
        background-color: #4bfac5;
        color: white;
        border-radius: 6px;
        text-decoration: none;
        font-weight: bold;
        transition: 0.2s;
      }

      .btn:hover {
        background-color: #37d9a7;
      }


      .judul-menu {
  text-align: center;
  color: white;
  margin-top: 30px;
  font-size: 32px;
  font-weight: bold;
}

    </style>
</head>

<body>
<!-- NAVBAR -->
<nav>
  <a href="#" class="logo">
    <img src="img/logo.png">
  </a>

  <div class="nav-links">
    <a href="#home">home</a>
    <a href="#about">about</a>
    <a href="#services">services</a>
    <a href="#contact">contact</a>
  </div>
</nav>

<!-- MENU -->
<h1 class="judul-menu">MENU</h1>
<div class="menu-container">

    <div class="card">
        <img src="img/kentang goreng.png" width="120">
        <h3>Kentang Goreng</h3>
        <p>Renyah</p>
        <h3>Rp 19.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

    <div class="card">
        <img src="img/paha atas.png" width="120">
        <h3>Paha Atas</h3>
        <p>renyah</p>
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

    <div class="card">
        <img src="img/nasi.png" width="120">
        <h3>Nasi</h3>
        <p>Enak</p>
        <h3>Rp 9.000</h3>
        <a href="#" class="btn">buy</a>
    </div>

</div>

</body>
</html>
