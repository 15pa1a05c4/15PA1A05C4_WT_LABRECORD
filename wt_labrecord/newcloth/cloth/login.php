<?php 
include "includes/connect.php";
session_start();
    if(isset($_POST['sub'])) {
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $qry = "SELECT * FROM `tbl_user` WHERE  `user_email`='$email' AND `password`='$pass';";
        $sql = mysqli_query($conn,$qry) or die("Connection failed: " . mysqli_error());
		if(mysqli_num_rows($sql)>0) {
            $row=mysqli_fetch_assoc($sql);
            $_SESSION["user"] = $row['user_name'];
            $_SESSION["email"] = $row['user_email'];
            header('location:upload.php');
        } else {
            $warning = "Invalid login";
        }
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
				<h3>Login</h3>
				<h4> <?php if(isset($warning)) echo $warning; ?></h4>
				<form class="form" method="post" action="">
					Email<br><input type="text" name="email"></br></br>
					Password<br><input type="password" name="pass"></br></br>
					<input type="submit" name="sub">
				</form>
			</div>
		</div>
	</body>
</html>