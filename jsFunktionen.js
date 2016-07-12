var datum = new Date();
var heute = datum.getDate()+"."+(datum.getMonth()+1)+"."+datum.getFullYear();
var WochenTagAktuell = datum.getDay();
var ArrayTage = new Array("Sonntag","Montag","Dienstag","Mittwoch","Donnerstag","Freitag","Samstag");

function TagText (Zahl) 
{
return ArrayTage[Zahl];
}
var TagName = TagText(WochenTagAktuell);

$(function () {
var lauf = $('<div />', {
		'class': 'lauf',
		html: [
		$('<label />', {html: 'Anzahl: '}),
		$('<input name = "anzahl"/>', {type: 'text'}),
		$('<label />', {html: ' x '}),
		$('<input name = "laenge"/>', {type: 'text'}),
		$('<label />', {html: ' m   '}),
		$('<input name = "prozentlauf"/>', {type: 'text'}),
		$('<label />', {html: ' %   '}),
		$('<label />', {html: ' Pause: '}),
		$('<input name = "pauselauf"/>', {type: 'text'}),
		$('<label />', {html: ' min'})
		]
	});
  
	$('#addLauf').click(function () {
		$('.laeufe').append(lauf.clone());
		});
	});
		
$(function () {
var kraft = $('<div />', {
		'class': 'kraft',
		html: [
		$('<label />', {html: 'Wiederholungen: '}),
		$('<input class = wiederholungen/>', {type: 'text'}),
		$('<select>',{html: "<option  class = kniebeugen>Kniebeugen</option >,<option class = reißen>Reißen</option>,<option class = ausfallschritte>Ausfallschritte</option>"}),
		$('<label />', {html: '    '}),
		$('<input class = prozentkraft/>', {type: 'text'}),
		$('<label />', {html: ' % '}),
		$('<label />', {html: ' Pause: '}),
		$('<input calss = pausekraft/>', {type: 'text'}),
		$('<label />', {html: ' min'})
		]
	});
  
	$('#addKraft').click(function () {
		$('.clkraft').append(kraft.clone());
		});
	});
		
$(function () {
var pause = $('<div />', {
		'class': 'pause',
		html: [
		$('<label />', {html: 'Pause: '}),
		$('<input class = serienpause/>', {type: 'text'}),
		$('<label />', {html: ' min'})
		]
	});
  
	$('#addPause').click(function () {
		$('.pausen').append(pause.clone());
		});
	});
		
	
function fill_in()
{
 document.getElementById("programm").value = "frei";   
}
	
	
function openDay(evt, day) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(day).style.display = "block";
    evt.currentTarget.className += " active";
}


function oeffneDoku()
{
		var auswahl = document.getElementById("namedoku");
		var name = auswahl.options[auswahl.selectedIndex].text;
		switch (name)
		{
			case "Judith":
			window.location.href='dokuJudith.php';
				break;
			default:
				alert ("Bitte wähle einen anderen Namen");
				break;
		}

}

