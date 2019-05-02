<?php
  session_start();
  include_once '../../db_conf/dbh.inc.php';


  $field = $_POST['study'];
  $session = $_SESSION['subject'];

    if(isset($_POST['study']) && $_POST['study'] == 'Nurse' || isset($_POST['study']) && $_POST['study'] == 'IT-Security' ||
    isset($_POST['study']) && $_POST['study'] == 'Other')
    {

      

        $sql = "CALL insertSubject('$session', '$field');";
        mysqli_query($conn, $sql);
        header("Location: ../testn/testHandler.php");
    }
    else {
        header("Location: ../../index.php");
    }



 ?>
