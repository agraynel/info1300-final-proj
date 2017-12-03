$(document).ready(function() {
   var open=false;
    $("#hamburger").click( function() {
      if (open) {
        $(".navigation").removeClass("navigation_show");
      } else {
        $(".navigation").addClass("navigation_show");
      }
       open=!open;

  });
});
