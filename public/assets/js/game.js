//  Super Simple Clicking Game

// Super because it really is.
// Simple because it's not meant to be scallable nor enormously optimized.
// Clicking because it involves said activity.
// Game because games are fun.

// Algorithm:

// Draw a game space + style it:
// - Isometric table 3x3
// - start button
// - total indicator
// - speed indicator

// Start game
// roll a random number (1-9) and set it as cell id
// roll a random number and show either happy (positive, green) or sad face (negative, red) in previously set cell

// Total = 15
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


// Draw a table
var data = ["1", "2", "3", "4", "5", "6", "7", "8", "9" ];
var body = document.getElementById('game');
var table = document.createElement("table");
var i = 0;
for (var r = 0; r < 3; r++) {
  var row = table.insertRow(-1);
  for (var c = 0; c < 3; c++) {
    var cell = row.insertCell(-1);
      cell.setAttribute("id", data[i++]);
  }
}
body.appendChild(table);