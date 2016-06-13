<!DOCTYPE html>

<html>

<head>
	<title>Simple Media Server</title>
	<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

	<style>
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

	<header style="text-align: center;">
		<h1>Simple Media Server</h1>
		<?php
			if ($_SESSION['user']) {
				echo '<p>Hello ' . $_SESSION['user'] . '</p>';
			}
			else {
				echo '<p>Hello anon</p>';
			}
		?>
	</header>

	<div class="container">