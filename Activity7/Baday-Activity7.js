var names = ["Ben", "Joel", "Judy", "Anne"];
var scores = [88, 98, 77, 88];

var $ = function (id) { return document.getElementById(id); };

window.onload = function () {
    $("display_results").onclick = displayResults;
    $("display_scores").onclick = displayScores;
    $("add").onclick = addScore;
};

function displayResults() {
    var average = 0;
    for (var i = 0; i < scores.length; i++) {
        average = (average * i + scores[i]) / (i + 1);
    }

    var highest= Math.max(...scores);
    var highestIndex = scores.indexOf(highest);
    var highestName = names[highestIndex];
    var resultsElement = document.getElementById("results");
    resultsElement.innerHTML = "<h2>Results</h2><br />";
    document.getElementById("results").innerHTML="<h2> Results </h2><br /> Average score is "+average + "<br \> "
    document.getElementById("results").innerHTML += "High score = " + highestName + " with a high score of " + highest;
  
}
function displayScores() {
    var table = $("scores_table");
    table.innerHTML = "";

    for (var i = 0; i < names.length; i++) {
        var row = table.insertRow(i);
        var nameCell = row.insertCell(0);
        var scoreCell = row.insertCell(1);  //inserts two cells into an HTML table called row

        nameCell.innerHTML = names[i];
        scoreCell.innerHTML = scores[i];
    }

}

function addScore() {
    var nameInput = $("name");
    var scoreInput = $("score");
    var name = nameInput.value.trim();
    var score = parseFloat(scoreInput.value);

    if ( score < 0 || score > 100 || isNaN(score) || name === "" ) {
		return alert("You must enter a name and a valid score.");;
    }

	scores.push(score);
    names.push(name);
    

    nameInput.value = "";
    scoreInput.value = "";
    nameInput.focus();  //6th requirement
}