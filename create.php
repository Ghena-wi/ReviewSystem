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

    <!-- ////////////////////////////////////////////Committee President///////////////////////////////////////// -->
    
    <form action="" method="post">
        <label id="cp">Committee President</label>
        <input type="email" name="cp"  id="cpemail"><br/>
     
        <input type="checkbox" value="Paper managment" id="pmc" class="Checkbox" disabled = true ><label id="pml" >Paper managment</label><br/>
        <input type="checkbox" value="Review" id="rc" class="Checkbox"><label id="rl">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="mdc" class="Checkbox" disabled = true ><label id="mdl" >Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mrc" class="Checkbox" checked="true"><label id="mrl" >Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rrc" class="Checkbox" checked="true"><label id="rrl" >Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="src" class="Checkbox" disabled = true ><label id="srl">Selection of reviewers</label><br/>

        <button type="button" id="test" value="click" onclick="loadDoc()">Done</button>
        <button type="button" id="reset" value="click" onclick="resetcheckboxes()">Reset</button>

    <div id="demo"></div>

 <!-- ////////////////////////////////////////////Editing Manager///////////////////////////////////////////////// -->
    

        <label id="em">Editing Manager</label>
        <input type="email" name="em" id="ememail"><br/>

        <input type="checkbox" value="Paper managment" id="pm1c" class="Checkbox1" checked="true"><label id="pm1l">Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r1c" class="Checkbox1"><label id="r1l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md1c" class="Checkbox1" disabled = true ><label id="md1l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr1c" class="Checkbox1" disabled = true><label id="mr1l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr1c" class="Checkbox1" disabled = true><label id="rr1l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr1c" class="Checkbox1" disabled = true ><label id="sr1l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="loadDoc1()">Done</button>
        <button type="button" id="reset1" value="click" onclick="resetcheckboxes1()">Reset</button>

<div id="demo1"></div>


 <!-- ////////////////////////////////////////////Chapter Chief Editor///////////////////////////////////////////////// -->
    

 <label id="cce">Chapter Chief Editor</label>
        <input type="email" name="cce" id="cceemail"><br/>

        <input type="checkbox" value="Paper managment" id="pm2c" class="Checkbox2" disabled = true><label id="pm2l">Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r2c" class="Checkbox2"><label id="r2l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md2c" class="Checkbox2" checked="true"><label id="md2l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr2c" class="Checkbox2" disabled = true><label id="mr2l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr2c" class="Checkbox2" disabled = true><label id="rr2l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr2c" class="Checkbox2" checked="true"><label id="sr2l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="loadDoc2()">Done</button>
        <button type="button" id="reset1" value="click" onclick="resetcheckboxes2()">Reset</button>

<div id="demo2"></div>






<script>

////////////////////////////////////Committee President functions //////////////////////////////////////
function loadDoc() {
            document.getElementById("pm1c").disabled = false;
            document.getElementById("pm2c").disabled = false;
            document.getElementById("mr1c").disabled = false;
            document.getElementById("mr2c").disabled = false;
            document.getElementById("rr1c").disabled = false;
            document.getElementById("rr2c").disabled = false;
            document.getElementById("r1c").disabled = false;
            document.getElementById("r2c").disabled = false;
            document.getElementById("md1c").disabled = false;
            document.getElementById("md2c").disabled = false;
            document.getElementById("sr1c").disabled = false;
            document.getElementById("sr2c").disabled = false;


    var email1 = document.getElementById("cpemail").value ;
    var role1 = document.getElementById("cp").innerHTML ;
    var func1 = ($('.Checkbox:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         console.log(r);
         var funn = r.split(',');
         document.getElementById("demo").innerHTML=funn;
      
       for(var x=0;x<funn.length;x++){
       
        if(funn[x] == document.getElementById("pml").innerHTML){
            document.getElementById("pm1c").disabled = true;
            document.getElementById("pm2c").disabled = true;


        }else if( funn[x] ==  document.getElementById("rl").innerHTML){
            document.getElementById("r1c").disabled = true;
            document.getElementById("r2c").disabled = true;
 

        }else if( funn[x] ==  document.getElementById("mdl").innerHTML){
            document.getElementById("md1c").disabled = true;
            document.getElementById("md2c").disabled = true;
     

        }else if( funn[x] ==  document.getElementById("mrl").innerHTML){
            document.getElementById("mr1c").disabled = true;
            document.getElementById("mr2c").disabled = true;
          


        }else if( funn[x] ==  document.getElementById("rrl").innerHTML){
            document.getElementById("rr1c").disabled = true;
            document.getElementById("rr2c").disabled = true;
       

        }else if( funn[x] ==  document.getElementById("srl").innerHTML){
            document.getElementById("sr1c").disabled = true;
            document.getElementById("sr2c").disabled = true;
   

        }
        }

    } 
  };
  xhttp.open("GET", "fun.php?func1="+func1+"&email1="+email1+"&role1="+role1, true);
  xhttp.send();
}

