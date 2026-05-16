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
        <?php if((!isset($_SESSION["is_admin"])) || ($_SESSION["is_admin"] === 0)){
            header("Location: index.php");
            exit;
        }?>
        <div class="container-section">
            <div class="container-admin">
                <div class="container-admin-box"><!--The banner with the welcome text.-->
                    <?php
                        include "users.php";
                        $users = new Users();
                        $all_users = $users -> getAllUsers();
                    ?>
                    <table class="admin-table">
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Email</th>
                            <th>Telephone</th>
                        </tr>
                        <?php foreach ($all_users as $user): ?>
                            <tr>
                                <td><?php echo $user["name"] ?></td>
                                <td><?php echo $user["age"] ?></td>
                                <td><?php echo $user["email"] ?></td>
                                <td><?php echo $user["telephone"] ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>
