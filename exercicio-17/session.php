<?php

  session_start();
  $_SESSION['nome'] = $_POST['name']

  echo "Ok";
  echo $_SESSION['nome'];

?>