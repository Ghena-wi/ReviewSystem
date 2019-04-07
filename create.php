<!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>test</title>
    <!-- <link rel="stylesheet" href="createS.css"> -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
  
</head>

<body onload="init()">

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

    <label>Now choose you're structure for <?php echo $_GET['name'] ?></label>

    <!-- ////////////////////////////////////////////Committee President///////////////////////////////////////// -->
    <div id="container">
    <form action="recordrole.php" method="post">
    <div id="role1">
        <label id="R1" value="Committee President">Committee President</label>
        <input type="email" name="cp"  id="email1"><br/>
        <!-- onclick="makechanges(container,$(this))" -->
        <input type="checkbox" value="Paper managment" id="pmc" class="Checkbox1" disabled="true" ><label id="pml" >Paper managment</label><br/>
        <input type="checkbox" value="Review" id="rc" class="Checkbox1"><label id="rl">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="mdc" class="Checkbox1"disabled="true" ><label id="mdl" >Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mrc" class="Checkbox1" checked="true"><label id="mrl" >Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rrc" class="Checkbox1"checked="true" ><label id="rrl" >Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="src" class="Checkbox1" disabled="true"><label id="srl">Selection of reviewers</label><br/>

        <button type="button" id="test" value="click" onclick="loadDoc()">Done</button>
        <button type="button" id="reset1" value="click" onclick="document.getElementById('role1').style.display='none'">Delete</button>

        

    </div>
    </form>
 <!-- ////////////////////////////////////////////Editing Manager///////////////////////////////////////////////// -->
 
 <form action="" method="post">
   <div id="role2"> 

        <label id="R2" value="Editing Manager">Editing Manager</label>
        <input type="email" name="em" id="email2"><br/>

        <input type="checkbox" value="Paper managment" id="pm1c" class="Checkbox2" checked="true"><label id="pm1l" >Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r1c" class="Checkbox2"><label id="r1l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md1c" class="Checkbox2" disabled="true" ><label id="md1l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr1c" class="Checkbox2" disabled="true" ><label id="mr1l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr1c" class="Checkbox2" disabled="true"><label id="rr1l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr1c" class="Checkbox2" disabled="true"><label id="sr1l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="loadDoc1()">Done</button>
        <button type="button" id="reset1" value="click" onclick="document.getElementById('role2').style.display='none'">Delete</button>

        <!-- onclick="deleterole('role2','2')" -->
</div>
</form>

 <!-- ////////////////////////////////////////////Chapter Chief Editor///////////////////////////////////////////////// -->
    
 <form action="" method="post">
<div id="role3">
 <label id="R3" value="Chapter Chief Editor">Chapter Chief Editor</label>
        <input type="email" name="cce" id="email3"><br/>

        <input type="checkbox" value="Paper managment" id="pm2c" class="Checkbox3" disabled="true"><label id="pm2l">Paper managment</label><br/>
        <input type="checkbox" value="Review" id="r2c" class="Checkbox3"><label id="r2l">Review</label><br/>
        <input type="checkbox" value="Make paper decision" id="md2c" class="Checkbox3" checked="true" ><label id="md2l">Make paper decision</label><br/>
        <input type="checkbox" value="Make reports" id="mr2c" class="Checkbox3"disabled="true" ><label id="mr2l">Make reports</label><br/>
        <input type="checkbox" value="Request reviewers" id="rr2c" class="Checkbox3" disabled="true"><label id="rr2l">Request reviewers</label><br/>
        <input type="checkbox" value="Selection of reviewers" id="sr2c" class="Checkbox3" checked="true"><label id="sr2l">Selection of reviewers</label><br/>

        <button type="button" id="test1" value="click" onclick="sendData()">Done</button>
        <button type="button" id="reset1" value="click" onclick="deleterole('role3','3')">Delete</button>

      
</div>
<button type="submit" id="saveS" name="saveS" value="submit">Doneee</button>
</form>





</div>
<button type="button" id="reset" value="click" onclick="resetcheckboxes()">Reset</button>


<button type="button" id="create" value="click" onclick="createrole()">create new role</button>



