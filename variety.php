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
        <nav class="navbar navbar-expand-lg  sticky-top"><!--The navbar thats used to navigate the webpage.-->
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
        <div class="container-cards"><!--Container for the cards.-->
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about yoga.-->
                            <h5 class="card-title">Yoga</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/yoga.jpg" class="img-fluid rounded-start" alt="a pickture about a woman doing a yoga pose">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about sauna.-->
                            <h5 class="card-title">Sauna</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/sauna.jpg" class="img-fluid rounded-start" alt="a pickture of a couple hugging and smileing in a sauna">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about massage.-->
                            <h5 class="card-title">Massage</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/massage.jpg" class="img-fluid rounded-start" alt="a pickture about a person having a massage">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about spa.-->
                            <h5 class="card-title">Spa</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/spa.jpg" class="img-fluid rounded-start" alt="a pickture of a person relaxing in a spa">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about relaxation.-->
                            <h5 class="card-title">Relaxation</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/relax.jpg" class="img-fluid rounded-start" alt="a pickture of a person relaxing">
                    </div>
                </div>
            </div>
            <div class="card mb-3">
                <div class="row g-0">
                    <div class="col-md-8">
                        <div class="card-body"><!--Card about meditation.-->
                            <h5 class="card-title">Meditation</h5>
                            <p class="card-text">Morbi iaculis eu libero posuere tincidunt. Donec sit amet eleifend dui. Suspendisse velit nulla, aliquet nec lectus ac, ultricies commodo nulla. Sed ultrices lectus ac velit tempor, id vehicula ligula lacinia. Ut vitae pulvinar turpis, in ullamcorper nulla. Aenean ut augue lectus. Nulla vestibulum bibendum consequat. Proin sapien elit, consectetur ut tristique at, euismod vel diam. Integer vitae nisi quis velit mollis auctor ac id tellus. Praesent porttitor, lacus vitae consectetur sagittis, erat ex elementum ex, eu condimentum massa risus sit amet ante. Integer hendrerit lacus ac arcu consequat, nec sodales nunc venenatis. Sed vestibulum felis eu sapien imperdiet iaculis. In lobortis pharetra justo. Donec fringilla sodales condimentum. Praesent felis lorem, ornare ut ipsum eget, suscipit varius diam.</p>
                            <p class="card-text"><small class="text-body-secondary">put in date and time</small></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img src="images/meditation.jpg" class="img-fluid rounded-start" alt="pickture of a person meditating">
                    </div>
                </div>
            </div>
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
        <div class="container-footer"><!--The footer of the webpage.-->
            <p>(this is the footer)This site was created by: Viktor Horvath, it was created as an end project for the class thats called jazyky webu. Its about a relaxation place called LuiRC as in Luises Relaxation Center.</p>
        </div>
    </body>
</html>