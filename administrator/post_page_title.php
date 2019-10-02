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
        $page_name = $_POST['page_name'];

        $sql = "UPDATE `page_title` SET page_title = '$page_name' WHERE id = 1;";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        $connection->close();
        header('Location: admin_panel.php');
    }
?>