
<?php
$mahasiswa = [
    "Andi",
    "Budi",
    "Citra",
    "Dina",
    "Eka",
    "Fajar"
];

$keyword = trim($_GET["nama"] ?? "");
$hasil = [];

if ($keyword != "") {
    foreach ($mahasiswa as $nama) {
        if (stripos($nama, $keyword) !== false) {
            $hasil[] = $nama;
        }
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Pencarian Mahasiswa</title>
</head>
<body>

    <h2>Pencarian Nama Mahasiswa</h2>

    <form method="GET">
        <input type="text" name="nama"
            placeholder="Masukkan nama mahasiswa"
            value="<?= htmlspecialchars($keyword) ?>">
        <button type="submit">Cari</button>
    </form>

    <?php if ($keyword != ""): ?>
        <h3>Hasil Pencarian:</h3>

        <?php if (count($hasil) > 0): ?>
            <ul>
                <?php foreach ($hasil as $nama): ?>
                    <li><?= htmlspecialchars($nama) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p>Nama mahasiswa tidak ditemukan.</p>
        <?php endif; ?>
    <?php endif; ?>

</body>
</html>
