<?php
  require_once("../user/action.php");
?>
<!doctype html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
<title>SZFM_Fact_Portal</title>
<link rel="stylesheet" href="../style.css">
</head>

<body>
	<h2 class="header">
		Tény Portál
	</h2>
    <div class="container" align="center">
		<div class="container" align="center">
			<div class="vertical-center">	
                <a href="user_article.php">
                    <button type="button" class="button1">
                        Saját cikkek		
                    </button>
                </a>
                <a href="user_send_article.php">
                    <button type="button" class="button2">
                        Cikk beküldése
                    </button>
                </a>
                <a href="user_rank.php">
                    <button type="button" class="button1">
                        Rangsor
                    </button>
                </a>
                <a href="../index.php?event=kilepes" name="event" id="event" value="user_kilepes">
                    <button type="button" class="button2">
                        Kilépés
                    </button>
                </a>  
		</div>
        <h1 class="cikk-header">
		    Cikk beküldés
	    </h1>
		<form action="" method="post" enctype="multipart/form-data">
		  <textarea class="cikk-place" 
		  			type="text" 
				 	cols="60"
					rows="10"
                    placeholder="Az új tény helye:"
                    name="ctext" style="margin-bottom:  10px;" required></textarea>
			<br>
			<label for="kategoria">Válassz Kategóriát: </label>
			<select name="kategoria" id="kategoria" style="margin-bottom:  10px;">
				<option value="érdekes">Érdekes</option>
				<option value="vicces">Vicces</option>
			</select>
            </br>
            <input type="file" name="kep" value=""/>
            <br>
            <input type="hidden" name="event" id="event" value="cikkFel">
		    <button class="cikk-button" type="submit" >Beküldés</button>
		</form>
        <h1 class="version">
            v.0.1
        </h1>
    </div>
</body>
</html>