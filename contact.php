<?php
//Include required PHPMailer files
require 'C:\laragon\bin\composer\vendor\phpmailer\phpmailer\src\Exception.php';
require 'C:\laragon\bin\composer\vendor\phpmailer\phpmailer\src\PHPMailer.php';
require 'C:\laragon\bin\composer\vendor\phpmailer\phpmailer\src\SMTP.php';

//Define name spaces
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if($_POST) {

$visitor_name = "";
$visitor_email = "";
$email_title = "";
$my_email = "ilarimsa937@gmail.com";
$visitor_message = "";

//Create instance of PHPMailer
$mail = new PHPMailer();

//Set mailer to use smtp
$mail->isSMTP();

//Define smtp host
$mail->Host = "smtp.gmail.com";

//Enable smtp authentication
$mail->SMTPAuth = true;

//Set smtp encryption type (ssl/tls)
$mail->SMTPSecure = "tls";

//Port to connect smtp
$mail->Port = "587";

//Set gmail username
$mail->Username = "ilarimsa937@gmail.com";

//Set gmail password
$mail->Password = "rxexlgukwdrzgmkt";

//Email title
if(isset($_POST['email_title'])) {
    $email_title = $_POST['email_title'];
}

//Email message
if(isset($_POST['visitor_message'])) {
    $visitor_message = htmlspecialchars($_POST['visitor_message']);
}

//Email subject
if(isset($_POST['visitor_name'])) {
    $visitor_name = $_POST['visitor_name'];
}

//Visitor email
if(isset($_POST['visitor_email'])) {
    $visitor_email = $_POST['visitor_email'];
}

$mail->Subject = "From ".$visitor_name;

//Set sender email
$mail->setFrom($visitor_email);

//Enable HTML
$mail->isHTML(true);

// //Attachment
// $mail->addAttachment('imgage/image.png');

//Email body
$mail->Body = 
" 
                <div>
                    <label><b>Visitor Email:</b></label>&nbsp;<span>".$visitor_email."</span>
                </div>
                <div>
                    <label><b>Reason For Contacting Me:</b></label>&nbsp;<span>".$email_title."</span>
                </div>
                <div>
                    <label><b>Visitor Message:</b></label>
                    <div>".$visitor_message."</div>
                </div>
";

//Add recipient
$mail->addAddress('ilarimsa937@gmail.com');

//Finally send email
if ( $mail->send() ) {
    echo "Thank you for contacting us, $visitor_name. You will get a reply within 24 hours.";
}else{
    echo "Message could not be sent.";
}

//Closing smtp connection
$mail->smtpClose();
}
?>