<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Produk</title>
</head>
<body>
    <h1>Daftar Produk</h1>

    <a href="index.php?page=produk&action=create">Tambah Produk</a>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>Kode Produk</th>
                <th>Nama Produk</th>
                <th>Kategori</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($produk as $item): ?>
                <tr>
                    <td><?= htmlspecialchars($item['kode_produk']) ?></td>
                    <td><?= htmlspecialchars($item['nama_produk']) ?></td>
                    <td><?= htmlspecialchars($item['kategori']) ?></td>
                    <td>Rp <?= number_format((float) $item['harga'], 0, ',', '.') ?></td>
                    <td><?= (int) $item['stok'] ?></td>
                    <td>
                        <a href="index.php?page=produk&action=edit&id=<?= (int) $item['id'] ?>">Edit</a>

                        <form action="index.php?page=produk&action=delete" method="POST" style="display:inline;">
                            <input type="hidden" name="id" value="<?= (int) $item['id'] ?>">
                            <button type="submit" onclick="return confirm('Yakin ingin menghapus produk ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>