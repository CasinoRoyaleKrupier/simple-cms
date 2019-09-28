<?php
    require_once "connect.php";

    $connection = @new mysqli($host, $db_user, $db_password, $db_name);

    if ($connection->connect_errno != 0)
    {
        echo "Error: " . $connection->connect_errno;
    }
    else
    {
        if ($result = $connection->query("SELECT * FROM section_01_content WHERE id = 1"))
        {
            $row = $result->fetch_assoc();
            $title_sec_01 = $row['title'];
            $content_sec_01 = $row['content'];
        }

        $result->close();
        $connection->close();
    }
?>