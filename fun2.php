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

if(isset($_GET['role3'])){
    $roleid= "select R_id from roles where R_name = \"".$_GET['role3']."\"";
    $result=$conn->query($roleid);
  
    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_assoc()) {
            if(isset($_GET['func3'])&&isset($_GET['email3'])){
                $insr3= "insert into mr_relation (R_id,email,func) values ('" .  $row['R_id'] . "', '" . $_GET['email3'] ."','" .$_GET['func3'] ."')";
                
                }
                if ($conn->query($insr3) === TRUE) {
                    ;}
                    else {
                        echo "Error: " . $insr3 . "<br>" . mysqli_error($conn);
                    }
        }
    } else {
        echo "0 results";
    }

$func3 = $_GET['func3'];
echo $func3;
}
?>