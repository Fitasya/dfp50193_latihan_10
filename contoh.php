<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contoh</title>
</head>
<body>
    <?php require 'index.php' ?>
    <h1>CONTOH FUNCTION</h1>
    <?php
    $harga = 1.7;
    $berat = 2;
    ?>

    <p>
        Harga sekilogram buah betik adalah 
        RM<?php echo number_format($harga, 2); ?>
        <br><br>
        Untuk <?php echo $berat; ?>KG, total harga adalah 
        RM<?php echo number_format(kira($harga, $berat), 2); ?>
    </p>
    
</body>
</html>

<?php
function kira($harga, $berat) {
    $total = $harga * $berat;
    return $total;
}