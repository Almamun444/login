<?php 
	session_start();

	$_SESSION['username'] = 'Mamun';
	echo $_SESSION['username'];
 ?>

<!doctype>
<html>
	<head>
		<title></title>
	</head>

	<header>
		<style>
			form ul li{
				list-style: none;
			}

			input{padding: 10px;}
		</style>
	</header>

	<body>
		<h1>Login Form</h1>
		<form action="login.php" method="post">
			<ul>
				<li>
					<label for="name">Your name</label><br>
					<input type="text" name="name">
				</li><br>
				<li>
					<label for="name">Your password</label><br>
					<input type="text" name="password">

				</li><br>
				<li>
					<input type="submit" name="submit" value="Login">
				</li>
			</ul>
		</form>
	</body>
</html>