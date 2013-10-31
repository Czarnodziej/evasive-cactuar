//  Super Simple Clicking Game

// Super because it really is.
// Simple because it's not meant to be enormously optimized.
// Clicking because it involves said activity.
// Game because games are fun.

var MyGame = {};

// draw a table
MyGame.data = ["1", "2", "3", "4", "5", "6", "7", "8", "9" ];
MyGame.container = document.getElementById("game");
MyGame.table = document.createElement("table");
MyGame.i = 0;
for (MyGame.r = 0; MyGame.r < 3; MyGame.r++) {
	MyGame.row = MyGame.table.insertRow(-1);
	for (MyGame.c = 0; MyGame.c < 3; MyGame.c++) {
		MyGame.cell = MyGame.row.insertCell(-1);
		MyGame.cell.setAttribute("id", MyGame.data[MyGame.i++]);
	}
}
MyGame.container.appendChild(MyGame.table);

// draw buttons

MyGame.startBtn = document.createElement("input");
MyGame.startBtn.type = "submit";
MyGame.startBtn.value = "Start";

MyGame.cancelBtn = document.createElement("input");
MyGame.cancelBtn.type = "submit";
MyGame.cancelBtn.value = "Anuluj";


MyGame.container.appendChild(MyGame.startBtn);
MyGame.container.appendChild(MyGame.cancelBtn);


// draw indicators, todo: use object createIndicatorDiv
// function createIndicatorDiv(name) {
// }

MyGame.divTotal = document.createElement("div");
MyGame.divTotal.id = "divTotal";
MyGame.divTotal.className = "gameIndicatorDiv";
MyGame.divTotal.innerHTML = "Punkty: ";

MyGame.divSpeed = document.createElement("div");
MyGame.divSpeed.id = "divSpeed";
MyGame.divSpeed.className = "gameIndicatorDiv";
MyGame.divSpeed.innerHTML = "Prędkość: ";

MyGame.divFail = document.createElement("div");
MyGame.divFail.id = "divFail";
MyGame.divFail.className = "gameIndicatorDiv";
MyGame.divFail.innerHTML = "Szanse: ";


// todo: use object createIndicatorSpan
// function createCounterIndicator

MyGame.spanTotal = document.createElement("span");
MyGame.spanTotal.id = "Total";
MyGame.spanTotal.className = "gameSpan";

MyGame.spanSpeed = document.createElement("span");
MyGame.spanSpeed.id = "Speed";
MyGame.spanSpeed.className = "gameSpan";

MyGame.spanFail = document.createElement("span");
MyGame.spanFail.id = "Fail";
MyGame.spanFail.className = "gameSpan";

MyGame.container.appendChild(MyGame.divTotal);
MyGame.container.appendChild(MyGame.divSpeed);
MyGame.container.appendChild(MyGame.divFail);

MyGame.divTotal.appendChild(MyGame.spanTotal);
MyGame.divSpeed.appendChild(MyGame.spanSpeed);
MyGame.divFail.appendChild(MyGame.spanFail);

//default values of indicators, todo: replace innerHTML with textNodes (use nodeValue)
MyGame.spanTotal.innerHTML = 0;
MyGame.spanSpeed.innerHTML = 1;
MyGame.spanFail.innerHTML = 5;

MyGame.totalCounter = 0;
MyGame.speedCounter = 1;
MyGame.failCounter = 5;

// logic

// loop:
// 1) decide a color and cell number
// 2) display a color in a set time depending on speedCounter function
// 3) add points for successful onclick event, reduce failCounter on unsuccessful onclick event + update the indicators

MyGame.setSpeed = function() {
	if (MyGame.totalCounter > 15)
	{
		MyGame.cellShowSpeed = 400;
		MyGame.spanSpeed.innerHTML = 4;
	}
	else if (MyGame.totalCounter > 10)
	{
		MyGame.cellShowSpeed = 600;
		MyGame.spanSpeed.innerHTML = 3;
	}
	else if (MyGame.totalCounter > 5)
	{
		MyGame.cellShowSpeed = 800;
		MyGame.spanSpeed.innerHTML = 2;
	}
	else
	{
		MyGame.cellShowSpeed = 1000;
	}
};

MyGame.cellShowSpeed = 1000;
MyGame.randomCellColor = function(){
		// variables
        var color = Math.floor(Math.random()*2), // one of 2 possible colors
			counter = Math.floor(Math.random()*10)+1, // one of 10 possible cells (1-10)
			randomCell = document.getElementById(counter); // assign table cell to variable

			if (randomCell !== null) {
				if (color === 1)
				{
					randomCell.className += ' gameCellRed';
					setTimeout(function(){randomCell.className = null;}, MyGame.cellShowSpeed);
				}
				else
				{
					randomCell.className += ' gameCellGreen';
					setTimeout(function()
					{
					randomCell.className = null;
					MyGame.failCounter -= 1;   //no onclick event = fail
					MyGame.spanFail.innerHTML = MyGame.failCounter;
					}, MyGame.cellShowSpeed);
				}

			MyGame.table.onclick = function() {
				if (randomCell.className === ' gameCellGreen')
				{
					MyGame.totalCounter += 1;
					MyGame.failCounter += 1; //to counteract "no onclick event = fail"
					MyGame.spanTotal.innerHTML = MyGame.totalCounter;
					MyGame.setSpeed();
					randomCell.className = null;
				}
				else
				{
					MyGame.failCounter -= 1;
					MyGame.spanFail.innerHTML = MyGame.failCounter;
					randomCell.className = null;
				}
			};
		}
	};

//click the "Start" button
MyGame.startBtn.onclick = function() {
//start the loop
MyGame.spanTotal.innerHTML = 0;
MyGame.spanSpeed.innerHTML = 1;
MyGame.spanFail.innerHTML = 5;

var myTimer = setInterval(function(){
	if(MyGame.failCounter>0) {
		MyGame.randomCellColor();
	}

		else{ //end the loop
			clearInterval(myTimer);
			alert("Liczba punktów = " + MyGame.totalCounter);
			MyGame.totalCounter = 0;
			MyGame.failCounter = 5;
		}
	},1000);

MyGame.cancelBtn.onclick = function() {
		//end the loop
		clearInterval(myTimer);
		MyGame.spanTotal.innerHTML = 0;
		MyGame.spanSpeed.innerHTML = 1;
		MyGame.spanFail.innerHTML = 5;
		alert("Liczba punktów = " + MyGame.totalCounter);
		MyGame.totalCounter = 0;
		MyGame.failCounter = 5;
	};
};