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
if ($answers[0]['q1'] == 'Phish')
 $score = $score + 1;
else
 $wrong[] = "1.1";
if ($answers[0]['q2'] == 'Legimate')
 $score = $score + 1;
else
 $wrong[] = "1.2";
if ($answers[0]['q3'] == 'Phish')
 $score = $score + 1;
else
 $wrong[] = "1.3";
if ($answers[0]['q4'] == 'Legimate')
 $score = $score + 1;
else
 $wrong[] = "1.4";
if ($answers[0]['q5'] == 'Legimate')
 $score = $score + 1;
else
 $wrong[] = "1.5";

$score2 = 0;
if ($answers[0]['q1'] == 'Phish')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.1";
if ($answers[0]['q2'] == 'Legimate')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.2";
if ($answers[0]['q3'] == 'Phish')
 $score2 = $score2 + 1;
else
 $wrong[] = "2.3";

echo "Score on first part: ".$score." out of 5.";
echo "<br>";
echo "Score on second part: ".$score2." out of 3.";
echo "<br>";
echo "The wrong answer were following: - ";
foreach ($wrong as $incorrect) {
 echo $incorrect." - ";
}

?>
