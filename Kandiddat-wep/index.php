<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<?php include_once 'db_conf/dbh.inc.php'; ?>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="main.css" -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="Tests/css/index.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <meta http-equiv="Cache-control" content="no-cache"> -->
    <title>Bachelor Thesis Phishing Quiz</title>
<!--<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>-->

</head>

<body>
<?php
  $_SESSION['subject'] = md5(microtime().$_SERVER['REMOTE_ADDR']);
  // echo $_SESSION['subject'];
 ?>

    <div class="container">
        <div class="headlines">
            <h1>Bachelor Thesis<br/>Phishing Quiz</h1>
        </div>

    <!-- <div class="testCss">


    </div> -->

    <div class="card-body" >

        <div class="info">

                <div class="info1 text-center">
                    <p>
                    First of all, thank you for deciding to take your time to help us out with <br/>
                    our bachelor thesis by doing this test.</p>
                </div>

                <div class="info2 text-center">
                    <p>
                    Phishing is when a person is trying to trick you into giving up sensitive<br>
                    information such as password or credit card information by trying to act<br>
                    as someone you know. Can you spot the difference between real and fake?</p>
                </div>


        </div>

        <div class="time text-center">
            Time of test: 10-15 min
        </div>

        <div class="tiltPhone text-center">
            <img class="tiltPhoneImg" src="Tests/picture/tilt_phone.png" alt="phish" width="60" height="50"><br>
        </div>

        <div class="tiltPhoneText text-center">
            The webpage is designed for PC users! <br>
            We higly recomend that you use a PC for the full experience<br>
            Tilt your phone for a slightly better experience<br><br>
        </div>

        <div class="checklist text-center">

        <form method="POST" action="Tests/php/actionHandler.php">
            <p>What program are you studying?</p>
            <input type="radio" value="IT-Security" name="study"> IT-Security<br/>
            <input type="radio" value="Nurse" name="study"> Nurse<br/>
            <input type="radio" value="Other" name="study"> Other<br/><br/>
            <input class="testButton" type="submit" value="Go to test">
        </form>
        </div>

        </div>

        <!-- <div class="phishImg">
            <img class="phishImgInner" src="Tests/picture/phish.png" alt="phish" width="400" height="300"><br>
        </div> -->





        <div class="footer text-center">
            <p>Made by Sebastian Floderus & Linus Rosenholm</p>
        </div>

    </div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</body>

</html>
