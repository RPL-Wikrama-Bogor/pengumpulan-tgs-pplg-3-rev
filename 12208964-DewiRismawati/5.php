<!DOCTYPE html>
<html>
<head>
    <title>Konversi Waktu ke Detik</title>
</head>
<body>
    <h2>Konversi Jam-Menit-Detik ke Total Detik</h2>
    <form method="post">
        <label>Jam:</label>
        <input type="number" name="jam" required>
        <br>
        <label>Menit:</label>
        <input type="number" name="menit" required>
        <br>
        <label>Detik:</label>
        <input type="number" name="detik" required>
        <br>
        <input type="submit" value="Konversi">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jam = $_POST["jam"];
        $menit = $_POST["menit"];
        $detik = $_POST["detik"];

        // Konversi ke total detik
        $totalDetik = ($jam * 3600) + ($menit * 60) + $detik;

        echo "<p>Total Detik: $totalDetik detik</p>";
    }
    ?>
</body>
</html>
6