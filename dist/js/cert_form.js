$(document).ready(function () {
  $('.btn-group').on('click', '.btn', function () {
    $(this).addClass('active').siblings().removeClass('active');
  });
});


$(document).ready(function () {

  $("#club").click(function () {
    $("#members").css("display", "block")
    $("#events").css("display", "none")
    $("#projects").css("display", "none")
    $("#temp").css("display", "none")
  });

  $("#event").click(function () {
    $("#members").css("display", "none")
    $("#events").css("display", "block")
    $("#projects").css("display", "none")
    $("#temp").css("display", "none")
  });

  $("#project").click(function () {
    $("#members").css("display", "none")
    $("#events").css("display", "none")
    $("#projects").css("display", "block")
    $("#temp").css("display", "none")
  });

$("#project1").click(function () {
    $("#members").css("display", "none")
    $("#events").css("display", "none")
    $("#projects").css("display", "none")
    $("#temp").css("display", "block")
  });


});
