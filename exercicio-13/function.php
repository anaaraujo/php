<?php
  session_start();

  function login($user, $pass) {
    include 'info.php';
    if ($user == $user_correto && $pass == $pass_correto) {
      $_SESSION['usuario'] = $user_correto;
      header ("Location: index.php");
    } else {
      header("Location: login.php?m=nao_encontrado");
    }
  }

  function logoff() {
    unset($_SESSION['usuario']);
    session_destroy();
    header("Location: login.php");
  }