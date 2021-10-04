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
        $old_password = $_POST['old_password'];
        $new_password = $_POST['new_password'];
        $user = $_SESSION['user'];

        if (($old_password == "") || ($new_password == ""))
        {
            $connection->close();
            header('Location: user_panel.php');
            exit();
        }

        if(password_verify($old_password, $_SESSION['password']))
        {
            $hash_pass = password_hash($new_password, PASSWORD_DEFAULT);
            $sql = "UPDATE `administrators` SET `pass` = '$hash_pass' WHERE `administrators`.`username` = '$user';";

            if ( $connection->query($sql) != true )
                echo "Error: " . $connection->connect_errno;

        }
        else
        {
            $connection->close();
            header('Location: user_panel.php');
            exit();
        }

        $connection->close();
        header('Location: logout.php');
    }
?>