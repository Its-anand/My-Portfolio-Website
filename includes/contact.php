<?php
include './connection.php';
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
include './PHPMailer/Exception.php">';
include './PHPMailer/PHPMailer.php';
include './PHPMailer/SMTP.php';

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

$query = "SELECT * FROM `purehealth_id` WHERE `id` = '3'";
$query1 = "SELECT * FROM `purehealth_id` WHERE `id` = '4'";
    $result = mysqli_query($con,$query);
    $result1 = mysqli_query($con,$query1);
    if($result && $result1)
    {
        if(mysqli_num_rows($result)==1 && mysqli_num_rows($result1)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            $result_fetch1=mysqli_fetch_assoc($result1);
            $value = $result_fetch['dsf43t34gaega4'];
            $value1 = $result_fetch1['dsf43t34gaega4'];

            echo($value." ");
            echo($value1);
        }
        else{
            echo"
            <script>
                alert('No key found');
            </script>
            ";
        }
}
else{
    echo"
    <script>
        alert('Unable to connect with database');
    </script>
    ";
}
try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.anandchoudhary.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = "$value";                     //SMTP username
    $mail->Password   = "$value1";                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$userEmail", "$userEmail");        //Bhejne wala: pele jisne bheja uski email fir uska name jiski jage me fir se uski email daldi
    $mail->addAddress("noreply@anandchoudhary.in", 'Me');     //Jisko Bhej rahe he wo: Khud ko bheja kyoki contact me form he or khud ka name
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