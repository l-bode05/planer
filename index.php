<html>
 
<head>
	<meta charset="UTF-8" />
	<title>Planer</title>
	<meta name="description" content="Kurzbeschreibung" />
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
	<link href="style.css" type="text/css" rel="stylesheet" />
	<link rel="stylesheet" href="/resources/demos/style.css">
	<script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
	<script language="javascript" type="text/javascript" src="jsFunktionen.js"></script>
	<script src="//code.jquery.com/jquery-1.10.2.js"></script>
    <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
    
    <script>
	  $(function() {
		$( "#datepicker" ).datepicker();
	  });
	</script>
	<?php
		include ('db_connect.php');
	?>	
	
</head>
 
<body>
	<ul class="tab">
		<li><a href="#" class="tablinks" onclick="openDay(event, 'planen')">Plan erstellen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'werte')">Tempotabelle erstellen</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'training')">Training dokumentieren</a></li>
		<li><a href="#" class="tablinks" onclick="openDay(event, 'auswertung')">Auswertung</a></li>
	</ul>

	<div id="planen" class="tabcontent">
		
		<form> 
		<label>Name: 
			<select> 
				<option>Judith</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	<p>(Datum: kommt noch) <input type="text" id="datepicker"></p>
	
	<button onclick="window.location.href='erstelle.php'">OK</button>
	</div>

	<div id="werte" class="tabcontent">
		<h3></h3>
		<form> 
		<label>Name: 
			<select> 
				<option>Judith</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	<button onclick=window.location.href='werteJudith.php'>OK</button>
	</div>
	
	<div id="training" class="tabcontent">
		<h3>Training dokumentieren</h3>
		<script> document.write(heute)</script>
		<form> 
		<label>Name: 
			<select id = "namedoku"> 
				<option>Judith</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	
	<form action="erstelleDoku.php" method="POST">
		<input type="submit" value="OK" />
	</form>
	</div>
	
	<div id="auswertung" class="tabcontent">
		
		<form> 
		<label>Name: 
			<select> 
				<option>Judith</option> 
				<option>Christian</option> 
				<option>Lena</option> 
				<option>Björn</option> 
				<option>Natalie</option> 
			</select> 
		</label> 
	</form>
	
	
	<button onclick="window.location.href='auswertung.php'">OK</button>
	</div>
	
	
	
</body>
</html>