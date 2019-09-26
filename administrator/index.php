<?php

    session_start();

    if (isset($_SESSION['logged']) && ($_SESSION['logged'] == true))
    {
        header('Location: control_panel.php');
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

    <title>Document</title>
</head>
<body>
    <div id="container">
        <form action="authorization.php" method="post">
            <input type="text" name="login" placeholder="Login" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Login'">
            <input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'">

            <input type="submit" value="Sing In">
        </form>

        <?php
            if (isset($_SESSION['error']))
            {
                echo $_SESSION['error'];
            }
        ?>
    </div>
</body>
</html>