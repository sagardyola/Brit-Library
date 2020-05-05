<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="/Brit Library/css/style.css">
<link rel="stylesheet" href="/Brit Library/css/formsandbuttons.css">
<link rel="icon" href="/Brit Library/images/brit-icon.png">

<style type="text/css">
	table {
		border-collapse: collapse;
		align: center;
	}

	table, th, td {
		border: 1px solid black;
		text-align: center;
		padding: 10px;
	}

	.b-link {
		text-decoration: none;
		color: #933;
		font-weight: bold;
	}

	.b-link:hover {
		text-decoration: underline;
	}

</style>

<title>Brit Library - Borrowing</title>
	<meta name="keywords" content="Brit Library, Library, Books, Education, Study">
	<meta name="description" content="Brit Library">
	<meta name="revised" content="metatags, 4/24/2017">
	<meta name="author" content="Sagar Dyola">

</head>

<body class="borrowing">
<?php
	include  dirname(__FILE__).'/header.php';
?>


<section class="container">
	<div class="container-table">
		<p class="text-l" align="center">Borrowing</p><br>
		<p class="text-m">
			<ul>
				<li><a href="#b-allowance" class="b-link">Allowances, duration, fines</a></li>
				<li><a href="#b-renew" class="b-link">Renewing</a></li>
				<li><a href="#b-return" class="b-link">Returning</a></li>
				<li><a href="#b-autorenew" class="b-link">Auto-Renewals</a></li>
				<li><a href="#b-reserve" class="b-link">Reserving and requesting</a></li>
				<li><a href="#b-external" class="b-link">External Membership</a></li>
			</ul>


			<br>All students and staff at the University of Brighton can borrow items from any of our libraries.
			<br><br>When you leave the university you will need to return all loans and pay any outstanding fines. As an alumnus you can apply for 1 year's free external membership. 
			<br><br>If you are a student at another university or members of the public, you may apply to become external members. We welcome visits from local schools/colleges as part of their Extended Project Qualification.

			<br><br><br><p class="text-l2" id="b-allowance">Allowances, duration, fines</p><br>
			<center>
				<table>
					<tr>
						<th>Type of Borrower</th>
						<th>Loan Type</th>
						<th>Loan Length</th>
						<th>Number of items</th>
						<th>Fines</th>
						<th>Auto-Renewal</th>
					</tr>
					<tr>
						<td rowspan="3">Undergraduate or postgraduate students​</td>
						<td>Long loan</td>
						<td>3 weeks</td>
						<td rowspan="2">20</td>
						<td>50p per day if not renewed</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Short loan</td>
						<td>1 week</td>
						<td>50p per day</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>​Desk loan</td>
						<td>See below</td>
						<td>3</td>
						<td>£1 per hour or part hour</td>
						<td>No</td>
					</tr>
					<tr>
						<td rowspan="3">Staff / research students</td>
						<td>Long loan</td>
						<td>3 weeks</td>
						<td rowspan="2">20​</td>
						<td>50p per day if not renewed</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Short loan</td>
						<td>1 week</td>
						<td>​50p per day</td>
						<td>Yes</td>
					</tr>
					<tr>
						<td>Desk loan</td>
						<td>See below</td>
						<td>3</td>
						<td>​£1 per hour or part hour</td>
						<td>No</td>
					</tr>
				</table>

				<br><br><table>
					<tr>
						<th colspan="2">Desk Loan</th>
					</tr>
					<tr>
						<td rowspan="3">Monday - Thursday</td>
						<td>9: 30 - 13: 00</td>
					</tr>
					<tr>
						<td>13: 00 - 16: 00</td>
					</tr>
					<tr>
						<td>16: 00 - 09: 30 next day</td>
					</tr>
					<tr>
						<td rowspan="3">Friday</td>
						<td>9: 30 - 13: 00</td>
					</tr>
					<tr>
						<td>13: 00 - 16: 00</td>
					</tr>
					<tr>
						<td>16: 00 - 09: 30 Monday</td>
					</tr>
				</table>
			</center>
		</p>

		<br><br><p class="text-l2" id="b-renew">Renewing</p>
		<p class="text-m">
			<br>Items on loan to you will be automatically renewed provided they have not been reserved and your library account is not about to expire.  You can also renew your items in the following ways:
			<ul>
				<li>Online using 'My Account' in the library catalogue</li>
				<li>In person using the self service kiosks at your nearest library</li>
				<li>By phone</li>
			</ul>
			<br>You cannot renew Desk loan items.
			<br><br>If your library loan is reserved by someone else it cannot be renewed. It must be returned by the due date.
			<br><br>You will be sent an email, to let you know which items have been auto-renewed and which items have not auto-renewed, it is essential that you check your email frequently.
			<br><br>It is your responsibility to ensure that items are renewed or returned on time.
		</p>

		<br><br><p class="text-l2" id="b-return">Returning</p>
		<p class="text-m">
			<br>Books can be returned to any of the University of Brighton libraries, with the exception of Desk loan and interlibrary loan items which must be returned to the Help Desk of the library they were borrowed from.
			<br><br>You can return items by post but they remain your responsibility until received in the library and discharged from your account.
		</p>

		<br><br><p class="text-l2" id="b-autorenew">Auto-Renewals</p>
		<p class="text-m">
			<br>7 day and long loans (3 week loans) are automatically renewed on the due date unless they have been reserved for another borrower.
			<ul>
				<li>You will receive an email letting you know which loans have been renewed and which have not</li>
				<li>Any items not renewed must be returned by the due date. If you can't return the item please contact your library Help Desk immediately</li>
				<li>Overdue items incur a fine of 50p per item per day</li>
				<li>There is a limit of 99 renewals; once this is reached items must be returned to the library.</li>
			</ul>
			<br>Desk Loans, Laptop Loans, Inter Library loans, Teaching Practice Materials, and Media Equipment are not included in auto-renewals and must be returned by the due date/time. 
			<br><br><b><u>Useful Tips</u></b>
			<ul>
				<li>You can always renew your loans yourself via your Library Account providing they have not been reserved by another borrower.</li>
				<li>If there are multiple copies of a reserved item and someone else reurns a copy before you, then you can renew yours via your Library Account.</li>
				<li>If you still need an item reserved by someone else then you can reserve it yourself once you have returned it.</li>
				<li>If the books you need are on loan always place a reservation. This will ensure the books come back for you.</li>
			</ul>
		</p>

		<br><br><p class="text-l2" id="b-reserve">Reserving and requesting</p>
		<p class="text-m">
			<br>You may have up to 10 reservations in progress at any one time (6 reservations for external members). You can also reserve videos, DVDs and CDs. Desk loan items and materials from the Teaching Resources collection cannot be reserved.
			<br><br>You may choose which library is most convenient for collection. However, if the item that you want is available at the site you wish to collect it from, you will not be able to reserve it. For items that have been reserved, you will be notified by email when the item is ready for you to collect. As soon as the item is available we aim to deliver intersite loans to the site of your choice within two working days. It will be held there for seven days.
		</p>

		<br><br><p class="text-l2" id="b-external">External Membership</p>
		<p class="text-m">
			<br>All members of the public are able to use our libraries for reference purposes, free of charge. If you want to borrow any books then you can join as an external member for a subscription fee of £70 per annum.
			<br><br>External membership entitles you to borrow six books, for three weeks at a time (long loan category only). Loans will be automatically renewed if not required by another borrower.  Loans not returned by the due date are fined at 50p per day per item.
		</p>			
	</div>
</section>


<?php
	include dirname(__FILE__).'/footer.php';
?>

</body>
</html>