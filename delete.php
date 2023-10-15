<?php
$db = new mysqli('localhost', 'root', '', 'crud-php');
$id = $_GET['id'];
$query = "DELETE FROM barang WHERE id = $id";
$db->query($query);

header("Location: index.php");
$db->close();
?>