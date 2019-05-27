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

<header id="header" style="background: rgba(0, 0, 0, 0.9);">
    <div class="container-fluid">

        <div id="logo" class="pull-left">
            <h1><a href="index.php" class="scrollto">Trucksters</a></h1>

        </div>

        <nav id="nav-menu-container">
            <ul class="nav-menu">

<!--                <li class="menu-active"><a href="#intro">Home</a></li>-->
<!---->
<!---->
<!--                <li><a href="#posts">Posts</a></li>-->
<!--                <li><a href="#team">Team</a></li>-->
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
            </ul>
        </nav>
    </div>
</header>




</body></html>