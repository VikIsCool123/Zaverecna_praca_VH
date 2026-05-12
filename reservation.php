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
        <?php if(!isset($_SESSION["user_id"])){
            header("Location: index.php");
        }?>
        <?php 
            $connect = mysqli_connect("localhost","root","","relaxation_center");

            if (!$connect) {
                die("Connection failed: " . mysqli_connect_error());
            }

            if (isset($_POST["res-button"])) {
                $program = $_POST["SelectProgram"];
                $time = $_POST["ChosenDate"];
                //mysqli_query($connect,"INSERT INTO reservations (user_id, program_id, time, note) VALUES('30/08/1997', '$note')");

                if (new DateTime($time) >= new DateTime()){
                    $stmt = mysqli_prepare($connect, "INSERT INTO reservations (user_id, program_id, time) VALUES (?, ?, ?)");
                    mysqli_stmt_bind_param($stmt, "sis", $_SESSION["user_id"], $program, $time);

                    if (mysqli_stmt_execute($stmt)) {
                        echo "Record inserted successfully.";
                    } else {
                        echo "Error: " . mysqli_error($connect);
                    }

                    mysqli_stmt_close($stmt);
                }
                else {
                    $error = "This date is invalid! 6767676767";
                }
            }
        ?>
        <div class="container4"><!--Container for the form.-->
            <form id="form-res" action="" method="POST"><!--The form itself.-->
                <h1>Make a reservation</h1>
                <div class="container-selection"><!--Form selection.-->
                    <label>Choose from these programs</label>
                    <select class="form-select form-select-sm" aria-label="Small select example" name="SelectProgram">
                        <option value="1">Yoga</option>
                        <option value="2">Spa</option>
                        <option value="3">Massage</option>
                        <option value="4">Sauna</option>
                        <option value="5">Natural stone relaxation</option>
                        <option value="6">Meditation</option>
                    </select>
                </div>
                <div class="date-picker-container"><!--Form selection.-->
                    <label>Choose a date</label>
                    <input type="date" name="ChosenDate"></input>
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