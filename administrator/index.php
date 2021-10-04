<?php

    session_start();

    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: admin_panel.php');
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
    <link rel="stylesheet" href="admin_styles/login_panel.css">

    <title><?php require_once "get_page_title.php"; echo $page_title; ?> - admin login</title>
</head>
<body>
    <div id="container">
        <form action="authorization.php" method="post">
            <input type="text" name="login" placeholder="Login">
            <input type="password" name="password" placeholder="Password">

            <input type="submit" value="Sing In">
        </form>

        <?php
            if (isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>

        <a href="../index.php">Return to the side</a>
    </div>
    <script src="scripts/login_listeners.js"></script>
</body>
</html>