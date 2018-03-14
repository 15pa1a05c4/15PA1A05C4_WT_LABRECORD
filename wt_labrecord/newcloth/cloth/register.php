<?php 
include "includes/connect.php";
session_start();
if(isset($_POST['sub'])) {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $pass=$_POST['pass'];
		$repass=$_POST['repass'];
		$qry = "INSERT INTO `tbl_user`( `user_name`, `user_email`, `password`) VALUES ('$name', '$email', '$pass')";
        mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
        header('location:login.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Cloths</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<div class="header">
			<?php include "includes/header.php" ?>
		</div>
		<div class="content">
			<div class="disp">
				<h3>Register</h3>
				<form class="form" method="post" action="">
					Name<br><input type="text" name="name"></br></br>
					Email<br><input type="text" name="email"></br></br>
					Password<br><input type="password" name="pass"></br></br>
					Retype Password<br><input type="password" name="repass"></br></br>
					<input type="submit" name="sub">
				</form>
			</div>
		</div>
	</body>
</html>