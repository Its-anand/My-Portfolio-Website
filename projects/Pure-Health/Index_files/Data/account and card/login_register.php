<?php
 require('../../Data/connection.php');
session_start();
/*use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
function sendMail($email,$v_code)
{
    require ('../../Data/contactus/PHPMailer/Exception.php');
    require ('../../Data/contactus/PHPMailer/PHPMailer.php');
    require ('../../Data/contactus/PHPMailer/SMTP.php');
    
    //Create an instance; passing `true` enables exceptions
    $mail = new PHPMailer(true);
    
    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'cloud2.googiehost.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'no-reply@purehealth.c1.is';                     //SMTP username
        $mail->Password   = 'z5U0q6M!aZMa';                               //SMTP password EX- t4temp@123
        $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom('no-reply@purehealth.c1.is', 'purehealth');
        $mail->addAddress($email);     //Add a recipient
    
        //Attachments
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = 'Email verification - Pure health';
        $mail->Body    = "
        Thanks for your registration!<br>
        click the link below to verify the email address <br>
        <a href='https://pure-health-natural-products.000webhostapp.com/Index_files/Data/account%20and%20card/verify.php?email=$email&v_code=$v_code'>Verify</a>";    

        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';
    
        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
    }
   }*/
#This is the code for login
if(isset($_POST['login']))
{  
    $query = "SELECT * FROM `purehealth_registered_users` WHERE  `email`= '$_POST[email_username]' OR `username`='$_POST[email_username]'";
    $result = mysqli_query($con,$query);
    
    if($result)
    {
        if(mysqli_num_rows($result)==1)
        {
            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['is_verified']==1)
            {
                if(password_verify($_POST['password'],$result_fetch['password']))
                {
                    $_SESSION['logged_in']=true;
                    $_SESSION['UserLoginId']=$result_fetch['full_name'];
                    $_SESSION['username'] = $result_fetch['username'];
                    header("location: ../../../index.php");

                }
            
                else
                {
                    echo"
                    <script>
                        alert('Password is incorrect');
                        // window.location.href='signin.php';
                    </script>
                ";
                }
            }
            else
            {
                echo"
                    <script>
                        alert('Please verify your email first');
                        window.location.href='signin.php';
                    </script>
                ";  
            }
            
        }
            else
            {
                echo"
                <script>
                    alert('Email not verified please verify it first');
                    window.location.href='signin.php';
                </script>
            "; 
            }
    }
    else
    {
        echo"
            <script>
                alert('Email or Username not registered');
                window.location.href='signin.php';
            </script>
        ";
    }
}

#This is the code for registration 
if(isset($_POST['register']))
{
    $user_exist_query="SELECT * FROM `purehealth_registered_users` where `username`= '$_POST[username]' OR `email` ='$_POST[email]'";
    $result=mysqli_query($con,$user_exist_query);
    if($result)
    {
        if(mysqli_num_rows($result)>0)
        {

            $result_fetch=mysqli_fetch_assoc($result);
            if($result_fetch['username']==$_POST['username'])
            {
                echo"
                <script>
                    alert('$result_fetch[username] - Username already exist');
                    window.location.href='signup.php';
                </script>
                 ";              
            }
            else
            {
                echo"
                <script>
                    alert('$result_fetch[email] - Email already exist');
                    window.location.href='signup.php';
                </script>
                 ";
            }
        }
        else
        {
          $password=password_hash($_POST['password'],PASSWORD_BCRYPT); 
        //  $v_code= bin2hex(random_bytes(16));  
         $query="INSERT INTO `purehealth_registered_users`(`full_name`, `username`, `number`, `email`, `password`, `address`, `pincode`, /*`verification_code`,*/ `is_verified`) VALUES ('$_POST[fullname]','$_POST[username]','$_POST[number]','$_POST[email]','$password','$_POST[address]','$_POST[pincode]',/*'$v_code',*/'1')";
         if(mysqli_query($con,$query) /*php mailer code was here*/) // this code -> && sendMail($_POST['email'],$v_code)
         {
            echo"
            <script>
            alert('Registration successful! ');
            window.location.href='signup.php';
            </script>
            ";
         }
         else
         {
            echo"
            <script>
                alert('[Email service or database not working]');
                window.location.href='signup.php';
            </script>
            ";
         }
        }
    } 
    else
    {
        echo"
            <script>
                alert('Unable to put data into database');
                window.location.href='signup.php';
            </script>
        ";
    }
}
?>