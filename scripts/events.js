$(document).ready(function() {
  console.log("DOM is ready")

  $(".section1").click( function() {
    console.log("more clicked");

    $(".speakers1").toggle();
  });

  $(".section2").click( function() {
    console.log("more clicked");

    $(".speakers2").toggle();
  });

  $(".section3").click( function() {
    console.log("more clicked");

    $(".speakers3").toggle();
  });


});
