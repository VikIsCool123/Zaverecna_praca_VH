<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Reservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-reservation" background="images/adminPanel1.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <!-- If not logged in OR is not admin, kick them out -->
        <?php if((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)) {
            header("Location: index.php");
            exit;
        }?>
        <div class="container-section">
            <div class="container-admin">
                <div class="container-admin-box"><!--The banner with the welcome text.-->
                    <?php
                        include "users.php";

        // I don't know why the linter is moving this to the left, sorry lol xd ඞඞඞඞඞඞ
        // Get data about all users
        $users = new Users();
        $all_users = $users -> getAllUsers();

        // If mini-form is submitted to delete a user
        if (isset($_POST["res-button"])) {
            // ... then delete the user
            $id = $_POST["userId"];
            $users -> deleteUser($id);
            // Refresh the page
            header("Location: admin_users.php");
        }
        ?>
                    <table class="admin-table">
                        <tr>
                            <th>Name</th>
                            <th>Date of birth</th>
                            <th>Email</th>
                            <th>Telephone</th>
                            <th>Actions</th>
                        </tr>
                        <!-- Go through all of the users -->
                        <?php foreach ($all_users as $user): ?>
                            <tr>
                                <!-- Show information about this user -->
                                <td><?php echo $user["name"] ?></td>
                                <td><?php echo $user["date_of_birth"] ?></td>
                                <td><?php echo $user["email"] ?></td>
                                <td><?php echo $user["telephone"] ?></td>
                                <!-- Allow editing this user in the row by going to the account create page -->
                                <td><a href="account_create.php?id=<?php echo $user['id']?>" class="btn btn-primary">🦫 Edit</a></td>
                                <!-- Mini-form to allow submitting the user ID to delete in the IF condition above -->
                                <td>
                                    <form id="form-res" action="" method="POST"><!--The form itself.-->
                                        <input type="hidden" name="userId" value="<?php echo $user['id']; ?>">
                                        <button class="btn btn-primary" id="res-button" name="res-button" type="submit">ඞ Delete</button>
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
