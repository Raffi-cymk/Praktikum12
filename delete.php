<?php

$db = new Database();

// Ambil ID dari URL
$id = $_GET['id'] ?? 0;

// Hapus data
$hapus = $db->query("DELETE FROM artikel WHERE id = $id");

if ($hapus) {
    echo "<p style='color:green;'>Artikel berhasil dihapus!</p>";
} else {
    echo "<p style='color:red;'>Gagal menghapus artikel.</p>";
}

echo "<a href='/lab11_php_oop/artikel/index'>Kembali</a>";

?>
