<?php require_once("user/action.php");?>
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
    <div align="center">
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
				<button type="button" class="button3">
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
		<form class="login" action="" method="post">
		<label for="uname"><b>Felhasználónév</b></label><br>
		<input type="text" placeholder="Enter Username" name="uname" id="uname" required><br><br>
		<label for="psw"><b>Jelszó</b></label><br>
		<input type="password" placeholder="Enter Password" name="psw" id="psw" required><br><br>
		<input type="hidden" name="event" id="event" value="user_login">
		<button class="admin-button" type="submit">Belépés</button>
		</form>
		<p> Még nincs fiókod? 
			<a href="reg.php"> 
				Katt ide!
			</a> 
		</p>
	</div>
	<h1 class="version">
		v.0.2
	</h1>
</body>
</html>