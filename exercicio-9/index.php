<?php
  if (isset($_GET['search'])) {
    $buscadousuario = strtolower($_GET['search']);
  } else {
    $buscadousuario = '';
  }
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Sistema de Busca</title>
  <link href="estilo.css" rel="stylesheet" type="text/css">
</head>
<body>

  <header>
    <form method="get">
      <input type="text" placeholder="Faça sua Busca" name="search">
      <button type="submit">Buscar</button>
    </form>
  </header>

  <section>
    <?php include 'busca.php'; ?>
  </section>

  <footer>
    Ana &copy; 2016
  </footer>

</body>
</html>