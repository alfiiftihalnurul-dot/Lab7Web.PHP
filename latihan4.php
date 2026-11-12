
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan 4 PHP</title>
</head>
<body>

    <h2>Menghitung Harga Diskon</h2>

    <?php
        function hitungDiskon($harga, $persen) {
            $potongan = $harga * ($persen / 100);
            return $harga - $potongan;
        }

        $harga = 150000;
        $diskon = 10;

        $hargaAkhir = hitungDiskon($harga, $diskon);

        echo "Harga Awal: Rp" . number_format($harga, 0, ",", ".") . "<br>";
        echo "Diskon: " . $diskon . "%<br>";
        echo "Harga Setelah Diskon: Rp" . number_format($hargaAkhir, 0, ",", ".");
    ?>

    <hr>

    <h3>Menghitung Luas Persegi Panjang</h3>

    <?php
        function hitungLuas($panjang, $lebar) {
            return $panjang * $lebar;
        }

        $panjang = 8;
        $lebar = 4;

        echo "Panjang: " . $panjang . "<br>";
        echo "Lebar: " . $lebar . "<br>";
        echo "Luas: " . hitungLuas($panjang, $lebar);
    ?>

</body>
</html>
