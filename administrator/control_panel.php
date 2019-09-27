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

    <title>Panel administration</title>
</head>
<body>
    <div id="top_bar">
        <div class="top_bar_button_left">
            <a href="../index.php">Test Site</a>
        </div>
        <div class="top_bar_button_right">
            <a href="logout.php">Log out</a>
        </div>
        <div class="top_bar_button_right">
            <a href="#">
                <?php echo $_SESSION['user'] . ""; ?>
            </a>
        </div>
    </div>

    <div id="nav_panel">
    <div class="nav_bar_button">
            <a href="control_panel.php">Main Site</a>
        </div>
        <div class="nav_bar_button">
            <a href="#">Users</a>
        </div>
        <div class="nav_bar_button">
            <a href="#">Sites</a>
        </div>
    </div>

    <div id="container">
        container
    </div>
</body>
</html>