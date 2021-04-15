<!DOCTYPE html>
<html>
    <head>
        <title>List post</title>
    </head>

    <body>
        <h3>List post</h3>
        
        <style>
            table, th, td {
                border: 1px solid;
            }
        </style>
        
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "myDB";

        $conn = new mysqli($servername, $username, $password, $dbname);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT `id`, `image`, `title` FROM MyTB";
        $result = $conn->query($sql);
        echo "<table style='width:100%'><tr><th>ID</th><th>Thumb</th><th>Title</th></tr>";
        while($row = $result->fetch_assoc()) {
            echo "<tr><td style='width:10%'><center><a href='showpost.php?postid=" . $row["id"] . "' style='text-decoration: none'>" . $row["id"] . "</a></center>
            </td><td style='width:20%'><center><a href='showpost.php?postid=" . $row["id"] . "' style='text-decoration: none'><img src='" . $row["image"] . "' height='50px' width='50px'></a></center></td>
            <td><a href='showpost.php?postid=" . $row["id"] . "' style='text-decoration: none'>" . $row["title"] . "</a></td></tr>";
        }
        echo "</table>";

        $conn->close();
        ?>
        
    </body>
</html>