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
	<form action="speicherDoku.php" method="POST">	
	<?php 
		
		$zeilen = mysqli_query($link, "SELECT * FROM `doku`");
		$anzahlZeilen = mysqli_num_rows($zeilen);

		echo "</br>";

		if ($anzahlZeilen>='1')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst1 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent']; 
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst1; 
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung11' id='messung11'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung12' id='messung12'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung13' id='messung13'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung14' id='messung14'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung15' id='messung15'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung16' id='messung16'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung17' id='messung17'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung18' id='messung18'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung19' id='messung19'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung110' id='messung110'></th></tr></table></html>");
			}
			echo ("<br/>");
			
		}
		
		if ($anzahlZeilen>='2')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 1, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst2 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 1, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst2;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 1, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 1, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung21' id='messung21'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung22' id='messung22'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung23' id='messung23'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung24' id='messung24'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung25' id='messung25'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung26' id='messung26'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung27' id='messung27'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung28' id='messung28'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung29' id='messung29'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung210' id='messung210'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='3')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 2, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst3 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 2, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst3;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 2, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 2, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung31' id='messung31'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung32' id='messung32'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung33' id='messung33'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung34' id='messung34'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung35' id='messung35'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung36' id='messung36'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung37' id='messung37'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung38' id='messung38'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung39' id='messung39'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung310' id='messung310'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='4')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 3, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst4 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 3, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst4;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 3, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 3, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung41' id='messung41'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung42' id='messung42'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung43' id='messung43'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung44' id='messung44'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung45' id='messung45'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung46' id='messung46'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung47' id='messung47'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung48' id='messung48'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung49' id='messung49'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung410' id='messung410'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='5')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 4, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst5 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 4, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst5;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 4, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 4, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung51' id='messung51'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung52' id='messung52'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung53' id='messung53'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung54' id='messung54'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung55' id='messung55'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung56' id='messung56'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung57' id='messung57'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung58' id='messung58'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung59' id='messung59'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung510' id='messung510'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='6')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 5, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst6 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 5, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst6;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 5, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 5, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung61' id='messung61'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung62' id='messung62'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung63' id='messung63'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung64' id='messung64'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung65' id='messung65'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung66' id='messung66'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung67' id='messung67'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung68' id='messung68'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung69' id='messung69'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung610' id='messung610'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='7')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 6, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst7 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 6, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst7;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 6, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 6, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung71' id='messung71'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung72' id='messung72'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung73' id='messung73'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung74' id='messung74'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung75' id='messung75'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung76' id='messung76'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung77' id='messung77'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung78' id='messung78'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung79' id='messung79'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung710' id='messung710'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='8')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 7, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst8 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 7, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst8;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 7, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 7, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung81' id='messung81'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung82' id='messung82'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung83' id='messung83'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung84' id='messung84'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung85' id='messung85'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung86' id='messung86'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung87' id='messung87'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung88' id='messung88'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung89' id='messung89'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung810' id='messung810'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='9')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 8, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst9 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 8, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst9;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 8, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 8, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung91' id='messung91'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung92' id='messung92'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung93' id='messung93'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung94' id='messung94'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung95' id='messung95'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung96' id='messung96'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung97' id='messung97'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung98' id='messung98'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung99' id='messung99'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung910' id='messung910'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
		
		if ($anzahlZeilen>='10')
		{
			$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 9, 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst10 = $zielest['laenge']; 
			$prozent = mysqli_query($link, 'SELECT `prozent` FROM `doku` LIMIT 9, 1'); $zielepro = mysqli_fetch_assoc($prozent); $zielpro = $zielepro['prozent'];
			echo ("<html><table><tr><th>Strecke: </th>");
			echo ("<th>");echo $zielst10;
			echo (" m</th></tr></table></html>");
			$soll = mysqli_query($link, 'SELECT zeit*(1+(1-prozent/100)) FROM doku, ziel WHERE ziel.laenge = doku.laenge LIMIT 9, 1'); $zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))']; 
			echo ("<html><table><tr><th>Ziel: </th>");
			echo ("<th>");echo round($zielso, 2)."   "; echo "      (".$zielpro."%)";
			echo ("</th></tr></table></html>");
			$anzahl = mysqli_query($link, 'SELECT `anzahl` FROM `doku` LIMIT 9, 1'); $zielean = mysqli_fetch_assoc($anzahl); $zielan = $zielean['anzahl']; 
			if ($zielan >= '1')
			{
				echo ("<html><table><tr><th>1. Lauf: </th><th><input name='messung101' id='messung101'></th></tr></table></html>");
			}
			if ($zielan >= '2')
			{
				echo ("<html><table><tr><th>2. Lauf: </th><th><input name='messung102' id='messung102'></th></tr></table></html>");
			}
			if ($zielan >= '3')
			{
				echo ("<html><table><tr><th>3. Lauf: </th><th><input name='messung103' id='messung103'></th></tr></table></html>");
			}
			if ($zielan >= '4')
			{
				echo ("<html><table><tr><th>4. Lauf: </th><th><input name='messung104' id='messung104'></th></tr></table></html>");
			}
			if ($zielan >= '5')
			{
				echo ("<html><table><tr><th>5. Lauf: </th><th><input name='messung105' id='messung105'></th></tr></table></html>");
			}
			if ($zielan >= '6')
			{
				echo ("<html><table><tr><th>6. Lauf: </th><th><input name='messung106' id='messung106'></th></tr></table></html>");
			}
			if ($zielan >= '7')
			{
				echo ("<html><table><tr><th>7. Lauf: </th><th><input name='messung107' id='messung107'></th></tr></table></html>");
			}
			if ($zielan >= '8')
			{
				echo ("<html><table><tr><th>8. Lauf: </th><th><input name='messung108' id='messung108'></th></tr></table></html>");
			}
			if ($zielan >= '9')
			{
				echo ("<html><table><tr><th>9. Lauf: </th><th><input name='messung109' id='messung109'></th></tr></table></html>");
			}
			if ($zielan >= '10')
			{
				echo ("<html><table><tr><th>10. Lauf: </th><th><input name='messung1010' id='messung1010'></th></tr></table></html>");
			}
			echo ("<br/>");
		}
	?>

	
	<input type="submit" value="speichern" />
	</form>	
		
	</div>

	<div id="knie" class="tabcontent">
		<h3>Werte hinzufügen</h3>
		
	</form>
	
	<button onclick="window.location.href='werte.php'">OK</button>
	</div>
	
	<div id="reißen" class="tabcontent">
		<h3>Training dokumentieren</h3>
	</div>
	
	<div id="ausfall" class="tabcontent">
		<h3>Training dokumentieren</h3>
	</div>
	
	<button onclick="window.location.href='index.php'">Zurück</button>
	
</body>
</html>