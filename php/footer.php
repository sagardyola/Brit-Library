<?php
	$conn = new mysqli('localhost', "root", '', 'brit_library');
	if(isset($_POST['news-submit'])){
		$email = $_POST['news-email'];
		$sql = "INSERT INTO newsletter (email) VALUES ('".$email."')";
		if($conn->query($sql)){
			$errMsg= "Inserted";
		} else {
			echo " error ".$conn->error;
		}
	}
?>


<div class="askus">
	<div style="display: flex;">
		<div class="askus-inner askus-b">
			<img src="/Brit Library/images/icons/icon-person.png" alt="In Person" width="70px" height="70px">
			<br><p class="text-l2 text-col1">In Person</p>
			<p class="text-m text-col1">Research desk in Brit
			<br>1st floor</p>
		</div>

		<div class="askus-inner askus-b">
			<img src="/Brit Library/images/icons/icon-phone.png" alt="Phone" width="70px" height="70px">
			<br><p class="text-l2 text-col1">Phone</p>
			<p class="text-m text-col1">Call the library
			<br>977 9841751478</p>
		</div>

		<div class="askus-inner askus-b">
			<img src="/Brit Library/images/icons/icon-text.png" alt="Text" width="70px" height="70px">
			<br><p class="text-l2 text-col1">Text</p>
			<p class="text-m text-col1">Text the library
			<br>977 9841751478</p>
		</div>

		<div class="askus-inner">
			<img src="/Brit Library/images/icons/icon-email.png" alt="Email" width="70px" height="70px">
			<br><p class="text-l2 text-col1">Email</p>
			<p class="text-m text-col1">Email the library
			<br>britlibrary@gmail.com</p>
		</div>
	</div>
</div>


<footer id="topics">
	<div style="display: flex;">
		<div class="topics-inner">
			<p class="text-l2 text-col1">Copyright Statement</p><br>
			<p class="text-m text-col1">
				Access to subscription databases, e-journals, e-books and other digital resources offered via Brit Library is subject to copyright and publisher license agreements and restricted to registered students and staff of London Metropolitan University. For further information please contact Brit Library Team.
			</p>
		</div>
			
		<div class="topics-inner" style="margin: 0 50px;">
			<p class="text-l2 text-col1">Follow us</p><br><br>
			<img src="/Brit Library/images/icons/fb.png" alt="Facebook" width="40px" height="40px">&nbsp;&nbsp;
			<img src="/Brit Library/images/icons/twitter.png" alt="Twitter" width="40px" height="40px">&nbsp;&nbsp;
			<img src="/Brit Library/images/icons/google.png" alt="Google plus" width="40px" height="40px">&nbsp;&nbsp;
			<img src="/Brit Library/images/icons/insta.png" alt="Instagram" width="40px" height="40px">
			<br><p class="text-m text-col1">@britlibrary</p>
		</div>
			
		<div class="topics-inner">
			<p class="text-l2 text-col1">Subscribe Newsletter</p><br>
			<p class="text-m text-col1">Subscribe to our email newsletter for useful tips and valuable resources.</p>

			<?php 
				if(isset($errMsg)){
			?>
			<script>
				alert('<?php echo $errMsg;  ?>');
			</script>
			<?php }
			 ?>

			<form method="post" action="" class="form-p1">
				<br><input type="email" name="news-email" placeholder="name@domain.com" required>
				<input name="news-submit" type="submit" value="Submit">
			</form>
		</div>
	</div>
</footer>

<div class="bottom">
	<p class="text-s text-col1">
	&copy; 2017 Brit Library. All rights reserved.
	</p>
</div>
