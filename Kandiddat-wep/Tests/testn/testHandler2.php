<?php session_start(); ?>
<!DOCTYPE html>

<meta http-equiv="Cache-control" content="no-cache">

<!-- <script type="text/javascript">
var can_walk = true;
var test_walker = 1;
</script> -->

<?php echo "<script src='../js/index2.js'> </script>"; ?>


<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
	<head>
		<link rel="stylesheet" type="text/css" href="../css/testHandler2.css">
		<link rel="stylesheet" type="text/css" href="../css/buttons.css">
		<meta charset="UTF-8">

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

		if(isset($_POST['submit2'])) {

			$sess = $_SESSION['subject'];
			// array_push($answer_arr, $answer);
			$sql = "INSERT INTO tmp_answ (f_id, answ) VALUES ('$sess', '$answer');";
			mysqli_query($conn, $sql);

			if ($_SESSION["testWalker"] == 4) {

			}
		}


		if(isset($_POST['submitFinish'])) {

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

  			$sql = "CALL insertAnswer2('$sess', '$_1', '$_2', '$_3');";
  			mysqli_query($conn, $sql);
  			$remove = "DELETE FROM tmp_answ WHERE f_id = '$sess'";
  			mysqli_query($conn, $remove);

        header("Location: ../done/thankyou.php");
		  }

		 ?>

		 <div class="testButtons">
			 <iframe width="0" height="0" border="0" name="dummyframe" id="dummyframe"></iframe>

			 <form method="POST" target="dummyframe">
				 <button id="next" class="next" onclick="callTest()" ><span>Next</span></button>
				 <input type="hidden" name="submit2" >
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

        <div class="finishButton">
            <form  method="POST">
    				<input type="submit" name="submitFinish" class="submitFinish" value="Finish test &raquo;">
    		</form>
        </div>




		<p id="footer">Made by Sebastian Floderus & Linus Rosenholm</p>
	</body>
</html>
