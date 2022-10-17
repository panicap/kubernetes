<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>PANICAP KUBERNETES APP</title>

<link rel="stylesheet" href="style.css">

</head>

<body>

	
	<center>
	<img src="images/logo_kube.png" alt="logokube" class="center">
	<h1>Hello, <?php echo $user_data['user_name']; ?></h1><br>
	<h2>WELCOME TO KUBERNETES</h2><br><br>
	<button type="button" class="logoutbtn"><h3><a href="logout.php">Logout</a><h3></button>
	</center>
	

  
</body>
</html>
