<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - Variety</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-variety" background="images/vines.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <div class="container-cards"><!--Container for the cards.-->
            <?php include "parts/services.php"?>
            <?php for($i=0;$i < count($titles);$i++){?>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about yoga.-->
                            <h5 class="card-title"><?php echo $titles[$i];?></h5>
                            <p class="card-text"><?php echo $text[$i];?></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/<?php echo $images[$i];?>" class="img-fluid rounded-start">
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
        <div class="conainer-table"><!--Container for table.-->
            <table class="table"><!--The table.-->
                <thead><!--The head of the table.-->
                    <tr><!--The colums of the table.-->
                        <th scope="col"></th>
                        <th scope="col">Programs</th>
                        <th scope="col">Monday</th>
                        <th scope="col">Tuesday</th>
                        <th scope="col">Wednesday</th>
                        <th scope="col">Thrstday</th>
                        <th scope="col">Friday</th>
                    </tr>
                </thead>
                <tbody><!--The rows of the table.-->
                    <tr>
                        <th scope="row">1</th>
                        <td>Yoga</td>
                        <td>7:30-9:00</td>
                        <td>9:15-10:45</td>
                        <td></td>
                        <td></td>
                        <td>14:45-16:15</td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Sauna</td>
                        <td></td>
                        <td>9:15-10:45</td>
                        <td>11:00-12:30</td>
                        <td></td>
                        <td>14:45-16:15</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Massage</td>
                        <td>7:30-9:00</td>
                        <td>9:15-10:45</td>
                        <td></td>
                        <td>13:00-14:30</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Spa</td>
                        <td>7:30-9:00</td>
                        <td></td>
                        <td></td>
                        <td>13:00-14:30</td>
                        <td>14:45-16:15</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Relaxation</td>
                        <td></td>
                        <td></td>
                        <td>11:00-12:30</td>
                        <td>13:00-14:30</td>
                        <td></td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Meditation</td>
                        <td>7:30-9:00</td>
                        <td>9:15-10:45</td>
                        <td>11:00-12:30</td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>