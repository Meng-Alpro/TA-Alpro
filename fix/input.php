<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
    <style>
    .header h1 {
        font-family: 'Caesar Dressing';
        letter-spacing: 5px;
    }
    </style>
</head>

<body>

    <div class="header">
        <a href="index.php">
            <h1>MENG-ALPRO</h1>
        </a>
        <p>Sistem Pengelolaan Gudang Demi Menyelesaikan Tugas UwU</p>
    </div>

    <div class="topnav"></div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Input Data Product</h2>
                <div class="ilang">
                <form action="storedData.php" method="post">
                    <table style="border-style: none">
                        <tr>
                            <td style="border-style: none; padding: 5px"><label for="input-product">Nama Produk</label></td>
                            <td style="border-style: none"> : <input type="text" name="name-product" placeholder="Masukkan nama product"></td>
                        <tr>
                            <td style="border-style: none; padding: 5px""><label for="id-product">ID Produk</label></td>
                            <td style="border-style: none"> : <input type="number" name="id-product" placeholder="Masukkan id product"></td>
                        </tr>
                        <tr>
                            <td style="border-style: none; padding: 5px""><label for="price-product">Harga Produk</label></td>
                            <td style="border-style: none"> : <input type="number" name="price-product" placeholder="Masukkan Harga product"></td>
                        </tr>
                            <td style="border-style: none; padding: 5px""><label for="stok-product">Stok Produk</label></td>
                            <td style="border-style: none"> : <input type="number" name="stock-product" placeholder="Masukkan stok product"></td>
                        </tr>
                    </table>
                    <br>
                    <input type="submit" value="Input" style="color: #fff; background-color: #5664E9">
                </form>
                </div>
            </div>
        </div>

        <div class="rightcolumn">
            <div class="card">
                <h2>Fitur</h2>
                <a href="kecil.php">Urutkan ID Kecil ke Besar</a>
                <a href="besar.php">Urutkan ID Besar ke Kecil</a>
                <a href="#" style='padding-bottom: 20px'>Tambah Data Barang</a>
                <form action="search.php" method="get">
                    <input type="text" name="search" placeholder="Cari ID Barang">
                    <input type="submit" value="Cari" style="color: #fff; background-color: #5664E9">
                </form>
            </div>
        </div>
    </div>

    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/Meng-Alpro" target="_blank">Meng-Alpro 2023</a></b></p>
    </div>

</body>

</html>