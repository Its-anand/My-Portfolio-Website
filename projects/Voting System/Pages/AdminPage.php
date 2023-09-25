<!DOCTYPE html>
<html lang="en">
<?php 
include '../Database/connection.php';
session_start();
if(!isset($_SESSION['AdminLoginId']))
{
    header("location: adminLogin.html");
}
?>

 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <style>
        body {
            margin: 0;
            height: 100vh;
            background: linear-gradient(#29317b, #1f2060, #161045);
            padding: 0%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: sans-serif;
        }

        .control_panel {
            background: rgb(255, 255, 255);
            width: 29.6rem;

            padding: 3rem;
            display: flex;
            align-items: center;
            box-sizing: border-box;

        }

        .form_holder form {
            
            text-align: center;
        }

        input,
        a {
            margin-bottom: 2rem;
        }

        .form_input {
            width: 100%;
            height: 30px;
            border: none;
            border-bottom: 1px solid #0D47A1;
            outline: none;
        }

        .form_btn {
            width: 100%;
            height: 30px;
        }


        #submit_btn {
            height: 35px;
            background-color: #0D47A1;
            color: #fff;
            border: none;
            font-size: 1.2rem;
            cursor: pointer;
            transition: 0.3s;
            border-radius: 8px;
        }

        #submit_btn:hover {
            border-radius: 15px;

        }
        .heading {
            font-family: sans-serif;
            color: #0D47A1;
        }

        #signIn,
        #forget_btn {
            text-decoration: none;
            color: #0D47A1;
            font-size: 1.1em;
            cursor: pointer;
            font-family: sans-serif;
        }

        .image_student_loader {
            color: #0D47A1;
            border: none;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;

        }
        .party_logo{
            margin: 0%;
        }
        .form_text {
            width: 100%;
            height: 250px;
            resize: vertical;
            border: none;
            border-bottom: 1px solid #0D47A1;
            background: #0d48a158;
            margin-bottom: 2rem;
            padding: 10px;
            box-sizing: border-box;
        }

        @media screen and (max-width:475px) {
            body {
                background: #fff;
            }

            .control_panel {
                width: 100%;
                padding: 2rem;
                height: unset;
            }

        }
    </style>
</head>

<body>
    <div class="control_panel">
        <div class="form_holder">
            <h2 class='heading'>Add party</h2>
            <form method="post" action="../Database/Add Party.php" enctype="multipart/form-data">
                <!--enctype="multipart/form-data" is necessary if the admin will upload a file through the form here file is image. enctype only work with method='post' -->
                <div style="text-align: left; ">
                    <p for="party_logo">Party Logo</p>
                    <input type="file" name="party_logo" class="image_student_loader party_logo">
                    <p for="">Student Data</p>
                    <input type="file" name="voters_id" class="image_student_loader">
                </div>
                <input type="text" name="party_name" placeholder="Party Name *" class="form_input">
                <input type="text" name="candidate_name" placeholder="Candidate Name *" class="form_input">
                <input type="submit" value="Add party" name="submit" id="submit_btn" class="form_btn">
                <a class="form_btn" href="studentLogin.html" id="signIn">Go Back</a>
            </form>
        </div>
    </div>
    </div>

</body> 


</html>