        <!-- Need to get information about logged-in user -->
        <?php session_start(); ?>
        
        <nav class="navbar navbar-expand-lg sticky-top"><!--The navbar thats used to navigate the webpage.-->
            <div class="container-fluid">
                <!--A separate container(div) that's created to house the logo.-->
                <div class="container-logo">
                    <a class="navbar-brand" href="#">
                        <img class="logo" alt="logo for the company, a blue wawe with LuiRC written next to it" src="images/Logo.png"><!--The logo itself.-->
                    </a>
                </div>

                <!--A button to access the hamburger menu.-->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <!-- All general navbar links -->
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <!-- If user is logged-in and is NOT an admin, show general information -->
                        <?php if(!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1)): ?>
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                                <li class="nav-item">
                                <a class="nav-link" href="about_us.php">About us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="variety.php">Variety</a>
                            </li>
                        <?php endif; ?>
                        
                        <!-- If isn't logged-in, show Log in and Create Account links -->
                        <?php if(!isset($_SESSION["email"])): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="account_login.php">Log in</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="account_create.php">Create Account</a>
                            </li>
                        <?php endif; ?>

                        <!-- If user is logged-in -->
                        <?php if(isset($_SESSION["email"])): ?>
                            <!-- If isn't admin, show reservation link (admins can't book) -->
                            <?php if(!(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1)): ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="reservation.php">Reserve</a>
                                </li>
                            <?php endif; ?>
                            <!-- In all cases, show a link to the profile -->
                            <li class="nav-item">
                                <a class="nav-link" href="profile.php"><?php echo $_SESSION["email"] ?></a>
                            </li>
                        <?php endif; ?>

                        <!-- If is admin, show admin pages (allow viewing, editing, and deleting users and reservations) -->
                        <?php if(isset($_SESSION["is_admin"]) && $_SESSION["is_admin"] == 1): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_users.php">Users</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="admin_reservations.php">Reservations</a>
                            </li>
                        <?php endif; ?>
                    </ul>
                </div>
            </div>
        </nav>