<?php
include 'db.php';
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <table style="width:100%">
        <?php
        $totalStok = 0;
        $totalHarga = 0;
        $totalOfTotal = 0;
        
        echo "<tr>";
        echo "<th style='width:4%'>" . "ID" . "</th>";
        echo "<th>" . "Nama" . "</th>";
        echo "<th>" . "Harga" . "</th>";
        echo "<th style='width:6%'>" . "Stok" . "</th>";
        echo "<th>" . "Total" . "</th>";
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
            <td colspan="2" style="color: ##5664e9"><b>Item: <?php count($gudang) ?></b></td>
            <td><?php echo $totalHarga ?></td>
            <td><?php echo $totalStok ?></td>
            <td><?php echo $totalOfTotal ?></td>
        </tr>
    </table>
</body>

</html>