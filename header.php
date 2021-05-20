<!DOCTYPE html>
<html lang="en">
<head class='body-homepage' onload='display()'>
  <!-- Required meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="X-UA-Compatible">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <title>DoubtHub</title>

<!-- <body class='body-homepage' onload='display()'> -->
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="float: right;">
		<a class="navbar-brand" href="#"><b>DoubtHub</b></a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
			aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">
				<li class="nav-item">
					<a class="nav-link" href="index.php">Home</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php#About">About</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="index.php#Contact">Queries</a>
				</li>
				<?php
				if (!false) { // insert attribute to check whether user has logged in 
				?>
				<li class="nav-item">
					<a class="nav-link" href="login.php">Login</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="signup.php">Sign Up</a>
				</li>
				<?php } else { ?>
				<li class="nav-item">
					<a class="nav-link" href="users.php">Chat</a>
				</li>
				<?php } ?>
			</ul>
		</div>
	</nav>
</head>
<!-- </body> -->
