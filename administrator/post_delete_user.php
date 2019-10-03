<?php
    session_start();

    if ( !isset($_SESSION['logged']) )
    {
        header('Location: index.php');
        exit();
    }

    if (isset($_SESSION['delete_user_passed']))
        unset($_SESSION['delete_user_passed']);

    if (isset($_SESSION['delete_user_error']))
        unset($_SESSION['delete_user_error']);

    $username = $_POST['username'];

    if ($username == $_SESSION['user'])
    {
        $_SESSION['delete_user_error'] = "You can not delete the current user";
        header('Location: add_user_panel.php');
        exit();
    }



    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0) {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        $is_OK = true;

        //Check username

        $result = $connection->query("SELECT id FROM administrators WHERE username = '$username'");

        if (!$result) throw new Exception($connection->error);

        $count_usernames = $result->num_rows;
        if($count_usernames < 1)
        {
            $is_OK = false;
            $_SESSION['delete_user_error'] = "No user in the database";
        }

        if ($is_OK == true)
        {
            if ($connection->query("DELETE FROM `administrators` WHERE `username` = '$username';"))
            {
                $_SESSION['delete_user_passed'] = "Successfully deleted user";
            }
            else
            {
                $_SESSION['delete_user_error'] = "No user in the database";
            }
        }







        // $sql = "DELETE FROM `administrators` WHERE `username` = '$username'";
        // if ( $connection->query($sql) != true )
        // {
        //     echo "Error: " . $connection->connect_errno;
        // }

        // if (isset($_SESSION['delete_user_error'])) {
        //     unset($_SESSION['delete_user_error']);
        // }

        $connection->close();
        header('Location: add_user_panel.php');
    }
?>