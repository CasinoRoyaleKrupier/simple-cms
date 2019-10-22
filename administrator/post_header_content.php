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
        $header_content_1 = $_POST['header_content_1'];
        $header_content_2 = $_POST['header_content_2'];
        $header_content_3 = $_POST['header_content_3'];

        $sql_1 = "UPDATE `header_content` SET content = '$header_content_1' WHERE id = 1;";
        $sql_2 = "UPDATE `header_content` SET content = '$header_content_2' WHERE id = 2;";
        $sql_3 = "UPDATE `header_content` SET content = '$header_content_3' WHERE id = 3;";

        if ( $connection->query($sql_1) != true ) echo "Error: " . $connection->connect_errno;
        if ( $connection->query($sql_2) != true ) echo "Error: " . $connection->connect_errno;
        if ( $connection->query($sql_3) != true ) echo "Error: " . $connection->connect_errno;

        $connection->close();
        header('Location: site_panel.php');
    }
?>