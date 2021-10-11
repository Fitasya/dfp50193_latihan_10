<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>

<body>
    <?php require 'index.php' ?>
    <h1>BMI</h1>

    <?php
    $berat = 100;
    $tinggi = 1.60;
    $bmi = bmi($berat, $tinggi);
    ?>
    <?php
    if (bmi($berat, $tinggi) <= 18.5) {
        $status = "Underweight";
    } else if (bmi($berat, $tinggi) <= 24.9) {
        $status = "Healthy Weight";
    } else if (bmi($berat, $tinggi) <= 29.9) {
        $status = "Overweight";
    } else {
        $status = "Obesity";
    }
    ?>

    <table>
        <tr>
            <td>Berat:</td>
            <td><?php echo $berat; ?> kilogram</td>
        </tr>
        <tr>
            <td>Tinggi:</td>
            <td><?php echo $tinggi; ?> meter</td>
        </tr>
        <tr>
            <td>BMI:</td>
            <td><?php echo $bmi; ?></td>
        </tr>
        <tr>
            <td>Weight Status:</td>
            <td><?php echo $status; ?></td>
        </tr>
    </table>

</body>

</html>

<?php
function bmi($berat, $tinggi)
{
    $total = $berat / ($tinggi * $tinggi);
    return $total;
}
