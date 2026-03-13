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
            <a class="option<?= $activeOption === 'books' ? ' active' : ''; ?>" href="books">Books</a>
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
        <div style="overflow-x:auto;">
        <?php echo $this->renderSection('content'); ?>
        </div>
    </main>
    <footer class="footer">
        <p>&copy;<?= date('Y') ?> Biblioteca Digital. Todos los derechos reservados.</p>
    </footer>

    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>

</body>
</html>