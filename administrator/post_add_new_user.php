<?php
    session_start();

    if ( !isset($_SESSION['logged']) )
    {
        header('Location: index.php');
        exit();
    }

    if (isset($_SESSION['add_user_passed']))
        unset($_SESSION['add_user_passed']);

    if (isset($_SESSION['add_user_error']))
        unset($_SESSION['add_user_error']);

    $username = $_POST['username'];
    $confirm_username = $_POST['confirm_username'];

    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $hash_pass = md5($password);

    $email = $_POST['e-mail'];
    $confirm_email = $_POST['confirm_e-mail'];

    if ( $username != $confirm_username || $password != $confirm_password || $email != $confirm_email )
    {
        header('Location: add_user_panel.php');
        $_SESSION['add_user_error'] = "Incorrect login details";
        exit();
    }
    elseif (empty($username) || empty($password) || empty($email) )
    {
        header('Location: add_user_panel.php');
        $_SESSION['add_user_error'] = "Login details are incomplete";
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
        if($count_usernames > 0)
        {
            $is_OK = false;
            $_SESSION['add_user_error'] = "User already exists";
        }

        //Check email

        $result = $connection->query("SELECT id FROM administrators WHERE mail = '$email'");

        if (!$result) throw new Exception($connection->error);

        $count_emails = $result->num_rows;
        if($count_emails > 0)
        {
            $is_OK = false;
            $_SESSION['add_user_error'] = "Email already exists";
        }

        if ($is_OK == true)
        {
            if ($connection->query("INSERT INTO administrators VALUES (NULL, '$username', '$hash_pass', '$email');"))
            {
                $_SESSION['add_user_passed'] = "Successfully added user";
            }
            else
            {
                $_SESSION['add_user_error'] = "User already exists";
            }
        }

        $connection->close();
        header('Location: add_user_panel.php');
    }
?>