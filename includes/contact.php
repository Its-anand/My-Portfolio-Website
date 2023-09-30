<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'PHPMailer\Exception.php';
require 'PHPMailer\PHPMailer.php';
require 'PHPMailer\SMTP.php';

$userEmail = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['msg'];

if(isset($_POST['submit'])){

    if(empty($subject) || empty($userEmail) || empty($message))
    {
        header('location:../index.php?error');
    }
    else{

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.anandchoudhary.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'contact@anandchoudhary.in';                     //SMTP username
    $mail->Password   = 'PJwV4v8Ru6';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$userEmail", "$userEmail");        //Bhejne wala: pele jisne bheja uski email fir uska name jiski jage me fir se uski email daldi
    $mail->addAddress("contact@anandchoudhary.in", 'Me');     //Jisko Bhej rahe he wo: Khud ko bheja kyoki contact me form he or khud ka name
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    // //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "$subject";
    $mail->Body    = "$message";

    $mail->send();
    //echo "Done";
    header('location:../index.php?success');
} catch (Exception $e) {
   //echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   header('location:../index.php?mailerror');
}
}
}
else{
    echo"
      <script>
      alert('Please fill the contact form');
      </script>  
    ";
    header('location:../index.php?submit');
}