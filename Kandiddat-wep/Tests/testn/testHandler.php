<!DOCTYPE html>

<meta http-equiv="Cache-control" content="no-cache">
<!-- Includes the module -->
<?php echo "<script src='../js/index.js'> </script>"; ?>
<link href="https://use.fontawesome.com/releases/v5.0.1/css/all.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<!-- <script type="text/javascript">
var test_walker = 1;
var can_walk = true;
</script> -->
<meta name="viewport" content="width=device-width, initial-scale=1">

<html>
<head>
		<link rel="stylesheet" type="text/css" href="../css/testHandler.css">
		 <link rel="stylesheet" type="text/css" href="../css/buttons.css">
<meta charset="UTF-8">


<title>Test</title>

</head>


<body onload="callTest()">

<button id="next" class="next" onclick="callTest()" ><span>Next</span></button>


<div class="options">

  <div class="container">
    <ul class="ks-cboxtags">
      <li><input type="checkbox" id="checkboxOne"  ><label for="checkboxOne">Legimate</label></li>
      <li><input type="checkbox" id="checkboxTwo"  ><label for="checkboxTwo">Phish</label></li>
  </div>
</div>

<script type="text/javascript">
	checkedBox();
</script>

<div id="prog" class="headlines">
<!-- <h2>TEST</h2> -->
<br><br><br>
</div>


<div id="test" class="testholder" >
	<div id="tests" ></div>
</div>



<p id="footer">Made by Sebastian Floderus & Linus Rosenholm</p>
</body>
</html>
