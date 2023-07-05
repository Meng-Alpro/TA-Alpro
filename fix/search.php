<!DOCTYPE html>
<html>

<head>
    <link href="https://fonts.googleapis.com/css?family=Caesar+Dressing" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
    .header h1 {
        font-family: 'Caesar Dressing';
        letter-spacing: 5px;
    }
    </style>
</head>

<body>
    <?php include 'header.php'; ?>

    <div class="topnav">
        <!-- <a href="#">Input Data</a>
        </a> -->
    </div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Data Barang</h2>
                <?php
                include 'db.php';

                if (isset($_GET['search'])) {
                    $search = $_GET['search'];
                    $ada = false;
                    $indeks = 0;

                    for($i = 0; $i < count($gudang); $i++){
                        if($gudang[$i]['id'] == $search){
                                $hasilPencarian[$indeks]['id'] = $gudang[$i]['id'];
                                $hasilPencarian[$indeks]['nama'] = $gudang[$i]['nama'];
                                $hasilPencarian[$indeks]['harga'] = $gudang[$i]['harga'];
                                $hasilPencarian[$indeks]['stok'] = $gudang[$i]['stok'];
                                $indeks++;
                                $ada = true;
                        }
                    }
                    
                    if ($ada) {
                        echo "<table style='width:100%'>";
                        echo "<tr>";
                        echo "<th style='width:4%'>" . "ID" . "</th>";
                        echo "<th>" . "Nama" . "</th>";
                        echo "<th>" . "Harga" . "</th>";
                        echo "<th style='width:6%'>" . "Stok" . "</th>";
                        for($i = 0; $i < count($hasilPencarian); $i++){
                            echo "<tr>";
                            echo "<td>" . $hasilPencarian[$i]['id'] . "</td>";
                            echo "<td>" . $hasilPencarian[$i]['nama'] . "</td>";
                            echo "<td>" . $hasilPencarian[$i]['harga'] . "</td>";
                            echo "<td>" . $hasilPencarian[$i]['stok'] . "</td>";
                            echo "</tr>";
                        }
                        echo "</table>";
                    } else {
                        echo "ID Tidak Ditemukan ditemukan";
                    }   
                }
                ?>
            </div>
        </div>
        <?php include 'sidebar.php' ?>
    </div>
    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/Meng-Alpro" target="_blank">Meng-Alpro 2023</a></b></p>
    </div>
</body>

</html>