var languages = [
    "ActionScript",
    "AppleScript",
    "Asp",
    "JavaScript",
    "Lisp",
    "Perl",
    "PHP",
    "Python"
];
//works automatically
$(function () { 
    $("#birthday").datepicker({
        maxDate : 0
    });

    $("#language").autocomplete({
        source: languages
    })
});