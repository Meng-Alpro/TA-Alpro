<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $input_name = $_POST["name-product"];
    $input_id = intval($_POST["id-product"]);
    $input_price = intval($_POST["price-product"]);
    $input_stock = intval($_POST["stock-product"]);

    $i = count($gudang);
    
    $addProduct = array(
        $gudang[$i]['nama'] = $input_name,
        $gudang[$i]['id'] = $input_id,
        $gudang[$i]['harga'] = $input_price,
        $gudang[$i]['stok'] = $input_stock
    );

    // Sebelum
    // echo "<pre>";
    // print_r($gudang);
    // echo "</pre>";

    header("Location: input.php");

    file_put_contents('db.php', '<?php $gudang = ' . var_export($gudang, true) . ';');
}
?>