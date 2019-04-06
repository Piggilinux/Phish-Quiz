<?php
// session_start();
include_once '../../db_conf/dbh.inc.php';
include_once  'var.php';

$fk_id = $_SESSION['subject'];
$answer = "none";

if(isset($_POST['Legimate'])) {
    $answer = "Legimate";
}
if(isset($_POST['Phish'])) {
    $answer = "Phish";
}

if(isset($_POST['submit'])) {
  $table_column = $table_column = 'q' . $_SESSION["testWalker"];
  $sql = "INSERT INTO answers (fk_id, $table_column) VALUES ('$fk_id', '$answer');";
  mysqli_query($conn, $sql);
  $_SESSION["testWalker"] = $_SESSION["testWalker"] + 1;
  $GLOBALS['answer_arr'][] = $answer;
}

 ?>
