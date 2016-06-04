<?php
  session_start();

  $user = "";
  if (isset($_POST['nome'])) {
      $user = $_POST['nome'];
      header('Location: ex10.php');
    }

  if (isset($user)) {
    $_SESSION['tratratra'] = $user;
  }
?>

<form method="post">
  <input type="text" name="nome" placeholder="Seu nome">
  <button type="submit">Ok!</button>  
</form>