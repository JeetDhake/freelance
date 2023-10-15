<?php
include('../web/connect.php');
include('../web/common_function.php');
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buyer</title>
    <link rel="stylesheet" href="buyer.css">
</head>

<body>

    <div class="header">
        <div class="container">
            <div class="navbar">
                <div class="logo">
                    <img src="../web/image/logo.png" alt="">
                </div>

                <nav>
                    <ul>
                        <li><a href="">home</a></li>
                        <li><a href="">product</a></li>
                        <li><a href="">about</a></li>
                        <li><a href="">contact</a></li>
                        <li><a href="">account</a></li>

                    </ul>
                </nav>
                <img src="../web/image/about.png" alt="" class="icon-img">
            </div>

            <div class="row">

                <div class="col-2">
                    <h1>Lost n Found <br>freelancing </h1>
                    <p>you heard it right this is a paragraph <br> a line no design
                    </p>
                    <a href="" class="btn">explore now</a>
                </div>
                <div class="col-2">
                    <img src="../web/image/as1.png" alt="">
                </div>

            </div>

        </div>
    </div>

    <div class="categories">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <img src="../web/image/comp.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="../web/image/design.jpg" alt="">
                </div>
                <div class="col-3">
                    <img src="../web/image/illus.png" alt="">
                </div>
            </div>
        </div>

    </div>

    <div class="small-container">
        <h2 class="title">Featured products</h2>
        <div class="row">

            <?php

            getgigbuy();
            
            ?>

        </div>



    </div>

    <div class="offer">
        <div class="small-container">
            <div class="row">
                <div class="col-2">
                    <img src="../web/image/illus.png" class="offer-img" alt="">
                </div>
                <div class="col-2">
                    <p>this is the exclusive product</p>
                    <h1>
                        the product
                    </h1>
                    <small>yes mf you read it right this is the exclusive product of all time</small>
                    <a href="" class="btn">buy now</a>
                </div>
            </div>
        </div>
    </div>


    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>this is the paragraph to read with your eyes, it is a review dont took it too personal</p>
                    <img src="../web/image/profile3.png" alt="">
                    <h3>my name</h3>
                </div>
                <div class="col-3">
                    <p>this is the paragraph to read with your eyes, it is a review dont took it too personal</p>
                    <img src="../web/image/profile4.png" alt="">
                    <h3>my name</h3>
                </div>
                <div class="col-3">
                    <p>this is the paragraph to read with your eyes, it is a review dont took it too personal</p>
                    <img src="../web/image/profile2.png" alt="">
                    <h3>my name</h3>
                </div>
            </div>
        </div>
    </div>


    <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="../web/image/about.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../web/image/about.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../web/image/about.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../web/image/about.png" alt="">
                </div>
                <div class="col-5">
                    <img src="../web/image/about.png" alt="">
                </div>
            </div>
        </div>
    </div>


    <section class="footer">

        <footer>
            <div class="container">
                <div class="sec aboutus">
                    <h2>aboutus</h2>
                    <p>lost&found lost&found lost&found lost&found lost&found lost&found lost&found lost&found lost&found</p>

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