<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Kategori</title>
</head>
<body>
    <h1>Ini <?= esc($kategori) ?></h1> <!-- Menggunakan esc() untuk keamanan -->
    <a href="<?= base_url('/kategori') ?>">Kembali ke Kategori</a>
</body>
</html>
