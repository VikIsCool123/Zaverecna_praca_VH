<?php
    $connect = mysqli_connect("localhost","root","","relaxation_center");
    mysqli_query($connect,"INSERT INTO reservations VALUES('Judita Horvatova', 40, 'mamaemail@gmail.com', '0936 874 274', 'I like my son', 2, 2)");
?>
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
            <form id="form-res"><!--The form itself.-->
                <div class="conatiner-form-name">
                    <div class="mb-3"><!--Input for the Name.-->
                        <label for="exampleInputName1" class="form-label">Name</label>
                        <input type="text" class="form-control" id="exampleInputName1">
                    </div>
                </div>
                <div class="mb-3"><!--Input for the Age.-->
                    <label for="exampleInputAge1" class="form-label">Age</label>
                    <input type="number" class="form-control" id="exampleInputAge1">
                </div>
                <div class="mb-3"><!--Input for the Email address.-->
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                </div>
                <div class="mb-3"><!--Input for the Telephone number.-->
                    <label for="exampleInputTelephoneNumber1" class="form-label">Telephone number (optional)</label>
                    <input type="text" class="form-control" id="exampleInputTelephoneNumber1">
                </div>
                    <div class="mb-3"><!--Input for the text.-->
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">Enter your text here: </textarea>
                    </div>
                <div class="container-selection"><!--Form selection.-->
                    <label>Choose from theese programs</label>
                    <select class="form-select form-select-sm" aria-label="Small select example">
                        <option value="1">Yoga</option>
                        <option value="2">Spa</option>
                        <option value="3">Massage</option>
                        <option value="4">Sauna</option>
                        <option value="5">Natural stone relaxation</option>
                        <option value="6">Meditation</option>
                    </select>
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
                        <button class="btn btn-primary" id="res-button" type="submit">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <?php include "parts/footer.php"?>
        <script src="js/app.js"></script>
    </body>
</html>