<?php 
include "connection.php";
include "./model/product.model.php";
include "./controller/product.controller.php";
include "./view/product/product.view.php";
$products = new ProductView();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TEST PHP</title>
</head>
<body>
    <?php include "./view/utils/navbar.utils.php"; ?>

    <?php $products->find(); ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>JUDUL</th>
            <th>SINOPSIS</th>
            <th>TAHUN RILIS</th>
        </tr>
        <?php $products->show(); ?>
    </table>
</body>
</html>