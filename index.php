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
    <link rel="stylesheet" href="administrator/admin_styles/top_bar.css">
    <link rel="stylesheet" href="styles/links.css">
    <link rel="stylesheet" href="styles/nav_bar.css">
    <link rel="stylesheet" href="styles/separator.css">

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <title>
        <?php
            require_once "administrator/get_page_title.php";
            echo $page_title;
        ?>
    </title>
</head>
<body>

    <div id="container">

        <div id="screen_dimming"></div>
        <div class="container_section bg_00">
            <div id="nav_horizontal_panel">
                <img id="show_vertical_panel" class="slide_menu_button" src="images/slide_menu_light.svg">
                <div class="nav_button left" id="button_sec_01">
                    <a href="javascript:void();" onclick="scroll_to('#sec_01');">
                        <?php
                            require_once "administrator/get_section_01_content.php";
                            echo $title_sec_01;
                        ?>
                    </a>
                </div>
                <div class="nav_button left" id="button_sec_02">
                    <a href="javascript:void();" onclick="scroll_to('#sec_02');">
                        <?php
                            require_once "administrator/get_section_02_content.php";
                            echo $title_sec_02;
                        ?>
                    </a>
                </div>
                <div class="nav_button left" id="button_sec_03">
                    <a href="javascript:void();" onclick="scroll_to('#sec_03');">
                        <?php
                            require_once "administrator/get_section_03_content.php";
                            echo $title_sec_03;
                        ?>
                    </a>
                </div>
                <div id="nav_logo" class="right">
                    <?php
                        require_once "administrator/get_page_title.php";
                        echo $page_title;
                    ?>
                </div>
            </div>
            <div class="content">
                <div class="welcome_text text_center">
                    <?php
                        require_once "administrator/get_welcome_content.php";
                        echo $welcome_content;
                    ?>
                </div>
            </div>
        </div>

        <div class="separator">
            <div class="separator_title" id="sec_01">
                <?php
                    require_once "administrator/get_section_01_content.php";
                    echo $title_sec_01;
                ?>
            </div>
        </div>

        <div class="container_section bg_01">
            <div class="content">
                <div class="content_text text_just">
                    <?php
                        require_once "administrator/get_section_01_content.php";
                        echo $content_sec_01;
                    ?>
                </div>
            </div>
        </div>

        <div class="separator" id="sec_02">
            <div class="separator_title">
                <?php
                    require_once "administrator/get_section_02_content.php";
                    echo $title_sec_02;
                ?>
            </div>
        </div>

        <div class="container_section bg_02">
            <div class="content">
                <div class="content_text text_just">
                    <?php
                        require_once "administrator/get_section_02_content.php";
                        echo $content_sec_02;
                    ?>
                </div>
            </div>
        </div>

        <div class="separator" id="sec_03">
            <div class="separator_title">
                <?php
                    require_once "administrator/get_section_03_content.php";
                    echo $title_sec_03;
                ?>
            </div>
        </div>

        <div class="container_section bg_03">
            <div class="content">
                <div class="content_text text_just">
                    <?php
                        require_once "administrator/get_section_03_content.php";
                        echo $content_sec_03;
                    ?>
                </div>
            </div>
        </div>

    </div>

    <div id="nav_vertical_panel">
        <img id="hide_vertical_panel" class="slide_menu_button" src="images/slide_menu_light.svg">
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
    </div>


    <script src="scripts/main.js"></script>
</body>
</html>