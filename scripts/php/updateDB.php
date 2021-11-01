<?php
//Ensure that database connection is good before any code is executed. 
$conn = mysqli_connect("localhost", "f32ee", "f32ee", "f32ee");

if (!$conn) {
	die("Connection failed: " . mysqli_connect_error());
	return;
}
//Declare variables 
$movie1=$_GET['regular'];
$smallCafe=$_GET['smallCafe'];


for($i = 1; $i <= 3; $i++) {
	if ($i == 1) {
		$sql = "UPDATE f32ee.jj_products SET product_price = $regular WHERE product_id = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 2) {
		$sql = "UPDATE f32ee.jj_products SET product_price = $smallCafe WHERE product_id = $i";
		mysqli_query($conn, $sql);
	} elseif ($i == 3) {
		$sql = "UPDATE f32ee.jj_products SET product_price = $largeCafe WHERE product_id = $i";
		mysqli_query($conn, $sql);
	}
}
mysqli_close($conn);
?>