<?php 
	session_start();

	// 	$_SESSION['username'] = 'Mamun';

	// 	echo $_SESSION['username'];

	// session_destroy();

	// print_r($_SESSION);

	include "config.php";
	include "functions.php";
	
	if ($_SERVER['REQUEST_METHOD'] == 'POST'){
			$username = $_POST['username'];
			$password = $_POST['password'];
		if(records($username, $password)){
			$_SESSION['username'] = $username;
			header("Location: admin.php");
		} else{
			$status = "Incorrect information";
		}
	}

 ?>


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
					<input type="text" name="username" >
				</li><br>

				<li>
					<label for="name">Your password</label><br>
					<input type="password" name="password">

				</li><br>

				<li>
					<input type="submit" name="submit" value="Login">
				</li>
			</ul>


			<?php if (isset($status)):?> 
				<p><?php echo $status; ?></p>
			<?php endif;?>
		</form>
	</body>
</html>