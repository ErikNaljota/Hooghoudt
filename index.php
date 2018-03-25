<!DOCTYPE html>
<?php
if(isset($_POST['btnSub']))
    echo "<script>window.close();</script>";
?>
<html>
	<head>
		<title>Hooghoudt</title>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
		<link rel="stylesheet" type="text/css" href="css/loginCSS.css">
	</head>

	<body>

	<div id="inputs_login">
		<div class="logo">
			<img src="img/hooghoudt-logo.png" alt="Hooghoudtp Logo">
		</div>
		<div class="fields">
					<p><div class="fieldsText"><h1>Are you over 21?</h1></div></p>

          <form action="home.php" method="post" name="yes">
					       <p><input class="fieldsText button" style=" margin-top: 10px; float: left; margin-left:35%;" type="submit" name="submit" value="Yes"></p>
          </form>
          <form action="close.php" method="post" name="no">
            <p><input class="fieldsText button" style=" margin-top: 10px; float: left; margin-left:35%;" type="submit" name="submit" value="No"></p>
          </form>

		</div>


</html>