<script>

           
            var n1 = document.getElementsByClassName('Checkbox1');
            var n2 = document.getElementsByClassName('Checkbox2');
            var n3 = document.getElementsByClassName('Checkbox3');
           
                
          
            var container = document.getElementById('container');
           
        
            var Narray = [n1,n2,n3]; // the default 3 forms 
            var c = 3;
            function createrole(){
   
   
        c++;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if(xhttp.readyState==4 && xhttp.status==200){
    }}
    // <form action=\"\" method=\"post\"> </form>
    var content = "<form action=\"\" method=\"post\"><div id=\"role"+c+"\"><input type=\"text\" id=\"R"+c+"\"><br/><input type=\"email\" id=\"email"+c+"\"><br/><input type=\"checkbox\" value=\"Paper managment\" id=\"pm"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\"><label id=\"pm"+c+"l\">"+c+"Paper managment</label><br/><input type=\"checkbox\" value=\"Review\" id=\"r"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\"><label id=\"r"+c+"l\">Review</label><br/> <input type=\"checkbox\" value=\"Make paper decision\" id=\"md"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\" ><label id=\"md"+c+"l\">Make paper decision</label><br/>        <input type=\"checkbox\" value=\"Make reports\" id=\"mr"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\" ><label id=\"mr"+c+"l\">Make reports</label><br/>   <input type=\"checkbox\" value=\"Request reviewers\" id=\"rr"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\" ><label id=\"rr"+c+"l\">Request reviewers</label><br/>  <input type=\"checkbox\" value=\"Selection of reviewers\" id=\"sr"+c+"c\" class=\"Checkbox"+c+"\" onclick=\"updatecheck()\" ><label id=\"sr"+c+"l\">Selection of reviewers</label><br/> <button type=\"button\" id=\"test1\" value=\"click\" onclick=\"loadDoc"+c+"()\">Done</button></div></form><button type=\"button\" id=\"reset1\" value=\"click\" onclick=\"document.getElementById('role"+c+"').style.display='none'\">Delete</button></div></form>";
    xhttp.open("GET","createrole.php?content=" + content,true);
    xhttp.send();
    var div = document.getElementById('container');

    div.insertAdjacentHTML('beforeend', content );

    var newN = 'n' + (Narray.length + 1);
      
      var Narraylength = Narray.length +1;
      var cname = "Checkbox"+Narraylength;
      newN = document.getElementsByClassName(cname);
    
      $(newN).on('click', updatecheck);
      Narray.push(newN);
      for(var i=0;i<Narray.length;i++){
          for(var j=0;j<6;j++){
              if(Narray[i])
              {if(Narray[i][j].checked==true){
                  newN[j].disabled=true;
              }}
              console.log(Narray);
            //   else{
            //     newN[j].disabled=true;
            //   }
          }
      }
 
      console.log(Narray);

}



function init(){
           


    for(var j=0;j<Narray.length;j++){
            for(var i=0;i<6;i++)
          { Narray[j][i].onclick = updatecheck;}
  
        }


}


function updatecheck() {
  
    // var form = this.form;
    

    if ( this.checked ) {
      
        for(var j=1;j<=Narray.length;j++){
          
            // if (j == getparent(this)) { continue ; }
            var e =$(container).find("input.Checkbox"+j+"[value='"+this.value+"']");
        // var ivalue =getparent(e); 
        // if (j == ivalue ) { continue; }
      e.not(this).attr('disabled', true);
    
        }
    } else {
        for(var j=1;j<=Narray.length;j++){
            var e =$(container).find("input.Checkbox"+j+"[value='"+this.value+"']");
         
      e.not(this).attr('disabled', false);
    
        }
  
    }
    


// function getparent(e){
//     console.log(e);
//     for(var i=1;i<=Narray.length;i++){
//         if( Narray[i]){
//         for(var j=1;j<6;j++){
           
//             if(Narray[i][j]==e){
//                 // $(Narray[i][j]).attr('class','Checkbox'+i)==$(e).attr('class','Checkbox'+i)
//             return i;}
// }}}}


// function deleterole(divId,nIndex){
//     var D_id=document.getElementById(divId);
   
//     for(var i=1;i<=Narray.length;i++){
        
//           for(var j=1;j<6;j++){
//               if(Narray[nIndex][j].checked==true){
//                  while(i!=nIndex){Narray[i][j].disabled=false;}
//               }
//           }
//       }
//       D_id.remove();
//     Narray.pop(Narray[nIndex]);
//     for(var i=1;i<=Narray.length;i++)
//     {console.log(Narray[i]);}

    

}

