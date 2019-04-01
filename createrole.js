var c = 3;
function createrole(){
   
   
        c++;

    var xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function(){
    if(xhttp.readyState==4 && xhttp.status==200){
    }}
    var content = "<form action=\"\" method=\"post\"><div id=\"role"+c+"\"><input type=\"text\"><br/><input type=\"email\"><br/><input type=\"checkbox\" value=\"Paper managment\" id=\"pm"+c+"c\" class=\"Checkbox"+c+"\" ><label id=\"pm"+c+"l\">Paper managment</label><br/><input type=\"checkbox\" value=\"Review\" id=\"r"+c+"c\" class=\"Checkbox"+c+"\"><label id=\"r"+c+"l\">Review</label><br/> <input type=\"checkbox\" value=\"Make paper decision\" id=\"md"+c+"c\" class=\"Checkbox"+c+"\" ><label id=\"md"+c+"l\">Make paper decision</label><br/>        <input type=\"checkbox\" value=\"Make reports\" id=\"mr"+c+"c\" class=\"Checkbox"+c+"\" ><label id=\"mr"+c+"l\">Make reports</label><br/>   <input type=\"checkbox\" value=\"Request reviewers\" id=\"rr"+c+"c\" class=\"Checkbox"+c+"\" ><label id=\"rr"+c+"l\">Request reviewers</label><br/>  <input type=\"checkbox\" value=\"Selection of reviewers\" id=\"sr"+c+"c\" class=\"Checkbox"+c+"\" ><label id=\"sr"+c+"l\">Selection of reviewers</label><br/> <button type=\"button\" id=\"test1\" value=\"click\" onclick=\"loadDoc"+c+"()\">Done</button></div></form><button type=\"button\" id=\"reset1\" value=\"click\" onclick=\"document.getElementById('role"+c+"3').style.display='none'\">Delete</button></div></form>";
    xhttp.open("GET","createrole.php?content=" + content,true);
    xhttp.send();
    var div = document.getElementById('container');

    div.insertAdjacentHTML('beforeend', content );

}