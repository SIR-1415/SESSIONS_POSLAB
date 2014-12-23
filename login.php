<?php
// iniciar o mecanismo de sessoes
session_start();

// verificar se existe uma sessao activa com username definido
// => ja esta logado

if (isset($_SESSION['username'])) {
	header("location:index.php");
}

// nao esta logado, mas chega username via url
// => cria uma sessao nova com username = user
else if (isset($_GET['user'])) {
	$_SESSION['username'] = $_GET['user'];
	if (isset($_SESSION['origin'])) {
		$location = $_SESSION['origin'];
		unset($_SESSION['origin']);
	} else {
		$location = "index.php";
	}
	header("location:$location");
}

// =>

session_write_close();
?>


<p>fazer login como <a href="login.php?user=red">vermelho</a></p>
<p>fazer login como <a href="login.php?user=green">verde</a></p>
<p>fazer login como <a href="login.php?user=blue">azul</a></p>