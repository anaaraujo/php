<?php
  if (isset($_POST['fala'])) {
    $fala_comigo = $_POST['fala'];

    //conversa que sera enviada
    $conversa = "<div style=\"text-align:left;\">";
    $conversa .= "<strong>User :</strong> $fala_comigo";
    $conversa .= "</div>;"

    //gravando no arquivo
    $arquivo = fopen("conversa.html","a");
    fwrite($arquivo, $conversa);
    fclose($arquivo);

    echo "<meta htpp-equiv=\"refresh\" content=\"0;url=index.php\">";

  } else{
    header("location:index.php");
  }
?>