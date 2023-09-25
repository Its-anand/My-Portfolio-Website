<!DOCTYPE html>
<html lang="en">
<?php 
include 'connection.php';
?>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Voting Page</title>
    <style>
        body {
            margin: 0%;
            padding: 0%;
            font-family: sans-serif;
            background: linear-gradient(#29317b, #1f2060, #161045);
            background-repeat: no-repeat;
            color: #fff;
            min-height:100vh;
        }

        header {
            width: 100%;
            height: 15vh;
            display: flex;
            justify-content: space-evenly;
        }

        .container {
            width: 50rem;
            display: flex;
            align-items: center;
            justify-content: space-evenly;
        }

        .collegeLogo {
            height: 100%;
        }

        .collegeName {
            font-size: 2rem;
            margin: 0%;
            color: #fff;

        }

        main {
            display: flex;
            justify-content: center;
            margin-top: 3rem;
        }

        .tableContainer {
            width: 60rem;

        }

        table th {
            height: 5rem;

        }
        table tr{
            border-bottom:1px solid #000;
        }
        table #firstth {
            padding: 0 6rem;
            background: #D6E9ED;
            color: #000;
            box-shadow:0px 2px 3px -1px;
        }

        #header form {
            margin: 0px;
        }
        .votingButton{
            border: none;
            background: #fff; 
            height: 2rem; 
            width: 8rem; 
            font-size: 1.1rem; 
            cursor: pointer;
            color:#2e06a7;
            border-radius: 3px;
        }
        .votingButton:focus{
            color:green;
        }
    </style>
</head>

<body>
    <header>
        <div class="container">
            <h1 class="collegeName">College Voting System</h1>
        </div>
    </header>
    <main>
        <section class="tableContainer">
            <table>
                <tr id='firstth'>
                    <th style='width: 10%;'>Election Symbol</th>
                    <th style="width:50%">Party</th>
                    <th style="width:30%">Candidate Name</th>
                    <th style='width: 10%;'>Total Votes</th>
                </tr>
                <?php
            $query = "SELECT * FROM ` voting_sys_political_parties`";
            $result = mysqli_query($con,$query);
        if($result)
        {
        
            if(mysqli_num_rows($result)>0)
            {
                while($res = mysqli_fetch_array($result))
                {
                ?>
                <tr>
                    <th><img width='50px' src="<?php echo $res['party_logo']?>" alt=""></th>
                    <th><?php echo $res['party_name']?></th>
                    <th><?php echo $res['candidate_name']?></th>
                    <th><?php echo $res['vote']?></th>
                </tr>
                <?php
                }
            }
        }
                ?>

            </table>
        </section>
    </main>
</body>

</html>