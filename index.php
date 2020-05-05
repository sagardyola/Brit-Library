<?php
	$conn = new mysqli('localhost', "root", '', 'brit_library');
	if(isset($_POST['user-submit'])){
		$errMsg= "Under Maintenance";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="/Brit Library/css/style.css">
	<link rel="stylesheet" href="/Brit Library/css/formsandbuttons.css">
	<link rel="stylesheet" href="/Brit Library/css/slides.css">
	<link rel="icon" href="/Brit Library/images/brit-icon.png">

	<title>Brit Library</title>
	<meta name="keywords" content="Brit Library, Library, Books, Education, Study">
	<meta name="description" content="Brit Library">
	<meta name="revised" content="metatags, 4/24/2017">
	<meta name="author" content="Sagar Dyola">

</head>

<body class="home">
<?php

	include  dirname(__FILE__).'/php/header.php';
?>

<div class="content-image">
	<img src="/Brit Library/images/wallpaper.jpg" width="100%" alt="Brit Library">
</div>

<div class="content">
	<div style="display: flex;">
		<div class="content-p1" align="center">
			<p class="text-l">Welcome to Brit Library</p><br>
			<p class="text-m" align="justify">
				A service dedicated to students of London Metropolitan University. We provide online resources, professional support and guidance to all our students whenever, and from wherever they have chosen to study.
			</p>
			<br><a href="/Brit Library/php/aboutus.php" class="button">View Details</a>
		</div>

		<div class="content-p2">
			<p class="text-l">Opening hours</p><br>
			<p class="text-m">
			Monday-Friday: 9: 00 - 21: 45
			<br>Saturday: 9: 00 - 18: 15
			<br>Sunday: 13: 30 - 18: 15
			<br>Closed on public holidays
			</p>
		</div>
		<div class="content-p3">
			<p class="text-m">
				<form method="post" action="" class="form-p1">
					<fieldset style="padding: 1em;">
					<legend><p class="text-l">Log in</p></legend>
					<label for="user-id">Login name:&nbsp;</label>
					<input type="text" name="user-id" id="user-id" placeholder="User ID" required>
					<br><label for="user-password">Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
					<input type="password" name="user-password" id="user-password" placeholder="Password" required>
					<br><input name="user-submit" type="submit" value="Submit">
					</fieldset>
				</form>
			</p>
		</div>
	</div>
	<hr color="#BDBAB4" style="margin: 40px; border-width: .5px;">
	<div style="display: flex;">

		<div class="content-p1">
			<p class="text-l" align="center">
				<img src="/Brit Library/images/pic-1.jpg" alt="Get connected" width="75%">
				<br>Get connected
			</p><br>
			<p class="text-m" align="justify">
				Use your University login to access your Library account, to keep track of your loans, renew books and avoid fines. You’ll also need your username and password to access any of our online resources.
			</p>
		</div>

		<div class="content-p4">
			<p class="text-l" align="center">
				<img src="/Brit Library/images/pic-2.jpg" alt="Explore our spaces" width="75%">
				<br>Explore our spaces
			</p><br>
			<p class="text-m">
				We have a variety of study environments to support your learning and research, providing space for independent and collaborative working. As well as the Main Library you will find spaces across campus and in Leamington Spa.
			</p>
		</div>
	</div>
</div>

<div class="slider-main">
	<div class="slider-text">
		<figure>
			<div class="slide-text">
				<p class="text-m text-col1">
					Success is no accident. It is hard work, perseverance, learning, studying, sacrifice and most of all, love of what you are doing or learning to do.
				</p>
				<p class="text-s text-col1">Pele</p>
			</div>

			<div class="slide-text">
				<p class="text-m text-col1">
					That is the exploration that awaits you! Not mapping stars and studying nebula, but charting the unknown possibilities of existence.
				</p>
				<p class="text-s text-col1">Leonard Nimoy</p>
			</div>

			<div class="slide-text">
				<p class="text-m text-col1">
					Seeing much, suffering much, and studying much, are the three pillars of learning.
				</p>
				<p class="text-s text-col1">Benjamin Disraeli</p>
			</div>

			<div class="slide-text">
				<p class="text-m text-col1">
					The team that is going to win is the one that does its homework the best by studying its opponents.
				</p>
				<p class="text-s text-col1">Imran Khan</p>
			</div>

			<div class="slide-text">
				<p class="text-m text-col1">
					Education is the most powerful weapon which you can use to change the world.
				</p>
				<p class="text-s text-col1">Nelson Mandela</p>
			</div>
		</figure>
	</div>
</div>

<div id="topics">
	<p class="text-l text-col1">Hot Topics</p><br>
	<div style="display: flex;">
		<div class="topics-inner">
			<p class="text-l2 text-col1">Exam Revision Tips</p>
			<p class="text-s text-col1">25<sup>th</sup> Apr 2017</p><br>
			<p class="text-m text-col1">In this issue we offer some exam revisions tips, as well as an update on what's new with Brit Library and an introduction to some of our resources.</p>
		</div>
		
		<div class="topics-inner" style="margin: 0 50px;">
			<p class="text-l2 text-col1">System Upgrade</p>
			<p class="text-s text-col1">29<sup>th</sup> Mar 2017</p><br>
			<p class="text-m text-col1">On Friday 31 March, you will not be able to use Portal.</p>
		</div>
			
		<div class="topics-inner">
			<p class="text-l2 text-col1">Extended Hours</p>
			<p class="text-s text-col1">22<sup>nd</sup> Mar 2017</p><br>
			<p class="text-m text-col1">We'll be open from 10am to midnight to provide you with great study space. Best to you all in finishing the semester or year!</p>
		</div>
	</div>
</div>

<?php
	include  dirname(__FILE__).'/php/footer.php';
?>


</body>
</html>