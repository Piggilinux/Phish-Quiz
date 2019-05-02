<?php session_start(); ?>
<!DOCTYPE html>





<html lang="en">
	<head>
	    <?php echo "<script src='../js/index2.js'> </script>"; ?>
	    
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" type="text/css" href="../css/testHandler.css">
		<link rel="stylesheet" type="text/css" href="../css/buttons.css">
		<meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no maximum-scale=1">

		<title>Test 2</title>

		</head>
		<body onload="getNextTest()">

			<?php
	    // echo $_SESSION['subject'];
			include_once '../../db_conf/dbh.inc.php';

			$fk_id = $_SESSION['subject'];
			$answer = "none";

			if(isset($_POST['Legimate'])) {
			    $answer = "Legimate";
			}
			if(isset($_POST['Phish'])) {
			    $answer = "Phish";
			}

			if(isset($_POST['submit'])) {

				$sess = $_SESSION['subject'];
				// array_push($answer_arr, $answer);
				$sql = "INSERT INTO tmp_answ (f_id, answ) VALUES ('$sess', '$answer');";
				mysqli_query($conn, $sql);

				$sql = "SELECT * FROM tmp_answ WHERE f_id = '$sess' ORDER BY DateTime ASC;";
				$result = mysqli_query($conn, $sql);

				if (mysqli_num_rows($result) > 5) {
					$datas = array();

					if (mysqli_num_rows($result) > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
								$datas[] = $row;
						}
					}

					$_1 = $datas[0]['answ'];
					$_2 = $datas[1]['answ'];
					$_3 = $datas[2]['answ'];
					$_4 = $datas[3]['answ'];
					$_5 = $datas[4]['answ'];
					$_6 = $datas[5]['answ'];


					$sql = "CALL insertAnswer2('$sess', '$_1', '$_2', '$_3', '$_4', '$_5', '$_6');";
					mysqli_query($conn, $sql);
					$remove = "DELETE FROM tmp_answ WHERE f_id = '$sess'";
					mysqli_query($conn, $remove);

				}
			}
			 ?>

		 <div class="testButtons text-center">
			 <iframe width="0" height="0" name="dummyframe" id="dummyframe"></iframe>

			 <form method="POST" target="dummyframe">
				 <button id="next" class="next btn btn-primary" onclick="callTest()" ><span>Next</span></button>
				 <input type="hidden" name="submit" >
				 <div class="options">
					 <!-- <div class="container"> -->
							 <ul class="ks-cboxtags">
								 <li><input class="choice btn" type="checkbox" name="Legimate" id="checkboxOne"  ><label for="checkboxOne">Legitimate</label></li>
								 <li><input class="choice btn" type="checkbox" name="Phish" id="checkboxTwo"  ><label for="checkboxTwo">Phish</label></li>
							 </ul>
					 <!-- </div> -->
				 </div>
			 </form>
		 </div>

		<script>checkedBox();</script>

		<div id="prog" class="headlines">
		<br><br><br>
		</div>

		<div id="test" class="testholder" >
			<div id="tests" ></div>
		</div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	</body>
</html>
