<?php
include "includes/connect.php";
session_start();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>View</title>
		<link rel="stylesheet" href="home.css">
	</head>
<body>
	<div class="view">
	<?php
	$qry="select * from tbl_cloths";
	$sql=mysqli_query($conn,$qry);
	if(mysqli_num_rows($sql) > 0){
		while($row=mysqli_fetch_assoc($sql)){
			$name=$row['name'];
			$size=$row['size'];
			$description=$row['description'];
			echo "<p>$name</p>";
			echo "<p>$size</p>";
			echo "<p>$description</p>";			
		}
	}
	?>
	</div>
	</body>
</html>