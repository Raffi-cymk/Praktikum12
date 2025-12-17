<?php

$form = new Form("", "Simpan Artikel");

$form->addField("judul", "Judul Artikel");
$form->addField("isi", "Isi Artikel", "textarea");

if ($_POST) {
    $db = new Database();
    $db->insert("artikel", [
        "judul" => $_POST['judul'],
        "isi"   => $_POST['isi']
    ]);

    echo "<p>Artikel berhasil disimpan!</p>";
}

$form->display();

?>
