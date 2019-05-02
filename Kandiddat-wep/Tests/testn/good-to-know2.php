
<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">

<!-- <meta http-equiv="Cache-control" content="no-cache"> -->
<head>
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>

 <link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="../css/good-to-know2.css">

 <meta charset="UTF-8">
 <title>good2know2</title>
</head>

<body>
    <br><br>
    <div class="phishFacts">Phishing facts!</div>
    <br><br>

    <div class="text1">
        You have now tried to identify a couple of phishing emails,<br>
        now let's take a look at some interesting facts about phishing.
    </div>
    <br>

    <div class="fact1">
        Fact 1: <div class="fact1Text">
            Brazil is the most affected country in the world were 28.28% <br>
            of the users have been attacked. Sweden is far down the list with <br>
            5.18% of users attacked.
        </div>
    </div>

    <div class="fact2">
        Fact 2: <div class="fact2Text">
            Spear-phishing is a customized attack on a specific person<br>
            and 71.4% of all types of targeted attacks involved the use of <br>
            spear-phishing emails.
        </div>
    </div>

    <div class="fact3">
        Fact 3: <div class="fact3Text">
            Phishing is not limited to emails, you can be phished by<br>
            Facebook posts and tweets that leads you to a counterfeit<br>
            website(A "fake-site" made to look like a real one) that<br>
            steals your financial information.
        </div>
    </div>

    <div class="fact4">
        Fact 4: <div class="fact4Text">
            156 million phishing emails are sent daily, 16 millions make<br>
            it trough filters, 8 millions are opened, 800,000 links are clicked<br>
            and 80,000 fall for a scam every day and shares credential information.
        </div>
    </div>


    <div class="checklist">

        <form action="./testHandler2.php">
            <p><input type="submit" class="readyButton" value="I'm ready for next part!"></p>
        </form>
    </div>

    <div class="pic">
        <img src="../picture/attacks.png" alt="phish" width="700" height="450">
        <div class="picText">
            Percentage of attacked unique users out of the total number of<br> users in the country.
        </div>
    </div>


    <div class="picText"></div>

    <div class="semiBackgorund"></div>

    <div class="picText"></div>

</body>
</html>
