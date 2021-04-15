<!DOCTYPE html>
<html>
    <head>
        <title>Add Forms</title>
    </head>

    <body>
        <style>
            .x {
                width: 25%;
                padding: 5px;
            }
        </style>

        <h2>
            Add
            <button onclick="goBack()" type="button" style="float: right; background-color: white; padding: 5px 15px; border-radius: 4px;">Back</button>
            <script>
            function goBack() {
            window.history.back();
            }
            </script>
        </h2>

        <form action="addprocess.php">
            <div style="padding: 10px">
                <label class="x" style="float: left"><b>Id</b></label>
                <input class="x" name="id" type="text">
            </div>

            <div style="background-color: #ddd; padding: 10px">
                <label class="x" style="float: left"><b>Title</b></label>
                <input class="x" name="title" type="text">
            </div>
            
            <div style="padding: 10px">
                <br>
                <label class="x" style="float: left"><b>Description</b></label>
                <input class="x" name="description" style="width: 50%; height: 150px" type="text">
                <br><br>
            </div>
            
            <div style="background-color: #ddd; padding: 10px">
                <label class="x" style="float: left"><b>Image</b></label>
                <div>
                    <input name="image" type="file">
                </div>
            </div>
            
            <div style="padding: 10px">
                <br>
                <label class="x" style="float: left"><b>Status</b></label>
                <select name="status" style="width: 100px">
                    <option value='Enabled'>Enabled</option>
                    <option value='Disabled'>Disabled</option>
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