        <?php session_start(); ?>
        
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
                        <?php if(!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1)): ?>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Home part of the webpage.-->
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                                <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the About us part of the webpage.-->
                                <a class="nav-link" href="about_us.php">About us</a>
                            </li>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Veriety (i tiped it wrong in the style) part of the webpage.-->
                                <a class="nav-link" href="variety.php">Variety</a>
                            </li>
                        <?php endif; ?>
                        <?php if(!isset($_SESSION["email"])): ?>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                <a class="nav-link" href="account_login.php">Log in</a>
                            </li>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                <a class="nav-link" href="account_create.php">Create Account</a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($_SESSION["email"])): ?>
                            <?php if(!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1)): ?>
                                <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                    <a class="nav-link" href="reservation.php">Reserve</a>
                                </li>
                            <?php endif; ?>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                <a class="nav-link" href="profile.php"><?php echo $_SESSION["email"] ?></a>
                            </li>
                        <?php endif; ?>
                        <?php if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1): ?>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                <a class="nav-link" href="admin_users.php">Users</a>
                            </li>
                            <li class="nav-item"><!--Menu item that acts like a button. It moves/redirects you to the Reservation part of the webpage.-->
                                <a class="nav-link" href="admin_reservations.php">Reservations</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>