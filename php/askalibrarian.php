<?php
	$conn = new mysqli('localhost', "root", '', 'brit_library');

	if(isset($_POST['ask-submit'])){
		$question = $_POST['ask-question'];
		$explanation = $_POST['ask-explanation'];
		$name = $_POST['ask-name'];
		$email = $_POST['ask-email'];
		$status = $_POST['ask-status'];

		$sql = "INSERT INTO ask_a_librarian (question,explanation,name,email,status) VALUES ('".$question."','".$explanation."','".$name."','".$email."','".$status."')";
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

<title>Brit Library - Ask a Librarian</title>
	<meta name="keywords" content="Brit Library, Library, Books, Education, Study">
	<meta name="description" content="Brit Library">
	<meta name="revised" content="metatags, 4/24/2017">
	<meta name="author" content="Sagar Dyola">

</head>

<body class="askalibrarian">
<?php
	include  dirname(__FILE__).'/header.php';
?>


<section class="container">
	<div class="container-table">
		<p class="text-l" align="center">Ask a Librarian</p>
		<br>* Indicates required field<br><br>
		<span class="text-m" style="padding-left: 30px; display: block;">
			<form method="post" action="" class="form-p2">
				<fieldset style="padding: 1em;">
					<legend>Your Question</legend>
					<label for="ask-question">Question *</label>
					<br><input name="ask-question" type="text" id="ask-question" placeholder="Question" required>
					<br><br><label for="ask-explanation">More Detail/Explanation *</label>
					<br><textarea name="ask-explanation" rows="10" cols="30" id="ask-explanation" required></textarea>
				</fieldset>
				<br><br>
				<fieldset style="padding: 1em;">
					<legend>Your Info</legend>
					<label for="ask-name">Name</label>
					<br><input name="ask-name" type="text" id="ask-name" placeholder="Name">
					<br><br><label for="ask-email">Email *</label>
					<br><input name="ask-email" type="email" placeholder="name@domain.com" id="ask-email" required>
					<br><br><label>I am a *</label>
					<br><select name="ask-status">
						<option value="student">Student</option>
						<option value="staff">Staff</option>
						<option value="faculty">Faculty</option>
						<option value="alumni">Alumni</option>
						<option value="community">Visitor / Other</option>
					</select>
				</fieldset>
				<br><input name="ask-submit" type="submit" value="Submit">
				<input type="reset" value="Clear">
			</form>
		</span>

	</div>
</section>


<?php
	include dirname(__FILE__).'/footer.php';
?>

</body>
</html>