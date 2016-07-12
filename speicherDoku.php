<?php
		include ('db_connect.php');
		
		$datum = date("Y-m-d");
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 1'); $zielest = mysqli_fetch_assoc($strecke); $zielst1 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 1,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst2 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 2,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst3 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 3,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst4 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 4,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst5 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 5,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst6 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 6,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst7 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 7,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst8 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 8,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst9 = $zielest['laenge']; 
		$strecke = mysqli_query($link, 'SELECT `laenge` FROM `doku` LIMIT 9,1'); $zielest = mysqli_fetch_assoc($strecke); $zielst10 = $zielest['laenge']; 
		
		$messung11 = $_POST['messung11'];
		$abfrage11 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung11') ";
		if ($messung11 != null) {mysqli_query($link, $abfrage11);}
		
		$messung12 = $_POST['messung12'];
		$abfrage12 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung12') ";
		if ($messung12 != null) {mysqli_query($link, $abfrage12);}
		
		$messung13 = $_POST['messung13'];
		$abfrage13 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung13') ";
		if ($messung13 != null) {mysqli_query($link, $abfrage13);}
		
		$messung14 = $_POST['messung14'];
		$abfrage14 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung14') ";
		if ($messung14 != null) {mysqli_query($link, $abfrage14);}
		
		$messung15 = $_POST['messung15'];
		$abfrage15 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung15') ";
		if ($messung15 != null) {mysqli_query($link, $abfrage15);}
		
		$messung16 = $_POST['messung16'];
		$abfrage16 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung16') ";
		if ($messung16 != null) {mysqli_query($link, $abfrage16);}
		
		$messung17 = $_POST['messung17'];
		$abfrage17 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung17') ";
		if ($messung17 != null) {mysqli_query($link, $abfrage17);}
		
		$messung18 = $_POST['messung18'];
		$abfrage18 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung18') ";
		if ($messung18 != null) {mysqli_query($link, $abfrage18);}
		
		$messung19 = $_POST['messung19'];
		$abfrage19 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung19') ";
		if ($messung19 != null) {mysqli_query($link, $abfrage19);}
		
		$messung110 = $_POST['messung110'];
		$abfrage110 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst1', '$messung110') ";
		if ($messung110 != null) {mysqli_query($link, $abfrage110);}
		
		
		$messung21 = $_POST['messung21'];
		$abfrage21 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung12') ";
		if ($messung21 != null) {mysqli_query($link, $abfrage21);}
		
		$messung22 = $_POST['messung22'];
		$abfrage22 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung22') ";
		if ($messung22 != null) {mysqli_query($link, $abfrage22);}
		
		$messung23 = $_POST['messung23'];
		$abfrage23 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung23') ";
		if ($messung23 != null) {mysqli_query($link, $abfrage23);}
		
		$messung24 = $_POST['messung24'];
		$abfrage24 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung24') ";
		if ($messung24 != null) {mysqli_query($link, $abfrage24);}
		
		$messung25 = $_POST['messung25'];
		$abfrage25 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung25') ";
		if ($messung25 != null) {mysqli_query($link, $abfrage25);}
		
		$messung26 = $_POST['messung26'];
		$abfrage26 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung26') ";
		if ($messung26 != null) {mysqli_query($link, $abfrage26);}
		
		$messung27 = $_POST['messung27'];
		$abfrage27 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung27') ";
		if ($messung27 != null) {mysqli_query($link, $abfrage27);}
		
		$messung28 = $_POST['messung28'];
		$abfrage28 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung28') ";
		if ($messung28 != null) {mysqli_query($link, $abfrage28);}
		
		$messung29 = $_POST['messung29'];
		$abfrage29 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung29') ";
		if ($messung29 != null) {mysqli_query($link, $abfrage29);}
		
		$messung210 = $_POST['messung210'];
		$abfrage210 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst2', '$messung210') ";
		if ($messung210 != null) {mysqli_query($link, $abfrage210);}
		
		
		
		$messung31 = $_POST['messung31'];
		$abfrage31 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung31') ";
		if ($messung31 != null) {mysqli_query($link, $abfrage31);}
		
		$messung32 = $_POST['messung32'];
		$abfrage32 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung32') ";
		if ($messung32 != null) {mysqli_query($link, $abfrage32);}
		
		$messung33 = $_POST['messung33'];
		$abfrage33 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung33') ";
		if ($messung33 != null) {mysqli_query($link, $abfrage33);}
		
		$messung34 = $_POST['messung34'];
		$abfrage34 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung34') ";
		if ($messung34 != null) {mysqli_query($link, $abfrage34);}
		
		$messung35 = $_POST['messung35'];
		$abfrage35 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung35') ";
		if ($messung35 != null) {mysqli_query($link, $abfrage35);}
		
		$messung36 = $_POST['messung36'];
		$abfrage36 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung36') ";
		if ($messung36 != null) {mysqli_query($link, $abfrage36);}
		
		$messung37 = $_POST['messung37'];
		$abfrage37 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung37') ";
		if ($messung37 != null) {mysqli_query($link, $abfrage37);}
		
		$messung38 = $_POST['messung38'];
		$abfrage38 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung38') ";
		if ($messung38 != null) {mysqli_query($link, $abfrage38);}
		
		$messung39 = $_POST['messung39'];
		$abfrage39 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung39') ";
		if ($messung39 != null) {mysqli_query($link, $abfrage39);}
		
		$messung310 = $_POST['messung310'];
		$abfrage310 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst3', '$messung310') ";
		if ($messung310 != null) {mysqli_query($link, $abfrage310);}
		
		
		
		$messung41 = $_POST['messung41'];
		$abfrage41 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung41') ";
		if ($messung41 != null) {mysqli_query($link, $abfrage41);}
		
		$messung42 = $_POST['messung42'];
		$abfrage42 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung42') ";
		if ($messung42 != null) {mysqli_query($link, $abfrage42);}
		
		$messung43 = $_POST['messung43'];
		$abfrage43 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung43') ";
		if ($messung43 != null) {mysqli_query($link, $abfrage43);}
		
		$messung44 = $_POST['messung44'];
		$abfrage44 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung44') ";
		if ($messung44 != null) {mysqli_query($link, $abfrage44);}
		
		$messung45 = $_POST['messung45'];
		$abfrage45 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4, '$messung45') ";
		if ($messung45 != null) {mysqli_query($link, $abfrage45);}
		
		$messung46 = $_POST['messung46'];
		$abfrage46 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung46') ";
		if ($messung46 != null) {mysqli_query($link, $abfrage46);}
		
		$messung47 = $_POST['messung47'];
		$abfrage47 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung47') ";
		if ($messung47 != null) {mysqli_query($link, $abfrage47);}
		
		$messung48 = $_POST['messung48'];
		$abfrage48 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung48') ";
		if ($messung48 != null) {mysqli_query($link, $abfrage48);}
		
		$messung49 = $_POST['messung49'];
		$abfrage49 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung49') ";
		if ($messung49 != null) {mysqli_query($link, $abfrage49);}
		
		$messung410 = $_POST['messung410'];
		$abfrage410 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst4', '$messung410') ";
		if ($messung410 != null) {mysqli_query($link, $abfrage410);}
		
		
		
		$messung51 = $_POST['messung51'];
		$abfrage51 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung51') ";
		if ($messung51 != null) {mysqli_query($link, $abfrage51);}
		
		$messung52 = $_POST['messung52'];
		$abfrage52 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5, '$messung52') ";
		if ($messung52 != null) {mysqli_query($link, $abfrage52);}
		
		$messung53 = $_POST['messung53'];
		$abfrage53 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung53') ";
		if ($messung53 != null) {mysqli_query($link, $abfrage53);}
		
		$messung54 = $_POST['messung54'];
		$abfrage54 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung54') ";
		if ($messung54 != null) {mysqli_query($link, $abfrage54);}
		
		$messung55 = $_POST['messung55'];
		$abfrage55 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung55') ";
		if ($messung55 != null) {mysqli_query($link, $abfrage55);}
		
		$messung56 = $_POST['messung56'];
		$abfrage56 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung56') ";
		if ($messung56 != null) {mysqli_query($link, $abfrage56);}
		
		$messung57 = $_POST['messung57'];
		$abfrage57 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung57') ";
		if ($messung57 != null) {mysqli_query($link, $abfrage57);}
		
		$messung58 = $_POST['messung58'];
		$abfrage58 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung58') ";
		if ($messung58 != null) {mysqli_query($link, $abfrage58);}
		
		$messung59 = $_POST['messung59'];
		$abfrage59 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung59') ";
		if ($messung59 != null) {mysqli_query($link, $abfrage59);}
		
		$messung510 = $_POST['messung510'];
		$abfrage510 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst5', '$messung510') ";
		if ($messung510 != null) {mysqli_query($link, $abfrage510);}
		
		
		
		$messung61 = $_POST['messung61'];
		$abfrage61 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung61') ";
		if ($messung61 != null) {mysqli_query($link, $abfrage61);}
		
		$messung62 = $_POST['messung62'];
		$abfrage62 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung62') ";
		if ($messung62 != null) {mysqli_query($link, $abfrage62);}
		
		$messung63 = $_POST['messung63'];
		$abfrage63 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung63') ";
		if ($messung63 != null) {mysqli_query($link, $abfrage63);}
		
		$messung64 = $_POST['messung64'];
		$abfrage64 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung64') ";
		if ($messung64 != null) {mysqli_query($link, $abfrage64);}
		
		$messung65 = $_POST['messung65'];
		$abfrage65 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung65') ";
		if ($messung65 != null) {mysqli_query($link, $abfrage65);}
		
		$messung66 = $_POST['messung66'];
		$abfrage66 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung66') ";
		if ($messung66 != null) {mysqli_query($link, $abfrage66);}
		
		$messung67 = $_POST['messung67'];
		$abfrage67 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung67') ";
		if ($messung67 != null) {mysqli_query($link, $abfrage67);}
		
		$messung68 = $_POST['messung68'];
		$abfrage68 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung68') ";
		if ($messung68 != null) {mysqli_query($link, $abfrage68);}
		
		$messung69 = $_POST['messung69'];
		$abfrage69 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung69') ";
		if ($messung69 != null) {mysqli_query($link, $abfrage69);}
		
		$messung610 = $_POST['messung610'];
		$abfrage610 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst6', '$messung610') ";
		if ($messung610 != null) {mysqli_query($link, $abfrage610);}
		
		
		
		$messung71 = $_POST['messung71'];
		$abfrage71 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7, '$messung71') ";
		if ($messung71 != null) {mysqli_query($link, $abfrage71);}
		
		$messung72 = $_POST['messung72'];
		$abfrage72 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7, '$messung72') ";
		if ($messung72 != null) {mysqli_query($link, $abfrage72);}
		
		$messung73 = $_POST['messung73'];
		$abfrage73 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7, '$messung73') ";
		if ($messung73 != null) {mysqli_query($link, $abfrage73);}
		
		$messung74 = $_POST['messung74'];
		$abfrage74 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung74') ";
		if ($messung74 != null) {mysqli_query($link, $abfrage74);}
		
		$messung75 = $_POST['messung75'];
		$abfrage75 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung75') ";
		if ($messung75 != null) {mysqli_query($link, $abfrage75);}
		
		$messung76 = $_POST['messung76'];
		$abfrage76 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung76') ";
		if ($messung76 != null) {mysqli_query($link, $abfrage76);}
		
		$messung77 = $_POST['messung77'];
		$abfrage77 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung77') ";
		if ($messung77 != null) {mysqli_query($link, $abfrage77);}
		
		$messung78 = $_POST['messung78'];
		$abfrage78 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung78') ";
		if ($messung78 != null) {mysqli_query($link, $abfrage78);}
		
		$messung79 = $_POST['messung79'];
		$abfrage79 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung79') ";
		if ($messung79 != null) {mysqli_query($link, $abfrage79);}
		
		$messung710 = $_POST['messung710'];
		$abfrage710 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst7', '$messung710') ";
		if ($messung710 != null) {mysqli_query($link, $abfrage710);}
		
		
		
		$messung81 = $_POST['messung81'];
		$abfrage81 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung81') ";
		if ($messung81 != null) {mysqli_query($link, $abfrage81);}
		
		$messung82 = $_POST['messung82'];
		$abfrage82 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung82') ";
		if ($messung82 != null) {mysqli_query($link, $abfrage82);}
		
		$messung83 = $_POST['messung83'];
		$abfrage83 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung83') ";
		if ($messung83 != null) {mysqli_query($link, $abfrage83);}
		
		$messung84 = $_POST['messung84'];
		$abfrage84 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung84') ";
		if ($messung84 != null) {mysqli_query($link, $abfrage84);}
		
		$messung85 = $_POST['messung85'];
		$abfrage85 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung85') ";
		if ($messung85 != null) {mysqli_query($link, $abfrage85);}
		
		$messung86 = $_POST['messung86'];
		$abfrage86 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung86') ";
		if ($messung86 != null) {mysqli_query($link, $abfrage86);}
		
		$messung87 = $_POST['messung87'];
		$abfrage87 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung87') ";
		if ($messung87 != null) {mysqli_query($link, $abfrage87);}
		
		$messung88 = $_POST['messung88'];
		$abfrage88 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung88') ";
		if ($messung88 != null) {mysqli_query($link, $abfrage88);}
		
		$messung89 = $_POST['messung89'];
		$abfrage89 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung89') ";
		if ($messung89 != null) {mysqli_query($link, $abfrage89);}
		
		$messung810 = $_POST['messung810'];
		$abfrage810 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst8', '$messung810') ";
		if ($messung810 != null) {mysqli_query($link, $abfrage810);}
		
		
		
		$messung91 = $_POST['messung91'];
		$abfrage91 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung91') ";
		if ($messung91 != null) {mysqli_query($link, $abfrage91);}
		
		$messung92 = $_POST['messung92'];
		$abfrage92 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung92') ";
		if ($messung92 != null) {mysqli_query($link, $abfrage92);}
		
		$messung93 = $_POST['messung93'];
		$abfrage93 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung93') ";
		if ($messung93 != null) {mysqli_query($link, $abfrage93);}
		
		$messung94 = $_POST['messung94'];
		$abfrage94 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung94') ";
		if ($messung94 != null) {mysqli_query($link, $abfrage94);}
		
		$messung95 = $_POST['messung95'];
		$abfrage95 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung95') ";
		if ($messung95 != null) {mysqli_query($link, $abfrage95);}
		
		$messung96 = $_POST['messung96'];
		$abfrage96 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung96') ";
		if ($messung96 != null) {mysqli_query($link, $abfrage96);}
		
		$messung97 = $_POST['messung97'];
		$abfrage97 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung97') ";
		if ($messung97 != null) {mysqli_query($link, $abfrage97);}
		
		$messung98 = $_POST['messung98'];
		$abfrage98 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung98') ";
		if ($messung98 != null) {mysqli_query($link, $abfrage98);}
		
		$messung99 = $_POST['messung99'];
		$abfrage99 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung99') ";
		if ($messung99 != null) {mysqli_query($link, $abfrage99);}
		
		$messung910 = $_POST['messung910'];
		$abfrage910 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst9', '$messung910') ";
		if ($messung910 != null) {mysqli_query($link, $abfrage910);}
		
		
		
		$messung101 = $_POST['messung101'];
		$abfrage101 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung101') ";
		if ($messung101 != null) {mysqli_query($link, $abfrage101);}
		
		$messung102 = $_POST['messung102'];
		$abfrage102 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung102') ";
		if ($messung102 != null) {mysqli_query($link, $abfrage102);}
		
		$messung103 = $_POST['messung103'];
		$abfrage103 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung103') ";
		if ($messung103 != null) {mysqli_query($link, $abfrage103);}
		
		$messung104 = $_POST['messung104'];
		$abfrage104 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung104') ";
		if ($messung104 != null) {mysqli_query($link, $abfrage104);}
		
		$messung105 = $_POST['messung105'];
		$abfrage105 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung150') ";
		if ($messung105 != null) {mysqli_query($link, $abfrage105);}
		
		$messung106 = $_POST['messung106'];
		$abfrage106 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung106') ";
		if ($messung106 != null) {mysqli_query($link, $abfrage106);}
		
		$messung107 = $_POST['messung107'];
		$abfrage107 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung107') ";
		if ($messung107 != null) {mysqli_query($link, $abfrage107);}
		
		$messung108 = $_POST['messung108'];
		$abfrage108 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung108') ";
		if ($messung108 != null) {mysqli_query($link, $abfrage108);}
		
		$messung109 = $_POST['messung109'];
		$abfrage109 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung109') ";
		if ($messung109 != null) {mysqli_query($link, $abfrage109);}
		
		$messung1010 = $_POST['messung1010'];
		$abfrage1010 = "INSERT INTO ergebnisse (datum, laenge, zeit) VALUES ('$datum', '$zielst10', '$messung1010') ";
		if ($messung1010 != null) {mysqli_query($link, $abfrage1010);}
		
		
		
		echo "<script type='text/javascript'>document.location='index.php';</script>";
?> 