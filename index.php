<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css">
    <!-- <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <style>
      .header h1 {
        font-family: 'Caesar Dressing';
      }
    </style> -->
</head>
<body>

<div class="header">
  <h1>Ini Gudang</h1>
  <p>Sistem Pengelolaan Gudang Demi Menyelesaikan Tugas UwU</p>
</div>

<div class="topnav">
  <a href="#">Input Data</a>
</a>
</div>

<div class="row">
  <div class="leftcolumn">
    <div class="card">
      <h2>Data Barang</h2>
      <?php
        include 'output.php';
      ?>
      </div>
  </div>
  <div class="rightcolumn">
    <div class="card">
      <h2>Filter Data</h2>
      <a href="#">Urutkan ID Kecil ke Besar</a>
      <a href="#" style='padding-bottom: 20px'>Urutkan ID Besar ke Kecil</a><br><br>
      <form action="search1.php" method="get">
        <input type="text" name="search" placeholder="Cari ID Barang">
        <input type="submit" value="Cari" style="color: #fff; background-color: #5664E9">
      </form>
    </div>
  </div>
</div>

<div class="footer">
  <p>@Copyright <b>Meng-Alpro 2023</b></p>
</div>

</body>
</html>