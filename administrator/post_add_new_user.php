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
        $confirm_username = $_POST['confirm_username'];

        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];

        $email = $_POST['e-mail'];
        $confirm_email = $_POST['confirm_e-mail'];

        if ( $username != $confirm_username || $password != $confirm_password || $email != $confirm_email )
        {
            header('Location: add_user_panel.php');
            $_SESSION['add_user_error'] = "Incorrect login details";
            exit();
        }
        elseif ($username == "" || $password == "" || $email == "")
        {
            header('Location: add_user_panel.php');
            $_SESSION['add_user_error'] = "Login details are incomplete";
            exit();
        }

        $sql = "INSERT INTO administrators (username, pass, mail) VALUES ('$username', '$password', '$email');";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;

            if (isset($_SESSION['add_user_error'])) {
                unset($_SESSION['add_user_error']);
            }
        }

        $connection->close();
        header('Location: add_user_panel.php');
    }
?>