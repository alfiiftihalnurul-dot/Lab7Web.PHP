
<?php
$nilai1 = 80;
$nilai2 = 85;
$nilai3 = 90;

$rataRata = ($nilai1 + $nilai2 + $nilai3) / 3;
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Rata-Rata Nilai</title>
</head>
<body>
    <h2>Menghitung Rata-Rata Nilai</h2>

    <p>Nilai 1: <?= $nilai1 ?></p>
    <p>Nilai 2: <?= $nilai2 ?></p>
    <p>Nilai 3: <?= $nilai3 ?></p>

    <p>Rata-rata:
        <strong><?= number_format($rataRata, 2) ?></strong>
    </p>
</body>
</html>
