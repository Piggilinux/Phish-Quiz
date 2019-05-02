<?php session_start(); ?>
<!DOCTYPE html>


<html lang="en">


<!-- <meta http-equiv="Cache-control" content="no-cache"> -->
<head>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

 <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../css/good-to-know.css">

<meta charset="UTF-8">
<title>good2know1</title>
</head>

<body>

<br><br>
<div class="identifyPhish">How to identify Phishing!</div>
<br><br>
<div class="text1">
    You have now tried to identify a couple of phishing emails,<br>
    now let's take a look at properties that stand out for phishing.
</div>
<br>
<div class="hint1">
    Hint 1: <div class="hint1Text">
        Criminals often try to spoof(change some spelling but have it still<br>
        look like netflix) the domain name of a real company such as<br>
        netflix. Netflix communication emails will always come from <br>
        "info@mailer.netflix.com" were "mailer" is a subdomain of netflix.<br>
        However "notification-netflix.co" is a completly different domain.
        <!-- The URL after @ in the e-mail, "notification-netflix.co" does<br>
        not belong to netflix. It's common for criminals that they try to<br>
        mimic the structure of a real company. -->

    </div>
</div>

<div class="hint2">
    Hint 2: <div class="hint2Text">
        If you are a member at netflix, they will know your name and<br>
        won't refer to you as "user".<br>

    </div>
</div>

<div class="hint3">
    Hint 3: <div class="hint3Text">
        Spelling, many phishing emails can easily be spotted simply<br>
        by the poor language used. Read and check for grammatical <br>
        mistakes, as well as strange phrases.
    </div>
</div>

<div class="hint4">
    Hint 4: <div class="hint4Text">
        This looks like the real link but if you hover over without<br>
        clicking! You can see the real URL down in the left of<br>
        your browser.
    </div>
</div>

<div class="try">Give it a try:</div>
<a onclick="return false" class="netflixLink" href="https://www.notification-netflix.co/downloadSuperDangerousVirus!"> www.netflix.com/payment </a>

<br>
<div class="checklist">

    <form action="./testHandler2.php">
        <p><input type="submit" class="readyButton" value="I'm ready for next part!"></p>
    </form>
</div>

<img class="pic" src="../picture/netflix_education_phishing.png" alt="phish" width="600" height="500">

<!-- <div class="educationPic"></div> -->

<div class="semiBackgorund"></div>

</body>
</html>
