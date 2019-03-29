
<?php
// session_start();
include_once '../../db_conf/dbh.inc.php';
include_once  'var.php';

// $table_column = "<script>document.writeln(test_walker);</script>";

$fk_id = $_SESSION['subject'];
$answer = "none";
// $table_column = 'q' .  "<script>document.writeln(test_walker);</script>";



if(isset($_POST['Legimate'])) {
    $answer = "Legimate";
}
if(isset($_POST['Phish'])) {
    $answer = "Phish";
}

// // om detta är med så lägg allt in rätt (fast fel svar på de 2 sista)..
// $GLOBALS['answer_arr'][] = $answer;
// $GLOBALS['answer_arr'][] = $answer;

if(isset($_POST['submit'])) {
  $table_column = $table_column = 'q' . $_SESSION["testWalker"];
  $sql = "INSERT INTO answers (fk_id, $table_column) VALUES ('$fk_id', '$answer');";
  mysqli_query($conn, $sql);
  $_SESSION["testWalker"] = $_SESSION["testWalker"] + 1;

  // array_push($GLOBALS['answer_arr'], $answer);
  $GLOBALS['answer_arr'][] = $answer;
}


if (isset($_POST['test'])) {

  // $_1 = $GLOBALS['answer_arr'][0];
  // $_2 = $GLOBALS['answer_arr'][1];
  // $_3 = $GLOBALS['answer_arr'][2];
  // $table_column = $table_column = 'q' . $GLOBALS["testWalker"];
  //
  // // $sql = "INSERT INTO answers (fk_id, q1 , q2, q3) VALUES ('$fk_id', '$_1', '$_2', '$_3');";
  // $sql = "INSERT INTO answers (fk_id, $table_column) VALUES ('$fk_id', '$answer');";
  // mysqli_query($conn, $sql);
  // $GLOBALS["testWalker"] = $GLOBALS["testWalker"] + 1;


  // if(is_array($GLOBALS['answer_arr'])){
  //     foreach ($GLOBALS['answer_arr'] as $row) {
  //         $_1 = mysql_real_escape_string($GLOBALS['answer_arr'][$row][0]);
  //         $_2 = mysql_real_escape_string($GLOBALS['answer_arr'][$row][1]);
  //         $_3 = mysql_real_escape_string($GLOBALS['answer_arr'][$row][2]);
  //         $sql = "INSERT INTO answers (fk_id, q1 , q2, q3) VALUES ( '". $fk_id."','".$_1."','".$_2."', '".$_3."' );";
  //         mysqli_query($conn, $sql);
  //     }
  // }

}



 ?>
