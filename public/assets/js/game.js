//  Super Simple Clicking Game

// Super because it really is.
// Simple because it's not meant to be scallable nor enormously optimized.
// Clicking because it involves said activity.
// Game because games are fun.

// draw a table
var data = ["1", "2", "3", "4", "5", "6", "7", "8", "9" ],
container = document.getElementById('game'),
table = document.createElement("table"),
i = 0;
for (var r = 0; r < 3; r++) {
	var row = table.insertRow(-1);
	for (var c = 0; c < 3; c++) {
		var cell = row.insertCell(-1);
		cell.setAttribute("id", data[i++]);
	}
}
container.appendChild(table);

// draw buttons

var startBtn = document.createElement("input");
startBtn.type = "submit";
startBtn.value = "Start";

var cancelBtn = document.createElement("input");
cancelBtn.type = "submit";
cancelBtn.value = "Anuluj";


container.appendChild(startBtn);
container.appendChild(cancelBtn);


// draw indicators, todo: use object createIndicatorDiv
// function createIndicatorDiv(name) {
// }

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


// todo: use object createCounterSpan
// function createCounterSpan(name) {
// }
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

//default values of indicators, todo: replace innerHTML with textNodes (use nodeValue)
spanTotal.innerHTML = 0;
spanSpeed.innerHTML = 1;
spanFail.innerHTML = 5;

var totalCounter = 0,
speedCounter = 1,
failCounter = 5;

// logic

// loop:
// 1) decide a color and cell number
// 2) display a color in a set time depending on speedCounter function
// 3) add points for successful onclick event, reduce failCounter on unsuccessful onclick event + update the indicators

function setSpeed() {
	if (totalCounter > 15) {
		cellShowSpeed = 400;
		spanSpeed.innerHTML = 4;
	}
	else if (totalCounter > 10)
	{
		cellShowSpeed = 600;
		spanSpeed.innerHTML = 3;
	}
	else if (totalCounter > 5)
	{
		cellShowSpeed = 800;
		spanSpeed.innerHTML = 2;
	}
	else
	{
		cellShowSpeed = 1000;
	}
}

var cellShowSpeed = 1000;
function randomCellColor(){
		// variables
        var color = Math.floor(Math.random()*2), // one of 2 possible colors
			counter = Math.floor(Math.random()*10)+1, // one of 10 possible cells (1-10)
			// cellWithoutClassWithinTable = todo
			randomCell = document.getElementById(counter); // assign table cell to variable

			if (color === 1)
			{
				randomCell.className += ' gameCellRed';
				setTimeout(function(){randomCell.className = null;}, cellShowSpeed);
			}
			else
			{
				randomCell.className += ' gameCellGreen';
				setTimeout(function(){randomCell.className = null;}, cellShowSpeed);
			}

			randomCell.onclick = function() {
				if (randomCell.className === ' gameCellRed'){
					failCounter -= 1;
					spanFail.innerHTML = failCounter;
					randomCell.className = null;
				}
				else{
					totalCounter += 1;
					spanTotal.innerHTML = totalCounter;
					setSpeed();
					randomCell.className = null;
				}
			};

// cellWithoutClassWithinTable.onclick = function() {
// failCounter -= 1;
// }
//
// unclickedGreenWithinDisplayTime = function(){
// failCounter -= 1;
// }
//


		}

//click the "Start" button
startBtn.onclick = function() {
//start the loop
	spanTotal.innerHTML = 0;
	spanSpeed.innerHTML = 1;
	spanFail.innerHTML = 5;

	var myTimer = setInterval(function(){
		if(failCounter>0) {
			randomCellColor();
		}

		else{ //end the loop
		clearInterval(myTimer);
		alert("Liczba punktów = " + totalCounter);
		totalCounter = 0;
		failCounter = 5;
		}
		},1000);

	cancelBtn.onclick = function() {
		//end the loop
		clearInterval(myTimer);
		spanTotal.innerHTML = 0;
		spanSpeed.innerHTML = 1;
		spanFail.innerHTML = 5;
		alert("Liczba punktów = " + totalCounter);
		totalCounter = 0;
		failCounter = 5;
	};
};