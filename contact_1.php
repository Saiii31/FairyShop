<!doctype html>

<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Fairy Yogurt Shop</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" type="text/css" href="css/mobile.css">
	<script src="js/mobile.js" type="text/javascript"></script>
</head>

	<div id="page">
		<div id="header">
			<div>
				<a href="index.html" class="logo"><img src="images/logo.png" alt=""></a>
				<ul id="navigation">
					<li>
						<a href="index.html">Home</a>
					</li>
					<li class="menu">
						<a href="about.html">About</a>
						<ul class="primary">
							<li>
								<a href="product.html">Product</a>
							</li>
						</ul>
					</li>
					<li class="menu">
						<a href="blog.html">Blog</a>
						<ul class="secondary">
							<li>
								<a href="singlepost.html">Single post</a>
							</li>
						</ul>
					</li>
					<li class="selected">
						<a href="contact.html">Contact</a>
					</li>
				</ul>
			</div>
		</div>
		<div id="body" class="contact">
			<div class="header">
				<div>
					<h1>Contact</h1>
				</div>
			</div>
			<div class="body">
				<div>
					<div>
						<img src="images/check-in.png" alt="">
						<a href="<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3768.961329274156!2d76.21513021458594!3d19.153169954520187!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bdab170ebcde731%3A0x7a97056ec4053cd7!2sGanpati%20Mandir!5e0!3m2!1sen!2sin!4v1661425893656!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></a>
						<h1>Patil Galli, Zenda Chowk Majalgaon</h1>
						<p>For inquiry you can come to this address</p>
					</a>
					</div>
				</div>
			</div>
			<div class="footer">
				<div class="contact">
					<h1>INQUIRY FORM</h1>
					<form action="contact_1.php">
						<input type="text" name="name" value="Name" onblur="this.value=!this.value?'Name':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="email" value="Email" onblur="this.value=!this.value?'Email':this.value;" onfocus="this.select()" onclick="this.value='';">
						<input type="text" name="subject" value="Subject" onblur="this.value=!this.value?'Subject':this.value;" onfocus="this.select()" onclick="this.value='';">
						<textarea name="message" cols="50" rows="7" placeholder="Share your thoughts"></textarea>
						<input type="submit" value="Send" id="submit">
					</form>
				</div>
				<div class="section">
					<h1>WE’D LOVE TO HEAR FROM YOU.</h1>
					<p>For inquiry You can fill the form also.</p>
				</div>
			</div>
		</div>
		<div id="footer">
			<div>
				<div class="connect">
					<a href="#" class="facebook">facebook</a>
					<a href="#" class="twitter">twitter</a>
					<a href="#" class="googleplus">googleplus</a>
					<a href="#" class="pinterest">pinterest</a>
				</div>
				<p>&copy; 2022 Freeeze. All Rights Reserved.</p>
			</div>
		</div>
	</div>
</body>
</html>
