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
        <div class="container4"><!--Container for the form.-->
            <form id="form-res" action="login.php" method="POST"><!--The form itself.-->
                <div class="conatiner-form-name">
                <div class="mb-3"><!--Input for the Email address.-->
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" name="InputEmail" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3"><!--Input password.-->
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="InputPassword">
                </div>
                    <div class="form-button"><!--Submit button.-->
                        <button class="btn btn-primary" id="res-button" name="res-button" type="submit">Login</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>