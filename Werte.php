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
	<ul class="tab">
		<li><a href="#" class="tablinks" onclick="openDay(event, 'laeufe')">Läufe</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'knie')">Kniebeugen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'reißen')">Reißen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'ausfall')">Ausfallschritte</a></li>
	</ul>

	<div id="laeufe" class="tabcontent">
		
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
		</br>
	
		<table>
			<tr><th>Strecke:</th><th>60m</th><th>80m</th><th>100m</th><th>120m</th><th>150m</th><th>180m</th><th>200m</th><th>250m</th></tr>
			<tr><th>Zielzeit:</th><th><input name="60m" id="ziel60m"></th><th><input name="80m" id="ziel80m"></th><th><input name="100m" id="ziel100m"></th><th><input name="120m" id="ziel120m"></th><th><input name="150m" id="ziel150m"></th><th><input name="180m" id="ziel180m"></th><th><input name="200m" id="ziel200m"></th><th><input name="250m" id="ziel250m"></th></tr>
			<tr><th>Strecke:</th><th>300m</th><th>350m</th><th>400m</th><th>450m</th><th>500m</th><th>550m</th><th>600m</th></tr>
			<tr><th>Zielzeit:</th><th><input name="300m" id="ziel300m"></th><th><input name="350m" id="ziel350m"></th><th><input name="400m" id="ziel400m"></th><th><input name="450m" id="ziel450m"></th><th><input name="500m" id="ziel500m"></th><th><input name="550m" id="ziel550m"></th><th><input name="600m" id="ziel600m"></th></tr>
		</table>
		
		
	<button onclick=speicherWerte()>Speichern</button>
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