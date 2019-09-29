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
        $old_mail = $_POST['old_mail'];
        $new_mail = $_POST['new_mail'];

        $sql = "UPDATE `administrators` SET `mail` = '$new_mail' WHERE `mail` = '$old_mail';";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        $connection->close();
        header('Location: user_panel.php');
    }
?>