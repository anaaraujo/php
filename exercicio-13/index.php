<?php
  include 'function.php';

  if (!$_SESSION['usuario']) {
    header("Location: login.php?m=erro");
  } else {
    echo "<meta charset='utf-8'>";
    echo "Parabéns ".$_SESSION['usuario']."; Você acessou o sistema!";
    echo "<br><br><p><a href='logoff.php'> Quer sair? </a></p>";
  }

?>