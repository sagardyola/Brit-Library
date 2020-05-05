<?php
	$conn = new mysqli('localhost', "root", '', 'brit_library');

	if(isset($_POST['feed-submit'])){
		$name = $_POST['feed-name'];
		$email = $_POST['feed-email'];
		$status = $_POST['feed-status'];
		$feedback = $_POST['feed-feedback'];

		$sql = "INSERT INTO feedback (name,email,status,feedback) VALUES ('".$name."','".$email."','".$status."','".$feedback."')";
		if($conn->query($sql)){
			$errMsg= "Inserted";
		} else {
			echo " error ".$conn->error;
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Brit Library/css/style.css">
<link rel="stylesheet" href="/Brit Library/css/formsandbuttons.css">
<link rel="icon" href="/Brit Library/images/brit-icon.png">

<title>Brit Library - Feedback Form</title>
	<meta name="keywords" content="Brit Library, Library, Books, Education, Study">
	<meta name="description" content="Brit Library">
	<meta name="revised" content="metatags, 4/24/2017">
	<meta name="author" content="Sagar Dyola">

</head>

<body class="feedbackform">
<?php
	include  dirname(__FILE__).'/header.php';
?>


<section class="container">
	<div class="container-table">
		<p class="text-l" align="center">Feedback Form</p>
		<br><p class="text-l2">Let Us Know What You Think</p>
		<span class="text-m" style="padding-left: 30px; display: block;">
			<br>We value feedback from all Library users and treat your comments seriously, as they are an important way of monitoring and improving the services we provide.
			<br><br>If you have a problem or concern, or wish to tell us about an aspect of the Library that you are pleased with, then let us know.
			<br><br>* Indicates required field<br><br>

			<form method="post" action="" class="form-p2">
				<fieldset style="padding: 1em;">
					<legend>Your Info</legend>
					<label for="feed-name">Name (Optional)</label>
					<br><input name="feed-name" type="text" id="feed-name" placeholder="Name">
					<br><br><label for="feed-email">Email *</label>
					<br><input name="feed-email" type="email" placeholder="name@domain.com" id="feed-email" required>
					<br><br><label>Your status *</label>
					<br><select name="feed-status">
							<option value="student">Student</option>
							<option value="staff">Staff</option>
							<option value="faculty">Faculty</option>
							<option value="alumni">Alumni</option>
							<option value="community">Community</option>
						</select>
					<br><br><label for="feed-feedback">Feedback *</label>
					<br><textarea name="feed-feedback" rows="10" cols="30" id="feed-feedback" required></textarea>
					<br><input name="feed-submit" type="submit" value="Submit">
					<input type="reset" value="Clear">
				</fieldset>
			</form>
		</span>

	</div>
</section>


<?php
	include dirname(__FILE__).'/footer.php';
?>

</body>
</html>