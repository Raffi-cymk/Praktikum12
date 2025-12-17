<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Lab 11 & 12</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<nav>
    <a href="index.php">Artikel</a>

    <?php if (isset($_SESSION['is_login'])): ?>
        | <a href="index.php?mod=user&page=logout">
            Logout (<?= $_SESSION['nama'] ?>)
          </a>
    <?php endif; ?>
</nav>

<div class="container">
