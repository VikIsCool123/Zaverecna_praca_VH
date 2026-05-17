<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Reservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-reservation" background="images/adminPanel2.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <?php if((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)){
            header("Location: index.php");
            exit;
        }?>
        <div class="container-section">
            <div class="container-admin">
                <div class="container-admin-box"><!--The banner with the welcome text.-->
                    <?php
                        include "reservations.php";
                        $reservations = new Reservations();
                        $all_reservations = $reservations -> getAllReservations();

                        if (isset($_POST["res-button"])) {
                            $reservation_id= $_POST["ReservationId"];
                            $reservations -> cancelReservation($reservation_id);
                            header("Location: admin_reservations.php");
                        }
                    ?>
                    <table class="admin-table">
                        <tr>
                            <th>User ID</th>
                            <th>Program</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                        <?php foreach ($all_reservations as $reservation): ?>
                            <tr>
                                <td><?php echo $reservation["user_id"] ?></td>
                                <td><?php echo $reservation["name"] ?></td>
                                <td><?php echo $reservation["time"] ?></td>
                                <td><a href="reservation.php?id=<?php echo $reservation['reservationId']?>" class="btn btn-primary">🪿 Edit</a></td>
                                <td>
                                    <form id="form-res" action="" method="POST"><!--The form itself.-->
                                        <input type="hidden" name="ReservationId" value="<?php echo $reservation['reservationId']; ?>">
                                        <button class="btn btn-primary" id="res-button" name="res-button" type="submit">🥔 Cancel</button>
                                    </form>
                                </td>
                            </tr> 
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>
