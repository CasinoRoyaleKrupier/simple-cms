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
    <title>Document</title>
</head>
<body>

    <form action="authorization.php" method="post">
        Login <br><input type="text" name="login" id=""><br>
        Password <br><input type="password" name="password" id=""><br><br>

        <input type="submit" value="Sing In">
    </form>

    <?php
        if (isset($_SESSION['error']))
        {
            echo $_SESSION['error'];
        }
    ?>

</body>
</html>