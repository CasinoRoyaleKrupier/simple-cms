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

    <title>Panel administration</title>
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
            <a href="user_panel.php">User panel</a>
        </div>
        <div class="nav_bar_button">
            <a href="add_user_panel.php">Add user</a>
        </div>
    </div>

    <div id="container">
        <div id="content">
            <form action="post_add_new_user.php" method="post">
                <div class="section_name">Add new user<hr></div>
                <div class="section_left">
                    <input type="text" name="username" value="" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'">
                    <input type="text" name="confirm_username" value="" placeholder="Confirm username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm username'">
                </div>
                <div class="section_left">
                    <input type="password" name="password" value="" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">
                    <input type="password" name="confirm_password" value="" placeholder="Confirm password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm password'">
                </div>
                <div class="section_left">
                    <input type="email" name="e-mail" value="" placeholder="E-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'E-mail'">
                    <input type="email" name="confirm_e-mail" value="" placeholder="Confirm e-mail" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Confirm e-mail'">
                </div>
                <div class="section_submit">
                    <input type="submit" value="Confirm">
                    <?php
                        if (isset($_SESSION['add_user_error'])) {
                            echo '<span style="color: red; font-weight: bold;">' . $_SESSION['add_user_error'] . '</span>';
                        }
                    ?>
                </div>
            </form>
            <form action="post_delete_user.php" method="post">
                <div class="section_name">Delete user<hr></div>
            </form>
        </div>
    </div>
</body>
</html>