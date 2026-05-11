<?php
$data = file_get_contents('data/menu.json');
$menu = json_decode($data, true)['menu']; // perbaiki key menjadi string

$kategori = [];
foreach ($menu as $item) {
    $kat = $item['kategori'] ?? 'lainnya';
    $kategori[$kat][] = $item;
}
?>


<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar simple</title>
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
    body {
          font-family: Arial, sans-serif;
    }

    nav  {
          background-color: black;
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding: 10px 20px;
    }

    .logo {
        color: white;
        font-size: 20px;
        font-weight: bold;
        text-decoration: none;

    }

    .nav-links a {
       color: white;
       text-decoration: none;
       margin-left: 20px;
       font-size: 16px;
       transition: color 0.3s;
    }


</style>
</head>

<body>
    <nav>
        <a href="#" class="logo">
        <img src="logo.png" width="120">
      </a>
      <div class="nav-links">
        <a href="#home">home</a>
        <a href="#home">home</a>
        <a href="#home">home</a>
        <a href="#home">home</a>
      </div>h
    </nav>
    <div class="container">
    <div class="row mt-3">
        <div class="col">
            <h1>all menu</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4"></div>
    </div>
</div>
</body>
</html>
