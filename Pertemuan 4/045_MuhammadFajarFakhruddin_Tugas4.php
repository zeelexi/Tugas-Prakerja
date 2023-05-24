<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Algoritma Muhammad Fajar Fakhruddin</title>
  <body>
    <h1>ALGORITMA</h1>
    <h2>Rumus Menghitung Keliling dan Luas Lingkaran</h2>
    <form method="POST" action="">
        Masukkan Jari-Jari (r) : <input type="text" name="r"><br/>
        <input type="submit" name="submit" value="Hitung">
    </form>

    <?php
    if(isset($_POST['submit'])) {
        $r = $_POST['r'];
        $L = 22 / 7 * $r * $r;
        $K = 2 * (22 / 7) * $r;
        echo "Luas (L) Lingkaran : " . $L . "<br>";
        echo "Keliling (K) Lingkaran : " . $K;
    }
    ?>

  <body>
  </html>