<?php
	session_start();

	$user_r = "";
	if($_POST['user']) { 
		$user_r = $_POST['user']; 
	}

	$pass_r ="";
	if($_POST['pass']) { 
		$pass_r = $_POST['pass']; 
	}

	$user_correto = "ana";
  $pass_correto = "123";

  if ($user_r == $user_correto && $pass_r == $pass_correto) {
    $_SESSION['logado'] = 'yeye';
    header("Location: index.php");
  } else {
    header("Location: login.php");
  }

?>