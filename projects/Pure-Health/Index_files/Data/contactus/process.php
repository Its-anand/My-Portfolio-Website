<?php
if(isset($_POST['Submit']))
{
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $msg = $_POST['msg'];
    if(empty($subject) || empty($email) || empty($msg))
    {
        header('location:../../../index.php?error');
    }
    else 
    {
        $to="do4anand@gmail.com";
        $headers =  'MIME-Version: 1.0' . "\r\n"; 
        $headers .= "From: $email" . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n"; 
        
        if(mail($to,$subject,$msg,$headers))
        {
            header('location:../../../index.php?success');
        }
    }
}
else 
{
    header('location:../../../index.php?error');
}
?>