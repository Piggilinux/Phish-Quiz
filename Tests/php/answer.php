
<?php
// session_start();
include_once '../../db_conf/dbh.inc.php';
include_once  'var.php';

$fk_id = $_SESSION['subject'];
$answer = "none";
$table_column = 'q' . $testWalker;

if(isset($_POST['Legimate'])) {
    $answer = "Legimate";
}
if(isset($_POST['Phish'])) {
    $answer = "Phish";
}
// echo $GLOBALS['$array1'];
// lägg in array i "isset" if satsen och kolla om den appendas? isf gör att allt läggs in i DB när test är klart!


if(isset($_POST['submit'])) {

  array_push($array1, $answer);
  // print_r($array1);
}
// && sizeof($array, 1) == 3
// var_dump($array[42]);
if (isset($_POST['test']) ) {
  $array1 = array_values($array1);
  $_1 = $array1[0];
  $_2 = $array1[1];
  $_3 = $array1[3];
  $sql = "INSERT INTO answers (fk_id, q1 , q2, q3) VALUES ('$fk_id', '$_1', '$_2', '$_3');";
  mysqli_query($conn, $sql);
}
  // print_r($array1);


 ?>
