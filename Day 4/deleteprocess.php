<!DOCTYPE html>
<html>
    <body>
        <?php
            $id = $_GET["postid"];

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "DELETE FROM MyTB WHERE `id`=" . $id;
            
            if ($conn->query($sql) === TRUE) {
                echo "<h2>Deleted successfully!</h2>";
            } else {
                echo "<h2>Error: </h2>" . $conn->error;
            }
            $conn->close();
        ?>

        <a href="manage.php"><button type="button" style="background-color: white; padding: 5px 15px; border-radius: 4px;">Back</button><a>

    </body>
</html>