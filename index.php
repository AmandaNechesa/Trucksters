<?php
include "dbconnector.php";
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Trucksters</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <link href="img/favicon.png" rel="icon">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Montserrat:300,400,500,700"
          rel="stylesheet">

    <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

</head>

<body>

<header id="header">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="#intro" class="scrollto">Trucksters</a></h1>

        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">

                <li class="menu-active"><a href="#intro">Home</a></li>


                <li><a href="#posts">Posts</a></li>
                <li><a href="#team">Team</a></li>
                <li class="menu-has-children"><a href="">Categories</a>
                    <ul>
                        <?php
                        $rescat = $connection->conn->query("SELECT name FROM trucksterscategories");
                        while ($row = $rescat->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <li>
                                <a href="categories.php?category=<?php echo $row->name; ?>"><?php echo strtoupper($row->name); ?></a>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>
<section id="intro">
    <div class="intro-container">
        <div id="introCarousel" class="carousel  slide carousel-fade" data-ride="carousel">

            <ol class="carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <div class="carousel-item active">
                    <div class="carousel-background"><img src="img/intro-carousel/5.jpeg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>We offer transport for anything</h2>
                            <p>
                                We offer moving services with our drivers
                                <a href="post/" class="btn-get-started scrollto">REGISTER VEHICLE</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/5.jpeg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>We value your safety </h2>
                            <p>
                                Our drivers are qualified for the job
                            </p>
                            <a href="post/" class="btn-get-started scrollto">REGISTER VEHICLE</a>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="carousel-background"><img src="img/intro-carousel/5.jpeg" alt=""></div>
                    <div class="carousel-container">
                        <div class="carousel-content">
                            <h2>We offer jobs</h2>
                            <p>
                                Do not let your vehicle stay idle as you wait for a job.Register with us and get a job
                            </p>
                            <a href="post/" class="btn-get-started scrollto">Upload</a>
                        </div>
                    </div>
                </div>


            </div>

            <a class="carousel-control-prev" href="#introCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon ion-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>

            <a class="carousel-control-next" href="#introCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon ion-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

        </div>
    </div>
</section>

<main id="main">



    <section id="posts" class="section-bg">
        <div class="container">

            <header class="section-header">
                <h3 class="section-title">OUR RIDES</h3>
            </header>

            <div class="row">
                <div class="col-lg-12">
                    <ul id="portfolio-flters">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                        $rescat1 = $connection->conn->query("SELECT name FROM trucksterscategories");
                        while ($row1 = $rescat1->fetch(PDO::FETCH_OBJ)) {
                            ?>
                            <li data-filter='.filter-app'><a href="categories.php?category=<?php echo $row1->name; ?>"
                                                             style="color:black"><?php echo strtoupper($row1->name); ?></a>
                            </li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="row portfolio-container">

                <?php
                $resu = $connection->fetchProducts();
                while ($rows2 = $resu->fetch(PDO::FETCH_OBJ)) {

                    ?>
                    <div class="col-lg-4 col-md-6 portfolio-item filter-app wow fadeInRight " data-wow-delay="0.1s">
                        <div class="portfolio-wrap">
                            <figure>
                                <img src="<?php echo 'post/' . $rows2->pic ?>" class="img-fluid" height="100%" alt="">
                                <a href="<?php echo 'post/' . $rows2->pic ?>" data-lightbox="portfolio"
                                   data-title="<?php echo $rows2->name; ?>" class="link-preview" title="Preview"><i
                                            class="ion ion-eye"></i></a>
<!--                                <a href="details.php?uploader=--><?php //echo $rows2->uploaderid; ?><!--" class="link-details"-->
<!--                                   title="More Details"><i class="ion ion-android-open"></i></a>-->
                            </figure>

                            <div class="portfolio-info">
                                <h4><a href="#"><?php echo "Name :".$rows2->name; ?></a></h4>
                                <h4><a href="tel:<?php echo  $rows2->quantity; ?>"><?php echo "Contact :". $rows2->quantity; ?></a></h4>

                                <h4><a href="#"><?php echo "Price :". $rows2->price; ?></a></h4>


                                <?php
                                $sqlcode = "SELECT * FROM trucksterscategories WHERE id=$rows2->categoryid";
                                $result = $connection->conn->query($sqlcode);
                                while ($rowres = $result->fetch(PDO::FETCH_OBJ)) {
//                                    echo "<p>$rowres->name</p>";
                                }
                                ?>
                            </div>
                        </div>
                    </div>

                    <?php
                }

                ?>


            </div>

        </div>
    </section>
    <section id="testimonials" class="section-bg wow fadeInUp">
        <div class="container">

            <header class="section-header">
                <h3>Testimonials</h3>
            </header>

            <div class="owl-carousel testimonials-carousel">

                <div class="testimonial-item">
                    <img src="img/steve.jpg" class="testimonial-img" alt="">
                    <h3>Alfred Muema</h3>
                    <h4>ACCOUNT</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Aenean mauris lacus, condimentum sit amet neque vitae, imperdiet condimentum nunc. Nulla at
                        mollis massa. Cras sit amet elit gravida, commodo odio ut, molestie nisl. Praesent cursus
                        euismod fermentum. Pellentesque ut magna quis lacus rutrum interdum. Quisque diam nisi, volutpat
                        id erat eu, vulputate placerat eros. Maecenas ut orci interdum, vehicula odio nec, ultrices
                        ipsum.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>

                <div class="testimonial-item">
                    <img src="img/anon.jpg" class="testimonial-img" alt="">
                    <h3>Alvin Njeru</h3>
                    <h4>Farmer</h4>
                    <p>
                        <img src="img/quote-sign-left.png" class="quote-sign-left" alt="">
                        Aenean mauris lacus, condimentum sit amet neque vitae, imperdiet condimentum nunc. Nulla at
                        mollis massa. Cras sit amet elit gravida, commodo odio ut, molestie nisl. Praesent cursus
                        euismod fermentum. Pellentesque ut magna quis lacus rutrum interdum. Quisque diam nisi, volutpat
                        id erat eu, vulputate placerat eros. Maecenas ut orci interdum, vehicula odio nec, ultrices
                        ipsum.
                        <img src="img/quote-sign-right.png" class="quote-sign-right" alt="">
                    </p>
                </div>


            </div>

        </div>
    </section>
    <section id="team">
        <div class="container">
            <div class="section-header wow fadeInUp">
                <h3>Our Team</h3>
                <p>
                    Meet our team</p>
            </div>

            <div class="row">

                <div class="col-lg-4 col-md-6 wow fadeInDown">
                    <div class="member">
                        <img src="img/steve.jpg" class="img-fluid" style="height: 250px;" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="mailto:muemasn@nanotechsoftwares.co.ke">Steve</a></h4>
                                <span>Founder of nanotech softwares</span>
                                <div class="social">
                                    <a href="http://nanotechsoftwares.co.ke"><i class="fa fa-chain"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="member">
                        <img src="img/steve.jpg" class="img-fluid" style="height: 250px;" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="mailto:michellemwende@nanotechsoftwares.co.ke ">Michelle</a></h4>
                                <span>Co-founder of nanotech softwares and programmer</span>
                                <div class="social">
                                    <a href="http://nanotechsoftwares.co.ke"><i class="fa fa-chain"></i></a>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInDown" data-wow-delay="0.2s">
                    <div class="member">
                        <img src="img/gedaliah.jpeg" class="img-fluid" style="height: 250px;" alt="">
                        <div class="member-info">
                            <div class="member-info-content">
                                <h4><a href="mailto:muemasn@nanotechsoftwares.co.ke">Gedaliah</a></h4>

                                <span>System Administrator</span>

                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </section>
    <section id="contact" class="section-bg wow fadeInUp">
        <div class="container">

            <div class="section-header">
                <h3>Contact Us</h3>
                <p>
                    Feel free to come by and have a cup of coffee as we discuss business </p>
            </div>

            <div class="row contact-info">

                <div class="col-md-6">
                    <div class="contact-phone">
                        <i class="ion-ios-telephone-outline"></i>
                        <h3>Phone Number</h3>
                        <p><a href="tel:+254702653268">+254702653268</a></p>
                        <p><a href="tel:+254729405339">+254729405339</a></p>

                    </div>
                </div>

                <div class="col-md-6">
                    <div class="contact-email">
                        <i class="ion-ios-email-outline"></i>
                        <h3>Email</h3>
                        <p><a href="mailto:muemasn@nanotechsoftwares.co.ke">Reach Steve</a></p>
                        <p><a href="mailto:muemasn@nanotechsoftwares.co.ke">Reach Gedaliah</a></p>
                    </div>

                </div>

            </div>

            <div class="form">

                <form action="mail.php" method="post">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                   data-rule="minlen:4" data-msg="Please enter at least 4 chars"/>
                            <div class="validation"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                   data-rule="email" data-msg="Please enter a valid email"/>
                            <div class="validation"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                               data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject"/>
                        <div class="validation"></div>
                    </div>
                    <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" data-rule="required"
                                  data-msg="Please write something for us" placeholder="Message"></textarea>
                        <div class="validation"></div>
                    </div>
                    <div class="text-center">
                        <button type="submit">Send Message</button>
                    </div>
                </form>
            </div>

        </div>
    </section>

</main>


<footer id="footer">


    <div class="container">
        <div class="copyright">
            &copy; Copyright<?php echo " 2017 - " . date("Y") ?> <strong>Trucksters</strong>. All Rights Reserved
        </div>
        <div class="credits">

            Designed by <a href="http://nanotechsoftwares.co.ke">Nanotech softwares</a>
        </div>
    </div>
</footer>

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/isotope/isotope.pkgd.min.js"></script>
<script src="lib/lightbox/js/lightbox.min.js"></script>
<script src="lib/touchSwipe/jquery.touchSwipe.min.js"></script>
<script src="contactform/contactform.js"></script>
<script src="js/main.js"></script>

</body>
</html>
