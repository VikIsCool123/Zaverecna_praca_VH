<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-ty" background="images/TYimage.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <nav class="navbar navbar-expand-lg sticky-top"><!--The navbar thats used to navigate the webpage.-->
            <div class="container-fluid">
                <div class="container-logo"><!--A separate conainer(div) thats created to house the logo.-->
                    <a class="navbar-brand" href="#">
                        <img class="logo" alt="logo for the company, a blue wawe with LuiRC written next to it" src="images/Logo.png"><!--The logo itself.-->
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button><!--A button to acess the hamburger menu.-->
                <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Home part of the webpage.-->
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                        <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the About us part of the webpage.-->
                        <a class="nav-link" href="about_us.html">About us</a>
                    </li>
                    <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Veriety (i tiped it wrong in the style) part of the webpage.-->
                        <a class="nav-link" href="variety.html">Veriety</a>
                    </li>
                    <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                        <a class="nav-link" href="reservation.html">Reservation</a>
                    </li>
                </ul>
                </div>
            </div>
        </nav>
        <div class="container-section-thanks">
            <div class="container-thanks"><!--Container for the thank you text.-->
                <h1>Thank you for chooseing LuiRC as your relaxation place.</h1>
            </div>
        </div>
        <div class="img-thanks-container"><!--Container for the thank you image.-->
            <img class="img-ty" src="images/tumbsup2.png" alt="a smiley thats doing a thumbs up as a thank you">
        </div>
        <div class="container-footer"><!--The footer of the webpage.-->
            <p>(this is the footer)This site was created by: Viktor Horvath, it was created as an end project for the class thats called jazyky webu. Its about a relaxation place called LuiRC as in Luises Relaxation Center.</p>
        </div>
    </body>
</html>