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
            <a class="option<?= $activeOption === 'home' ? ' active' : ''; ?>" href="<?= base_url('home') ?>">Home</a>
            <a class="option<?= $activeOption === 'about' ? ' active' : ''; ?>" href="<?= base_url('about') ?>">About</a>
            <a class="option<?= $activeOption === 'contact' ? ' active' : ''; ?>" href="<?= base_url('contact') ?>">Contact</a>
            <a class="option<?= $activeOption === 'books' ? ' active' : ''; ?>" href="<?= base_url('books') ?>">Books</a>
            <a class="option" href="https://github.com/piturriagit/BibliotecaDigital">GitHub</a>
        </nav>
    </header>
    <main>
        <h1><?= $title ?? 'Biblioteca Digital' ?></h1>
        <div style="overflow-x:auto;">
        <?php echo $this->renderSection('content'); ?>
        </div>
    </main>
    <footer class="footer">
        <p>&copy;<?= date('Y') ?> Biblioteca Digital. Todos los derechos reservados.</p>
    </footer>

    <?php echo $this->renderSection('scripts'); ?>

</body>
</html>