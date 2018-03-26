<!DOCTYPE html>
<html>
	<head>
		<title>Hooghoudt</title>
		<link rel="stylesheet" type="text/css" href="css/mainCSS.css">
		<link rel="stylesheet" type="text/css" href="css/loginCSS.css">
	</head>

	<body>

	<div id="inputs_login">
		<div class="logoLogin">
			<img src="img/hooghoudt-logo.png" alt="Hooghoudtp Logo" style="width: 100%; text-align:center;">
		</div>
		<div class="fields">
					<p><div class="fieldsText"><h1 style="font-size:25pt; margin-top: -30px;">Are you over 21?</h1></div></p>

          <form action="home.php" method="post" name="yes">
					       <p><input class="fieldsText button" style=" margin-top: 10px; float: left;" type="submit" name="yes" value="Yes"></p>
          </form>
          <form action="404.php" method="post">
            <p><input class="fieldsText button" style=" margin-top: 10px; float: left;" type="submit" name="no" value="No"></p>
          </form>

		</div>
  </div>
</body>
</html>
