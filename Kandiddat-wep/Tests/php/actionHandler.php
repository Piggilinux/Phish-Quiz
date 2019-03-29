<?php
  session_start();
  include_once '../../db_conf/dbh.inc.php';


  $field = $_POST['study'];
  $session = $_SESSION['subject'];

    if(isset($_POST['study']))
    {
        // $sql = "INSERT INTO subjects (id, alignment) VALUES ('$session', '$field');";
        $sql = "CALL insertSubject('$session', '$field');";
        mysqli_query($conn, $sql);
        header("Location: ../testn/testHandler.php");
    }
    else {
        header("Location: ../../index.php");
    }



 ?>
