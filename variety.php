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

            <!-- Create the list of services dynamically from an array --->
            <?php for ($i = 0;$i < count($titles);$i++) {?>
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
        <?php include "parts/footer.php"?>
    </body>
</html>