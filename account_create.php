<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Reservation</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-reservation" background="images/reception.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <?php include "users.php"?>
        <?php
        // Variables that store values for the input fields.
        // Here we set them to default values which will be used on creating new accounts.
        $user_name = "";
        $user_date = "";
        $user_email = "";
        $user_phone = "";
        $account_create_button_text = "Create Account";

        // If we are editing an account
        if (isset($_GET["id"])) { // if reverse.php?id=...

            // If the user isn't an admin...
            if ((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)) {
                // ...AND if we try to edit a user that isn't us, kick us out
                if (((int)$_GET["id"]) != ($_SESSION["user_id"])) {
                    header("Location: index.php");
                    exit;
                }
            }

            // If we are here, we passed the security checks for editing a user
            // So, get the user the information about the user we are trying to edit
            $users = new Users();
            $user_info = $users->getUserById((int)$_GET["id"]);
            // Then, fill the inputs with the previous user data
            $user_name = $user_info["name"];
            $user_date = $user_info["date_of_birth"];
            $user_email = $user_info["email"];
            $user_phone = $user_info["telephone"];

            // Update submit button text
            $account_create_button_text = "Update Account";

            // Else (if we are not editing) and the user IS logged-in, kick them out.
            // Basically, don't allow logging in twice.
        } elseif (isset($_SESSION["user_id"])) {
            header("Location: index.php");
        }
        ?>
        <?php
            // When the user submits the form
            if (isset($_POST["res-button"])) {
                // Get all values from the form fields
                $name = $_POST["InputName"];
                $date = $_POST["InputDate"];
                $email = $_POST["InputEmail"];
                $phone = $_POST["InputTelephoneNumber"];
                $password = $_POST["InputPassword"];
                // Hash the password for security using the MD5 algorithm
                $password = md5($password);

                $users = new Users();
                $existence = $users -> existsUser($email);

                // If we are editing a user (have "id" in url parameters)...
                if (isset($_GET["id"])) {
                    // ... then UPDATE instead of CREATE / INSERT
                    $my_user_error = $users->updateUser($_GET["id"], $name, $date, $phone, $email, $password);

                    // If there wasn't an error when updating the account...
                    if ($my_user_error == null) {
                        echo "Account updated.";
                        // ...and the user is an admin, return back to the admin panel
                        if ((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 1)) {
                            header("Location: admin_users.php");
                        } else {
                            // Otherwise, go back to the profile
                            header("Location: profile.php");
                        }
                    } else {
                        echo $my_user_error;
                    }

                } elseif ($existence == true) { // If we are not editing (this means we are creating), and user already exists
                    echo "Error - user already exists!";
                    exit;

                } else { // If we are creating a new user
                    $my_user_error = $users->insertUser($name, $date, $phone, $email, $password);

                    // If no error, go to the log-in page
                    if ($my_user_error == null) {
                        echo "Account created.";
                        header("Location: account_login.php");
                    } else {
                        echo $my_user_error;
                    }
                }
            }
        ?>
        <div class="container5"><!--Container for the form.-->
            <form id="form-res" action="" method="POST"><!--The form itself.-->
                <div class="conatiner-form-name">
                    <div class="mb-3"><!--Input for the Name.-->
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1" name="InputName" value=<?php echo $user_name ?>>
                    </div>
                </div>
                <div class="mb-3"><!--Input for the Date.-->
                    <label for="exampleInputDate1" class="form-label">Date of birth</label>
                    <input type="date" class="form-control" id="exampleInputDate1" name="InputDate" value=<?php echo $user_date ?>>
                </div>
                <div class="mb-3"><!--Input for the Email address.-->
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <!-- If we are in edit mode, don't allow changing the email -->
                    <input <?php echo (isset($_GET["id"]) ? "disabled" : "") ?> type="email" class="form-control" id="exampleInputEmail1" name="InputEmail" aria-describedby="emailHelp" value=<?php echo $user_email ?>>
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3"><!--Input for the Telephone number.-->
                    <label for="exampleInputTelephoneNumber1" class="form-label">Telephone number (optional)</label>
                    <input type="text" class="form-control" id="exampleInputTelephoneNumber1" name="InputTelephoneNumber" value=<?php echo $user_phone ?>>
                </div>
                <div class="mb-3"><!--Input password.-->
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" name="InputPassword">
                </div>
                <div class="form-check"><!--Checkbox.-->
                    <input class="form-check-input" type="checkbox" value="" id="checkDefault">
                    <label class="form-check-label" for="checkDefault">I agree to let my data be stored and processed.</label>
                </div>
                    <div class="container-alert" id="container-message"><!--Alert.-->
                        <div class="alert alert-info" role="alert">
                        You need to check the checkbox in order to send your data.
                        </div>
                    </div>
                    <div class="form-button"><!--Submit button.-->
                        <button class="btn btn-primary" id="res-button" name="res-button" type="submit"><?php echo $account_create_button_text ?></button>
                    </div>
                </div>
            </form>
        </div>
        <?php include "parts/footer.php"?>
        <!-- Javascript to ensure we need to select the checkbox before submitting -->
        <script src="javascript/reservation.js"></script>
    </body>
</html>