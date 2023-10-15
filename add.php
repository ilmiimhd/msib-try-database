<!DOCTYPE html>
<html>
<head>
    <title>Tambah Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Tambah Barang</h1>
    <form action="process_add.php" method="post">
        Nama: <input type="text" name="nama"><br>
        Jumlah: <input type="number" name="jumlah"><br>
        Harga: <input type="number" name="harga"><br>
        <input type="submit" name="tambah" value="Tambah">
    </form>
</body>
</html>