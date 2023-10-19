<?php

session_start();

include('../web/connect.php');
?>
<htlm lang="en">


    <head>

        <meta charset="UTF-8">
        <title>landing page</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="landingpage.css">
    </head>

    <body>

        <nav id="navbar">



            <div id="logo">
                <img src="../web/image/logo.png" alt="logo">

            </div>



            <ul>

                <li class="item"><a href="#">business</a></li>
                <li class="item"><a href="#">explore</a></li>
                <li class="item"><a href="../web/becomeseller.php">seller account</a></li>
                <li class="item"><a href="../web/signin.php">sign in</a></li>

                <li>
                    <a href="../web/logout.php" class="logout-btn">
                        log out
                    </a>
                </li>



            </ul>




        </nav>
        <section id="home">

            <h1 class="h-primary">Lost And Found</h1>
            <p>hey there! Sign Up First</p>
            <p></p>
            <a href="../web/signin.php">
                <button class="btn">Join Now</button>
            </a>
        </section>

        <hr>
        <section class="service">


            <h1 class="h2-primary">Our Service</h1>

            <div id="service">

                <a href="../web/becomeseller.php" style="color:black; text-decoration: none;">
                    <div class="box">
                        <img src="../web/image/about.png" alt="service">
                        <h2 class="h-secondary">seller</h2>
                        <p class="text-center">r u looking for work, become a seller</p>
                    </div>
                </a>
                <a href="../web/buyer.php" style="color:black; text-decoration: none;">
                    <div class="box">
                        <img src="../web/image/about.png" alt="service">
                        <h2 class="h-secondary">buyer</h2>
                        <p class="text-center">searching for skills, become a buyer</p>
                    </div>
                </a>
                <a href="#" style="color:black; text-decoration: none;">
                    <div class="box">
                        <img src="../web/image/about.png" alt="service">
                        <h2 class="h-secondary">aboutus</h2>
                        <p class="text-center">who are we? what we do? read more </p>
                    </div>
                </a>

        </section>
        <section class="footer">

            <footer>
                <div class="container">
                    <div class="sec aboutus">
                        <h2>aboutus</h2>
                        <p>lost&found lost&found lost&found lost&found lost&found lost&found lost&found lost&found
                            lost&found</p>

                        <ul class=sci>
                            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="sec quicklinks">
                        <h2>quick links</h2>
                        <ul>
                            <li><a href=#>about</a></li>
                            <li><a href=#>faq</a></li>
                            <li><a href=#>privacy policy</a></li>
                            <li><a href=#>terms & conditions</a></li>
                            <li><a href=#>contact</a></li>
                        </ul>

                    </div>
                    <div class="sec contact">
                        <h2>contact info</h2>
                        <ul class="info">
                            <li>
                                <span><i class="fa fa-map-marker" aria-hidden="true"></i></span>
                                <span>house society area
                                    city state, <br> zip code, country </span>
                            </li>
                            <li>
                                <span><i class="fa fa-phone" aria-hidden="true"></i></span>

                                <p><a href="tel:xxxxxxxxxx">xxxxxxxxxx</a><br>
                                    <a href="tel:xxxxxxxxxx">xxxxxxxxxx</a>
                                </p>
                            </li>
                            <li>
                                <span><i class="fa fa-envelope" aria-hidden="true"></i></span>

                                <p><a href="mailto:xxx@email.com">xxx@email.com</a></p>

                            </li>
                        </ul>
                    </div>
                </div>
            </footer>
            <div class="copyrighttext">
                <p>copyright all right reserved.</p>
            </div>

        </section>










    </body>

    </html>