// }
function deleterole(divId,nIndex){
    var D_id=document.getElementById(divId);
    var n_id = document.getElementsByClassName('Checkbox'+nIndex);
    for(var j=0;j<n_id.length;j++){
        for(var i=0;i<Narray.length;i++){

            if(n_id[j].checked==true){
                Narray[i][j].disabled=false;
            }
        //    ($('.Checkbox'+nIndex+':checked').map(function() {
        //     var e =$(container).find("input.Checkbox"+i+"[value='"+this+"']");
        // e.not(this).attr('disabled', false);
        // }));
           
      
        //   if(Narray[nIndex][j].checked==true){
        //      while(i!=nIndex){Narray[i][j].disabled=false;}
          
      }
    }
   
      
      D_id.remove();
    Narray.pop(Narray[nIndex]);
    for(var i=1;i<=Narray.length;i++)
    {console.log(Narray[i]);}

    // for(var j=1;j<=Narray.length;j++){
          
          // if (j == getparent(this)) { continue ; }
        //   var e =$(container).find("input.Checkbox"+j+"[value='"+this.value+"']");
      // var ivalue =getparent(e); 
      // if (j == ivalue ) { continue; }
    // e.not(this).attr('disabled', true);
  
      }
    

    




////////////////////////////////////Committee President functions //////////////////////////////////////
function makechanges(){
   
    var form = this.form;

    if (this.checked) {
        
        for(var j=1;j<=Narray.length;j++){
            for(var i=1;i<=Narray[j].length;i++)
          {  $(Narray[j][i]).find("input.Checkbox"+i+"[value='"+this.value+"']").attr('disabled', true);}
    
        }
    } else {
        for(var j=1;j<=Narray.length;j++){
            for(var i=1;i<=Narray[j].length;i++)
          {  $(Narray[j][i]).find("input.Checkbox"+i+"[value='"+this.value+"']").attr('disabled', false);}
  
        }
    }


}
function sendData(){
    
			var funcs = [];
		    $('input[type=checkbox]').each(function(){
			    if($(this).is(':checked')){
				    funcs.push($(this).val());
				}
			})
		
			var formData = new FormData();
            formData.append('funcs', funcs.join(', '));
            console.log(funcs);
            $.ajax({
				type: 'post',
				url: 'process.php',
				data: formData,
				contentType: false,
				processData: false,
				success: function(response){
					alert(response.responseText)
				},
				error: function(response){
					alert(response.responseText)
				}
			});
		// });

}




