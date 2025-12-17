<?php

$db = new Database();
$data = $db->query("SELECT * FROM artikel");

echo "<h3>Data Artikel</h3>";

echo "<a href='/lab11_php_oop/artikel/tambah' style='display:inline-block; margin-bottom:10px;'>
        Tambah Artikel
      </a>";

echo "<table border='1' cellpadding='8' cellspacing='0'>";
echo "<tr>
        <th>ID</th>
        <th>Judul</th>
        <th>Isi</th>
        <th>Aksi</th>
      </tr>";

while ($row = $data->fetch_assoc()) {
    $id = $row['id'];

    echo "<tr>
            <td>{$row['id']}</td>
            <td>{$row['judul']}</td>
            <td>{$row['isi']}</td>
            <td>
                <a href='/lab11_php_oop/artikel/ubah?id=$id'>Ubah</a> |
                <a href='/lab11_php_oop/artikel/delete?id=$id'
                   onclick=\"return confirm('Yakin mau hapus artikel ini?');\">
                   Hapus
                </a>
            </td>
          </tr>";
}

echo "</table>";

?>
