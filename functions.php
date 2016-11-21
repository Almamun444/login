<?php 


	function logged_in(){
		 return isset($_SESSION['username']);
			// header("Location:login.php");
			// die();
	}

	function records($username, $password){
		return($username === USERNAME && $password === PASSWORD);		
	}
 ?>