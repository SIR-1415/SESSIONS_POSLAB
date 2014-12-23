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
		<img src="images/<?php echo $color?>.jpeg"/>
		<br>
		<p> voltar para o <a href="index.php">inicio</a></p>
	</body>
</html>