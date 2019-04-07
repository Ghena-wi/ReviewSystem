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
if(isset($_GET['role1'])){
    $roleid= "select R_id from roles where R_name = \"".$_GET['role1']."\"";
    $Jid= "select j_id from journal where name = \"".$_GET['Jname1']."\"";
    
    // if($conn->query($roleid)){
        $result=$conn->query($roleid);
        $result1=$conn->query($Jid);
        $today = new DateTime();
        $dt = $today->format('Y-m-d');
        
       

        if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                while($row1=$result1->fetch_assoc() ){
                if(isset($_GET['func1'])&& isset($_GET['email1'])){
                    $insr1= "insert into mr_relation (R_id,email,func,j_id,Start_Date) values ('" .  $row['R_id'] . "', '" . $_GET['email1'] ."','" .$_GET['func1'] ."', '" . $row1['j_id'] ."' , '" . $dt."')";
                    
                    }
                    if ($conn->query($insr1) === TRUE) {
                        ;}
                        else {
                            echo "Error: " . $insr1 . "<br>" . mysqli_error($conn);
                        }
            }}
        // } 
        // else {
        //     echo "0 results";
        // }
    }
    else{
        $newrole= "INSERT INTO `roles`(`R_name`) VALUES ('" .  $_GET['role1'] . "')";
        $conn->query($newrole);
        $newroleID= "select R_id from roles where R_name = \"".$_GET['role1']."\"";
        $result=$conn->query($newroleID);
        if ($result->num_rows > 0 && $result1->num_rows > 0 ) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                while($row1=$result1->fetch_assoc() ){
                if(isset($_GET['func1'])&& isset($_GET['email1'])){
                    $insr1= "insert into mr_relation (R_id,email,func,j_id) values ('" .  $row['R_id'] . "', '" . $_GET['email1'] ."','" .$_GET['func1'] ."', '" . $row1['j_id'] ."')";
                    
                    }
                    if ($conn->query($insr1) === TRUE) {
                        ;}
                        else {
                            echo "Error: " . $insr1 . "<br>" . mysqli_error($conn);
                        }
            }}
        }
         else {
            echo "0 results";
        }
    }
    



}
// $func1 = $_GET['func1'];
// echo $func1;

?>