<?php
    session_start();

    if (!isset($_POST['login']) && (!isset($_POST['password'])))
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
        $login = $_POST['login'];
        $password = $_POST['password'];

        $login = htmlentities($login, ENT_QUOTES, "UTF-8");
        $password = htmlentities($password, ENT_QUOTES, "UTF-8");

        if ( $result = $connection->query(sprintf("SELECT * FROM administrators WHERE username = '%s' AND pass = '%s'", mysqli_real_escape_string($connection, $login), mysqli_real_escape_string($connection, $password))))
        {
            $user_count = $result->num_rows;
            if ($user_count > 0)
            {
                $_SESSION['logged'] = true;

                $row = $result->fetch_assoc();
                $_SESSION['id'] = $row['id'];
                $_SESSION['user'] = $row['username'];
                $_SESSION['email'] = $row['mail'];

                unset($_SESSION['error']);
                header('Location: admin_panel.php');
                $result->close();
            }
            else
            {
                $_SESSION['error'] = '<div style="color: red; margin-top: 10px; font-size: 18px; font-family: \'Roboto\', sans-serif;">Incorect login or password!</div>';
                header('Location: index.php');
            }
        }

        $connection->close();
    }
?>