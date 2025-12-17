<?php

$db = new Database();

// Ambil ID dari URL
$id = $_GET['id'] ?? 0;

// Ambil data lama dari DB
$result = $db->query("SELECT * FROM artikel WHERE id = $id");
$row = $result->fetch_assoc();

if (!$row) {
    echo "<p>Artikel tidak ditemukan!</p>";
    return;
}

// Form
$form = new Form("", "Update Artikel");

// Isi value lama
$judul_lama = $row['judul'];
$isi_lama   = $row['isi'];

// Tampilkan form dengan value lama
echo "<h3>Edit Artikel</h3>";

if ($_POST) {
    $judul = $_POST['judul'];
    $isi   = $_POST['isi'];

    $update = $db->query("
        UPDATE artikel 
        SET judul = '$judul', isi = '$isi'
        WHERE id = $id
    ");

    if ($update) {
        echo "<p style='color:green;'>Artikel berhasil di-update!</p>";
        echo "<a href='/lab11_php_oop/artikel/index'>Kembali</a>";
    } else {
        echo "<p style='color:red;'>Gagal update artikel.</p>";
    }
}

?>

<form action="" method="POST">
    <table>
        <tr>
            <td><b>Judul</b></td>
            <td><input type="text" name="judul" value="<?php echo $judul_lama; ?>"></td>
        </tr>

        <tr>
            <td><b>Isi</b></td>
            <td><textarea name="isi"><?php echo $isi_lama; ?></textarea></td>
        </tr>

        <tr>
            <td colspan="2"><button type="submit">Update</button></td>
        </tr>
    </table>
</form>
