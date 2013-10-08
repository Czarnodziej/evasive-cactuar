//  Super Simple Clicking Game

// Super because it really is.
// Simple because it's not meant to be scallable nor enormously optimized.
// Clicking because it involves said activity.
// Game because games are fun.

// Algorithm:

// Draw a game space + style it:
// - Isometric table 3x3
// - start button
// - cancel button
// - total indicator
// - speed indicator
// - fail indicator

// Start game
// roll a random number (1-9) and set it as cell id
// roll a random number and show either happy (positive, green) or sad face (negative, red) in previously set cell

// Total = 0
// Speed = 10 (a function of duration the positive/negative is shown)

// Points:
// if (user clicks positive) {
//	add points to total
// }
// else
// {
//	subtract points from total
// }

// Gameover:
// if (points below 1) {
//	game over!
// else if (fail indicator = 0)
//	game over!
// }

// Speed/difficulty:
// if (total above 19) {
//	speed += 10
// }
// else if (total above 29)
// {
//	speed += 10
// }
// else if (total above 39)
// {
//	speed += 10
// }


// draw a table
var data = ["1", "2", "3", "4", "5", "6", "7", "8", "9" ];
var container = document.getElementById('game');
var table = document.createElement("table");
var i = 0;
for (var r = 0; r < 3; r++) {
  var row = table.insertRow(-1);
  for (var c = 0; c < 3; c++) {
    var cell = row.insertCell(-1);
      cell.setAttribute("id", data[i++]);
  }
}
container.appendChild(table);

// draw buttons todo: use objects

var startBtn = document.createElement("input");
   startBtn.type = "submit";
   startBtn.value = "Start";

var cancelBtn = document.createElement("input");
   cancelBtn.type = "submit";
   cancelBtn.value = "Anuluj";


container.appendChild(startBtn);
container.appendChild(cancelBtn);


// draw indicators todo: use objects

var divTotal = document.createElement("div");
	divTotal.id = "divTotal";
	divTotal.className = "gameIndicatorDiv";
	divTotal.innerHTML = "Punkty: ";

var divSpeed = document.createElement("div");
	divSpeed.id = "divSpeed";
	divSpeed.className = "gameIndicatorDiv";
	divSpeed.innerHTML = "Prędkość: ";

var divFail = document.createElement("div");
	divFail.id = "divFail";
	divFail.className = "gameIndicatorDiv";
	divFail.innerHTML = "Szanse: ";

var spanTotal = document.createElement("span");
	spanTotal.id = "Total";
	spanTotal.className = "gameSpan";

var spanSpeed = document.createElement("span");
	spanSpeed.id = "Speed";
	spanSpeed.className = "gameSpan";

var spanFail = document.createElement("span");
	spanFail.id = "Fail";
	spanFail.className = "gameSpan";

container.appendChild(divTotal);
container.appendChild(divSpeed);
container.appendChild(divFail);

divTotal.appendChild(spanTotal);
divSpeed.appendChild(spanSpeed);
divFail.appendChild(spanFail);











//default values of indicators todo: replace innerHTML with textNodes

var totalCounter = 0;
var speedCounter = 10;
var failCounter = 5;

spanTotal.innerHTML = totalCounter;
spanSpeed.innerHTML = speedCounter;
spanFail.innerHTML = failCounter;


// test the colors!
// document.getElementById('1').className = "gameCellRed";
// document.getElementById('2').className = "gameCellGreen";
// document.getElementById('3').className = "gameCellRed";
// document.getElementById('4').className = "gameCellGreen";
// document.getElementById('5').className = "gameCellRed";
// document.getElementById('6').className = "gameCellGreen";
// document.getElementById('7').className = "gameCellRed";
// document.getElementById('8').className = "gameCellGreen";
// document.getElementById('9').className = "gameCellRed";


// logic

        var color = Math.floor(Math.random()*2); // one of 2 possible colors
        var counter = Math.floor(Math.random()*10)+1; // one of 10 possible colors (1-10)
        var d = document.getElementById(counter); // assign table cell to variable

   startBtn.onclick = function() {

 setTimeout(function() {

        if (color === 1)
        {
		d.className += ' gameCellRed';
		}
		else
		{
		d.className += ' gameCellGreen';
		}

 }, 1500);

    };





    cancelBtn.onclick = function() {
         alert("hiahia");
     };
