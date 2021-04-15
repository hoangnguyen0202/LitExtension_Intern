<!DOCTYPE html>
<html>
    <head>
        <title>Manage</title>
    </head>

    <body>
        <h2>
            Manage
            <a href="add.php"><button type="button" style="float: right; background-color: blue; color: white; padding: 5px 15px; border-radius: 4px; border-color: blue">New</button></a>
        </h2>
        
        <style>
            table, th, td {
                border: 1px solid;
            }
            .pagination {
                color: blue; padding: 4px 8px; text-decoration: none; border: 1px solid #ddd;
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

            $sql = "SELECT `id`, `image`, `title`, IF(`status`='1', 'Enabled', 'Disabled') AS `status` FROM MyTB";
            $result = $conn->query($sql);
            echo "<table style='width:100%'><tr><th>ID</th><th>Thumb</th><th>Title</th><th>Status</th><th>Action</th></tr>";
            while($row = $result->fetch_assoc()) {
                echo "<tr><td style='width:10%'><center>" . $row["id"] . "</center></td><td style='width:20%'><center><img src='" . $row["image"] . "' height='50px' width='50px'></center></td>
                <td>" . $row["title"] . "</td><td style='width:20%'><center>" . $row["status"] . "</center></td>
                <td style='width:20%'><center><a href='showpost.php?postid=" . $row["id"] . "' style='text-decoration: none'>Show</a> | <a href='edit.php?postid=" . $row["id"] . "' style='text-decoration: none'>Edit</a> | <a href='delete.php?postid=" . $row["id"] . "' style='text-decoration: none'>Delete</a></center></td></tr>";
            }
            echo "</table>";

            $conn->close();
        ?>

        <br>
        <div>
            <div>
                <label>Page:</label>
                <select>
                    <option value="5">5</option>
                    <option value="10">10</option>
                    <option value="50">50</option>
                    <option value="All">All</option>
                </select>
            </div>

            <div style="text-align: center">
                <a class="pagination" href="#">&laquo;</a>
                <a class="pagination" href="#">1</a>
                <a class="pagination" href="#">2</a>
                <a class="pagination" href="#">&raquo;</a>
            </div>
        </div>
        
    </body>
</html>