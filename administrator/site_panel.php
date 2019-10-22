<?php

    session_start();

    if ( !isset($_SESSION['logged']) )
    {
        header('Location: index.php');
        exit();
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="admin_styles/admin_panel.css">
    <link rel="stylesheet" href="admin_styles/top_bar.css">
    <link rel="stylesheet" href="admin_styles/nav_bar.css">
    <link rel="stylesheet" href="admin_styles/sections.css">
    <link rel="stylesheet" href="admin_styles/inputs.css">

    <title><?php echo $_SESSION['user'] . ""; ?> - site panel</title>
</head>
<body>
    <div id="top_bar">
        <div class="top_bar_button left">
            <a href="../index.php">Test site</a>
        </div>
        <div class="top_bar_button left">
            <a href="index.php">Admin panel</a>
        </div>
        <div class="top_bar_button right">
            <a href="logout.php">Log out</a>
        </div>
        <div class="top_bar_button right">
            <a href="user_panel.php">
                <?php echo $_SESSION['user'] . ""; ?>
            </a>
        </div>
    </div>

    <div id="nav_panel">
    <div class="nav_bar_button">
            <a href="admin_panel.php">Main site</a>
        </div>
        <div class="nav_bar_button" style="background-color: #dd7600;">
            <a href="site_panel.php">Sites</a>
        </div>
        <div class="nav_bar_button">
            <a href="css_panel.php">CSS styles</a>
        </div>
        <div class="nav_bar_button">
            <a href="user_panel.php">User panel</a>
        </div>
        <div class="nav_bar_button">
            <a href="add_user_panel.php">Add user</a>
        </div>
        <div class="nav_bar_button">
            <a href="#">SQL query</a>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <form action="post_header_content.php" method="post">
                <div class="section_name">Header content<hr></div>
                <div class="section_left">
                    <input type="submit" value="Save">
                </div>
                <div class="section_right">
                    Panel 1
                    <textarea style="height: 100px; margin-bottom: 15px" name="header_content_1" id=""><?php require_once "get_header_content.php"; echo $header_content_1; ?></textarea>
                    Panel 2
                    <textarea style="height: 100px; margin-bottom: 15px" name="header_content_2" id=""><?php require_once "get_header_content.php"; echo $header_content_2; ?></textarea>
                    Panel 3
                    <textarea style="height: 100px;" name="header_content_3" id=""><?php require_once "get_header_content.php"; echo $header_content_3; ?></textarea>
                </div>
            </form>
            <form action="post_section_01_content.php" method="post">
                <div class="section_name">Section 1<hr></div>
                <div class="section_left">
                    <input type="text" name="title" value="<?php require_once "get_section_01_content.php"; echo $title_sec_01; ?>">
                    <input type="submit" value="Save">
                </div>
                <div class="section_right">
                    <textarea name="content" id=""><?php require_once "get_section_01_content.php"; echo $content_sec_01; ?></textarea>
                </div>
            </form>
            <form action="post_section_02_content.php" method="post">
                <div class="section_name">Section 2<hr></div>
                <div class="section_left">
                    <input type="text" name="title" value="<?php require_once "get_section_02_content.php"; echo $title_sec_02; ?>">
                    <input type="submit" value="Save">
                </div>
                <div class="section_right">
                    <textarea name="content" id=""><?php require_once "get_section_02_content.php"; echo $content_sec_02; ?></textarea>
                </div>
            </form>
            <form action="post_section_03_content.php" method="post">
                <div class="section_name">Section 3<hr></div>
                <div class="section_left">
                    <input type="text" name="title" value="<?php require_once "get_section_03_content.php"; echo $title_sec_03; ?>">
                    <input type="submit" value="Save">
                </div>
                <div class="section_right">
                <textarea name="content" id=""><?php require_once "get_section_03_content.php"; echo $content_sec_03; ?></textarea>
                </div>
            </form>
        </div>
    </div>
</body>
</html>