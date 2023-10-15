<!DOCTYPE html>
<html>
<head>
    <title>Data Barang</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <h1>Data Barang</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Jumlah</th>
            <th>Harga</th>
            <th>Tanggal</th>
            <th>Aksi</th>
        </tr>
        <?php
 
        $db = new mysqli('localhost', 'root', '', 'crud-php');
        $result = $db->query("SELECT * FROM barang");
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['nama'] . "</td>";
            echo "<td>" . $row['jumlah'] . "</td>";
            echo "<td>" . $row['harga'] . "</td>";
            echo "<td>" . $row['tanggal'] . "</td>";
            echo "<td><a href='edit.php?id=" . $row['id'] . "'>Edit</a> | <a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>";
            echo "</tr>";
        }
        $db->close();
        ?>
    </table>
    <a href="add.php">Tambah Barang</a>
</body>
</html>