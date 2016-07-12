<?php
		include ('db_connect.php');
		$loesche = mysqli_query($link, "DELETE FROM `doku` WHERE `datum` < DATE(NOW())"); $ziele = mysqli_fetch_assoc($loesche); $ziel = $ziele['id']; 
		$programm = $_POST['programm'];
		
		$anzahlLaeufe = $_POST['anzahlLaeufe'];

		$anzahl1 = $_POST['anzahl1'];
		$laenge1 = $_POST['laenge1'];
		$prozentLauf1 = $_POST['prozentLauf1'];
		$pauseLauf1 = $_POST['pauseLauf1'];
		
		$anzahl2 = $_POST['anzahl2'];
		$laenge2 = $_POST['laenge2'];
		$prozentLauf2 = $_POST['prozentLauf2'];
		$pauseLauf2 = $_POST['pauseLauf2'];
		
		$anzahl3 = $_POST['anzahl3'];
		$laenge3 = $_POST['laenge3'];
		$prozentLauf3 = $_POST['prozentLauf3'];
		$pauseLauf3 = $_POST['pauseLauf3'];
		
		$anzahl4 = $_POST['anzahl4'];
		$laenge4 = $_POST['laenge4'];
		$prozentLauf4 = $_POST['prozentLauf4'];
		$pauseLauf4 = $_POST['pauseLauf4'];
		
		$anzahl5 = $_POST['anzahl5'];
		$laenge5 = $_POST['laenge5'];
		$prozentLauf5 = $_POST['prozentLauf5'];
		$pauseLauf5 = $_POST['pauseLauf5'];
		
		$anzahl6 = $_POST['anzahl6'];
		$laenge6 = $_POST['laenge6'];
		$prozentLauf6 = $_POST['prozentLauf6'];
		$pauseLauf6 = $_POST['pauseLauf6'];
		
		$anzahl7 = $_POST['anzahl7'];
		$laenge7 = $_POST['laenge7'];
		$prozentLauf7 = $_POST['prozentLauf7'];
		$pauseLauf7 = $_POST['pauseLauf7'];
		
		$anzahl8 = $_POST['anzahl8'];
		$laenge8 = $_POST['laenge8'];
		$prozentLauf8 = $_POST['prozentLauf8'];
		$pauseLauf8 = $_POST['pauseLauf8'];
		
		$anzahl9 = $_POST['anzahl9'];
		$laenge9 = $_POST['laenge9'];
		$prozentLauf9 = $_POST['prozentLauf9'];
		$pauseLauf9 = $_POST['pauseLauf9'];
		
		$anzahl10 = $_POST['anzahl10'];
		$laenge10 = $_POST['laenge10'];
		$prozentLauf10 = $_POST['prozentLauf10'];
		$pauseLauf10 = $_POST['pauseLauf10'];
		
		$weiteres = $_POST['weiteres'];
		
		$datum = date("Y-m-d");

		$laenge1 = substr($laenge1, -3);
		$laenge2 = substr($laenge2, -3);
		$laenge3 = substr($laenge3, -3);
		$laenge4 = substr($laenge4, -3);
		$laenge5 = substr($laenge5, -3);
		$laenge6 = substr($laenge6, -3);
		$laenge7 = substr($laenge7, -3);
		$laenge8 = substr($laenge8, -3);
		$laenge9 = substr($laenge9, -3);
		$laenge10 = substr($laenge10, -3);
		
		
		$zahl1 = substr($anzahl1,-2);
		$zahl2 = substr($anzahl2,-2);
		$zahl3 = substr($anzahl3,-2);
		$zahl4 = substr($anzahl4,-2);
		$zahl5 = substr($anzahl5,-2);
		$zahl6 = substr($anzahl6,-2);
		$zahl7 = substr($anzahl7,-2);
		$zahl8 = substr($anzahl8,-2);
		$zahl9 = substr($anzahl9,-2);
		$zahl10 = substr($anzahl10,-2);
		
		$prozent1 = substr($prozentLauf1, -4);
		$prozent2 = substr($prozentLauf2, -4);
		$prozent3 = substr($prozentLauf3, -4);
		$prozent4 = substr($prozentLauf4, -4);
		$prozent5 = substr($prozentLauf5, -4);
		$prozent6 = substr($prozentLauf6, -4);
		$prozent7 = substr($prozentLauf7, -4);
		$prozent8 = substr($prozentLauf8, -4);
		$prozent9 = substr($prozentLauf9, -4);
		$prozent10 = substr($prozentLauf10, -4);

		switch ($anzahlLaeufe) {
		case '1':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			break;
		case '2':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			break;
		case '3':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			break;
		case '4':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			break;
		case '5':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			break;
		case '6':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			$abfrage6 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge6', '$prozent6', '$zahl6')";
			mysqli_query($link, $abfrage6);
			break;
		case '7':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			$abfrage6 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge6', '$prozent6', '$zahl6')";
			mysqli_query($link, $abfrage6);
			$abfrage7 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge7', '$prozent7', '$zahl7')";
			mysqli_query($link, $abfrage7);
			break;
		case '8':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			$abfrage6 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge6', '$prozent6', '$zahl6')";
			mysqli_query($link, $abfrage6);
			$abfrage7 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge7', '$prozent7', '$zahl7')";
			mysqli_query($link, $abfrage7);
			$abfrage8 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge8', '$prozent8', '$zahl8')";
			mysqli_query($link, $abfrage8);
			break;
		case '9':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			$abfrage6 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge6', '$prozent6', '$zahl6')";
			mysqli_query($link, $abfrage6);
			$abfrage7 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge7', '$prozent7', '$zahl7')";
			mysqli_query($link, $abfrage7);
			$abfrage8 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge8', '$prozent8', '$zahl8')";
			mysqli_query($link, $abfrage8);
			$abfrage9 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge9', '$prozent9', '$zahl9')";
			mysqli_query($link, $abfrage9);
			break;
		case '10':
			$abfrage1 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge1', '$prozent1', '$zahl1')";
			mysqli_query($link, $abfrage1);
			$abfrage2 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge2', '$prozent2', '$zahl2')";
			mysqli_query($link, $abfrage2);
			$abfrage3 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge3', '$prozent3', '$zahl3')";
			mysqli_query($link, $abfrage3);
			$abfrage4 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge4', '$prozent4', '$zahl4')";
			mysqli_query($link, $abfrage4);
			$abfrage5 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge5', '$prozent5', '$zahl5')";
			mysqli_query($link, $abfrage5);
			$abfrage6 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge6', '$prozent6', '$zahl6')";
			mysqli_query($link, $abfrage6);
			$abfrage7 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge7', '$prozent7', '$zahl7')";
			mysqli_query($link, $abfrage7);
			$abfrage8 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge8', '$prozent8', '$zahl8')";
			mysqli_query($link, $abfrage8);
			$abfrage9 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge9', '$prozent9', '$zahl9')";
			mysqli_query($link, $abfrage9);
			$abfrage10 = "INSERT INTO doku (datum, anzahlLaeufe, laenge, prozent, anzahl) VALUES ('$datum', '$anzahlLaeufe', '$laenge10', '$prozent10', '$zahl10')";
			mysqli_query($link, $abfrage10);
			break;
	
		}
			
				
		echo "<script type='text/javascript'>document.location='erstelle.php';</script>";
?> 