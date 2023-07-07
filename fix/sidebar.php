<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <style>
    .header h1 {
        font-family: 'Caesar Dressing';
        letter-spacing: 5px;
    }
    </style>
</head>

<body>
    <div class="rightcolumn">
        <div class="card">
            <h2>Fitur</h2>
            <a href="kecil.php" onclick="ascending()">Urutkan ID Kecil ke Besar</a>
            <a href="besar.php" onclick="descending()">Urutkan ID Besar ke Kecil</a>
            <a href="input.php" style='padding-bottom: 20px'>Tambah Data Barang</a>
            <form action="search.php" method="get">
                <input type="text" name="search" placeholder="Cari ID Barang">
                <input type="submit" value="Cari" style="color: #fff; background-color: #5664E9">
            </form>
        </div>
    </div>
    <script>
    function ascending() {
        alert("Data berhasil diurutkan dari kecil - besar!");
    }

    function descending() {
        alert("Data berhasil diurutkan dari besar - kecil!");
    }
    </script>
</body>