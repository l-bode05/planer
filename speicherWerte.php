<?php
		include ('db_connect.php');
		
		$m60 = $_POST['m60'];
		$abfrage100 = "UPDATE judith SET 60m = $m60 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 60m = ($m60*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 60m = ($m60*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 60m = ($m60*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 60m = ($m60*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 60m = ($m60*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 60m = ($m60*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 60m = ($m60*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 60m = ($m60*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 60m = ($m60*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 60m = ($m60*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 60m = ($m60*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m80 = $_POST['m80'];
		$abfrage100 = "UPDATE judith SET 80m = $m80 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 80m = ($m80*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 80m = ($m80*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 80m = ($m80*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 80m = ($m80*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 80m = ($m80*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 80m = ($m80*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 80m = ($m80*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 80m = ($m80*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 80m = ($m80*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 80m = ($m80*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 80m = ($m80*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m100 = $_POST['m100'];
		$abfrage100 = "UPDATE judith SET 100m = $m100 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 100m = ($m100*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 100m = ($m100*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 100m = ($m100*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 100m = ($m100*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 100m = ($m100*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 100m = ($m100*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 100m = ($m100*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 100m = ($m100*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 100m = ($m100*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 100m = ($m100*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 100m = ($m100*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m120 = $_POST['m120'];
		$abfrage100 = "UPDATE judith SET 120m = $m120 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 120m = ($m120*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 120m = ($m120*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 120m = ($m120*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 120m = ($m120*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 120m = ($m120*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 120m = ($m120*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 120m = ($m120*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 120m = ($m120*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 120m = ($m120*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 120m = ($m120*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 120m = ($m120*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m150 = $_POST['m150'];
		$abfrage100 = "UPDATE judith SET 150m = $m150 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 150m = ($m150*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 150m = ($m150*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 150m = ($m150*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 150m = ($m150*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 150m = ($m150*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 150m = ($m150*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 150m = ($m150*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 150m = ($m150*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 150m = ($m150*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 150m = ($m150*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 150m = ($m150*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m180 = $_POST['m180'];
		$abfrage100 = "UPDATE judith SET 180m = $m180 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 180m = ($m180*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 180m = ($m180*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 180m = ($m180*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 180m = ($m180*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 180m = ($m180*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 180m = ($m180*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 180m = ($m180*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 180m = ($m180*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 180m = ($m180*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 180m = ($m180*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 180m = ($m180*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m200 = $_POST['m200'];
		$abfrage100 = "UPDATE judith SET 200m = $m200 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 200m = ($m200*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 200m = ($m200*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 200m = ($m200*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 200m = ($m200*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 200m = ($m200*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 200m = ($m200*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 200m = ($m200*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 200m = ($m200*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 200m = ($m200*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 200m = ($m200*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 200m = ($m200*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m250 = $_POST['m250'];
		$abfrage100 = "UPDATE judith SET 250m = $m250 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 250m = ($m250*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 250m = ($m250*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 250m = ($m250*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 250m = ($m250*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 250m = ($m250*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 250m = ($m250*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 250m = ($m250*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 250m = ($m250*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 250m = ($m250*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 250m = ($m250*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 250m = ($m250*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m300 = $_POST['m300'];
		$abfrage100 = "UPDATE judith SET 300m = $m300 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 300m = ($m300*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 300m = ($m300*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 300m = ($m300*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 300m = ($m300*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 300m = ($m300*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 300m = ($m300*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 300m = ($m300*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 300m = ($m300*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 300m = ($m300*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 300m = ($m300*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 300m = ($m300*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m350 = $_POST['m350'];
		$abfrage100 = "UPDATE judith SET 350m = $m350 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 350m = ($m350*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 350m = ($m350*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 350m = ($m350*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 350m = ($m350*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 350m = ($m350*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 350m = ($m350*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 350m = ($m350*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 350m = ($m350*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 350m = ($m350*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 350m = ($m350*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 350m = ($m350*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m400 = $_POST['m400'];
		$abfrage100 = "UPDATE judith SET 400m = $m400 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 400m = ($m400*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 400m = ($m400*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 400m = ($m400*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 400m = ($m400*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 400m = ($m400*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 400m = ($m400*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 400m = ($m400*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 400m = ($m400*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 400m = ($m400*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 400m = ($m400*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 400m = ($m400*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m450 = $_POST['m450'];
		$abfrage100 = "UPDATE judith SET 450m = $m450 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 450m = ($m450*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 450m = ($m450*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 450m = ($m450*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 450m = ($m450*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 450m = ($m60*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 450m = ($m450*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 450m = ($m450*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 450m = ($m450*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 450m = ($m450*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 450m = ($m450*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 450m = ($m450*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m500 = $_POST['m500'];
		$abfrage100 = "UPDATE judith SET 500m = $m500 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 500m = ($m500*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 500m = ($m500*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 500m = ($m500*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 500m = ($m500*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 500m = ($m500*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 500m = ($m500*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 500m = ($m500*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 500m = ($m500*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 500m = ($m500*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 500m = ($m500*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 500m = ($m500*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m550 = $_POST['m550'];
		$abfrage100 = "UPDATE judith SET 550m = $m550 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 550m = ($m550*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 550m = ($m550*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 550m = ($m550*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 550m = ($m550*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 550m = ($m550*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 550m = ($m550*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 550m = ($m550*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 550m = ($m550*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 550m = ($m550*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 550m = ($m550*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 550m = ($m550*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		
		
		$m600 = $_POST['m600'];
		$abfrage100 = "UPDATE judith SET 600m = $m600 WHERE prozent = 100";
		mysqli_query($link, $abfrage100);
		
		$abfrage975 = "UPDATE judith SET 600m = ($m600*1.025) WHERE prozent = 97.5";
		mysqli_query($link, $abfrage975);
		
		$abfrage95 = "UPDATE judith SET 600m = ($m600*1.05) WHERE prozent = 95";
		mysqli_query($link, $abfrage95);
		
		$abfrage925 = "UPDATE judith SET 600m = ($m600*1.075) WHERE prozent = 92.5";
		mysqli_query($link, $abfrage925);
		
		$abfrage90 = "UPDATE judith SET 600m = ($m600*1.1) WHERE prozent = 90";
		mysqli_query($link, $abfrage90);
		
		$abfrage85 = "UPDATE judith SET 600m = ($m600*1.15) WHERE prozent = 85";
		mysqli_query($link, $abfrage85);
		
		$abfrage80 = "UPDATE judith SET 600m = ($m600*1.2) WHERE prozent = 80";
		mysqli_query($link, $abfrage80);
		
		$abfrage75 = "UPDATE judith SET 600m = ($m600*1.25) WHERE prozent = 75";
		mysqli_query($link, $abfrage75);
		
		$abfrage70 = "UPDATE judith SET 600m = ($m600*1.3) WHERE prozent = 70";
		mysqli_query($link, $abfrage70);
		
		$abfrage60 = "UPDATE judith SET 600m = ($m600*1.4) WHERE prozent = 60";
		mysqli_query($link, $abfrage60);
		
		$abfrage50 = "UPDATE judith SET 600m = ($m600*1.5) WHERE prozent = 50";
		mysqli_query($link, $abfrage50);
		
		$abfrage40 = "UPDATE judith SET 600m = ($m600*1.6) WHERE prozent = 40";
		mysqli_query($link, $abfrage40);
		
		echo "<script type='text/javascript'>document.location='WerteJudith.php';</script>";
?> 