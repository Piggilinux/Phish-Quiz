<?php session_start(); ?>

<!DOCTYPE html>
<html>

<?php include_once 'db_conf/dbh.inc.php'; ?>
<head>
	<!-- <link rel="stylesheet" type="text/css" href="main.css" -->
    <link rel="stylesheet" type="text/css" href="Tests/css/index.css">
    <meta charset="UTF-8">
    <meta http-equiv="Cache-control" content="no-cache">
    <title>Bachelor Thesis Phishing Quiz</title>
<!--<link href='https://fonts.googleapis.com/css?family=Lato:400,300,100,700,900' rel='stylesheet' type='text/css'>-->

</head>

<body>
<?php
  $_SESSION['subject'] = md5(microtime().$_SERVER['REMOTE_ADDR']);
  // echo $_SESSION['subject'];
 ?>

    <div class="headlines">
        <h1>Bachelor Thesis<br/>Phishing Quiz</h1>
    </div>

<div class="testCss">

<!-- endast för css -->
</div>

<div class="info">

    <br><br>

	<p>
        <div class="info1">
            First of all, thank you for deciding to take your time to help us out with <br/>
            our bachelor thesis by doing this test.
        </div>

		<br/>
        <div class="info2">
            Phishing is when a person is trying to trick you in to giving up sensitive<br>
            information such as password or credit card information by trying to act<br>
            as someone you know. Can you spot the difference between real and fake?
        </div>
	</p>
</div>

<div class="checklist">

    <form method="POST" action="Tests/php/actionHandler.php">
        <p>What program are you studying?</p>
        <input type="radio" value="IT-Security" name="study"> IT-Security<br/>
        <input type="radio" value="Software engineering" name="study"> Software engineering<br/>
        <input type="radio" value="Non technical program" name="study"> Non technical program<br/><br/>
        <input class="testButton" type="submit" value="Go to test"></p>
    </form>
</div>

<div class="time">
    Time of test: 10-15 min
</div>

<div class="phishImg">
    <img class="google_logo" src="Tests/picture/phish.png" alt="phish" width="400" height="300"><br>
</div>

<div class="semiBackgorund"></div>

<div class="list">

</div>


<div class="footer">
    <p>Made by Sebastian Floderus & Linus Rosenholm</p>
</div>

</body>

</html>
