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

if(isset($_GET['role2'])){
    $roleid= "select R_id from roles where R_name = \"".$_GET['role2']."\"";
    $result=$conn->query($roleid);
  
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if(isset($_GET['func2'])&&isset($_GET['email2'])){
                $insr2= "insert into mr_relation (R_id,email,func) values ('" .  $row['R_id'] . "', '" . $_GET['email2'] ."','" .$_GET['func2'] ."')";
                
                }
                if ($conn->query($insr2) === TRUE) {
                    ;}
                    else {
                        echo "Error: " . $insr2 . "<br>" . mysqli_error($conn);
                    }
        }
    } else {
        echo "0 results";
    }

$func2 = $_GET['func2'];
echo $func2;
}
?>