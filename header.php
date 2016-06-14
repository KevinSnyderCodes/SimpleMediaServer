<!DOCTYPE html>

<html>

<head>
	<title>Simple Media Server</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<style>
		header {
			position: relative;
			text-align: center;
			border-bottom: 1px solid black;
		}

		#title a {
			text-decoration: none;
			color: black;
		}

		#title a:hover {
			color: gray;
		}

		table, tr, th, td {
			border: 1px solid black;
		}

		th, td {
			padding: 5px;
		}

		.code {
			font-family: 'Courier New', Courier, 'Lucida Sans Typewriter', 'Lucida Typewriter', monospace;
		}
	</style>
</head>

<body>

	<header>
		<div style="float: left;">
			<form method="GET" action="search.php">
				<p>
					<input type="text" name="q" placeholder="">
					<input type="submit" value="Search">
				</p>
			</form>
		</div>
		<div style="float: right;">
			<?php
				if ($_SESSION['user']) {
					echo '<p>Hello ' . $_SESSION['user'] . '</p>';
					echo '<a href="logout.php">Logout</a>';
				}
				else {
					echo '<p>Hello anon</p>';
					echo '<a href="login.php">Login</a>';
				}
			?>
		</div>
		<h1 id="title"><a href="/">Simple Media Server</a></h1>
	</header>

	<div class="container">