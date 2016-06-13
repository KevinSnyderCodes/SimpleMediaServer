<?php

session_start();

function db_connect() {
	$server = "localhost";
	$username = "root";
	$password = "SonnyN0ble";
	$dbname = "sms_db";
	$conn = mysqli_connect($server, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}
	return $conn;
}

function db_display_table($result) {
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
}

?>