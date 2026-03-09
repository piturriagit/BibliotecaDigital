<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title><?= $title ?? "Biblioteca Digital" ?></title>
    <meta name="author" content="Patricia Iturriaga">
    <meta name="description" content="Práctica de PHP con CodeIgniter4 para el desarrollo de una biblioteca digital.">
    <meta name="keywords" content="PHP, practice, codeigniter">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">

</head>
<body>
    <header>
        <nav id="menu" class="topnav">
            <a class="option<?= $activeOption === 'home' ? ' active' : ''; ?>" href="home">Home</a>
            <a class="option<?= $activeOption === 'about' ? ' active' : ''; ?>" href="about">About</a>
            <a class="option<?= $activeOption === 'contact' ? ' active' : ''; ?>" href="contact">Contact</a>
            <a class="option<?= $activeOption === 'admin' ? ' active' : ''; ?>" href="admin">Admin</a>
            <div class="login-container">
                <form action="/action_page.php">
                    <input type="text" placeholder="Username" name="username">
                    <input type="text" placeholder="Password" name="psw">
                    <button type="submit">Login</button>
                </form>
            </div>
        </nav>
    </header>
    <main>
        <h1><?= $title ?? 'Biblioteca Digital' ?></h1>
        <?php echo $this->renderSection('content'); ?>
    </main>
    <footer class="footer">
        <p>&copy;<?= date('Y') ?> Biblioteca Digital. Todos los derechos reservados.</p>
    </footer>
</body>
</html>