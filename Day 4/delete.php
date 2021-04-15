<!DOCTYPE html>
<html>
    <head>
        <title>Delete</title>
    </head>

    <body>
        <?php
            $postid = $_GET['postid'];
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "myDB";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            $sql = "SELECT * FROM MyTB WHERE `id` = " . $postid;
            $result = $conn->query($sql)->fetch_assoc();
            $conn->close();
        ?>

        <div>
            <h2>
            Are you sure you want to delete it?
                <button onclick="goBack()" type="button" style="float: right; background-color: white; padding: 5px 15px; border-radius: 4px;">Cancel</button>
                <script>
                function goBack() {
                window.history.back();
                }
                </script>
            
                <a href="deleteprocess.php?postid=<?php echo $postid; ?>">
                    <button type="button" style="float: right; background-color: blue; color: white; padding: 5px 15px; border-radius: 4px; border-color: blue">Yes</button>
                </a>
            </h2>
        </div>
        
        <h2>
            <?php
                $tit = $result["title"];
                echo $tit;
            ?>
        </h2>
  
        <div style="padding: 10px">
            <br>
            <div style="width: 25%; float: left">
                <img src="<?php $ima = $result["image"]; echo $ima; ?>">
            </div>
            <div style="width: 75%; float: right">
                <p><?php $des = $result["description"]; echo $des; ?></p>
            </div>
        </div>
        
    </body>
</html>