<!DOCTYPE html>
<html>
    <head>
        <title>Edit Forms</title>
    </head>

    <body>
        <style>
            .x {
                width: 25%;
                padding: 5px;
            }
        </style>

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
        
        <h2>
            Edit
            <button onclick="goBack()" type="button" style="float: right; background-color: white; padding: 5px 15px; border-radius: 4px;">Back</button>
            <script>
            function goBack() {
            window.history.back();
            }
            </script>

            <a href="showpost.php?postid=<?php $id = $_GET['postid']; echo $id; ?>">
                <button type="button" style="float: right; background-color: blue; color: white; padding: 5px 15px; border-radius: 4px; border-color: blue">Show</button>
            </a>
        </h2>

        <form action="editprocess.php">
            <input type="hidden" name="id" value="<?php $id = $_GET['postid']; echo $id; ?>">

            <div style="background-color: #ddd; padding: 10px">
                <label class="x" style="float: left"><b>Title</b></label>
                <input class="x" name="title" type="text" value="<?php $tit = $result["title"]; echo $tit; ?>">
            </div>
            
            <div style="padding: 10px">
                <br>
                <label class="x" style="float: left"><b>Description</b></label>
                <input class="x" name="description" style="width: 50%; height: 150px" type="text" value="<?php $des = $result["description"]; echo $des; ?>">
                <br><br>
            </div>
            
            <div style="background-color: #ddd; padding: 10px">
                <label class="x" style="float: left"><b>Image</b></label>
                <div>
                    <input name="image" type="file">
                </div>
                <img src="<?php $ima = $result["image"]; echo $ima; ?>" style="width: 25%">
            </div>
            
            <div style="padding: 10px">
                <br>
                <label class="x" style="float: left"><b>Status</b></label>
                <select name="status" style="width: 100px">
                    <?php
                        $sta = $result["status"];
                        if ($sta == 0) {
                            echo "<option value='Enabled'>Enabled</option>
                            <option selected value='Disabled'>Disabled</option>";
                        } else {
                            echo "<option selected value='Enabled'>Enabled</option>
                            <option value='Disabled'>Disabled</option>";
                        }
                    ?>
                </select>
                <br><br>
            </div>

            <div style="background-color: #ddd; padding: 10px">
                <label class="x" style="float: left"><b></b></label>
                <input style="width: 100px" type="submit" value="Submit">
            </div>
        </form>
        
    </body>
</html>