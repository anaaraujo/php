<?php
  include 'function.php';

  $mensagem = "";
  if (isset($_GET['m'])) {
      $mensagem = $_GET['m'];
  }

  if (isset($_POST['user'])) {
    login($_POST['user'], $_POST['pass']);
  } 
?>

<html>

<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <style type="text/css">

  </style>
</head>

<body>
  <h2>Login</h2>
  <form action="login.php" method="post">
      <?php
        switch ($mensagem){
          case 'erro':
            echo "<p>Faça primeiro o login para acessar</p>";
          break;

          case 'nao_encontrado':
            echo "<p>Usuário não encontrado</p>";   
          break;

          default:
            echo "<br>";
        }

      ?>
        <div><input type="text" name="user" placeholder="Usuário"></div>
        <div><input type="password" name="pass" placeholder="Senha"></div>
        <div><button type="submit">OK</button></div>
  </form>
</body>

</html>