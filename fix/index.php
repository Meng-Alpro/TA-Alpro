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
    <?php include 'header.php'; ?>

    <div class="topnav"></div>

    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>Data Barang</h2>

                <table style="width:100%">

                    <?php
                include 'db.php';
                $totalStok = 0;
                $totalHarga = 0;
                $totalOfTotal = 0;
                
                echo "<tr>";
                echo "<th style='width:4%'>" . "ID" . "</th>";
                echo "<th>" . "Nama" . "</th>";
                echo "<th>" . "Harga" . "</th>";
                echo "<th style='width:6%'>" . "Stok" . "</th>";
                echo "<th>" . "Harga x Stok" . "</th>";
                for($i = 0; $i < count($gudang); $i++){
                    $total = $gudang[$i]['harga'] * $gudang[$i]['stok'];
                    $totalStok = $totalStok + $gudang[$i]['stok'];
                    $totalHarga = $totalHarga + $gudang[$i]['harga'];
                    $totalOfTotal = $totalOfTotal + $total; 

                    echo "<tr>";
                        echo "<td>" . $gudang[$i]['id'] . "</td>";
                        echo "<td>" . $gudang[$i]['nama'] . "</td>";
                        echo "<td>" . $gudang[$i]['harga'] . "</td>";
                        echo "<td>" . $gudang[$i]['stok'] . "</td>";
                        echo "<td>" . $total . "</td>";
                    echo "</tr>";
                }
                ?>
                    <tr>
                        <td colspan="2"><b style="color: #000">Item: <?php echo count($gudang) ?></b></td>
                        <td><b style="color: #000"><?php echo $totalHarga ?></b></td>
                        <td><b style="color: #000"><?php echo $totalStok ?></b></td>
                        <td><b style="color: #000"><?php echo $totalOfTotal ?></b></td>
                    </tr>
                </table>
            </div>
        </div>
        <?php include 'sidebar.php' ?>
    </div>
    <div class="footer">
        <p>@Copyright <b><a href="https://github.com/Meng-Alpro" target="_blank">Meng-Alpro 2023</a></b></p>
    </div>

</body>

</html>