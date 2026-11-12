
<?php
$errors = [];
$hasil = null;

$nama = "";
$nim = "";
$prodi = "";
$semester = "";
$email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = trim($_POST["nama"] ?? "");
    $nim = trim($_POST["nim"] ?? "");
    $prodi = trim($_POST["prodi"] ?? "");
    $semester = trim($_POST["semester"] ?? "");
    $email = trim($_POST["email"] ?? "");

    if ($nama == "") {
        $errors[] = "Nama wajib diisi.";
    }

    if ($nim == "") {
        $errors[] = "NIM wajib diisi.";
    }

    if ($prodi == "") {
        $errors[] = "Program studi wajib dipilih.";
    }

    if (!filter_var($semester, FILTER_VALIDATE_INT) ||
        $semester < 1 || $semester > 14) {
        $errors[] = "Semester harus berupa angka 1 sampai 14.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Format email tidak valid.";
    }

    if (empty($errors)) {
        $hasil = true;
    }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Data Mahasiswa</title>
</head>
<body>

    <h2>Form Data Mahasiswa</h2>

    <form method="POST" action="">
        <label>Nama:</label><br>
        <input type="text" name="nama"
            value="<?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?>">
        <br><br>

        <label>NIM:</label><br>
        <input type="text" name="nim"
            value="<?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?>">
        <br><br>

        <label>Program Studi:</label><br>
        <select name="prodi">
            <option value="">-- Pilih Prodi --</option>
            <option value="Informatika"
                <?= $prodi == "Informatika" ? "selected" : "" ?>>
                Informatika
            </option>
            <option value="Sistem Informasi"
                <?= $prodi == "Sistem Informasi" ? "selected" : "" ?>>
                Sistem Informasi
            </option>
            <option value="Manajemen Informatika"
                <?= $prodi == "Manajemen Informatika" ? "selected" : "" ?>>
                Manajemen Informatika
            </option>
        </select>
        <br><br>

        <label>Semester:</label><br>
        <input type="number" name="semester"
            min="1" max="14"
            value="<?= htmlspecialchars($semester, ENT_QUOTES, 'UTF-8') ?>">
        <br><br>

        <label>Email:</label><br>
        <input type="email" name="email"
            value="<?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?>">
        <br><br>

        <button type="submit">Kirim Data</button>
        <button type="reset">Reset</button>
    </form>

    <?php if (!empty($errors)): ?>
        <h3>Terjadi Kesalahan:</h3>
        <ul>
            <?php foreach ($errors as $error): ?>
                <li><?= htmlspecialchars($error, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>

    <?php if ($hasil): ?>
        <h3>Data Mahasiswa Berhasil Dikirim</h3>
        <p>Nama: <?= htmlspecialchars($nama, ENT_QUOTES, 'UTF-8') ?></p>
        <p>NIM: <?= htmlspecialchars($nim, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Program Studi: <?= htmlspecialchars($prodi, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Semester: <?= htmlspecialchars($semester, ENT_QUOTES, 'UTF-8') ?></p>
        <p>Email: <?= htmlspecialchars($email, ENT_QUOTES, 'UTF-8') ?></p>
    <?php endif; ?>

</body>
</html>
