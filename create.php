<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- <link rel="stylesheet" href="createS.css"> -->
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
           <input class="form-control" type="text" name="ca">
           <div>
<form action="#" method="post">
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit1" value="Submit"/>
</form></div>
<?php
if(isset($_POST['submit1'])){//to run PHP script on submit
if(!empty($_POST['job_list'])){
// Loop to store and display values of individual checked checkbox.
foreach($_POST['job_list'] as $selected){
echo $selected."</br>";
}
}
}
?>
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
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit2" value="Submit"/>
</form></div></br>
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
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit3" value="Submit"/>
</form></div></br>
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
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit4" value="Submit"/>
</form></div></br>
              <label>Committee President </label>
           <input class="form-control" type="text" name="cp"> 
      <input type="submit"  name="Insert" id="Insert">
      <div>
<form action="#" method="post">
<input type="checkbox" name="job_list[]" value="Create journal"><label>Create journal</label><br/>
<input type="checkbox" name="job_list[]" value="Classification"><label>Classification</label><br/>
<input type="checkbox" name="job_list[]" value="Review"><label>Review</label><br/>
<input type="checkbox" name="job_list[]" value="Make decision"><label>Make decision</label><br/>
<input type="checkbox" name="job_list[]" value="Make reports"><label>Make reports</label><br/>
<input type="checkbox" name="job_list[]" value="Request reviewers"><label>Request reviewers</label><br/>
<input type="checkbox" name="job_list[]" value="Selection of reviewers"><label>Selection of reviewers</label><br/>
<input type="submit" name="submit5" value="Submit"/>
</form></div></br>
        
    </form>

    
</body>
</html>