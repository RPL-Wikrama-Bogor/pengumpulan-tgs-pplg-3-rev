<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <h1>Harga barang</h1>
  <form method="POST" action="">
    <label for="">Input harga per gram</label>
    <input type="number" name="total_gram"><br>
    <button type="submit" name="kirim">Submit</button>
  </form>

  <?php
  if (isset($_POST['kirim'])) {
    $total_gram = $_POST['total_gram'];

    $harga_sebelum = 500 * $total_gram;
    $diskon = 5 * $harga_sebelum / 100;
    $harga_setelah = $harga_sebelum - $diskon;

    echo "harga sebelum Rp." . $harga_sebelum . " mendapatkan diskon sebesar " . $diskon . " jumlah yang harus dibayar Rp. " . $harga_setelah;
  }
  ?>

</body>

</html>