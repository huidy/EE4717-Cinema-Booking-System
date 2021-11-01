<?php
include "scripts/php/setupdb.php";
include "scripts/php/fill_showtiming_table.php";
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
            </div>0
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
                            <th>
                                <input type="radio" name="dateChoice"><span id="datechoice1"><?php insert_table_datechoice(1) ?></span>
                                <input type="radio" name="dateChoice"><span id="datechoice2"><?php insert_table_datechoice(2) ?></span>
                                <input type="radio" name="dateChoice"><span id="datechoice3"><?php insert_table_datechoice(3) ?></span>
                            </th>
                        </tr>
                        <!-- table => row (3) => Time slot selection (1)-->
                        <tr>
                            <th><input type="radio" name="timeChoice"><span id="timechoice1"><?php insert_table_timechoice(1)?>&nbsp;hrs</span></th>
                    
                        </tr>
                        <!-- table => row (4) => Time slot selection (2)-->
                        <tr>
                            <th><input type="radio" name="timeChoice"><span id="timechoice2"><?php insert_table_timechoice(2)?>&nbsp;hrs</span></th>
                        </tr>
                        <!-- table => row (5) => Time slot selection (3)-->
                        <tr>
                            <th><input type="radio" name="timeChoice"><span id="timechoice3"><?php insert_table_timechoice(3)?>&nbsp;hrs</span></th>
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