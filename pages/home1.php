<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>basic_login_project</title>
	<link rel="stylesheet" type="text/css" href="../stylesheets/home_style.css">
</head>
<body>
    <?php
        include "../templates/navbar.php";
    ?>
	<section id="banner">
		<h1>Welcome to my Authentication website.</h1>
		<p>Discover my projects and skills</p>
	</section>
	<section id="about">
		<h2>About Me</h2>
		<p>I am a freelance web developer and designer with 3 years of experience. I specialize in creating modern and responsive websites for small businesses and startups. I am passionate about coding and always strive to deliver high-quality work to my clients.</p>
	</section>

	<!-- <section id="portfolio">
		<h2>My Portfolio</h2>
		<div class="projects">
			<div class="project">
				<img src="project1.jpg" alt="Project 1">
				<h3>Project 1</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec magna sit amet sem eleifend fringilla. Suspendisse in mauris ut mi sagittis lacinia. Proin consequat mauris vitae massa maximus venenatis.</p>
			</div>
			<div class="project">
				<img src="project2.jpg" alt="Project 2">
				<h3>Project 2</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec magna sit amet sem eleifend fringilla. Suspendisse in mauris ut mi sagittis lacinia. Proin consequat mauris vitae massa maximus venenatis.</p>
			</div>
			<div class="project">
				<img src="project3.jpg" alt="Project 3">
				<h3>Project 3</h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce nec magna sit amet sem eleifend fringilla. Suspendisse in mauris ut mi sagittis lacinia. Proin consequat mauris vitae massa maximus venenatis.</p>
			</div>
		</div>
	</section>
	<section id="contact">
		<h2>Contact Me</h2>
		<form action="submit.php" method="post">
			<label for="name">Name:</label>
			<input type="text" id="name" name="name" required>
			<label for="email">Email:</label>
			<input type="email" id="email" name="email" required>
			<label for="message">Message:</label>
			<textarea id="message" name="message" required></textarea>
			<button type="submit">Send</button>
		</form>
	</section> -->

	<footer>
		<p>&copy; 2021 My Portfolio. All rights reserved.</p>
	</footer>
</body>
</html>
