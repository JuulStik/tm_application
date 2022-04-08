"use strict";

$(".seasons").validate;
$(".seasons").on("click", function () {
  $.ajax({
    type: "POST",
    url: "episodes.php",
    data: jQuery.param({
      seasons: $("#seasons").val(),
    }),
    success: function (result) {
      $("#episodes").html(result);
    },
  });
});

$(function () {
  $("form").validate;
  $("form").on("submit", function (e) {
    e.preventDefault();

    $.ajax({
      type: "POST",
      url: "submit.php",
      data: jQuery.param({
        seasons: $("#seasons").val(),
        episodes: $("#episodes").val(),
        characters: $("#characters").val(),
      }),
      success: function (result) {
        $(".outputblock").html(result);
      },
    });
  });
});

$("#seasons2").validate;
$("#seasons2").on("click", function () {
  $.ajax({
    type: "POST",
    url: "episodes.php",
    data: jQuery.param({
      seasons: $("#seasons2").val(),
    }),
    success: function (result) {
      $("#episodes2").html(result);
    },
  });
});

$(function () {
  $("#episodes2").validate;
  $("#episodes2").on("click", function (e) {
    $.ajax({
      type: "POST",
      url: "image.php",
      data: jQuery.param({
        seasons: $("#seasons2").val(),
        episodes: $("#episodes2").val(),
      }),
      success: function (result) {
        $("#imagedisplay").html(result);
      },
    });
  });
});
