<?php
//Ensure that database connection is good before any code is executed. 
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}

for($i = 1; $i <= 3; $i++) {
	if ($i == 1) {
		$sql = "UPDATE f32ee.movies_seats_available SET number_of_seats = number_of_seats - cust_number WHERE time_id = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 2) {
		$sql = "UPDATE f32ee.movies_seats_available SET number_of_seats = number_of_seats - cust_number WHERE time_id = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 3) {
		$sql = "UPDATE f32ee.movies_seats_available SET number_of_seats = number_of_seats - cust_number WHERE time_id = $i";
		mysqli_query($conn, $sql);
	}
}
mysqli_close($conn);
?>