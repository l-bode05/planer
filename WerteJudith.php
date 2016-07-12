<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
 
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
	<ul class="tab">
		<li><a href="#" class="tablinks" onclick="openDay(event, 'laeufe')">Läufe</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'knie')">Kniebeugen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'reißen')">Reißen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'ausfall')">Ausfallschritte</a></li>
	</ul>

	<div id="laeufe" class="tabcontent">
		
	</br>
	<form action="speicherWerte.php" method="POST">
		<table>
			<tr><th>Strecke:</th><th>60m</th><th>80m</th><th>100m</th><th>120m</th><th>150m</th><th>180m</th><th>200m</th><th>250m</th></tr>
			<tr><th>Zielzeit:</th><th><input type="text" name="m60"/></th><th><input name="m80" type="text"></th><th><input name="m100" type="text"></th><th><input name="m120" type="text"></th><th><input name="m150" type="text"></th><th><input name="m180" type="text"></th><th><input name="m200" type="text"></th><th><input name="m250" type="text"></th></tr>
			<tr><th>Strecke:</th><th>300m</th><th>350m</th><th>400m</th><th>450m</th><th>500m</th><th>550m</th><th>600m</th></tr>
			<tr><th>Zielzeit:</th><th><input name="m300" type="text"></th><th><input name="m350" type="text"></th><th><input name="m400" type="text"></th><th><input name="m450" type="text"></th><th><input name="m500" type="text"></th><th><input name="m550" type="text"></th><th><input name="m600" type="text"></th></tr>
		</table>
		<input type="submit" value="absenden" />
	</form>
  
	<a target="popup" onclick="window.open('', 'popup', 'width=1210,height=400,scrollbars=no, toolbar=no,status=no, resizable=yes,menubar=no,location=no,directories=no,top=10,left=10') "href="tempotabelleJudith.php">aktuelle Tempotabelle</a>
	
	</div>

	<div id="knie" class="tabcontent">
		<h3>Werte hinzufügen</h3>
		<form> 
		<label>Name: 
			<select> 
				<option>Maren</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	<button onclick="window.location.href='werte.php'">OK</button>
	</div>
	
	<div id="reißen" class="tabcontent">
		<h3>Training dokumentieren</h3>
		<form> 
		<label>Name: 
			<select> 
				<option>Maren</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	<form> 
		<label>Kalenderwoche: 
			<select> 
				<option>KW 22</option> 
				<option>KW 23</option> 
				<option>KW 24</option> 
				<option>KW 25</option> 
				<option>KW 26</option> 
			</select> 
		</label> 
	</form>
	</div>
	
	<div id="ausfall" class="tabcontent">
		<h3>Training dokumentieren</h3>
		<form> 
		<label>Name: 
			<select> 
				<option>Maren</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	<form> 
		<label>Kalenderwoche: 
			<select> 
				<option>KW 22</option> 
				<option>KW 23</option> 
				<option>KW 24</option> 
				<option>KW 25</option> 
				<option>KW 26</option> 
			</select> 
		</label> 
	</form>
	</div>
	
	<button onclick="window.location.href='index.php'">Zurück</button>
	
</body>
</html>