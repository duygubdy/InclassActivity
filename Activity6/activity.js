
var button = document.getElementById("button");
var level = 1;
var clicks = 0;
var timeout = 500;
var interval = setInterval(changeButtonPosition, timeout);

function changeButtonPosition() {
  var marginTop = Math.random() * (window.innerHeight - button.offsetHeight) + "px";
  var marginLeft = Math.random() * (window.innerWidth - button.offsetWidth) + "px";
  button.style.marginTop = marginTop;
  button.style.marginLeft = marginLeft;
}

function buttonClick(event) {
  if (event.type === "click") {
    clicks++;
    console.log("Level: " + level + "\nClicks: " + clicks + "\nTimeout: " + timeout);
    if (clicks == 3) {
      level++;
      clicks = 0;
      timeout -= 100;
      if (timeout < 0) {
        timeout = 0;
      }
      clearInterval(interval);
      interval = setInterval(changeButtonPosition, timeout);
      alert("You are the winner! You can go next level" + (level - 1));
    }
  }
}

button.addEventListener("click", buttonClick);