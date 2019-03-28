<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- <link rel="stylesheet" href="createS.css"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
</head>

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
if(isset($_GET['Insert'])){
$insr1= "insert into journal (name,email) values ('" . $_GET['name'] . "', '" . $_GET['email'] . "')";

}

if ($conn->query($insr1) === TRUE) {
    echo "New record created successfully";

} else {
    echo "Error: " . $insr1 . "<br>" . $conn->error;
}


?>
    <span>Now choose you're structure</span>
       <form action="" method="post">
        
        <label>Correspondence Author</label>
           <input class="form-control" type="email" name="ca"  id="caemail">
           <!-- <div> -->
<!-- <form action="#" method="post"> -->
<input type="checkbox" name="job_list[]" value="Create journal" id="cj" class="Checkbox"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification" id="c" class="Checkbox"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review" id="r" class="Checkbox"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision" id="md" class="Checkbox"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports" id="mr" class="Checkbox"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers" id="rr" class="Checkbox"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers" id="sr" class="Checkbox"><label>Selection of reviewers</label><br/>
<!-- <input type="submit" name="submit1" value="Submit"/> -->
<button type="button" id="test" value="click" onclick="loadDoc()">Change Content</button>
<button type="button" id="reset" value="click" onclick="resetcheckboxes()">Reset</button>

<!-- <input type="button" id="test" value="click"> -->
<!-- </form></div> -->
<div id="demo"></div>

 <label id="ca">Correspondence Author</label>
           <input class="ca" type="email" name="ca" id="caemail">
           <!-- <div> -->
<!-- <form action="#" method="post"> -->
<input type="checkbox" name="job_list[]" value="Create journal" id="cj1c" class="Checkbox1"><label  id="cj1l">Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification" id="c1c" class="Checkbox1"><label id="c1l">Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review" id="r1c" class="Checkbox1"><label id="r1l">Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision" id="md1c" class="Checkbox1"><label id="md1l">Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports" id="mr1c" class="Checkbox1"><label id="mr1l">Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers" id="rr1c" class="Checkbox1"><label id="rr1l">Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers" id="sr1c" class="Checkbox1"><label id="sr1l">Selection of reviewers</label><br/>
<!-- <input type="submit" name="submit1" value="Submit"/> -->
<button type="button" id="test" value="click" onclick="loadDoc1()">Change Content</button>
<!-- <input type="button" id="test" value="click"> -->
<!-- </form></div> -->
<div id="demo"></div>
<script>

// $('#test').click(function() {
// var func1 = ($('.Checkbox:checked').map(function() {
//     return this.value;
// }).get().join(', '));
// });

function loadDoc() {
    var email1 = document.getElementById("caemail").value ;
    var role1 = document.getElementById("ca").innerHTML ;
    var func1 = ($('.Checkbox:checked').map(function() {
    return this.value; }).get().join(','));

  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        var r=this.responseText;
        console.log(r);
       var funn = r.split(',');
    //    for(var x=0;x<funn.length;x++){
    //        console.log(funn[x]);}
       document.getElementById("demo").innerHTML=funn;
      
       for(var x=0;x<funn.length;x++){
        // console.log(funn[x]);
    if(funn[x] == document.getElementById("cj1l").innerHTML ){ document.getElementById("cj1c").disabled = true;}
    else if(funn[x] == document.getElementById("c1l").innerHTML ){ document.getElementById("c1c").disabled = true;}
     else if( funn[x] ==  document.getElementById("r1l").innerHTML   ){
        document.getElementById("r1c").disabled = true;
     }else if( funn[x] ==  document.getElementById("md1l").innerHTML   ){
        document.getElementById("md1c").disabled = true;
     }else if( funn[x] ==  document.getElementById("mr1l").innerHTML){
        document.getElementById("mr1c").disabled = true;
     }else if( funn[x] ==  document.getElementById("rr1l").innerHTML   ){
        document.getElementById("rr1c").disabled = true;
     }else if( funn[x] ==  document.getElementById("sr1l").innerHTML   ){
        document.getElementById("sr1c").disabled = true;
     }
    } } 
  };
  xhttp.open("GET", "fun.php?func1="+func1+"&email1="+email1+"&role1="+role1, true);
  xhttp.send();
}

function resetcheckboxes() {
    document.getElementById("cj").checked = true;
    document.getElementById("c").checked = false;
    document.getElementById("r").checked = false;
    document.getElementById("md").checked = false;
    document.getElementById("mr").checked = true;
    document.getElementById("rr").checked = true;
    document.getElementById("sr").checked = false;
    
}
</script>

<!-- 
           </div>
           <br>
        <label>Editing Manager</label>
           <input class="form-control" type="text" name="em">
           <div>
<form action="#" method="post">
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/> -->
<!-- <input type="submit" name="submit2" value="Submit"/> -->
<!-- </form></div></br>
            <label>Reviewer</label>
           <input class="form-control" type="text" name="rev">
           <div>
<form action="#" method="post">
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/> -->
<!-- <input type="submit" name="submit3" value="Submit"/> -->
<!-- </form></div></br>
            <label>Chapter Chief Editor</label>
           <input class="form-control" type="text" name="cce">
           <div>
<form action="#" method="post">
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/> -->
<!-- <input type="submit" name="submit4" value="Submit"/> -->
<!-- </form></div></br>

      
      <div>
<form action="#" method="post"> -->
<!-- <label> -->
        <!-- <input type="text" name="Committee_President" id="Committee_President" /> -->
        <!-- </label> -->
              <!-- <label  for="Committee_President" >Committee President </label>
           <input class="form-control" type="text" name="email"> 
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit" value="Submit"/>
</form></div></br> -->
        
    
    <?php
//     $structure=array();
//     if(isset($_POST['submit'])){
//         $role_id= "select R_id from roles where R_name = '" . $_POST['Committee_President']['Committee President']."'";
//         echo  $role_id ;
    
    
//     $role1=array("R_id"=>$role_id,"email"=>$_POST['email'],"func"=>$_POST['job_list[]']);
//    $structure($role1);
//    echo $structure;
    


// if(isset($_POST['submit'])){//to run PHP script on submit
// if(!empty($_POST['job_list'])){
// Loop to store and display values of individual checked checkbox.
// foreach($_POST['job_list'] as $selected){
// echo $selected."</br>";
// }
// }
// }
?>

 -->   
</body>
</html>