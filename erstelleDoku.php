<?php
		include ('db_connect.php');
			
		$loesche = mysqli_query($link, "DELETE FROM `doku` WHERE `datum` < DATE(NOW())"); $ziele = mysqli_fetch_assoc($loesche); $ziel = $ziele['id']; 

		echo "<script type='text/javascript'>document.location='dokuJudith.php';</script>";
?> 