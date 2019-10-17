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
    <link rel="stylesheet" href="administrator/admin_styles/top_bar.css">
    <link rel="stylesheet" href="styles/links.css">
    <link rel="stylesheet" href="styles/nav_bar.css">
    <link rel="stylesheet" href="styles/separator.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/operators.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <title>
        <?php
            require_once "administrator/get_page_title.php";
            echo $page_title;
        ?>
    </title>
</head>
<body>

    <div id="screen_dimming"></div>

    <header class="bg_00">
        <nav id="nav_horizontal_panel">
            <img class="slide_menu_button show_vertical_panel" src="images/slide_menu_light.svg">
            <div class="nav_button left" onclick="scroll_to('#sec_01');">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $title_sec_01;
                ?>
                <hr>
            </div>
            <div class="nav_button left" onclick="scroll_to('#sec_02');">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $title_sec_02;
                ?>
                <hr>
            </div>
            <div class="nav_button left" onclick="scroll_to('#sec_03');">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $title_sec_03;
                ?>
                <hr>
            </div>
            <div id="nav_logo" class="right" onclick="location.href = 'index.php'">
                <?php
                    require_once "administrator/get_page_title.php";
                    echo $page_title;
                ?>
            </div>
            <?php
                if ( isset($_SESSION['logged']) )
                {
                    echo '<div class="nav_button right" onclick="location.href = `administrator/admin_panel.php`">Admin panel<hr></div>';
                    echo '<div class="nav_button right" onclick="location.href = `administrator/logout.php`">Logout<hr></div>';
                }
            ?>
        </nav>
        <article>
            <div class="welcome_text text_center">
                <?php
                    require_once "administrator/get_welcome_content.php";
                    echo $welcome_content;
                ?>
            </div>
        </div>
    </header>

    <div class="separator">
        <div class="separator_title" id="sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
    </div>

    <section class="bg_01">
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $content_sec_01;
                ?>
            </div>
        </div>
    </section>

    <div class="separator" id="sec_02">
        <div class="separator_title">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
    </div>

    <section class="bg_02">
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $content_sec_02;
                ?>
            </div>
        </div>
    </section>

    <div class="separator" id="sec_03">
        <div class="separator_title">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
    </div>

    <section class="bg_03">
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $content_sec_03;
                ?>
            </div>
        </div>
    </section>

    <footer>
        <div class="footer_content">
            <div class="footer_row">
                Street address:
            </div>
            <div class="footer_row">
                Phone number:
            </div>
        </div>

        <hr>
        <div id="media_links">
            <div class="miedia_links_item">
                <img src="images/social_media/facebook-brands.svg">
                <hr>
            </div>
            <div class="miedia_links_item">
                <img src="images/social_media/twitter-brands.svg">
                <hr>
            </div>
            <div class="miedia_links_item">
                <img src="images/social_media/linkedin-brands.svg">
                <hr>
            </div>
            <div class="miedia_links_item">
                <img src="images/social_media/github-brands.svg">
                <hr>
            </div>
        </div>
    </footer>





    <nav id="slide_horizontal_panel">
        <img class="slide_menu_button show_vertical_panel" src="images/slide_menu_dark.svg">
        <div id="slide_nav_logo" class="right" onclick="location.href = 'index.php'">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="nav_button left" onclick="scroll_to('#sec_01');">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
            <hr>
        </div>
        <div class="nav_button left" onclick="scroll_to('#sec_02');">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
            <hr>
        </div>
        <div class="nav_button left" onclick="scroll_to('#sec_03');">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
            <hr>
        </div>
        <?php
            if ( isset($_SESSION['logged']) )
            {
                echo '<div class="nav_button right" onclick="location.href = `administrator/admin_panel.php`">Admin panel<hr></div>';
                echo '<div class="nav_button right" onclick="location.href = `administrator/logout.php`">Logout<hr></div>';
            }
        ?>
    </nav>

    <nav id="nav_vertical_panel">
        <img id="hide_vertical_panel" class="slide_menu_button" src="images/slide_menu_dark.svg">
        <div id="slide_nav_logo" class="right" onclick="location.href = 'index.php'">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="nav_vertical_button" id="button_sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="nav_vertical_button" id="button_sec_02">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="nav_vertical_button" id="button_sec_03">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
    </nav>

    <script src="scripts/main.js"></script>
</body>
</html>