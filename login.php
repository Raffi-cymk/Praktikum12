<?php
if (isset($_SESSION['is_login'])) {
    header("Location: index.php");
    exit;
}

$message = "";

if ($_POST) {
    $db = new Database();
    $u = $_POST['username'];
    $p = $_POST['password'];

    $q = $db->query("SELECT * FROM users WHERE username='$u'");
    $data = $q->fetch_assoc();

    if ($data && password_verify($p, $data['password'])) {
        $_SESSION['is_login'] = true;
        $_SESSION['nama'] = $data['nama'];
        header("Location: index.php");
        exit;
    } else {
        $message = "Login gagal";
    }
}
?>

<h3>Login</h3>

<?php if ($message): ?>
    <div class="alert"><?= $message ?></div>
<?php endif; ?>

<form method="post">
    <input
        type="text"
        name="username"
        placeholder="Username"
        required
    >

    <input
        type="password"
        name="password"
        placeholder="Password"
        required
    >

    <button type="submit">Login</button>
</form>

