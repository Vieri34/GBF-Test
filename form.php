<!DOCTYPE html>

<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="title" content="Titre du Site">
		<link href="css/styleindex.css" rel="stylesheet" media="all" type="text/css">
		<link href="css/form.css" rel="stylesheet" media="all" type="text/css">
		<title>GBF | Form</title>
	</head>

	<body>
<!-- header -->
		<?php
			include 'php/header.php';
		?>
<!-- main -->
		<main>
			<section>
			    <form id="form" action="index.html" method="post">
					<div>
						<label for="nom">Name *</label>
						<input type="text" placeholder="John Doe" name="nom" required="">
					</div>
					<div>
						<label for="mail">Mail *</label>
						<input type="email" placeholder="johndoe@america.com" name="mail" required="">
					</div>
					<div>
						<label for="phone">Phone</label>
						<input type="tel" placeholder="+33 9 75 17 88 40" name="phone">
					</div>		
					<div>
						<label for="website">Website</label>
						<input type="url" placeholder="http://" name="website">
					</div>		
					<div>
						<label for="comment">Comments *</label>
						<textarea placeholder="Please leave a comment" name="comment" required=""></textarea>
					</div>
					<div>
						<button name="submit" type="submit" id="contact-submit">Send</button>
					</div>
				</form>	
			</section>
		</main>
<!-- footer -->
		<?php
			include 'php/footer.php';
		?>
	</body>
</html>