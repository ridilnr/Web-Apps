$(".row.rowColor").css("display", "none");

$("#buttonColor").click(function() {
    $(".rowColor").toggle(function () {
    });
    $("i", this).toggleClass("glyphicon-menu-down glyphicon-menu-up");
});
