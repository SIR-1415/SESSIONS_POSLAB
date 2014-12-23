<?php
session_start();
if (!isset($_SESSION['username'])) {
	$_SESSION['origin'] = $_SERVER['PHP_SELF'];
	header("location:login.php");
	exit();
}

$color = $_SESSION['username'];

?>
<html>
	<head>
		<style>
			body {
				color: silver;
				background-color : <?php echo $color ?>;
				}
			a {
				color : yellow;
				}
		</style>		
	</head>
	<body>
		<h1> Olá <?php echo $color ?> </h1>
		<p>aceder <a href="private.php">aqui</a> a conteudo privado</p>
		<p> fazer <a href="logout.php">logout</a></p>
	</body>
</html>