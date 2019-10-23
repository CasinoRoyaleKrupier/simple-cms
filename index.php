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
    <link rel="stylesheet" href="styles/nav_bar.css">
    <link rel="stylesheet" href="styles/separator.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/operators.css">
    <link rel="stylesheet" href="styles/button.css">
    <link rel="stylesheet" href="styles/page_name.css">
    <link rel="stylesheet" href="styles/header.css">

    <!-- <script src="scripts/lib/jquery-3.4.1.min.js"></script> -->
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js"></script>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

    <style>
        <?php require_once "administrator/get_css_styles.php"; echo $style; ?>
    </style>

    <title>
        <?php
            require_once "administrator/get_page_title.php";
            echo $page_title;
        ?>
    </title>
</head>
<body><div id="screen_dimming"></div>

    <header class="bg_00">
        <nav id="nav_horizontal_panel">
            <img class="slide_menu_button show_vertical_panel" src="images/slide_menu_light.svg">
            <div class="button left" onclick="scroll_to('#sec_01');">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $title_sec_01;
                ?>
            </div>
            <div class="button left" onclick="scroll_to('#sec_02');">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $title_sec_02;
                ?>
            </div>
            <div class="button left" onclick="scroll_to('#sec_03');">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $title_sec_03;
                ?>
            </div>
            <div class="page_name right" onclick="location.href = 'index.php'">
                <?php
                    require_once "administrator/get_page_title.php";
                    echo $page_title;
                ?>
            </div>
            <?php
                if ( isset($_SESSION['logged']) )
                {
                    echo '<div class="button right" onclick="location.href = `administrator/admin_panel.php`">Admin panel</div>';
                    echo '<div class="button right" onclick="location.href = `administrator/logout.php`">Logout</div>';
                }
            ?>
        </nav>
        <article>
        <div id="header_content">
            <div class="header_item_1">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_1;
                ?>
            </div>
            <div class="header_item_2">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_2;
                ?>
            </div>
            <div class="header_item_3">
                <?php
                    require_once "administrator/get_header_content.php";
                    echo $header_content_3;
                ?>
            </div>
        </div>
        </div>
        <div id="previous_content" class="button_left_arrow left">
            <img src="images/icons/left-arrow-light.svg">
        </div>
        <div id="next_content" class="button_right_arrow right">
            <img src="images/icons/right-arrow-light.svg">
        </div>
    </header>

    <div class="separator">
        <div class="separator_title" id="sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div> <hr>
    </div>

    <section>
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
        <hr>
    </div>

    <section>
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
        <hr>
    </div>

    <section>
        <article>
            <div class="content_text text_just">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $content_sec_03;
                ?>
            </div>
        </section>
    </section>

    <footer>
        <hr>
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
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/facebook.svg">
                </a>
            </div>
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/twitter.svg">
                </a>
            </div>
            <div class="button left">
                <a href="#">
                    <img src="images/social_media/linkedin.svg">
                </a>
            </div>
            <div class="button left">
                <a href="https://github.com/CasinoRoyaleKrupier/simple-cms">
                    <img src="images/social_media/github.svg">
                </a>
            </div>
        </div>
    </footer>


    <nav id="slide_horizontal_panel">
        <img class="slide_menu_button show_vertical_panel" src="images/slide_menu_dark.svg">
        <div class="page_name right" onclick="location.href = 'index.php'">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="button left" onclick="scroll_to('#sec_01');">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="button left" onclick="scroll_to('#sec_02');">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="button left" onclick="scroll_to('#sec_03');">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
        <?php
            if ( isset($_SESSION['logged']) )
            {
                echo '<div class="button right" onclick="location.href = `administrator/admin_panel.php`">Admin panel</div>';
                echo '<div class="button right" onclick="location.href = `administrator/logout.php`">Logout</div>';
            }
        ?>
    </nav>

    <nav id="nav_vertical_panel">
        <img id="hide_vertical_panel" class="slide_menu_button" src="images/slide_menu_dark.svg">
        <div class="page_name right" onclick="location.href = 'index.php'">
            <?php
                require_once "administrator/get_page_title.php";
                echo $page_title;
            ?>
        </div>
        <div class="button" style="margin-top: 80px" id="button_sec_01">
            <?php
                require_once "administrator/get_section_01_content.php";
                echo $title_sec_01;
            ?>
        </div>
        <div class="button" id="button_sec_02">
            <?php
                require_once "administrator/get_section_02_content.php";
                echo $title_sec_02;
            ?>
        </div>
        <div class="button" id="button_sec_03">
            <?php
                require_once "administrator/get_section_03_content.php";
                echo $title_sec_03;
            ?>
        </div>
        <?php
            if ( isset($_SESSION['logged']) )
            {
                echo '<div class="button" onclick="location.href = `administrator/admin_panel.php`">Admin panel</div>';
                echo '<div class="button" onclick="location.href = `administrator/logout.php`">Logout</div>';
            }
        ?>
    </nav>

    <script src="scripts/jquery_functions.js"></script>
    <script src="scripts/others_functions.js"></script>
    <script src="scripts/header_functions.js"></script>
    <script src="scripts/scroll_reveal.js"></script>
</body>
</html>