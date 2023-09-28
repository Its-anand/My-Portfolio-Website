<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $msg = $_POST['msg'];
    if(empty($subject) || empty($email) || empty($msg))
    {
        header('location:index.php?empty');
    }
    else 
    {
        $to="do4anand@gmail.com";

        if(mail($to,$subject,$msg,$email))
        {
            header('location:index.php?success');
        }
    }
}
else 
{
    header('location:index.php?submit');
}
?>