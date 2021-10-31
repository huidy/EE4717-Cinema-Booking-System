<?php
include "scripts/php/setupdb.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Selection & Timings</title>
    <link rel="stylesheet" href="stylesheet.css">
    <style>
        table,th,td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        table {
            width: 100%;
        }
        th {
            height: 5rem;
        }
        td {
            height: 2.5rem;
        }
    </style>
</head>
<body>
    <!-- body (1) => Header -->
    <header>
        <nav>
            <b>
                <img src="logo.png" alt="Logo" style="float: left; size: 15px;"> &nbsp;
                <a href="check_booking.html" style="float: right; margin: 15px;">Check Booking</a>
                <a href="cinemas.html" style="float: right; margin: 15px;" >Cinemas</a> &nbsp;
                <a href="movies.html" style="float: right; margin: 15px;" >Movies</a> &nbsp;
                <a href="index.html" style="float: right; margin: 15px;">Home</a> &nbsp;
            <b>
        </nav>    
    </header>
    <!-- body (2) => Main -->
    <main>
        <div class="main_wrapper_showtimings">
            <!-- showtimings_wrapper (1) => Movie Details & poster -->
            <div class = "showtimings_wrapper_1">
                <div class = "showtimings_wrapper_1_movieposter">
                    <i>Insert movie poster image here</i>
                </div>
                <div class = "showtimings_wrapper_1_moviedetails">
                    <i>Insert movie details here</i>
                </div>
            </div>
            <!-- showtimings_wrapper (2) => Show timings and location -->
            <div class = "showtimings_wrapper_2">
                <form action="" method="">
                    <table>
                        <!-- table => row (1) -->
                        <tr>
                            <th rowspan="5">
                                Jurong East Cinema
                            </th>
                        </tr>
                        <!-- table => row (2) => Day of Choice Selection -->
                        <tr>
                            <th><input type="radio" name="dateChoice">dateChoice1</th>
                            <th><input type="radio" name="dateChoice">dateChoice2</th>
                            <th><input type="radio" name="dateChoice">dateChoice3</th>
                        </tr>
                        <!-- table => row (3) => Time slot selection (1)-->
                        <tr>
                            <td><input type="radio" name="timeChoice">timeChoice1</td>
                            <td><input type="radio" name="timeChoice">timeChoice1</td>
                            <td><input type="radio" name="timeChoice">timeChoice1</td>
                        </tr>
                        <!-- table => row (4) => Time slot selection (2)-->
                        <tr>
                            <td><input type="radio" name="timeChoice">timeChoice2</td>
                            <td><input type="radio" name="timeChoice">timeChoice2</td>
                            <td><input type="radio" name="timeChoice">timeChoice2</td>
                        </tr>
                        <!-- table => row (5) => Time slot selection (3)-->
                        <tr>
                            <td><input type="radio" name="timeChoice">timeChoice3</td>
                            <td><input type="radio" name="timeChoice">timeChoice3</td>
                            <td><input type="radio" name="timeChoice">timeChoice3</td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </main>
    <!-- body (3) => Footer -->
    <footer>
        <i>Copyright &copy; 2021 CinemaFTW</i>
        <br>
        <i>huida@ganBrendan.com</i>
    </footer>
</body>
</html>
