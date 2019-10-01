<?php
    session_start();

    if ( !isset($_SESSION['logged']) )
    {
        header('Location: index.php');
        exit();
    }

    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0) {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $old_username = $_POST['old_username'];
        $new_username = $_POST['new_username'];

        if (($old_username == "") || ($new_username == ""))
        {
            header('Location: user_panel.php');
            exit();
        }

        $sql = "UPDATE `administrators` SET `username` = '$new_username' WHERE `username` = '$old_username';";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        $_SESSION['user'] = $new_username;

        $connection->close();
        header('Location: user_panel.php');
    }
?>