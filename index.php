<!DOCTYPE html>
<!-- 
	Name: Husein Fazlić
	Course name: Web Applications Development
	Course code: CS412
	Professor: Ali Almisreb
	Date: December 14th, 2019
 -->

<html lang = "en-GB">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<link rel="icon" href="resumeIcon.png">
		<link href="styleResume.css" type="text/css" rel="stylesheet" />
		<title>Husein Fazlić</title>
	</head>	
	<body>
		<div class="topnav">
			<ul class="navList">
				<li><a href="#about_div">About me</a></li>
				<li><a href="#education_div">Education</a></li>
				<li><a href="#interests_div">Interests</a></li>
				<li><a href="#contact_div">Contact</a></li>
				<li><a class="social" href="https://ba.linkedin.com/in/husein-fazli%C4%87-b43a62197" target="_blank"><img class = "image_icon" src ="linkedin_icon.png"/></a></li>
				<li><a href="https://huseinfazlic.github.io/progress1.html" target="_blank">1st progress</a></li>
				<li><a href="https://huseinfazlic.github.io/progress2.html" target="_blank">2nd progress</a></li>
				<li><a href="https://huseinfazlic.github.io/calculatorhtml.html" target="_blank">3rd progress</a></li>
				<li><a href="https://huseinfazlic.github.io/calculatorhtml.html" target="_blank">Calculator</a></li>
			</ul>
		</div>	
		
			<h1 id="intro">Husein Fazlić - A website about me</h1>
			
			<br>
			
			<h1 id="greeting">Hello Stranger!!!</h1>
			
			<br>
			
			<figure>
				<img class="photo" src="Husein_Fazlić_CV.jpg" alt="Husein Fazlić in Austria"/>
				<figcaption>Husein in Vienna (<i>Wien</i>) in 2017</figcaption>
			</figure>
			
			<hr>
		
			<div id="about_div" class="body_div">
				<br>
				<h2>About me <span class="glyphicon glyphicon-user"></span></h2>
					<p>
					I am from Bosnia and Herzegovina.
					My home-town is Kalesija, a small place near Tuzla.
					I was born in 1998 in Tuzla. Currently, you may find me in Sarajevo.
					I am attending Software Engineering at International University of Sarajevo. 
					</p>
			</div>
			
			<div id="education_div" class="body_div">
				<br>
				<h2>Education <span class="glyphicon glyphicon-education"></span></h2>
				<br>
				<table>
					
					<tr>
						<th>Level of Education</th>
						<th>Institution name</th>
						<th>Years attending</th>
					</tr>
					
					<tr>
						<td>Primary school:</td>
						<td><a href="http://oskalesija.com.ba/" target="_blank">Osnovna škola Kalesija</a></td>
						<td>2004 - 2013</td>
					</tr>
					
					<tr>
						<td>Secondary school:</td>
						<td><a href="https://www.bbm.edu.ba" target="_blank">Behram-begova medresa Tuzla</a></td>
						<td>2013 - 2017</td>
					</tr>
					
					<tr>
						<td>University:</td>
						<td><a href="https://www.ius.edu.ba/" target="_blank"><acronym title="International University of Sarajevo">IUS</acronym></a> - Software Engineering</td>
						<td>2017 - ????</td>
					</tr>
				</table>
			</div>
		
			<div id="interests_div" class="body_div">
				<br>
				<h2>Interests</h2>
					<ul id="interList">
						<li>C/C++ Language</li>
						<li>Computer Vision</li>
						<li>Basketball</li>
						<li>Hiking</li>
						<li>European history</li>
					</ul>
			</div>
			
		
			<div id="contact_div" class="body_div">
				<br>
				<h2>Contact</h2>
					<p>
					Write me something here. Fill in the form and click on submit.
					</p>
					
					<?php
					// define variables and set to empty values
					
					$firstName = $lastName = $message = "";
					
					if ($_SERVER["REQUEST_METHOD"] == "POST") {
						$firstName = test_input($_POST["fname"]);
						$lastName = test_input($_POST["lname"]);
						$message = test_input($_POST["message"]);
						$mailAddress = test_input($_POST["e-mail"]);
					}
					
					function test_input($data) {
						$data = trim($data);
						$data = stripslashes($data);
						$data = htmlspecialchars($data);
						return $data;
					}
					?>
					
					<form method="post" action="send.php">
					
						<label for="fname">First Name</label>
						<input type="text" id="fname" name="fname">
						
						<label for="lname">Last Name</label>
						<input type="text" id="lname" name="lname">
						
						<label for="e-mail">E-mail</label>
						<input type="email" id="e-mail" name="e-mail">
						
						<label for="message">Message</label>
						<textarea id="message" name="message" placeholder="Write me something (100 characters maximum)"></textarea>
						
						
						
						<input type="submit">
					</form>
					
					
					
					<p>
						E-mail: hfazlic_1@hotmail.com <br>
						Phone number: 062-686-925
					</p>
					
			</div>
		
		<div class="footer">
		</div>
		
		<script type="text/javascript" src="navShow.js"></script>
	</body>	
</html>