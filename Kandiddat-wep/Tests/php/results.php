<?php
include_once '../../db_conf/dbh.inc.php';

$sess = $_SESSION['subject'];
// $sql = "SELECT * FROM answers WHERE f_id = '603d21611efa78123cd6f2311ea27231';";
$answers = array();
$result = mysqli_query($conn, "SELECT * FROM answers WHERE fk_id = '$sess';");
while ($row = mysqli_fetch_assoc($result)){
  $answers[] = $row;
}

$score = 0;
$wrong = array();
if ($answers[0]['q1'] == 'Legimate')
 $score = $score + 1;
else
 $wrong[] = "1.1";
if ($answers[0]['q2'] == 'Phish')
 $score = $score + 1;
else
 $wrong[] = "1.2";
if ($answers[0]['q3'] == 'Legimate')
 $score = $score + 1;
else
 $wrong[] = "1.3";
if ($answers[0]['q4'] == 'Phish')
 $score = $score + 1;
else
 $wrong[] = "1.4";
if ($answers[0]['q5'] == 'Phish')
 $score = $score + 1;
else
 $wrong[] = "1.5";
 if ($answers[0]['q6'] == 'Legimate')
  $score = $score + 1;
 else
  $wrong[] = "1.6";
  
  $answers = array();
  $result = mysqli_query($conn, "SELECT * FROM answers2 WHERE fk_id_p2 = '$sess';");
  while ($row = mysqli_fetch_assoc($result)){
    $answers[] = $row;
  }

$score2 = 0;
if ($answers[0]['q1_p2'] == 'Phish')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.1";
if ($answers[0]['q2_p2'] == 'Legimate')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.2";
if ($answers[0]['q3_p2'] == 'Legimate')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.3";
 if ($answers[0]['q4_p2'] == 'Phish')
  $score2 = $score2 + 1;
 else
  $wrong[] = "2.4";
 if ($answers[0]['q5_p2'] == 'Legimate')
  $score2 = $score2 + 1;
 else
  $wrong[] = "2.5";
 if ($answers[0]['q6_p2'] == 'Phish')
  $score2 = $score2 + 1;
 else
  $wrong[] = "2.6";

echo "Score on first part: ".$score." out of 6.";
echo "<br>";
echo "Score on second part: ".$score2." out of 6.";
echo "<br>";
echo "The wrong answer were following: - ";
foreach ($wrong as $incorrect) {
 echo $incorrect." - ";
}

?>
