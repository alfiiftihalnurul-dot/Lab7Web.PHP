
<?php
function formatRupiah($angka) {
    return "Rp " . number_format($angka, 0, ',', '.');
}

$harga1 = 150000;
$harga2 = 2500000;
$harga3 = 75000;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Format Rupiah</title>
</head>
<body>

    <h2>Format Mata Uang Rupiah</h2>

    <p>Harga 1: <?= formatRupiah($harga1) ?></p>
    <p>Harga 2: <?= formatRupiah($harga2) ?></p>
    <p>Harga 3: <?= formatRupiah($harga3) ?></p>

</body>
</html>
