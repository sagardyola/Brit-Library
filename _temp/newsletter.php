<?php
	$conn = new mysqli('localhost', "root", '', 'library_brit');
	
		$email = $_GET['email'];
		$sql = "INSERT INTO newsletter (email) VALUES ('".$email."')";
		
		if($conn->query($sql)){
			echo " inserted";

		} else {
			echo " error ".$conn->error;
		}


		


?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>email</title>
</head>
<body>
	<form method="post">
		<input type="email" name="email">
		<input type="submit" name="submit"> 
	</form>
	
</body>
</html> -->