function aenderLauf() {
	var anzahl = document.getElementById("anzahlLaeufe").value;

	switch (anzahl) {
		case '1':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			break;
		case '2':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			break;
		case '3':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			break;
		case '4':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			break;
		case '5':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			break;
		case '6':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			document.getElementById("anzahl6").type = "visible"; 
			document.getElementById("laenge6").type = "visible";
			document.getElementById("prozentLauf6").type = "visible"; 
			document.getElementById("pauseLauf6").type = "visible";
			break;
		case '7':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			document.getElementById("anzahl6").type = "visible"; 
			document.getElementById("laenge6").type = "visible";
			document.getElementById("prozentLauf6").type = "visible"; 
			document.getElementById("pauseLauf6").type = "visible";
			document.getElementById("anzahl7").type = "visible"; 
			document.getElementById("laenge7").type = "visible";
			document.getElementById("prozentLauf7").type = "visible"; 
			document.getElementById("pauseLauf7").type = "visible";
			break;
		case '8':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			document.getElementById("anzahl6").type = "visible"; 
			document.getElementById("laenge6").type = "visible";
			document.getElementById("prozentLauf6").type = "visible"; 
			document.getElementById("pauseLauf6").type = "visible";
			document.getElementById("anzahl7").type = "visible"; 
			document.getElementById("laenge7").type = "visible";
			document.getElementById("prozentLauf7").type = "visible"; 
			document.getElementById("pauseLauf7").type = "visible";
			document.getElementById("anzahl8").type = "visible"; 
			document.getElementById("laenge8").type = "visible";
			document.getElementById("prozentLauf8").type = "visible"; 
			document.getElementById("pauseLauf8").type = "visible";
			break;
		case '9':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			document.getElementById("anzahl6").type = "visible"; 
			document.getElementById("laenge6").type = "visible";
			document.getElementById("prozentLauf6").type = "visible"; 
			document.getElementById("pauseLauf6").type = "visible";
			document.getElementById("anzahl7").type = "visible"; 
			document.getElementById("laenge7").type = "visible";
			document.getElementById("prozentLauf7").type = "visible"; 
			document.getElementById("pauseLauf7").type = "visible";
			document.getElementById("anzahl8").type = "visible"; 
			document.getElementById("laenge8").type = "visible";
			document.getElementById("prozentLauf8").type = "visible"; 
			document.getElementById("pauseLauf8").type = "visible";
			document.getElementById("anzahl9").type = "visible"; 
			document.getElementById("laenge9").type = "visible";
			document.getElementById("prozentLauf9").type = "visible"; 
			document.getElementById("pauseLauf9").type = "visible";
			break;
		case '10':
			document.getElementById("anzahl1").type = "visible"; 
			document.getElementById("laenge1").type = "visible";
			document.getElementById("prozentLauf1").type = "visible"; 
			document.getElementById("pauseLauf1").type = "visible";
			document.getElementById("anzahl2").type = "visible"; 
			document.getElementById("laenge2").type = "visible";
			document.getElementById("prozentLauf2").type = "visible"; 
			document.getElementById("pauseLauf2").type = "visible";
			document.getElementById("anzahl3").type = "visible"; 
			document.getElementById("laenge3").type = "visible";
			document.getElementById("prozentLauf3").type = "visible"; 
			document.getElementById("pauseLauf3").type = "visible";
			document.getElementById("anzahl4").type = "visible"; 
			document.getElementById("laenge4").type = "visible";
			document.getElementById("prozentLauf4").type = "visible"; 
			document.getElementById("pauseLauf4").type = "visible";
			document.getElementById("anzahl5").type = "visible"; 
			document.getElementById("laenge5").type = "visible";
			document.getElementById("prozentLauf5").type = "visible"; 
			document.getElementById("pauseLauf5").type = "visible";
			document.getElementById("anzahl6").type = "visible"; 
			document.getElementById("laenge6").type = "visible";
			document.getElementById("prozentLauf6").type = "visible"; 
			document.getElementById("pauseLauf6").type = "visible";
			document.getElementById("anzahl7").type = "visible"; 
			document.getElementById("laenge7").type = "visible";
			document.getElementById("prozentLauf7").type = "visible"; 
			document.getElementById("pauseLauf7").type = "visible";
			document.getElementById("anzahl8").type = "visible"; 
			document.getElementById("laenge8").type = "visible";
			document.getElementById("prozentLauf8").type = "visible"; 
			document.getElementById("pauseLauf8").type = "visible";
			document.getElementById("anzahl9").type = "visible"; 
			document.getElementById("laenge9").type = "visible";
			document.getElementById("prozentLauf9").type = "visible"; 
			document.getElementById("pauseLauf9").type = "visible";
			document.getElementById("anzahl10").type = "visible"; 
			document.getElementById("laenge10").type = "visible";
			document.getElementById("prozentLauf10").type = "visible"; 
			document.getElementById("pauseLauf10").type = "visible";
			break;
	}
		
	
		
}


