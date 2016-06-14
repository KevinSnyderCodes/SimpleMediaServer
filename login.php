<?php

include 'global.php';

// Connect to MySQL database
$conn = db_connect();

// Run query
if ($_POST['user']) {
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	$query = 'SELECT * FROM User WHERE USERNAME = "' . $user . '" AND PASSWORD = "' . $pass . '";';
	/*echo '<p>Username: <span class="code">' . $user . '</span></p>';
	echo '<p>Password: <span class="code">' . $pass . '</span></p>';
	echo '<p>Query: <span class="code">' . $query . '</span></p>';*/

	$result = mysqli_query($conn, $query);
	if (!$result) {
		die("Error: " . mysqli_error($conn));
	}
	/*else {
		echo "<p>Ran successfully</p>";
	}*/

	// Display results, if any
	/*db_display_table($result);*/

	$_SESSION['user'] = $user;
	/*echo '<p>Session variable set</p>';*/

	mysqli_free_result($result);
	mysqli_close($conn);
}

include 'header.php';

?>

<form method="POST" action="">
	<p><input type="text" name="user" placeholder="Username"></p>
	<p><input type="password" name="pass" placeholder="Password"></p>
	<p><input type="submit" value="Log in"></p>
</form>

<?php

include 'footer.php';

?>