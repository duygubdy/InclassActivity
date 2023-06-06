
$(document).ready(function() {
  $("#nav_list li a").click(function(e) {
    e.preventDefault();
    var title = $(this).attr("title");
    fetchSpeaker(title);
  });

  function fetchSpeaker(file) {
    $.getJSON("json_files/" + file + ".json", function(data) {
      displaySpeakerInfo(data.speakers[0]);
    });
  }
  function displaySpeakerInfo(speaker) {
    $("main").empty();
    $("main").append(
      $("<h1>").text(speaker.title),
      $("<img>").attr("src", speaker.image),
      $("<h2>").html(speaker.month + "<br>" + speaker.speaker),
      $("<p>").text(speaker.text)
    );
  }
});