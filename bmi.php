<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BMI</title>
</head>
<body>
    <h1>Calculate BMI</h1>

    <?php 
        $berat = 60;
        $tinggi = 1.6;
        $bmi = bmi($berat, $tinggi);
    ?> 
    <table>
        <tr>
            <td>Berat:</td>
            <td><?php echo $berat; ?> Kilogram</td>
        </tr>
        <tr>
            <td>Tinggi:</td>
            <td><?php echo $tinggi; ?> meter</td>
        </tr>
        <tr>
            <td>BMI:</td>
            <td><?php echo $bmi; ?></td>
        </tr>
</body>
</html>

<?php
function bmi($berat, $tinggi) {
    return 0;
}