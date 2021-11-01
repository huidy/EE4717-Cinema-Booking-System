<?php
include "scripts/php/updateDB.php";
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
        <div class="main_wrapper_seatselection">
            <!-- showtimings_wrapper (1) => Movie Details & poster -->
            <div class = "seatselection_wrapper_1">
                <div class = "showtimings_wrapper_1_movieposter">
                    <img src="media/Shang-Chi_and_the_Legend_of_the_Ten_Rings_poster.jpeg" alt="Shang-Chi_and_the_Legend_of_the_Ten_Rings_poster">
                </div>
                <div class = "showtimings_wrapper_1_moviedetails">
                    <h5>CAST<h5>
                    <p>Tony Leung , Michelle Yeoh, Awkwafina ., Simu Liu, Fala Chen, Meng'er Zhang, Florian Munteanu , Ronny Chieng</p>
                    <br>
                    <h5>DIRECTOR</h5>
                    <p>Destin Daniel Cretton</p>
                    <br>
                    <h5>SYNOPSIS</h5>
                    <p>Marvel Studios' "Shang-Chi and The Legend of The Ten Rings" stars Simu Liu as Shang-Chi, who must confront the past he thought he left behind when he is drawn into the web of the mysterious Ten Rings organization. The film also stars Tony Leung as Wenwu, Awkwafina as Shang-Chi's friend Katy and Michelle Yeoh as Jiang Nan, as well as Fala Chen, Meng'er Zhang, Florian Munteanu and Ronny Chieng.</p>
                                        
                </div>
            </div>
            <!-- showtimings_wrapper (2) => Show timings and location -->
            <div class = "seatselection_wrapper_2">
                <h2>Select the number of tickets you wish to purchase. Do note that seats are on a first come first served basis. </h2>
                <form action="scripts/php/placeorder.php" method="get">
                    <table id="seatselectiontable">
                        <tr>
                            <th>
                                Number of seats remaining: lalala<span id="number_of_seats"><?php insert_table_row(1) ?></span>
                                NUmber of tickets I wanna buy<label><input type="number" name="selection_of_seats" id="choice" value="0" min="0" style="width:80px;" onchange="calculatePrice(1)"></label>
                                lalla
                            </th>
                            <th>
                                <!-- NUmber of tickets I wanna buy<label><input type="number" name="selection_of_seats" id="choice" value="0" min="0" style="width:80px;" onchange="calculatePrice(1)"></label> -->
                                lalla
                            </th>
                        </tr>
                    </table>
                    <input style="margin-left:495px;" type="submit" value="Place order">
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