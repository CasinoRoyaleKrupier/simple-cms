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
            header('Location: user_panel.php');
            exit();
        }

        if ( $result = $connection->query(sprintf("SELECT * FROM `administrators` WHERE `username` = '%s'", mysqli_real_escape_string($connection, $login))))
        {
            $user_count = $result->num_rows;
            if ($user_count > 0)
            {
                $row = $result->fetch_assoc();

                $is_verify = password_verify($old_password, $row['pass']);
                if ($is_verify)
                {
                    $hash_pass = password_hash($new_password, PASSWORD_DEFAULT);
                    if ( $connection->query("UPDATE `administrators` SET `pass` = '$hash_pass' WHERE `administrators`.`username` = '$user';") != true )
                    {
                        echo "Error: " . $connection->connect_errno;
                    }
                }
                else
                {
                    header('Location: index.php');
                }
            }
        }

        $connection->close();
        header('Location: logout.php');
    }
?>