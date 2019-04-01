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

    <label>Now choose you're structure</label>

    <!-- ////////////////////////////////////////////Committee President///////////////////////////////////////// -->
    <div id="container">
    <form action="" method="post">
    <div id="role1">
        <label id="cp">Committee President</label>
        <input type="email" name="cp"  id="cpemail"><br/>
     
        <input type="checkbox" value="Paper managment" id="pmc" class="Checkbox" disabled = true ><label id="pml" >Paper managment</label><br/>
        <input type="checkbox" value="Review" id="rc" class="Checkbox"><label id="rl">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="mdc" class="Checkbox" disabled = true ><label id="mdl" >Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mrc" class="Checkbox" checked="true"><label id="mrl" >Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rrc" class="Checkbox" checked="true"><label id="rrl" >Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="src" class="Checkbox" disabled = true ><label id="srl">Selection of reviewers</label><br/>

        <button type="button" id="test" value="click" onclick="loadDoc()">Done</button>
        <button type="button" id="reset1" value="click" onclick="document.getElementById('role1').style.display='none'">Delete</button>

        

    </div>
    </form>
 <!-- ////////////////////////////////////////////Editing Manager///////////////////////////////////////////////// -->
 
 <form action="" method="post">
   <div id="role2"> 

        <label id="em">Editing Manager</label>
        <input type="email" name="em" id="ememail"><br/>

        <input type="checkbox" value="Paper managment" id="pm1c" class="Checkbox1" checked="true"><label id="pm1l">Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r1c" class="Checkbox1"><label id="r1l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md1c" class="Checkbox1" disabled = true ><label id="md1l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr1c" class="Checkbox1" disabled = true><label id="mr1l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr1c" class="Checkbox1" disabled = true><label id="rr1l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr1c" class="Checkbox1" disabled = true ><label id="sr1l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="loadDoc1()">Done</button>
        <button type="button" id="reset1" value="click" onclick="document.getElementById('role2').style.display='none'">Delete</button>


</div>
</form>

 <!-- ////////////////////////////////////////////Chapter Chief Editor///////////////////////////////////////////////// -->
    
 <form action="" method="post">
<div id="role3">
 <label id="cce">Chapter Chief Editor</label>
        <input type="email" name="cce" id="cceemail"><br/>

        <input type="checkbox" value="Paper managment" id="pm2c" class="Checkbox2" disabled = true><label id="pm2l">Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r2c" class="Checkbox2"><label id="r2l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md2c" class="Checkbox2" checked="true"><label id="md2l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr2c" class="Checkbox2" disabled = true><label id="mr2l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr2c" class="Checkbox2" disabled = true><label id="rr2l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr2c" class="Checkbox2" checked="true"><label id="sr2l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="loadDoc2()">Done</button>
        <button type="button" id="reset1" value="click" onclick="document.getElementById('role3').style.display='none'">Delete</button>
      
</div>
</form>





</div>
<button type="button" id="reset" value="click" onclick="resetcheckboxes()">Reset</button>

<button type="button" id="create" value="click" onclick="createrole()">create new role</button>
<script src="createrole.js"></script>


<script>

