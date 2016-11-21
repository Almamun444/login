
<?php

	include "functions.php";

	session_start();  

	if(!logged_in()){
		header("Location: login.php");

	}
?>
<html>
	<head>
		<title>Login form</title>
		<style>
			form li{list-style: none;}
			input, textarea{padding:10px; }
			label{display: block;}
			.btn-border{padding: 10px; border: 1px solid #000;text-decoration: none;}
		</style>
	</head>
	<header>
		
	</header>

	<body>
		<h1>
			Hello, Welcome to <?php echo $_SESSION['username']; ?>

			<p><a class="btn-border" href="logout.php">Logout</a></p>
		</h1>

	</body>
</html>
