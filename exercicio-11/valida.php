<?php

  session_start();

  $user_do_post = "";
  if (isset($_POST['user'])) { $user_do_post = $_POST['user']; }

  $pass_do_post = "";
  if (isset($_POST['password'])) { $pass_do_post = $_POST['password']; }

  $user_correto = "ana";
  $pass_correto = "123";

  if ($user_do_post == $user_correto && $pass_do_post == $pass_correto) {
    $_SESSION['usuario'] = $user_correto;
    header("Location: index.php");
  } else {
    header("Location: login.php?m=erro");
  }

?>