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
        $title = $_POST['title'];
        $content = $_POST['content'];

        $sql = "UPDATE `header_content` SET content = '$content' WHERE id = 1;";

        if ( $connection->query($sql) != true )
        {
            echo "Error: " . $connection->connect_errno;
        }

        $connection->close();
        header('Location: site_panel.php');
    }
?>