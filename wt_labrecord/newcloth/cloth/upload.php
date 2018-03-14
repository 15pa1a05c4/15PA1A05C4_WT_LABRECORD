<?php 
include "includes/connect.php";
session_start();

if(isset($_POST['sub'])) {	
		$user_id=$_POST['user_id'];
        $name=$_POST['name'];
        $size=$_POST['size'];
		$description=$_POST['description'];
		$photo=$_POST['photo'];
		
		$qry = "INSERT INTO `tbl_cloths`(`user_id`, `name`, `size`, `description`, `photo`) VALUES ('$user_id','$name', '$size', '$description', '$photo')";
        mysqli_query($conn,$qry) or die("Connection failed: " );
        header('location:view.php');
    }
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Upload</title>
		<link rel="stylesheet" href="home.css">
	</head>
	<body>
		<div class="header">
			<?php include "includes/header.php" ?>
		</div>
		<div class="content">
			<div class="disp">
				<h3>Upload</h3>
				<form class="form" method="post" action="">
					Type of Dress<input type="text" name="name"></br></br>
					Description<textarea name="description"></textarea></br></br>
					Size<textarea name="size"></textarea></br></br>
					Photo<input type="file" name="photo"></br></br>
					<input type="submit" name="sub">
				</form>
			</div>
		</div>
	</body>
</html>