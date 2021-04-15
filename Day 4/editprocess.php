<!DOCTYPE html>
<html>
    <body>
        <?php
            $id = $_GET["id"];
            $title = $_GET["title"];
            $description = $_GET["description"];
            $image = $_GET["image"];
            $status = $_GET["status"];
            if ($status == 'Enabled') {
                $status = 1;
            } else {
                $status = 0;
            }

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            if ($image == '') {
                $sql = "UPDATE MyTB SET `title`='" . $title . "', `description`='" . $description . "', `status`=" . $status . " WHERE `id`=" . $id;
            } else {
                $sql = "UPDATE MyTB SET `title`='" . $title . "', `description`='" . $description . "', `image`=" . $image . ", `status`=" . $status . " WHERE `id`=" . $id;
            }

            if ($conn->query($sql) === TRUE) {
                echo "<h2>Record updated successfully!</h2>";
            } else {
                echo "<h2>Error updating record: </h2>" . $conn->error;
            }
            $conn->close();
        ?>

        <a href="manage.php"><button type="button" style="background-color: white; padding: 5px 15px; border-radius: 4px;">Back</button><a>

    </body>
</html>