////////////////////////////////////Committee President functions //////////////////////////////////////
function loadDoc() {

            var n = document.getElementsByClassName('Checkbox');
            var n1 = document.getElementsByClassName('Checkbox1');
            var n2 = document.getElementsByClassName('Checkbox2');
            for(var i=0;i<n1.length;i++){
                 n1[i].disabled = false;
                 n2[i].disabled = false;

            }

            
            for(var i=0;i<n.length;i++){
                if( n1[i].checked == true){
                 n[i].disabled = true;
                 n2[i].disabled = true;
                }
            }
            for(var i=0;i<n.length;i++){
                if( n2[i].checked == true){
                 n[i].disabled = true;
                 n1[i].disabled = true;
                }
            }

    var email1 = document.getElementById("cpemail").value ;
    var role1 = document.getElementById("cp").innerHTML ;
    var func1 = ($('.Checkbox:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         var funn = r.split(',');
      
       for(var x=0;x<funn.length;x++){

        for(var i=0;i<n.length;i++){
                if( n[i].value == funn[x]){
                 n1[i].disabled = true;
                 n2[i].disabled = true;
                }
            }

       }
       
    } 
  };
  xhttp.open("GET", "recordrole.php?func1="+func1+"&email1="+email1+"&role1="+role1, true);
  xhttp.send();
}



    
////////////////////////////////////Editing Manager functions //////////////////////////////////////
function loadDoc1() {
           
            var n = document.getElementsByClassName('Checkbox');
            var n1 = document.getElementsByClassName('Checkbox1');
            var n2 = document.getElementsByClassName('Checkbox2');
            for(var i=0;i<n.length;i++){
                 n[i].disabled = false;
                 n2[i].disabled = false;

            }

            
            for(var i=0;i<n.length;i++){
                if( n[i].checked == true){
                 n1[i].disabled = true;
                 n2[i].disabled = true;
                }
            }
            for(var i=0;i<n.length;i++){
                if( n2[i].checked == true){
                 n[i].disabled = true;
                 n1[i].disabled = true;
                }
            }




    var email1 = document.getElementById("ememail").value ;
    var role1 = document.getElementById("em").innerHTML ;
    var func1 = ($('.Checkbox1:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         var funn = r.split(',');
      
       for(var x=0;x<funn.length;x++){

        for(var i=0;i<n.length;i++){
                if( n1[i].value == funn[x]){
                 n[i].disabled = true;
                 n2[i].disabled = true;
                }
            }

       }
       
    } 
  };
  xhttp.open("GET", "recordrole.php?func1="+func1+"&email1="+email1+"&role1="+role1, true);
  xhttp.send();
}

////////////////////////////////////Chapter Chief Editor functions //////////////////////////////////////
function loadDoc2() {
        
            var n = document.getElementsByClassName('Checkbox');
            var n1 = document.getElementsByClassName('Checkbox1');
            var n2 = document.getElementsByClassName('Checkbox2');

            for(var i=0;i<n.length;i++){
                 n[i].disabled = false;
                 n1[i].disabled = false;

            }

            for(var i=0;i<n.length;i++){
                if( n[i].checked == true){
                 n1[i].disabled = true;
                 n2[i].disabled = true;
                }
            }
            for(var i=0;i<n.length;i++){
                if( n1[i].checked == true){
                 n[i].disabled = true;
                 n2[i].disabled = true;
                }
            }




    var email1 = document.getElementById("cceemail").value ;
    var role1 = document.getElementById("cce").innerHTML ;
    var func1 = ($('.Checkbox2:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         var funn = r.split(',');
      
       for(var x=0;x<funn.length;x++){
       
        for(var i=0;i<n.length;i++){
                if( n2[i].value == funn[x]){
                 n[i].disabled = true;
                 n1[i].disabled = true;
                }
            }
       }
      
    } 
  };
  xhttp.open("GET", "recordrole.php?func1="+func1+"&email1="+email1+"&role1="+role1, true);
  xhttp.send();
}

////////////////////////////////////////////////reset /////////////////////////////////////////////////////////////
function resetcheckboxes() {

var n = document.getElementsByClassName('Checkbox');
var n1 = document.getElementsByClassName('Checkbox1');
var n2 = document.getElementsByClassName('Checkbox2');
    for(var i=0;i<n.length;i++){
        if(n[i].value == "Make reports" || n[i].value == "Request reviewers"){
        n[i].checked = true;
        n1[i].disabled = true;
        n2[i].disabled = true;
         }else{
        n[i].checked = false;
        n1[i].disabled = false;
        n2[i].disabled = false;}

    }
    for(var i=0;i<n.length;i++){
        if(n2[i].value == "Make paper decision" || n2[i].value == "Selection of reviewers"){
        n2[i].checked = true;
        n[i].disabled = true;
        n1[i].disabled = true;
         }else{
        n2[i].checked = false;
        n[i].disabled = false;
        n1[i].disabled = false;}

    }
      for(var i=0;i<n.length;i++){
        if(n1[i].value == "Paper managment" ){
        n1[i].checked = true;
        n[i].disabled = true;
        n2[i].disabled = true;
         }else{
        n1[i].checked = false;
        n[i].disabled = false;
        n2[i].disabled = false;}

    }

}


</script>


</body>
</html>