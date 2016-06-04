<?php

  session_start();

	if (!$_SESSION ['usuario']) {
    header("Location: login.php?m=erro");
  } 
?>

<!DOCTYPE html>
<html>
<head>
  <title>Bem Vindo</title>
</head>
<body>

</body>
</html>
