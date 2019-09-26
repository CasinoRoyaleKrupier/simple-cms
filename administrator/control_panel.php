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

    <script src="../scripts/jquery-3.4.1.min.js"></script>

    <title>Document</title>
</head>
<body>
    <div id="top_bar">
        <div id="top_bar_logout">
            <a href="logout.php">Log out</a>
        </div>
        <div id="top_bar_user">
            <?php
                echo $_SESSION['user'] . "";
            ?>
        </div>
    </div>

    <div id="nav_panel">
        <div id="nav_bar_buttons_section">
            <a href="#">
                <div class="nav_bar_button">Users</div>
            </a>
            <a href="#">
                <div class="nav_bar_button">Sites</div>
            </a>
        </div>
    </div>
    <div id="container">assadsaassadsaassadsaassadsaassadsaassdsa</div>

    <script src="admin_scripts/time.js"></script>
</body>
</html>