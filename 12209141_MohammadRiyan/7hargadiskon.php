<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menghitung</title>
</head>
<body><center>
<h1>Harga <label>Diskon</label></h1>
    <form action="" method="post">
        <div>
            <label for="total_gram">Masukkan total harga :</label>
            <input type="number" id="total_gram" name="total_gram">
        </div><br>
        <button type="submit" name="submit">Kirim</button>
    </form>


<?php

    $total_gram;
    $harga_sebelum;
    $diskon;
    $harga_setelah;

    if (isset($_POST['submit'])) {

        $total_gram = $_POST['total_gram'];

        $harga_sebelum =(500 * $total_gram);
        $diskon =(5 * ($harga_sebelum /100));
        $harga_setelah = $harga_sebelum - $diskon;

        echo "<br>Total gram: " .$total_gram . "<br>Harga sebelum: " .$harga_sebelum ."<br>Diskon: " . $diskon ."<br>Harga setelah: " .$harga_setelah;
    }
?>
</center>
</body>
</html>