function resetcheckboxes() {
    document.getElementById("pmc").checked = false;
    document.getElementById("pm1c").disabled = false
    document.getElementById("pm2c").disabled = false

    document.getElementById("rc").checked = false;
    document.getElementById("r1c").disabled = false;
    document.getElementById("r2c").disabled = false;

    document.getElementById("mdc").checked = false;
    document.getElementById("md1c").disabled = false
    document.getElementById("md2c").disabled = false

    document.getElementById("mrc").checked = true;
    document.getElementById("mr1c").disabled = true;    
    document.getElementById("mr2c").disabled = true;    

    document.getElementById("rrc").checked = true;
    document.getElementById("rr1c").disabled = true;  
    document.getElementById("rr2c").disabled = true;    
      
    document.getElementById("src").checked = false;
    document.getElementById("sr1c").disabled = false; 
    document.getElementById("sr2c").disabled = false;    

   

    }
    
    
////////////////////////////////////Editing Manager functions //////////////////////////////////////
function loadDoc1() {
            document.getElementById("pmc").disabled = false;
            document.getElementById("pm2c").disabled = false;
            document.getElementById("mrc").disabled = false;
            document.getElementById("mr2c").disabled = false;
            document.getElementById("rrc").disabled = false;
            document.getElementById("rr2c").disabled = false;
            document.getElementById("rc").disabled = false;
            document.getElementById("r2c").disabled = false;
            document.getElementById("mdc").disabled = false;
            document.getElementById("md2c").disabled = false;
            document.getElementById("src").disabled = false;
            document.getElementById("sr2c").disabled = false;


    //         if(document.getElementById("pmc").checked = false){ 
    //         document.getElementById("pm1c").disabled = false;
    //         document.getElementById("pm2c").disabled = false;}
    //   else if(document.getElementById("mrc").checked = false)     
    //         {document.getElementById("mr1c").disabled = false;
    //         document.getElementById("mr2c").disabled = false;}
    //   else if(document.getElementById("rrc").checked = false)     

    //         {document.getElementById("rr1c").disabled = false;
    //         document.getElementById("rr2c").disabled = false;}
    //   else if(document.getElementById("rc").checked = false)     
            
    //         {document.getElementById("r1c").disabled = false;
    //         document.getElementById("r2c").disabled = false;}
    //   else if(document.getElementById("mdc").checked = false)     

    //         {document.getElementById("md1c").disabled = false;
    //         document.getElementById("md2c").disabled = false;}
    //   else if(document.getElementById("src").checked = false)     

    //         {document.getElementById("sr1c").disabled = false;
    //         document.getElementById("sr2c").disabled = false;}



    var email2 = document.getElementById("ememail").value ;
    var role2 = document.getElementById("em").innerHTML ;
    var func2 = ($('.Checkbox1:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp2 = new XMLHttpRequest();
     xhttp2.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r2=this.responseText;
         console.log(r2);
         var funn2 = r2.split(',');
         document.getElementById("demo1").innerHTML=funn2;
      
       for(var x=0;x<funn2.length;x++){
       
        if(funn2[x] == document.getElementById("pm1l").innerHTML){
            document.getElementById("pmc").disabled = true;
            document.getElementById("pm2c").disabled = true;


        }else if( funn2[x] ==  document.getElementById("r1l").innerHTML){
            document.getElementById("rc").disabled = true;
            document.getElementById("r2c").disabled = true;
 

        }else if( funn2[x] ==  document.getElementById("md1l").innerHTML){
            document.getElementById("mdc").disabled = true;
            document.getElementById("md2c").disabled = true;
     

        }else if( funn2[x] ==  document.getElementById("mr1l").innerHTML){
            document.getElementById("mrc").disabled = true;
            document.getElementById("mr2c").disabled = true;
          


        }else if( funn2[x] ==  document.getElementById("rr1l").innerHTML){
            document.getElementById("rrc").disabled = true;
            document.getElementById("rr2c").disabled = true;
       

        }else if( funn2[x] ==  document.getElementById("sr1l").innerHTML){
            document.getElementById("src").disabled = true;
            document.getElementById("sr2c").disabled = true;
   

        }
        }

    } 
  };
  xhttp2.open("GET", "fun1.php?func2="+func2+"&email2="+email2+"&role2="+role2, true);
  xhttp2.send();
}

