
<!DOCTYPE html>

<html>
<body>

<?php
 require 'PHPMailerAutoload.php';

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
    
//  if  (mail($_GET['email'],"welcome","hello this is the first message"))
//  {
//      echo"mail sent !";
//  }
//    else {echo "fail";}
}
//$from = 'ranabenmahmoud2@gmail.com';
//$to = 'ranabenmahmoud@gmail.com';
//$subject = 'Hi!';
//$body = "Hi,\n\nHow are you?";
//
//$headers = array(
//    'From' => $from,
//    'To' => $to,
//    'Subject' => $subject
//);
//
//$smtp = Mail::factory('smtp', array(
//        'host' => 'ssl://smtp.gmail.com',
//        'port' => '465',
//        'auth' => true,
//        'username' => 'ranabenmahmoud@gmail.com',
//        'password' => ''
//    ));
//
//$mail = $smtp->send($to, $headers, $body);
//
//if (PEAR::isError($mail)) {
//    echo('<p>' . $mail->getMessage() . '</p>');
//} else {
//    echo('<p>Message successfully sent!</p>');
//}


if ($conn->query($insr1) === TRUE) {
    echo "New record created successfully";
//    $admin_email = "someone@example.com"; //from
//  $email = $_GET['email']; //to
//  $subject = "hi";
//  $comment = "hello"; //message
//  
//  //send email
//  mail($email, "$subject", $comment, "From:" . $admin_email);

//$mail = new PHPMailer;
//
//$mail->isSMTP();                            // Set mailer to use SMTP
//$mail->Host = 'smtp.gmail.com';             // Specify main and backup SMTP servers
//$mail->SMTPAuth = true;                     // Enable SMTP authentication
//$mail->Username = 'ranabenmahmoud@gmail.com';          // SMTP username
//$mail->Password = ''; // SMTP password
//$mail->SMTPSecure = 'tls';                  // Enable TLS encryption, `ssl` also accepted
//$mail->Port = 587;                          // TCP port to connect to
//
//$mail->setFrom('rana@inspirelll.com', 'CodexWorld');
//$mail->addReplyTo('rana@inspirelll.com', 'CodexWorld');
//$mail->addAddress('ranabenmahmoud@gmail.com.com');   // Add a recipient
////$mail->addCC('cc@example.com');
////$mail->addBCC('bcc@example.com');
//
//$mail->isHTML(true);  // Set email format to HTML
//
//$bodyContent = '<h1>How to Send Email using PHP in Localhost by CodexWorld</h1>';
//$bodyContent .= '<p>This is the HTML email sent from localhost using PHP script by <b>CodexWorld</b></p>';
//
//$mail->Subject = 'Email from Localhost by CodexWorld';
//$mail->Body    = $bodyContent;
//
//if(!$mail->send()) {
//    echo 'Message could not be sent.';
//    echo 'Mailer Error: ' . $mail->ErrorInfo;
//} else {
//    echo 'Message has been sent';
//}
    
} else {
    echo "Error: " . $insr1 . "<br>" . $conn->error;
}

$conn->close();
?>
    <span>Now choose you're structure</span>
       <form action="" method="get">
        
        <label>Correspondence Author</label>
           <input class="form-control" type="text" name="ca">
        <label>Editing Manager</label>
           <input class="form-control" type="text" name="em">
            <label>Reviewer</label>
           <input class="form-control" type="text" name="rev">
            <label>Chapter Chief Editor</label>
           <input class="form-control" type="text" name="cce">
              <label>Committee President </label>
           <input class="form-control" type="text" name="cp">
<!--       <input type="submit"  name="Insert" id="Insert">-->
        
    </form>
</body>
</html>