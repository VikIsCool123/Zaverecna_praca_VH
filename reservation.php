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
        <?php include "parts/header.php"?>
        <?php include "reservations.php"?>
        <?php if(!isset($_SESSION["user_id"])){
            header("Location: index.php");
        }?>
        <?php 
            $reservations = new Reservations();
            $reservation_program_id = 1;
            $reservation_datetime = 0;

            // Get current reservation if in URL (for editing)
            if (isset($_GET["id"])){ // if reverse.php?id=...
                if((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)){
                    header("Location: index.php");
                    exit;
                }
                $reservation = $reservations->getReservation((int)$_GET["id"]);
                $reservation_program_id = $reservation["program_id"];
                $reservation_datetime = $reservation["time"];
            }

            // Make reservation (if submit from form)
            if (isset($_POST["res-button"])) {
                $program= $_POST["SelectProgram"];
                $time = $_POST["ChosenDate"];
                if (isset($_GET["id"])){// if reverse.php?id=...
                    $error = $reservations->updateReservation($_SESSION["user_id"], $program, $time);
                    header("Location: admin_reservations.php");
                } 
                else {
                    $error = $reservations->insertReservation($_SESSION["user_id"], $program, $time);
                }
            }
        ?>
        <div class="container4"><!--Container for the form.-->
            <form id="form-res" action="" method="POST"><!--The form itself.-->
                <h1>Make a reservation</h1>
                <div class="container-selection"><!--Form selection.-->
                    <label>Choose from these programs</label>
                    <select class="form-select form-select-sm" 
                        aria-label="Small select example" name="SelectProgram">
                        <option value="1" <?php echo (($reservation_program_id == 1) ? "selected" : "") ?>>Yoga</option>
                        <option value="2" <?php echo (($reservation_program_id == 2) ? "selected" : "") ?>>Spa</option>
                        <option value="3" <?php echo (($reservation_program_id == 3) ? "selected" : "") ?>>Massage</option>
                        <option value="4" <?php echo (($reservation_program_id == 4) ? "selected" : "") ?>>Sauna</option>
                        <option value="5" <?php echo (($reservation_program_id == 5) ? "selected" : "") ?>>Natural stone relaxation</option>
                        <option value="6" <?php echo (($reservation_program_id == 6) ? "selected" : "") ?>>Meditation</option>
                    </select>
                </div>
                <div class="date-picker-container"><!--Form selection.-->
                    <label>Choose a date</label>
                    <input type="date" name="ChosenDate" 
                        value="<?php echo $reservation_datetime?>"></input>
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