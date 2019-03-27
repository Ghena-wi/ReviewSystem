<!DOCTYPE html>

<html>
<body>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "jp";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>
  <form action="" method="get">
        
        <label>Correspondence Author</label>
           <input class="form-control" type="text" name="ca">
        <label>Editing Manager</label>
           <input class="form-control" type="text" name="em">
            <label>Reviewer</label>
           <input class="form-control" type="text" name="rev">
            <label>Chapter Chief Editor</label>
           <input class="form-control" type="text" name="cce">
              <label>Committee President </label>
           <input class="form-control" type="text" name="cp">
<!--       <input type="submit"  name="Insert" id="Insert">-->
        
    </form>
</body>
</html>