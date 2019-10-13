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
    <!-- <link rel="stylesheet" href="styles/scrollbar.css"> -->
    <link rel="stylesheet" href="styles/max_width_1300.css">
    <link rel="stylesheet" href="styles/max_width_1000.css">
    <link rel="stylesheet" href="administrator/admin_styles/top_bar.css">
    <link rel="stylesheet" href="styles/links.css">
    <link rel="stylesheet" href="styles/nav_bar.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <?php
        if ( isset($_SESSION['logged']) )
        {
            $display = "block";
            $nav_margin = "40px";
            $content_margin = "40px";
        }
        else
        {
            $display = "none";
            $nav_margin = "0px";
            $content_margin = "0px";
        }
    ?>

    <style>
        #top_bar
        {
            display: <?php echo $display; ?>;
        }

        #nav_vertical_panel, #nav_horizontal_panel
        {
            top: <?php echo $nav_margin; ?>;
        }

        #container
        {
            margin-top: calc(<?php echo $content_margin; ?> + 70px);
            padding: 40px;
            text-align: justify;
        }
    </style>

    <title>
        <?php
            require_once "administrator/get_page_title.php";
            echo $page_title;
        ?>
    </title>
</head>
<body>
    <div id="screen_dimming"></div>

    <div id="nav_horizontal_panel">
        <div id="logo">
            <a href="index.php">
                <?php
                    require_once "administrator/get_page_title.php";
                    echo $page_title;
                ?>
            </a>
        </div>
        <div id="nav_show_menu_button">
            <img src="images/nav-menu-button.svg">
        </div>
    </div>

    <div id="nav_vertical_panel">
        <div id="nav_hide_menu_button">
            <div id="nav_list_menu_button">
                <img src="images/nav-menu-button.svg">
            </div>
        </div>
        <div class="nav_bar_button" id="button_sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="nav_bar_button" id="button_sec_02">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="nav_bar_button" id="button_sec_03">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
    </div>

    <div id="container">
        <div class="content" id="welcone_content">
            <?php
                require_once "administrator/get_welcome_content.php";
                echo $welcome_content;
            ?>
        </div>
        <div class="content" id="section_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $content_sec_01;
            ?>
        </div>
        <div class="content" id="section_02">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $content_sec_02;
            ?>
        </div>
        <div class="content" id="section_03">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $content_sec_03;
            ?>
        </div>
    </div>

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
            <a href="administrator/user_panel.php">
                <?php echo $_SESSION['user'] . ""; ?>
            </a>
        </div>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>