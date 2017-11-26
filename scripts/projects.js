$(document).ready(function() {
  console.log("DOM is ready")

  $(".company1").click( function() {
    console.log("more clicked");

    $(".text1").toggle();
  });

  $(".company2").click( function() {
    console.log("more clicked");

    $(".text2").toggle();
  });

  $(".company3").click( function() {
    console.log("more clicked");

    $(".text3").toggle();
  });


});
