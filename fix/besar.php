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
                    function swap(&$a, &$b){
                        $temp = $b;
                        $b = $a;
                        $a = $temp;
                    }

                    // sorting
                    $n = count($gudang);
                    for ($i = 0; $i < $n-1; $i++) {
                        for ($j = 0; $j < $n-$i-1; $j++) {
                            if ($gudang[$j]['id'] < $gudang[$j+1]['id']) {
                                swap($gudang[$j]['id'], $gudang[$j+1]['id']);
                                swap($gudang[$j]['nama'], $gudang[$j+1]['nama']);
                                swap($gudang[$j]['harga'], $gudang[$j+1]['harga']);
                                swap($gudang[$j]['stok'], $gudang[$j+1]['stok']);
                            }
                        }
                    }

                    echo "<tr>";
                    echo "<th style='width:4%'>" . "ID" . "</th>";
                    echo "<th>" . "Nama" . "</th>";
                    echo "<th>" . "Harga" . "</th>";
                    echo "<th style='width:6%'>" . "Stok" . "</th>";
                    for($i = 0; $i < count($gudang); $i++){
                        echo "<tr>";
                        echo "<td>" . $gudang[$i]['id'] . "</td>";
                        echo "<td>" . $gudang[$i]['nama'] . "</td>";
                        echo "<td>" . $gudang[$i]['harga'] . "</td>";
                        echo "<td>" . $gudang[$i]['stok'] . "</td>";
                        echo "</tr>";
                    }
                    ?>
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