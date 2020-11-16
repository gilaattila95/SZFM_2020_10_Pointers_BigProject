<?php
  require_once("user/action.php");
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>SZFM_Fact_Portal</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<h2 class="header">
		Tény Portál
	</h2>
    <div class="container" align="center">
		<div class="vertical-center">	
		  <a href="index.php">
			 <button type="button" class="button1">
			   Érdekességek 		
			 </button>
		  </a>
		  <a href="vicces.php">
			  <button type="button" class="button2">
			   Viccesek
			  </button>
		  </a>
		  <a href="reg.php">
			  <button type="button" class="button2">
			   Regisztráció
			  </button>
		  </a>
          <a href="login.php">
			  <button type="button" class="button1">
			   Belépés
			  </button>
		  </a>
          <a href="admin.php">
			  <button type="button" class="button2">
			   Admin 
			  </button>
		  </a>
          <a href="rank.php">
			  <button type="button" class="button1">
			   Rangsor
			  </button>
		  </a>
		</div>
	<div class="registration">
		<form class="reg" action="" method="post">
			<label for="email"><b>E-mail</b></label><br>
			<input type="text" placeholder="Enter E-mail" name="email" id="reg_email" required><br><br>
			<label for="uname"><b>Felhasználónév</b></label><br>
			<input type="text" placeholder="Enter Username" name="uname" id="reg_uname" required><br><br>
			<label for="psw"><b>Jelszó</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw" id="reg_psw" required><br><br>
			<label for="psw2"><b>Jelszó megerősítése</b></label><br>
			<input type="password" placeholder="Enter Password" name="psw2" id="reg_psw2" required><br><br>
			<input type="hidden" name="event" id="event" value="regisztráció">
			<button class="admin-button" type="submit">Regisztráció</button>
		</form>
	</div>
	<h1 class="version">
		v.0.2
	</h1>
    </div>
</body>
</html>