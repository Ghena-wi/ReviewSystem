<?php

$content = $_GET["content"];
echo $content;
// file_put_contents("cont.txt", $content);
// echo "<script>document.getElementById(\"container\").appendChild("+file_get_contents("cont.txt")+"(\"cont.txt\"));</script>";
// echo file_get_contents("cont.txt");
// echo $file;


// $servername = "localhost";
// $username = "root";
// $password = "";
// $dbname = "jp";



// // Create connection
// $conn = new mysqli($servername, $username, $password, $dbname);
// // Check connection
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
// } 
// if(isset($_GET['role1'])){
//     $roleid= "select R_id from roles where R_name = \"".$_GET['role1']."\"";
//     $result=$conn->query($roleid);
  
//     if ($result->num_rows > 0) {
//         // output data of each row
//         while($row = $result->fetch_assoc()) {
//             if(isset($_GET['func1'])&&isset($_GET['email1'])){
//                 $insr1= "insert into mr_relation (R_id,email,func) values ('" .  $row['R_id'] . "', '" . $_GET['email1'] ."','" .$_GET['func1'] ."')";
                
//                 }
//                 if ($conn->query($insr1) === TRUE) {
//                     ;}
//                     else {
//                         echo "Error: " . $insr1 . "<br>" . mysqli_error($conn);
//                     }
//         }
//     } else {
//         echo "0 results";
//     }

// $func1 = $_GET['func1'];
// echo $func1;
// }


?>