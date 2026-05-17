<!doctype html>
<html lang="en">
    <head><!--The head of the webpage where all the links are stored.-->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>LuiRC - About us</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
        <link rel="stylesheet" href="Style/style.css"><!--The link/path to the style file with all the styles used to style the webpage.-->
    </head>
    <body class="body-about-us" background="images/candles.png"><!--The body of the webpage that has an image as the bacground.-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
        <?php include "parts/header.php"?>
        <div class="container-section2"><!--Container that acts like the body for all the elements after the navbar except the footer.-->
            <div class="container2">
                <div class="container-about-texts">
                    <h1>About LuiRC</h1>
                    <div class="accordion" id="accordionExample"><!--Accordions.-->
                        <div class="accordion-item">
                            <h2 class="accordion-header"><!--First accordion item with text.-->
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                History
                            </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Luises Relaxation Center began over a decade ago as a small family-run wellness space with a simple goal — to create a peaceful retreat where people could escape the stress of everyday life. Inspired by traditional relaxation techniques and a love for calm, welcoming environments, the center slowly became known for its warm atmosphere and personal care.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><!--Second accordion item with text.-->
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Location
                            </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Located in the peaceful countryside of Valhalla, Luises Relaxation Center is surrounded by breathtaking natural beauty, fresh mountain air, and a calm atmosphere perfect for relaxation. Inspired by the tranquility of Nordic landscapes, the center offers guests a quiet escape where they can unwind, recharge, and enjoy a sense of balance far away from the stress of everyday life.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header"><!--Third accordion item with text.-->
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    Personnel
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    At Luises Relaxation Center, our friendly and experienced personnel are dedicated to creating a calm and welcoming experience for every guest. From relaxation specialists to wellness staff, each team member is committed to providing attentive care, professionalism, and comfort. Their passion for wellness and hospitality helps ensure that every visit feels peaceful, refreshing, and truly relaxing.
                                </div>
                            </div>
                        </div>
                    </div>
                    <h1>Our contacts</h1>
                    <div class="container-ul"><!--The container with the links.-->
                        <ul>
                            <li><a href="mailto:support@LuiRC.com">Our Email address</a></li>
                            <li><a href="tel:0983974437">Phone number</a></li>  
                            <li><a href="https://www.google.com/maps/place/Apple+Thai+Massage+Senec/@48.219543,17.3668922,14z/data=!4m9!1m2!2m1!1sspa!3m5!1s0x476c9d3beeb856b9:0xa7b094e3f0d407b6!8m2!3d48.2195426!4d17.405001!16s%2Fg%2F11flc3yrst?entry=ttu&g_ep=EgoyMDI1MTIwMi4wIKXMDSoASAFQAw%3D%3D">Adress</a></li>
                        </ul>
                    </div>
                    <h1>Veriety of our services</h1><!--Paragraph of text a Learn more button that is actually not a button but an ,, a ,, with style like a button.-->
                    <p class="p1">Continue on to our wide variety of programs designed to help you relax, recharge, and enjoy a personalized wellness experience tailored to your needs.</p>
                    <a href="variety.php" class="about-us-button">Learn More</a>
                </div>
            </div>
        </div>
        <?php include "parts/footer.php"?>
    </body>
</html>