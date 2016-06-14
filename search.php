<?php

include 'global.php';

include 'header.php';

// Connect to MySQL database
$conn = db_connect();

// Run query
if ($_GET['q']) {
	$q = $_GET['q'];
	$query = 'SELECT * FROM Tag WHERE TAG_NAME = "' . $q . '";';
	echo '<p>ID: <span class="code">' . $q . '</span></p>';
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