<?php
		include ('db_connect.php');
		
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

		$tage = array("Sonntag", "Montag", "Dienstag", "Mittwoch", "Donnerstag", "Freitag", "Samstag");
		date_default_timezone_set("Europe/Berlin");
		$tag = date("w");
		echo $tage[$tag].("</br>");
		echo $programm.('<br/>');
		
	switch ($anzahlLaeufe)	{
		case '0':
			break;
			
		case '1':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1; (float)$soll = mysqli_query($link, "SELECT zeit FROM ziel WHERE laenge ='".$laenge1."'"); echo $soll; /*$zieleso = mysqli_fetch_assoc($soll); $zielso = $zieleso['zeit*(1+(1-prozent/100))'];*/
			echo $zielso;
			echo $pauseLauf1.(" min").('<br/>');
			break;
		
		case '2':
			echo $anzahl1.(" * ");		
			echo $laenge1;
			echo $prozentLauf1;
			
			$query = "SELECT zeit FROM ziel WHERE laenge = '{$_POST['laenge1']}'";
			$soll = mysqli_query($link, $query);

			/*$soll = $link->prepare('SELECT zeit*(1+(1-:prozent/100)) FROM ziel WHERE laenge = :laenge');
			$soll->bindParam(':prozent', $prozent1);*(1+(1-70/100))
			$soll->bindParam(':laenge', $laenge1);
			
			$soll = mysqli_query($link, ""); echo $soll; */ $zieleso = mysqli_fetch_assoc($soll); echo $zieleso; $zielso = $zieleso['zeit']; echo $zielso;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			break;
			
		case '3':	
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			break;
			
		case '4':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			break;
			
		case '5':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			break;
			
		case '6':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			echo $anzahl6;		
			echo $laenge6;
			echo $prozentLauf6;
			echo $pauseLauf6.(" min").('<br/>');
			break;
			
		case '7':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			echo $anzahl6;		
			echo $laenge6;
			echo $prozentLauf6;
			echo $pauseLauf6.(" min").('<br/>');
			echo $anzahl7;		
			echo $laenge7;
			echo $prozentLauf7;
			echo $pauseLauf7.(" min").('<br/>');
			break;
			
		case '8':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			echo $anzahl6;		
			echo $laenge6;
			echo $prozentLauf6;
			echo $pauseLauf6.(" min").('<br/>');
			echo $anzahl7;		
			echo $laenge7;
			echo $prozentLauf7;
			echo $pauseLauf7.(" min").('<br/>');
			echo $anzahl8;		
			echo $laenge8;
			echo $prozentLauf8;
			echo $pauseLauf8.(" min").('<br/>');
			break;
			
		case '9':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			echo $anzahl6;		
			echo $laenge6;
			echo $prozentLauf6;
			echo $pauseLauf6.(" min").('<br/>');
			echo $anzahl7;		
			echo $laenge7;
			echo $prozentLauf7;
			echo $pauseLauf7.(" min").('<br/>');
			echo $anzahl8;		
			echo $laenge8;
			echo $prozentLauf8;
			echo $pauseLauf8.(" min").('<br/>');
			echo $anzahl9;		
			echo $laenge9;
			echo $prozentLauf9;
			echo $pauseLauf9.(" min").('<br/>');
			break;
			
		case '10':
			echo $anzahl1;		
			echo $laenge1;
			echo $prozentLauf1;
			echo $pauseLauf1.(" min").('<br/>');
			echo $anzahl2;		
			echo $laenge2;
			echo $prozentLauf2;
			echo $pauseLauf2.(" min").('<br/>');
			echo $anzahl3;		
			echo $laenge3;
			echo $prozentLauf3;
			echo $pauseLauf3.(" min").('<br/>');
			echo $anzahl4;		
			echo $laenge4;
			echo $prozentLauf4;
			echo $pauseLauf4.(" min").('<br/>');
			echo $anzahl5;		
			echo $laenge5;
			echo $prozentLauf5;
			echo $pauseLauf5.(" min").('<br/>');
			echo $anzahl6;		
			echo $laenge6;
			echo $prozentLauf6;
			echo $pauseLauf6.(" min").('<br/>');
			echo $anzahl7;		
			echo $laenge7;
			echo $prozentLauf7;
			echo $pauseLauf7.(" min").('<br/>');
			echo $anzahl8;		
			echo $laenge8;
			echo $prozentLauf8;
			echo $pauseLauf8.(" min").('<br/>');
			echo $anzahl9;		
			echo $laenge9;
			echo $prozentLauf9;
			echo $pauseLauf9.(" min").('<br/>');		
			echo $anzahl10;		
			echo $laenge10;
			echo $prozentLauf10;
			echo $pauseLauf10.(" min").('<br/>');
			break;
	}
		
		echo $weiteres;
		
		/*echo "<script type='text/javascript'>document.location='erstelle.php';</script>";*/
?> 