function resetcheckboxes1() {
    document.getElementById("pmc1").checked = true;
    document.getElementById("pmc").disabled = true
    document.getElementById("pm2c").disabled = true

    document.getElementById("r1c").checked = false;
    document.getElementById("rc").disabled = false;
    document.getElementById("r2c").disabled = false;

    document.getElementById("md1c").checked = false;
    document.getElementById("mdc").disabled = false
    document.getElementById("md2c").disabled = false

    document.getElementById("mr1c").checked = false;
    document.getElementById("mrc").disabled = false;    
    document.getElementById("mr2c").disabled = false;    

    document.getElementById("rr1c").checked = false;
    document.getElementById("rrc").disabled = false;  
    document.getElementById("rr2c").disabled = false;    
      
    document.getElementById("sr1c").checked = false;
    document.getElementById("src").disabled = false; 
    document.getElementById("sr2c").disabled = false;    

   

    }

    
////////////////////////////////////Chapter Chief Editor functions //////////////////////////////////////
function loadDoc2() {
            document.getElementById("pm1c").disabled = false;
            document.getElementById("pmc").disabled = false;
            document.getElementById("mr1c").disabled = false;
            document.getElementById("mrc").disabled = false;
            document.getElementById("rr1c").disabled = false;
            document.getElementById("rrc").disabled = false;
            document.getElementById("r1c").disabled = false;
            document.getElementById("rc").disabled = false;
            document.getElementById("md1c").disabled = false;
            document.getElementById("mdc").disabled = false;
            document.getElementById("sr1c").disabled = false;
            document.getElementById("src").disabled = false;


    var email3 = document.getElementById("cceemail").value ;
    var role3 = document.getElementById("cce").innerHTML ;
    var func3 = ($('.Checkbox2:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp3 = new XMLHttpRequest();
     xhttp3.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r3=this.responseText;
         console.log(3);
         var funn3 = r3.split(',');
         document.getElementById("demo2").innerHTML=funn3;
      
       for(var x=0;x<funn3.length;x++){
       
        if(funn3[x] == document.getElementById("pm2l").innerHTML){
            document.getElementById("pm1c").disabled = true;
            document.getElementById("pmc").disabled = true;


        }else if( funn3[x] ==  document.getElementById("r2").innerHTML){
            document.getElementById("r1c").disabled = true;
            document.getElementById("rc").disabled = true;
 

        }else if( funn3[x] ==  document.getElementById("md2l").innerHTML){
            document.getElementById("md1c").disabled = true;
            document.getElementById("mdc").disabled = true;
     

        }else if( funn3[x] ==  document.getElementById("mr2l").innerHTML){
            document.getElementById("mr1c").disabled = true;
            document.getElementById("mrc").disabled = true;
          


        }else if( funn3[x] ==  document.getElementById("rr2l").innerHTML){
            document.getElementById("rr1c").disabled = true;
            document.getElementById("rrc").disabled = true;
       

        }else if( funn3[x] ==  document.getElementById("sr2l").innerHTML){
            document.getElementById("sr1c").disabled = true;
            document.getElementById("src").disabled = true;
   

        }
        }

    } 
  };
  xhttp.open("GET", "fun2.php?func3="+func3+"&email3="+email3+"&role3="+role3, true);
  xhttp.send();
}

function resetcheckboxes2() {
    document.getElementById("pm2c").checked = false;
    document.getElementById("pm1c").disabled = false
    document.getElementById("pmc").disabled = false

    document.getElementById("r2c").checked = false;
    document.getElementById("r1c").disabled = false;
    document.getElementById("rc").disabled = false;

    document.getElementById("md2c").checked = true;
    document.getElementById("md1c").disabled = true
    document.getElementById("mdc").disabled = true

    document.getElementById("mr2c").checked = false;
    document.getElementById("mr1c").disabled = false;    
    document.getElementById("mrc").disabled = false;    

    document.getElementById("rr2c").checked = false;
    document.getElementById("rr1c").disabled = false;  
    document.getElementById("rrc").disabled = false;    
      
    document.getElementById("sr2c").checked = true;
    document.getElementById("sr1c").disabled = true; 
    document.getElementById("src").disabled = true;    

   

    }


</script>









</form>
</body>
</html>