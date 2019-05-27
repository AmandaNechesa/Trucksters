<?php
include_once "../dbconnector.php";
if (isset($_POST['name'])) {
    $connection->FarmerSignUp($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['location'], $_POST['password'], $_POST['password-repeat'], $_SERVER["PHP_SELF"]);

}
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGNUP</title>
    <link rel="icon" href="../img/favicon.png">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body style="width:100%;height:100%;margin:0;padding:0;background-color:rgb(255,255,255);">
<div>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-button" style="background-color:#ff0000
        ;font-size:22px;color:rgb(0,0,0);">
        <div class="container"><a class="navbar-brand" href="#">TRUCKSTERS</a>
            <button class="navbar-toggler" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span
                        class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse"
                 id="navcol-1">
                <ul class="nav navbar-nav mr-auto">
                    <li class="nav-item" role="presentation"><a class="nav-link active" href="../"
                                                                style="color:rgb(0,0,0);">HOME</a></li>

                </ul>
                <span class="navbar-text actions"> <a href="index.php" class="login"
                                                      style="color:rgb(0,0,0);">LOG IN</a>
                       </span></div>
        </div>
    </nav>
</div>
<div class="container" style="margin:0 auto;">
    <?php
    if (isset($_SESSION['error'])) {
        echo '<div class="alert alert-danger justify-content-center align-items-center beautiful" role="alert" style="width:100%;margin:0 auto;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><strong>' . $_SESSION['error'] . '</strong></div>';
        unset($_SESSION['error']);
    } elseif (isset($_SESSION['message'])) {
        echo '<div class="alert alert-success beautiful" role="alert" style="width:100%;margin:0 auto;"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button><Strong>' . $_SESSION['message'] . '</Strong></div>';
        unset($_SESSION['message']);
    }
    ?>
</div>
<div class="register-photo" style="background-color:rgba(241,247,252,0);margin-top:2px;">
    <div class="form-container">
        <div class="image-holder"
             style="background-image:url(../img/intro-carousel/5.jpeg);"
             data-bs-hover-animate="rubberBand">

        </div>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <h2 class="text-center" id="header" style="color:rgb(0,0,0);"><strong>Create</strong> an account.</h2>
            <div class="form-group"><input class="form-control" required type="text" name="name" placeholder="Name">
            </div>

            <div class="form-group"><input class="form-control" required type="email" name="email" placeholder="Email">
            </div>
            <div class="form-group"><input class="form-control" required type="text" name="phone"
                                           placeholder="Phone number"></div>
            <div class="form-group"><input class="form-control" required type="text" name="location"
                                           placeholder="Location"></div>

            <div class="form-group"><input class="form-control" required type="password" name="password"
                                           placeholder="Password"></div>
            <div class="form-group"><input class="form-control" required type="password" name="password-repeat"
                                           placeholder="Password (repeat)"></div>
            <div class="form-group">
                <!--                    <div class="form-check"><label class="form-check-label" style="color:rgb(119,157,202);"><input class="form-check-input" type="checkbox">I agree to the license terms.</label></div>-->
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" data-bs-hover-animate="bounce"
                        style="background-color:rgb(255,0,0);">SIGN UP
                </button>
            </div>
            <a href="index.php" class="already" style="color:rgb(244,78,68);">You already have an account? Login
                here.</a></form>
    </div>
</div>
<div class="footer-basic" style="padding-top:15px;height:136px;">
    <footer>
        <div class="social" style="padding-bottom:11px;color:rgb(9,10,10);"><a href="#"
                                                                               style="width:55px;height:55px;color:rgb(10,10,10);"><i
                        class="icon ion-social-instagram"></i></a><a href="#" style="width:55px;height:55px;"><i
                        class="icon ion-social-snapchat"></i></a><a href="#" style="width:55px;height:55px;"><i
                        class="icon ion-social-twitter"></i></a>
            <a
                    href="#" style="width:55px;height:55px;"><i class="icon ion-social-facebook"></i></a>
        </div>
        <ul class="list-inline">
            <li class="list-inline-item"><a href="#">Home</a></li>
            <li class="list-inline-item"><a href="#">Services</a></li>
            <li class="list-inline-item"><a href="#">About</a></li>
            <li class="list-inline-item"><a href="#">Terms</a></li>
            <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
        </ul>
    </footer>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/js/bootstrap.bundle.min.js"></script>
<script src="assets/js/script.min.js"></script>
</body>

</html>