<?php session_start(); ?>
<!DOCTYPE html>

<meta http-equiv="Cache-control" content="no-cache">

<!-- <script type="text/javascript">
var can_walk = true;
var test_walker = 0;
</script> -->

<?php
$answer_arr = array();
$walker = 1;
$_SESSION["testWalker"] = 1;
echo "<script src='../js/index.js'> </script>";
?>



<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/testHandler.css">
		<link rel="stylesheet" type="text/css" href="../css/buttons.css">
		<meta charset="UTF-8">

		<title>Test</title>

		</head>
		<body onload="getNextTest()">

		<?php
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

			if ($_SESSION["testWalker"] == 4) {

			}
			$walker = $walker + 1;
		}



		if(isset($_POST['submitDone'])) {

			$sess = $_SESSION['subject'];
			$sql = "SELECT * FROM tmp_answ WHERE f_id = '$sess';";
			$result = mysqli_query($conn, $sql);
			$datas = array();

			if (mysqli_num_rows($result) > 0) {
				while ($row = mysqli_fetch_assoc($result)) {
						$datas[] = $row;
				}
			}

			$_1 = $datas[0]['answ'];
			$_2 = $datas[1]['answ'];
			$_3 = $datas[2]['answ'];

			$sql = "CALL insertAnswer('$sess', '$_1', '$_2', '$_3');";
			mysqli_query($conn, $sql);
			$remove = "DELETE FROM tmp_answ WHERE f_id = '$sess'";
			mysqli_query($conn, $remove);


			$sql = "SELECT subjects.test_type FROM subjects WHERE subjects.id = '$sess' LIMIT 1;";
			$type = 0;

			if ($result=mysqli_query($conn,$sql)) {
		  // Fetch one and one row
		  while ($row=mysqli_fetch_row($result)) {
		    $type = $row[0];
		    }
			  // Free result set
			  mysqli_free_result($result);
				}

			if ($type == 0) {
				header("Location: ../testn/good-to-know.php");
			}
			else if ($type == 1) {
				header("Location: ../testn/good-to-know2.php");
			}
		}
		 ?>

		 <div class="testButtons">
			 	<!-- <script type="text/javascript">checkedBox();</script>

				<div id="prog" class="headlines">
				<br><br><br>
				</div>

				<div id="test" class="testholder" >
					<div id="tests" ></div>
				</div> -->

			 <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>
			 <!-- action="../php/answer.php" -->

			 <form method="POST" target="dummyframe">
				 <button id="next" class="next" onclick="callTest()" ><span>Next</span></button>
				 <input type="hidden" name="submit" >
				 <div class="options">
					 <div class="container">
							 <ul class="ks-cboxtags">
								 <li><input class="choice" type="checkbox" name="Legimate" id="checkboxOne"  ><label for="checkboxOne">Legimate</label></li>
								 <li><input class="choice" type="checkbox" name="Phish" id="checkboxTwo"  ><label for="checkboxTwo">Phish</label></li>
					 </div>
				 </div>
			 </form>
		 </div>


		<script type="text/javascript">checkedBox();</script>

		<div id="prog" class="headlines">
		<br><br><br>
		</div>

		<div id="test" class="testholder" >
			<div id="tests" ></div>
		</div>

		<!-- <script type="text/javascript">
			console.log("OUTSIDE" + test_walker);
		if (test_walker == 4) {
			console.log("IFIFIF" + test_walker);

			 document.body.innerHTML = '';

			 // document.getElementById('testButtons').innerHTML = "";

		} -->

		</script>


		<style>
			input[type=submit] {
			    padding:5px;
			    border:2px solid #ccc;
			    -webkit-border-radius: 5px;
			    border-radius: 5px;
			}

			input[type=submit]:focus {
			    border-color:#333;
			}
			input[type=submit]:hover {
			  background-color: #3e8e41;
			  color: black;
			}

			input[type=submit] {
			    padding:50px 150px;
			    background: #4CAF50;
			    border:0 none;
			    cursor:pointer;
			    -webkit-border-radius: 5px;
			    border-radius: 50px;
					color: white;
					text-align: center;
					text-decoration: none;
					display: inline-block;
					font-size: 32px;
					margin: 10% 30%;
			}
		</style>

		<form  method="POST">
				<input type="submit" name="submitDone" class="nextPhase" value="Go to next part &raquo;">
		</form>



		<p id="footer">Made by Sebastian Floderus & Linus Rosenholm</p>
	</body>
</html>
