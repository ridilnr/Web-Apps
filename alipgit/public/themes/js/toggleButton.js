$(".row.rowSize, .row.rowColor").css("display", "none");

$("#buttonColor").click(function() {
    $(".rowColor").toggle(function () {
    });
    $("i", this).toggleClass("glyphicon-menu-down glyphicon-menu-up");
});
$("#buttonSize").click(function() {
    $(".rowSize").toggle(function () {
    });
    $("i", this).toggleClass("glyphicon-menu-down glyphicon-menu-up");
});