<?php include 'big-config.php'?>

<!-- START HEADER INCLUDE FILE -->
<!DOCTYPE html>
<html>

<head>
    <title>
        <?=$title?>
    </title>
    <meta name="viewport" content="width=device-width" />
    <meta name="robots" content="noindex,nofollow" />
    <meta charset="utf-8">
<!--    <script src="https://use.fontawesome.com/6a71565c22.js"></script>-->
    <link rel="stylesheet" href="css/nav.css" />
    <link rel="stylesheet" href="css/big.css" />
    <link rel="stylesheet" href="css/form.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    
    <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
    <script src="https://s3.amazonaws.com/menumaker/menumaker.min.js" type="text/javascript"></script>
    <script src="js/script.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>
</head>

<body>
    <div class="wrapper">
        <header>
            <h1><a href="index.php"><i class="logo fa <?=$logo?> "></i> Jesse Hernandez Web Dev Examples &amp; More!</a></h1>
            <nav id="cssmenu">
                <ul>
                    <li><a href="../index.php"><span><i class="fa fa-fw fa-bank"></i> WEB120 Portal</span></a></li>
                    <li><a href="index.php"><span><i class="fa fa-fw fa-home"></i> Home</span></a></li>
                    <li><a href="flexbox.php"><span>Flexbox</span></a></li>
                    <li><a href="galleries.php"><span>Galleries</span></a></li>
                    <li><a href="google.php"><span><i class="fa fa-fw fa-chevron-down"></i> Google</span></a>
                        <ul>
                            <li><a href="calendar.php"><span>Calendar</span></a></li>
                            <li><a href="map.php"><span>Map</span></a></li>
                            <li><a href="youtube.php"><span>YouTube</span></a></li>
                        </ul>
                    </li>
                    <li><a href="parallax.php"><span>Parallax</span></a></li>
                    <li><a href="shoppingcarts.php"><span>Shopping Carts</span></a></li>
                    <li><a href="siteapp.php"><span>Site vs App</span></a></li>
                    <li><a href="webcam.php"><span>Web Cam</span></a></li>
                </ul>
            </nav>
        </header>

        <section>
            <h2 class="pageID">
                <?=$PageID?>
            </h2>
            <!-- END HEADER INCLUDE FILE -->
