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