function loadDoc() {

       

    var formsE = document.getElementsByTagName("form");
    // console.log(formsE);
    // var roleArray = [email1,email2,email3];           
    // var funcArray = [email1,email2,email3];           

    // var email1 = document.getElementById("cpemail").value;
    // var email2 = document.getElementById("ememail").value;
    // var email3 = document.getElementById("cceemail").value;
    // var emailArray = [email1,email2,email3];


    for(var i=1;i<=formsE.length;i++){
        // var e =$(container).find("input.Checkbox"+j+"[value='"+this.value+"']");
        // $(formsE[i]).find("input.Checkbox"+j+"[value='"+this.value+"']");

        var funcValue = ($('.Checkbox'+i+':checked').map(function() {
         return this.value; }).get().join(','));
         if(i>3){var roleValue = document.getElementById("R"+i).value ;}
         else {var roleValue = document.getElementById("R"+i).innerHTML ;}
         var emailValue = document.getElementById("email"+i).value;
         var Jname = "<?php echo $_GET['name'] ?>";
         console.log(funcValue,roleValue,emailValue,Jname)
   
         var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
        //  var r=this.responseText;
        //  var funn = r.split(',');
      
   
       
    } 
  };
  xhttp.open("GET", "recordrole.php?func1="+funcValue+"&email1="+emailValue+"&role1="+roleValue+"&Jname1="+Jname, true);
  xhttp.send();
   
   
   
        }

    // var role1 = document.getElementById("cp").innerHTML ;
    // var func1 = ($('.Checkbox1:checked').map(function() {
    // return this.value; }).get().join(','));
     
  
}



    
////////////////////////////////////Editing Manager functions //////////////////////////////////////
function loadDoc1() {
           
            // var n1 = document.getElementsByClassName('Checkbox1');
            // var n2 = document.getElementsByClassName('Checkbox2');
            // var n3 = document.getElementsByClassName('Checkbox3');
            // var n4 = document.getElementsByClassName('Checkbox4');

            for(var i=0;i<n1.length;i++){
                 n1[i].disabled = false;
                 n3[i].disabled = false;
                //  if(n4[i]){n4[i].disabled = false;}


            }

            
            for(var i=0;i<n1.length;i++){
                if( n1[i].checked == true){
                 n2[i].disabled = true;
                 n3[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

                }
            }
            for(var i=0;i<n1.length;i++){
                if( n3[i].checked == true){
                 n1[i].disabled = true;
                 n2[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

                }
            }

            


    var email1 = document.getElementById("ememail").value ;
    var role1 = document.getElementById("em").innerHTML ;
    var func1 = ($('.Checkbox2:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         var funn = r.split(',');
      
       for(var x=0;x<funn.length;x++){

        for(var i=0;i<n2.length;i++){
                if( n2[i].value == funn[x]){
                 n1[i].disabled = true;
                 n3[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

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
        
            // var n1 = document.getElementsByClassName('Checkbox1');
            // var n2 = document.getElementsByClassName('Checkbox2');
            // var n3 = document.getElementsByClassName('Checkbox3');
            // var n4 = document.getElementsByClassName('Checkbox4');


            for(var i=0;i<n1.length;i++){
                 n1[i].disabled = false;
                 n2[i].disabled = false;
                //  if(n4[i]){n4[i].disabled = false;}


            }

            for(var i=0;i<n1.length;i++){
                if( n1[i].checked == true){
                 n2[i].disabled = true;
                 n3[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

                }
            }
            for(var i=0;i<n1.length;i++){
                if( n2[i].checked == true){
                 n1[i].disabled = true;
                 n3[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

                }
            }




    var email1 = document.getElementById("cceemail").value ;
    var role1 = document.getElementById("cce").innerHTML ;
    var func1 = ($('.Checkbox3:checked').map(function() {
    return this.value; }).get().join(','));
     
    var xhttp = new XMLHttpRequest();
     xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
         var r=this.responseText;
         var funn = r.split(',');
      
       for(var x=0;x<funn.length;x++){
       
        for(var i=0;i<n1.length;i++){
                if( n3[i].value == funn[x]){
                 n1[i].disabled = true;
                 n2[i].disabled = true;
                //  if(n4[i]){n4[i].disabled = true;}

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

// var n1 = document.getElementsByClassName('Checkbox1');
// var n2 = document.getElementsByClassName('Checkbox2');
// var n3 = document.getElementsByClassName('Checkbox3');
// var n4 = document.getElementsByClassName('Checkbox4');
for(var i=0;i<Narray.length;i++){
        for(var j=0;j<Narray[i].length;j++){
            Narray[i][j].checked=false;
            Narray[i][j].disabled=false;


         }

    }
   
    // var e =$(container).find("input.Checkbox"+j+"[value='"+this.value+"']");++++++++++++++++++++++ 
                // Narray[x][i].disabled=true;++++++++++++++++++++


        // var ivalue =getparent(e); 
        // if (j == ivalue ) { continue; }
      


    for(var i=0;i<n1.length;i++){
        if(n1[i].value == "Make reports" || n1[i].value == "Request reviewers"){
        n1[i].checked = true;
        n2[i].disabled = true;
        n3[i].disabled = true;
            // var e1 =$(container).find("input.Checkbox2 [value='Make reports']");
            // var e2 =$(container).find("input.Checkbox3 [value='Request reviewers']");

            //     $(e1).attr('disabled', true);
            //     $(e2).attr('disabled', true);

            
         
        }
    //      else{
    //     n1[i].checked = false;
    //     n2[i].disabled = false;
    //     n3[i].disabled = false;
    //     // if(n4[i]){n4[i].disabled = false;}
    // }

    }
    for(var i=0;i<n3.length;i++){
        if(n3[i].value == "Make paper decision" || n3[i].value == "Selection of reviewers"){
        n3[i].checked = true;
        // for(var x=1;x<Narray.length;x++){
        //     var e =$(container).find("input.Checkbox"+x+"[value='Selection of reviewers']");
        //         $(e).not(this).attr('disabled', true);
            
        //  }
        n1[i].disabled = true;
        n2[i].disabled = true;
        // if(n4[i]){n4[i].disabled = true;}

         }
    //      else{
    //     n3[i].checked = false;
    //     n1[i].disabled = false;
    //     n2[i].disabled = false;
    //     // if(n4[i]){n4[i].disabled = false;}
    // }

    }
      for(var i=0;i<n2.length;i++){
        if(n2[i].value == "Paper managment" ){
        n2[i].checked = true;
        n1[i].disabled = true;
        n3[i].disabled = true;
        // if(n4[i]){n4[i].disabled = true;}

         }
    //      else{
    //     n2[i].checked = false;
    //     n1[i].disabled = false;
    //     n3[i].disabled = false;
    //     // if(n4[i]){n4[i].disabled = false;}
    // }

    }
    for(var i=3;i<Narray.length;i++){
        for(var j=0;j<6;j++){
            if(j==1){continue;}
           else{ Narray[i][j].checked=false;
            Narray[i][j].disabled=true;}

        }
       
    }

    

}


</script>


</body>
</html>