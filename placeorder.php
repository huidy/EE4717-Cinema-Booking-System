<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form order</title>
    <script type="text/javascript" src="scripts/javascript/formvalidation.js"></script>
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
        <div class="nav_bar">
            <nav>
                <b>
                    <img src="media/logo_.png" alt="Logo" style="float: left; width: 3%; height: 3%; "> &nbsp;
                    <a href="check_booking.html" style="float: right; margin: 15px;">Check Booking</a>
                    <a href="cinemas.html" style="float: right; margin: 15px;" >Cinemas</a> &nbsp;
                    <a href="movies.html" style="float: right; margin: 15px;" >Movies</a> &nbsp;
                    <a href="index.html" style="float: right; margin: 15px;">Home</a> &nbsp;
                <b>
            </nav>    
        </div>
    </header>
    <main>
        <div class="main_wrapper_cinemas">
            <form action="formdisplay.php">
                <table>
                    <tr>
                        <th>
                            <label for="nameInput">Please enter your name:</label>
                            <input type="text" id="nameInput" placeholder="Enter your name" onchange="validateName()" size="50" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="handphoneInput">Please enter your handphone number:</label>
                            <input type="text" id="handphoneInput" placeholder="Enter your handphonenumber" onchange="validateHpNumber()" size="50" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="emailInput">Please enter your email:</label>
                            <input type="text" id="emailInput" placeholder="Enter your email address" onchange="validateEmail()" size="50" required>
                        </th>
                    </tr>
                    <tr>
                        <th>
                            <label for="emailConfirmInput">Please confirm your email again:</label>
                            <input type="text" id="emailConfirmInput" placeholder="Enter your email address again" size="50" onchange="validateConfirmEmail()" required>
                        </th>
                    </tr>
                </table>
                <input type="submit" value="Confirm your order here" style="float:right;">
            </form>
        </div>
    </main>
    <footer>
        <i>Copyright &copy; 2021 CinemaFTW</i>
        <br>
        <i>hdgan&bhwz@CinemaFTW.com</i>
    </footer>
</body>
</html>