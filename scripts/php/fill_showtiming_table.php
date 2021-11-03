<?php

//function (1) => inserting the day options available
function insert_table_datechoice ($id) {
    //Declaring server connection details
    $severname = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $dbname = "f32ee";
    //Setting up connection to database
    $conn = new mysqli ($severname, $username, $password, $dbname);
    //Checking for connection
    if (!$conn) {
        die("Connection to the database failed: ".mysqli_connect_error());
        // echo "Connection to database failed";
    } 
    //Writitng SQL statement to retrieve day_name from primary key match
    $sql = "SELECT day_name FROM movies_day_table WHERE day_id = $id;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_row($result);
        echo $row[0];
    } else {
        echo "Failed fetching the query from database";
    }
}
//function (2) => inserting the time options available
function insert_table_timechoice ($id) {
    //Setting up connection to database
    //Declaring server connection details
    $severname = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $dbname = "f32ee";
    $conn = new mysqli ($severname, $username, $password, $dbname);
    //Checking for connection
    if (!$conn) {
        die("Connection to the database failed: ".mysqli_connect_error());
        // echo "Connection to database failed";
    } 
    //Writitng SQL statement to retrieve time_entry from primary key match
    $sql = "SELECT time_entry FROM movies_time_table WHERE time_id = $id;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_row($result);
        echo $row[0];
    } else {
        echo "Failed fetching the query from database";
    }
}
//function (3) => inserting the available seats remaining
function insert_table_seatQty ($id) {
    //Declaring server connection details
    $severname = "localhost";
    $username = "f32ee";
    $password = "f32ee";
    $dbname = "f32ee";
    //Setting up connection to database
    $conn = new mysqli ($severname, $username, $password, $dbname);
    //Checking for connection
    if (!$conn) {
        die("Connection to the database failed: ".mysqli_connect_error());
        // echo "Connection to database failed";
    } 
    //Writitng SQL statement to retrieve day_name from primary key match
    $sql = "SELECT number_of_seats FROM movies_seats_available WHERE time_id = $id;";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $row = mysqli_fetch_row($result);
        echo $row[0];
    } else {
        echo "Failed fetching the query from database";
    }
}
?>