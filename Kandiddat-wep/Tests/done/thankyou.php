<?php session_start(); ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="stylesheet" type="text/css" href="../css/thankyou.css">
    <title>thankyou</title>
  </head>

  <body>
    <div class="headlines">
        <h1>Thank you for participating!!</h1>
    </div>

    <div class="semiBackgorund"></div>
      <div class="result">
              <h2>
                <?php include_once '../php/results.php';?>
              </h2>
      </div>

      <div class="phishImg1-1"><h3>1.1 Legimate</h3><img class="1.1" src="../picture/1-1.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg1-2"><h3>1.2 Phish - Both the domain name and email are misspelled.</h3><img class="1.2"  src="../picture/1-2.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg1-3"><h3>1.3 Legimate</h3><img class="1.3"  src="../picture/1-3.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg1-4"><h3>1.4 Phish - The link goes to "www.google--drive.com" instead of </br>"www.google-drive.com". There should only be one "-".</h3><img class="1.4"  src="../picture/1-4.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg1-5"><h3>1.5 Phish - email is wrong, all links go to real amazon except </br> order details that download "order_details.doc" that can be malicous.</h3><img class="1.5"  src="../picture/1-5.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg1-6"><h3>1.6 Legimate</h3><img class="1.6"  src="../picture/1-6.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-1"><h3>2.1 Phish - email is wrong , all links leads to a counterfeit website.</h3><img class="2.1" src="../picture/2-1.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-2"><h3>2.2 Legimate</h3><img class="2.2"  src="../picture/2-2.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-3"><h3>2.3 Legimate</h3><img class="2.3"  src="../picture/2-3.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-4"><h3>2.4 Phish - Both the domain name and email are misspelled.</h3><img class="2.4"  src="../picture/2-4.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-5"><h3>2.5 Legimate</h3><img class="2.5"  src="../picture/2-5.png" alt="phish" width="500" height="200"><br></div>
      <div class="phishImg2-6"><h3>2.6 Phish - There should not be a number in the admin email. Also the link</br> does not go to the itunes domain but an organisation domain.</h3><img class="2.6"  src="../picture/2-6.png" alt="phish" width="500" height="200"><br></div>
<!-- </div>-->
    

  </body>
</html>
