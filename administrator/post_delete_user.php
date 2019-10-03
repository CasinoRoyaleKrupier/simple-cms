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
        $username = $_POST['username'];

        if ($username == $_SESSION['user'])
        {
            $_SESSION['delete_user_error'] = "You can not delete the current user";
            header('Location: add_user_panel.php');
            exit();
        }

        $sql = "DELETE FROM `administrators` WHERE `username` = '$username'";
        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        if (isset($_SESSION['delete_user_error'])) {
            unset($_SESSION['delete_user_error']);
        }

        $connection->close();
        header('Location: add_user_panel.php');
    }
?>