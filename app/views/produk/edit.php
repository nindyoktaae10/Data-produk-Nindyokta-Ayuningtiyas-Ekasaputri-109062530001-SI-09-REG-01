<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
</head>
<body>
    <h1>Tambah Produk</h1>

    <form action="index.php?page=produk&action=store" method="POST">
        <label for="kode_produk">Kode Produk</label><br>
        <input type="text" id="kode_produk" name="kode_produk" required>
        <br><br>

        <label for="nama_produk">Nama Produk</label><br>
        <input type="text" id="nama_produk" name="nama_produk" required>
        <br><br>

        <label for="kategori">Kategori</label><br>
        <input type="text" id="kategori" name="kategori" required>
        <br><br>

        <label for="harga">Harga (Rp)</label><br>
        <input type="number" id="harga" name="harga" min="0" step="0.01" required>
        <br><br>

        <label for="stok">Stok</label><br>
        <input type="number" id="stok" name="stok" min="0" step="1" required>
        <br><br>

        <button type="submit">Simpan</button>
        <a href="index.php?page=produk">Kembali</a>
    </form>
</body>
</html>