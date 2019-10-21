<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        if ($result = $connection->query("SELECT * FROM header_content WHERE id = 1"))
        {
            $row = $result->fetch_assoc();
            $header_content_1 = $row['content'];
        }

        if ($result = $connection->query("SELECT * FROM header_content WHERE id = 2"))
        {
            $row = $result->fetch_assoc();
            $header_content_2 = $row['content'];
        }

        if ($result = $connection->query("SELECT * FROM header_content WHERE id = 3"))
        {
            $row = $result->fetch_assoc();
            $header_content_3 = $row['content'];
        }

        $result->close();
        $connection->close();
    }
?>