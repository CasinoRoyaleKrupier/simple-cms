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

    <script src="scripts/jquery-3.4.1.min.js"></script>

    <title>systeminfo</title>
</head>
<body>
    <div id="container">
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
        <div id="content_section">
            <div id="animation">
                <span class="animation_title">Example of program use</span>
                <img src="images/animation.gif" id="animation_image">
            </div>
            <span id="about_content">
                <?php
                    require_once "administrator/connect.php";

                    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

                    if ($connection->connect_errno != 0)
                    {
                        echo "Error: " . $connection->connect_errno;
                    }
                    else
                    {
                        if ($result = $connection->query("SELECT * FROM about_content WHERE id = 1"))
                        {
                            $row = $result->fetch_assoc();
                            $title = $row['title'];
                            $content = $row['content'];

                            echo "<h3>" . $title . "</h3><br>";
                            echo $content;
                        }

                        $result->close();
                        $connection->close();
                    }
                ?>
            </span>
            <span id="screenshot_content">
                <?php
                    require_once "administrator/connect.php";

                    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

                    if ($connection->connect_errno != 0)
                    {
                        echo "Error: " . $connection->connect_errno;
                    }
                    else
                    {
                        if ($result = $connection->query("SELECT * FROM screenshot_content WHERE id = 1"))
                        {
                            $row = $result->fetch_assoc();
                            $title = $row['title'];
                            $content = $row['content'];

                            echo "<h3>" . $title . "</h3><br>";
                            echo $content;
                        }

                        $result->close();
                        $connection->close();
                    }
                ?>
            </span>
            <span id="download_content">
                <?php
                    require_once "administrator/connect.php";

                    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

                    if ($connection->connect_errno != 0)
                    {
                        echo "Error: " . $connection->connect_errno;
                    }
                    else
                    {
                        if ($result = $connection->query("SELECT * FROM download_content WHERE id = 1"))
                        {
                            $row = $result->fetch_assoc();
                            $title = $row['title'];
                            $content = $row['content'];

                            echo "<h3>" . $title . "</h3><br>";
                            echo $content;
                        }

                        $result->close();
                        $connection->close();
                    }
                ?>
            </span>
        </div>
    </div>

    <script src="scripts/main.js"></script>
</body>
</html>