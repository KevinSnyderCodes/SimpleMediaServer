<?php

include 'global.php';

include 'header.php';

// Connect to MySQL database
$conn = db_connect();

// Run query
if ($_GET['id']) {
	$id = $_GET['id'];
	$query = 'SELECT * FROM User WHERE USER_ID = ' . $id . ';';
	echo '<p>ID: <span class="code">' . $id . '</span></p>';
	echo '<p>Query: <span class="code">' . $query . '</span></p>';
}
else {
	die("No ID");
}
$result = mysqli_query($conn, $query);
if (!$result) {
	die("Error: " . mysqli_error($conn));
}
else {
	echo "<p>Ran successfully</p>";
}

// Display results, if any
db_display_table($result);

mysqli_free_result($result);
mysqli_close($conn);

include 'footer.php';

?>