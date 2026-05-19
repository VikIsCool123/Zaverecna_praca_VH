<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Reservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-reservation" background="images/book.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <!-- Import header, reservations class, and programs class -->
        <?php include "parts/header.php"?>
        <?php include "reservations.php"?>
        <?php include "programs.php"?>
        <!-- If we are not signed in, don't allow making reservation -->
        <?php if(!isset($_SESSION["user_id"])) {
            header("Location: index.php");
        }?>
        <?php
        // Get all programs
        $programs = new Programs();
        $all_programs = $programs -> getAllPrograms();

        $reservations = new Reservations();
        // Create variables for the values of the form.
        // Initialise them with default values.
        $reservation_program_id = 1; // default program (if making new reservation)
        $reservation_datetime = 0; // default datetime (if making new reservation)

        // Get current reservation if in URL (for editing)
        if (isset($_GET["id"])) { // if reverse.php?id=...
            // If I am editing a reservation and I am not an admin, kick out
            if((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)) {
                header("Location: index.php");
                exit;
            }

            // Otherwise, get the reservation info based on the ID in the URL
            $reservation = $reservations->getReservation((int)$_GET["id"]);
            // Set the reservation data into the form input variables
            $reservation_program_id = $reservation["program_id"];
            $reservation_datetime = $reservation["time"];
        }

        // If the form is submitted
        if (isset($_POST["res-button"])) {
            // Get entered form values from the submission
            $program = $_POST["SelectProgram"];
            $time = $_POST["ChosenDate"];

            if (isset($_GET["id"])) {// if http://.../reserve.php?id=...
                $error = $reservations->updateReservation($_GET["id"], $program, $time);
                header("Location: admin_reservations.php");
            } else {
                $error = $reservations->insertReservation($_SESSION["user_id"], $program, $time);
            }
        }
        ?>
        <div class="container4"><!--Container for the form.-->
            <form id="form-res" action="" method="POST"><!--The form itself.-->
                <h1>Make a reservation</h1>
                <div class="container-selection"><!--Form selection.-->
                    <label>Choose from these programs</label>
                    <!-- Program Dropdown -->
                    <select class="form-select form-select-sm" 
                        aria-label="Small select example" name="SelectProgram">
                        <!-- Add all programs from database (and their prices) to the dropdown as options -->
                        <?php foreach ($all_programs as $program): ?>
                            <option 
                                value="<?php echo $program["id"]?>" 
                                <?php echo (($reservation_program_id == $program["id"]) ? "selected" : "") ?>
                            >
                                    <?php echo $program["name"] ?> 
                                    -
                                    <?php echo $program["price_per_session"] ?>
                                    €
                            </option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="date-picker-container"><!--Form selection.-->
                    <label>Choose a date</label>
                    <!-- Create Date input with either the default date or the date from the reservation -->
                    <input type="date" name="ChosenDate" 
                        value="<?php echo $reservation_datetime?>"></input>
                    <!-- If there is an error (for example, trying to reserve into the past) show the error here -->
                    <?php if (isset($error)): ?>
                        <div class="date-error">
                            <?php echo $error; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <div class="form-button"><!--Submit button.-->
                        <button class="btn btn-primary" id="res-button" name="res-button" type="submit">Reserve</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>