<?php
  if (!$buscadousuario) {
    echo "Faça sua Pesquisa";
  } else {
    echo "<h1>Busca {$buscadousuario}</h1><br>";

    switch ($buscadousuario) {
      case 'soap':      
          echo " <article>";
          echo "  <p> Você pesquisou Soap </p>";
          echo " </article>";
        break;

      case 'metralhadora':      
          echo " <article>";
          echo "  <p> Trá trá trá </p>";
          echo " </article>";
        break;

      case 'careca':      
          echo " <article>";
          echo "  <p> Você pesquisou Careca";
          echo " </article>";
        break;

      case 'pc quebrado':      
          echo " <article>";
          echo "  <p> Você pesquisou PC quebrado";
          echo " </article>";
        break;

      case 'boné':      
          echo " <article>";
          echo "  <p> Você pesquisou Boné";
          echo " </article>";
        break;
      
      default:
        echo "Nada encontrado";
        break;
    }
  }

?>