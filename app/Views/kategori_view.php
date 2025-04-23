<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Kategori</title>
</head>
<body>
    <h1>Ini adalah halaman kategori</h1>
    <ul>
    <?php foreach ($categories as $kunci => $nilai): ?>
            <li><a href="<?= base_url('kategori/' . $nilai) ?>"><?= $kunci ?></a></li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
