<!DOCTYPE html>
 
<html>
 
<head>
	<meta charset="UTF-8" />
	<title>Planer</title>
	<meta name="description" content="Kurzbeschreibung" />
 
	<link href="style.css" type="text/css" rel="stylesheet" />
	<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script language="javascript" type="text/javascript" src="jsFunktionen.js"></script>
	<?php
		include ('db_connect.php');
	?>	
</head>
 
<body>
	
		<h3><script>document.write(TagName);</script></h3>
		<form action="speicherPlan.php" method="POST">
		<form action="vorschau.php" method="POST">
		<p>Aufwärmen:</br>
				<input id="programm" name="programm" />
			</p>
			<input type="hidden" id="anzahl1" name="anzahl1" value="Anzahl: " /> <input type="hidden" id="laenge1" name="laenge1" value="*  "/> <input type="hidden" id="prozentLauf1" name="prozentLauf1" value="m   "/> <input type="hidden" id="pauseLauf1" name="pauseLauf1" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl2" name="anzahl2" value="Anzahl: " /> <input type="hidden" id="laenge2" name="laenge2" value="*  "/> <input type="hidden" id="prozentLauf2" name="prozentLauf2" value="m   "/> <input type="hidden" id="pauseLauf2" name="pauseLauf2" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl3" name="anzahl3" value="Anzahl: " /> <input type="hidden" id="laenge3" name="laenge3" value="*  "/> <input type="hidden" id="prozentLauf3" name="prozentLauf3" value="m   "/> <input type="hidden" id="pauseLauf3" name="pauseLauf3" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl4" name="anzahl4" value="Anzahl: " /> <input type="hidden" id="laenge4" name="laenge4" value="*  "/> <input type="hidden" id="prozentLauf4" name="prozentLauf4" value="m   "/> <input type="hidden" id="pauseLauf4" name="pauseLauf4" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl5" name="anzahl5" value="Anzahl: " /> <input type="hidden" id="laenge5" name="laenge5" value="*  "/> <input type="hidden" id="prozentLauf5" name="prozentLauf5" value="m   "/> <input type="hidden" id="pauseLauf5" name="pauseLauf5" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl6" name="anzahl6" value="Anzahl: " /> <input type="hidden" id="laenge6" name="laenge6" value="*  "/> <input type="hidden" id="prozentLauf6" name="prozentLauf6" value="m   "/> <input type="hidden" id="pauseLauf6" name="pauseLauf6" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl7" name="anzahl7" value="Anzahl: " /> <input type="hidden" id="laenge7" name="laenge7" value="*  "/> <input type="hidden" id="prozentLauf7" name="prozentLauf7" value="m   "/> <input type="hidden" id="pauseLauf7" name="pauseLauf7" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl8" name="anzahl8" value="Anzahl: " /> <input type="hidden" id="laenge8" name="laenge8" value="*  "/> <input type="hidden" id="prozentLauf8" name="prozentLauf8" value="m   "/> <input type="hidden" id="pauseLauf8" name="pauseLauf8" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl9" name="anzahl9" value="Anzahl: " /> <input type="hidden" id="laenge9" name="laenge9" value="*  "/> <input type="hidden" id="prozentLauf9" name="prozentLauf9" value="m   "/> <input type="hidden" id="pauseLauf9" name="pauseLauf9" value="%, Pause:  "/></br>
			<input type="hidden" id="anzahl10" name="anzahl10" value="Anzahl: " /> <input type="hidden" id="laenge10" name="laenge10" value="*  "/> <input type="hidden" id="prozentLauf10" name="prozentLauf10" value="m   "/> <input type="hidden" id="pauseLauf10" name="pauseLauf10" value="%, Pause:  "/></br>
			
			
			<p>Weiteres:</br>
				<input id="weiters" name="weiteres" />
			</p>
		<input id="anzahlLaeufe" name="anzahlLaeufe"/> verschiedene Läufe 	
		<input type="submit" value="Speichern" formaction="speicherPlan.php" formmethod="POST"/>	<br/>
		<input type="submit" value="Vorschau" formaction="vorschau.php" formmethod="POST"/>	
		</form>
		<button onclick=aenderLauf() name="Add Lauf" value="Add Lauf">hinzufügen</button>
		</br>
		<button id="frei" onClick="fill_in();">Frei!</button>
		
		<!--<div class="laeufe" id = "laeufe"><input id="addLauf" type="button" value="Add Lauf"/></div>
			<div class="clkraft" id = "clkraft"><input id="addKraft" type="button" value="Add Kraft"/></div>
			<div class="pausen" id = "pausen"><input id="addPause" type="button" value="Add Serienause"/></div>
		<div class="speichern" id = "speichern"><input id="save" type="button" value="Seichern"/></div>

		
	
	

	<button onclick="window.location.href='erstelle.php'">Vorschau</button>-->
	<button onclick="window.location.href='erstelle.php'">Exportieren</button>
	</br>
	<button onclick="window.location.href='index.php'">Zurück</button>
	
</body>
</html>