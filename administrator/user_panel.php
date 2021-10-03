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

    <title><?php require_once "get_page_title.php"; echo $page_title; ?> - user panel</title>
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
        <div class="nav_bar_button">
            <a href="site_panel.php">Sites</a>
        </div>
        <div class="nav_bar_button">
            <a href="css_panel.php">CSS styles</a>
        </div>
        <div class="nav_bar_button" style="background-color: #dd7600;">
            <a href="user_panel.php">User panel</a>
        </div>
        <div class="nav_bar_button">
            <a href="add_user_panel.php">Add user</a>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <form action="change_username.php" method="post">
                <div class="section_name">Change username<hr></div>
                <div class="section_left">
                    <div class="section_submit">
                        <input type="submit" value="Confirm">
                    </div>
                </div>
                <div class="section_left">
                    <input type="text" name="old_username" value="" placeholder="Old username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Old username'">
                    <input type="text" name="new_username" value="" placeholder="New username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New username'">
                </div>
            </form>
            <form action="change_password.php" method="post">
                <div class="section_name">Change password<hr></div>
                <div class="section_left">
                    <div class="section_submit">
                        <input type="submit" value="Confirm">
                    </div>
                </div>
                <div class="section_left">
                    <input type="password" name="old_password" value="" placeholder="Old password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Old password'">
                    <input type="password" name="new_password" value="" placeholder="New password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New password'">
                </div>
            </form>
            <form action="change_mail.php" method="post">
                <div class="section_name">Change e-mail<hr></div>
                <div class="section_left">
                    <div class="section_submit">
                        <input type="submit" value="Confirm">
                    </div>
                </div>
                <div class="section_left">
                    <input type="email" name="old_mail" value="" placeholder="Old e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Old e-mail'">
                    <input type="email" name="new_mail" value="" placeholder="New e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'New e-mail'">
                </div>
            </form>
        </div>
    </div>
</body>
</html>