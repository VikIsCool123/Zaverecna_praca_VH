<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Reservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-reservation" background="images/profileImage.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <?php if (!isset($_SESSION["user_id"])) {
            header("Location: index.php");
        }?>
        <div class="container-section">
            <div class="container-profile">
                <div class="container-profile-box"><!--The banner with the welcome text.-->
                    <?php include "profile_info.php"?>
                    <h2>Profile</h2>
                    <p>Username: <?php echo $user["name"] ?></p>
                    <p>Date of birth: <?php echo $user["date_of_birth"] ?></p>
                    <p>Email: <?php echo $user["email"] ?></p>
                    <p>Phone number: <?php echo $user["telephone"] ?></p>
                    <div class="hero_buttons">
                        <a href="logout.php"><!--Button that moves you to the Veriety tab.-->
                            <button class="hero-button1">Log out</button>
                        </a>
                        <a href="account_create.php?id=<?php echo $_SESSION['user_id'] ?>"><!--Button that moves you to the Veriety tab.-->
                            <button class="hero-button1">Edit</button>
                        </a>
                    </div>
                </div>
                <div class="container-profile-box-reservations">
                    <h2>Reservations</h2>
                    <?php include "reservations_table.php"?>
                </div>
            </div>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>