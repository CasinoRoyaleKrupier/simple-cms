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

    <script src="../scripts/jquery-3.4.1.min.js"></script>

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
            <a href="#">
                <?php echo $_SESSION['user'] . ""; ?>
            </a>
        </div>
    </div>

    <div id="nav_panel">
    <div class="nav_bar_button">
            <a href="admin_panel.php">Main site</a>
        </div>
        <div class="nav_bar_button">
            <a href="user_panel.php">Users</a>
        </div>
        <div class="nav_bar_button">
            <a href="site_panel.php">Sites</a>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <div class="section">
                <form action="post_welcome_content.php" method="post">
                    <div class="section_left">
                        <div class="section_name">Welcome content</div>
                        <input type="submit" value="Confirm">
                    </div>
                    <div class="section_right">
                        <textarea name="content" id=""><?php require_once "get_welcome_content.php"; echo $welcome_content; ?></textarea>
                    </div>
                </form>
            </div>
            <div class="section">
                <form action="post_section_01_content.php" method="post">
                    <div class="section_left">
                        <div class="section_name">Section 1</div>
                        <div class="section_title">
                            Title<br>
                            <input type="text" name="title" value="<?php require_once "get_section_01_content.php"; echo $title_sec_01; ?>">
                        </div>
                        <input type="submit" value="Confirm">
                    </div>
                    <div class="section_right">
                        <textarea name="content" id=""><?php require_once "get_section_01_content.php"; echo $content_sec_01; ?></textarea>
                    </div>
                </form>
            </div>
            <div class="section">
                <form action="post_section_02_content.php" method="post">
                    <div class="section_left">
                        <div class="section_name">Section 2</div>
                        <div class="section_title">
                            Title<br>
                            <input type="text" name="title" value="<?php require_once "get_section_02_content.php"; echo $title_sec_02; ?>">
                        </div>
                        <input type="submit" value="Confirm">
                    </div>
                    <div class="section_right">
                        <textarea name="content" id=""><?php require_once "get_section_02_content.php"; echo $content_sec_02; ?></textarea>
                    </div>
                </form>
            </div>
            <div class="section">
                <form action="post_section_03_content.php" method="post">
                    <div class="section_left">
                        <div class="section_name">Section 3</div>
                        <div class="section_title">
                            Title<br>
                            <input type="text" name="title" value="<?php require_once "get_section_03_content.php"; echo $title_sec_03; ?>">
                        </div>
                        <input type="submit" value="Confirm">
                    </div>
                    <div class="section_right">
                        <textarea name="content" id=""><?php require_once "get_section_03_content.php"; echo $content_sec_03; ?></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>