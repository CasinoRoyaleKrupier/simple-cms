<?php

    session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="icon" href="images/favicon.png" sizes="16x16" type="image/png">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles/main.css">
    <link rel="stylesheet" href="styles/scrollbar.css">
    <link rel="stylesheet" href="styles/max_width_1300.css">
    <link rel="stylesheet" href="styles/max_width_1000.css">
    <link rel="stylesheet" href="administrator/admin_styles/top_bar.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <?php
        if ( isset($_SESSION['logged']) )
        {
            $display = "block;";
            $nav_margin = "40px;";
            $content_margin = "40px;";
        }
        else
        {
            $display = "none;";
            $nav_margin = "0;";
            $content_margin = "0;";
        }
    ?>

    <style>
        #top_bar
        {
            display: <?php echo $display; ?>;
        }

        #nav_section
        {
            margin-top: <?php echo $nav_margin; ?>;
        }

        #container
        {
            margin-top: <?php echo $content_margin; ?>;
        }
    </style>

    <title>systeminfo</title>
</head>
<body>
    <div id="top_bar">
        <div class="top_bar_button left">
            <a href="index.php">Test site</a>
        </div>
        <div class="top_bar_button left">
            <a href="administrator/index.php">Admin panel</a>
        </div>
        <div class="top_bar_button right">
            <a href="administrator/logout.php">Log out</a>
        </div>
        <div class="top_bar_button right">
            <a href="#">
                <?php echo $_SESSION['user'] . ""; ?>
            </a>
        </div>
    </div>

    <div id="nav_section">
        <div id="logo"><a href="index.php">systeminfo</a></div>
        <div id="nav_list_menu_button"><img src="images/nav-menu-button.svg"></div>

        <div id="nav_menu_buttons">
            <div class="section-button" id="about">
                <img src="images/main_about_content.svg">
                About program
            </div>
            <div class="section-button" id="screenshots">
                <img src="images/screenshot.svg">
                Screenshots
            </div>
            <div class="section-button" id="download">
                <img src="images/download.svg">
                Download
            </div>
            <div class="section-button" id="bug_tracer">
                <img src="images/issuse.svg">
                Bug tracer
            </div>
        </div>
    </div>

    <div id="container">
            <div id="animation">
                <span class="animation_title">Example of program use</span>
                <img src="images/animation.gif" id="animation_image">
            </div>
            <div id="about_content">
                <?php
                    require_once "administrator/get_about.php";

                    echo "<h3>" . $title . "</h3><br>";
                    echo $content;
                ?>
            </div>
            <div id="screenshot_content">
                <?php
                    require_once "administrator/get_screenshot.php";

                    echo "<h3>" . $title . "</h3><br>";
                    echo $content;
                ?>
            </div>
            <div id="download_content">
                <?php
                    require_once "administrator/get_download.php";

                    echo "<h3>" . $title . "</h3><br>";
                    echo $content;
                ?>
            </div>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>