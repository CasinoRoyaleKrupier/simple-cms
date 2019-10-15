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

    <title><?php require_once "get_page_title.php"; echo $page_title; ?> - panel administration</title>
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
    <div class="nav_bar_button" style="background-color: #525252;">
            <a href="admin_panel.php">Main site</a>
        </div>
        <div class="nav_bar_button">
            <a href="site_panel.php">Sites</a>
        </div>
        <div class="nav_bar_button">
            <a href="user_panel.php">User panel</a>
        </div>
        <div class="nav_bar_button">
            <a href="add_user_panel.php">Add user</a>
        </div>
        <div class="nav_bar_button">
            <a href="#">Database set.</a>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <!-- <?php require_once "connect.php"; ?>

            Logged user: <?php echo $_SESSION['user']; ?><br><br>

            Database name: <?php echo $db_name ?><br> -->

            <form action="post_page_title.php" method="post">
                <div class="section_name">Website<hr></div>
                <div class="section_left">
                    <input type="text" name="page_name" value="<?php require_once "get_page_title.php"; echo $page_title; ?>">
                    <input type="submit" value="Confirm">
                </div>
            </form>
        </div>
    </div>
</body>
</html>