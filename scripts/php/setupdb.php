<?php
//Declaring server connection details
$severname = "localhost";
$username = "f32ee";
$password = "f32ee";
$dbname = "f32ee";
//Setting up connection to database
$conn = new mysqli ($severname, $username, $password, $dbname);
//Checking Connection to database
if (!$conn) {
    // echo "connection to database failed";
    die("Connection failed :".mysqli_connect_error());
} 
//Adding tables to the database (1) => "movies_show_table"
$sql = "CREATE TABLE IF NOT EXISTS movies_show_table (
    show_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    show_name VARCHAR(50) NOT NULL
)";
//Checking if sql statement is successful (1) => "movies_show_table"
if (!mysqli_query($conn, $sql)) {
    echo "Error creating the show tables: ". mysqli_error($conn);
    mysqli_close($conn);
}
//Adding tables to the database (2) => "movies_day_table"
$sql = "CREATE TABLE IF NOT EXISTS movies_day_table (
    day_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    day_name VARCHAR(30) NOT NULL
)";
//Checking if sql statement is successful (2) => "movies_day_table"
if (!mysqli_query($conn, $sql)) {
    echo "Error creating the day tables: ". mysqli_error($conn);
    mysqli_close($conn);
}
//Adding tables to the database (3) => "movies_time_table"
$sql = "CREATE TABLE IF NOT EXISTS movies_time_table (
    time_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    time_entry INT UNSIGNED NOT NULL
)";
//Checking if sql statement is successful (3) => "movies_time_table"
if (!mysqli_query($conn, $sql)) {
    echo "Error creating the seating tables: ". mysqli_error($conn);
    mysqli_close($conn);
}
//Adding tables to the database (4) => "movies_seats_available"
$sql = "CREATE TABLE IF NOT EXISTS movies_seats_available (
    time_id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    number_of_seats INT UNSIGNED NOT NULL
    FOREIGN KEY (time_id) REFERENCES movies_time_table(time_id)
)";
//Checking if sql statement is successful (4) => "movies_seats_available"
if (!mysqli_query($conn, $sql)) {
    echo "Error creating the seating tables: ". mysqli_error($conn);
    mysqli_close($conn);
}
//Inserting sample data into tables

//Insert into (1) => "movies_show_table"
$sql = "INSERT INTO movies_show_table (show_id, show_name)
VALUES (NULL, 'Wonder Woman');";
$sql .= "INSERT INTO movies_show_table (show_id, show_name)
VALUES (NULL, 'Shang Chi Legend of Ten Rings');";

//Insert into (2) => "movies_day_table"
$sql .= "INSERT INTO movies_day_table (day_id, day_name)
VALUES (NULL, 'Monday');";
$sql .= "INSERT INTO movies_day_table (day_id, day_name)
VALUES (NULL, 'Wednesday');";
$sql .= "INSERT INTO movies_day_table (day_id, day_name)
VALUES (NULL, 'Friday');";

//Insert into (3) => "movies_time_table"
$sql .= "INSERT INTO movies_time_table (time_id, time_entry)
VALUES (NULL, 1000);";
$sql .= "INSERT INTO movies_time_table (time_id, time_entry)
VALUES (NULL, 1500);";
$sql .= "INSERT INTO movies_time_table (time_id, time_entry)
VALUES (NULL, 2000);";

//Checking if sql statement is successful
if (!mysqli_multi_query($conn, $sql)) {
    echo "Failed to fill the table with data: ".mysqli_error($conn);
    mysqli_close($conn);
}

//Closing the connection
mysqli_close($conn);
?>
