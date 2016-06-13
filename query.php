<?php

include 'global.php';

// Connect to MySQL database
$conn = db_connect();

// Run query
if ($_POST['query']) {
	$query = $_POST['query'];
}
else if ($_GET['query']) {
	$query = $_GET['query'];
}
if ($query) {
	echo '<p><span class="code">' . $query . '</span></p>';
}
else {
	die("No query");
}
$result = mysqli_query($conn, $query);
if (!$result) {
	die("Error: " . mysqli_error($conn));
}
else {
	echo "<p>Ran successfully</p>";
}

// Display results, if any
if (mysqli_num_rows($result) > 0) {
	echo "<table><tr>";
	$field = mysqli_fetch_fields($result);
	foreach ($field as $val) {
		echo "<th>" . $val->name . "</th>";
	}
	echo "</tr>";
	while ($row = mysqli_fetch_row($result)) {
		echo "<tr>";
		foreach ($row as $val) {
			echo "<td>" . $val . "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
else {
	echo "0 results";
}

mysqli_free_result($result);
mysqli_close($conn);

?>