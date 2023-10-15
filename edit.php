<!DOCTYPE html>
<html>
<head>
    <title>Edit Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Edit Barang</h1>
    <?php
    $db = new mysqli('localhost', 'root', '', 'crud-php');
    $id = $_GET['id'];
    $result = $db->query("SELECT * FROM barang WHERE id = $id");
    $row = $result->fetch_assoc();
    ?>
    <form action="process_edit.php?id=<?php echo $id; ?>" method="post">
        Nama: <input type="text" name="nama" value="<?php echo $row['nama']; ?>"><br>
        Jumlah: <input type="number" name="jumlah" value="<?php echo $row['jumlah']; ?>"><br>
        Harga: <input type="number" name="harga" value="<?php echo $row['harga']; ?>"><br>
        <input type="submit" name="edit" value="Edit">
    </form>
    <?php
    $db->close();
    ?>
</body>
</html>