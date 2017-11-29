// gettig the document prepared //
$(document).ready(function() {
      var id = 1;
      $("#next_picture").on("click", function() {
        $("#image" + id).removeClass("showimage"); //remove class to hide the image initially
          id= id+1;
          if( id==5){
            id=1;
          }
        $("#image"+ id).addClass("showimage"); //adding class to show the image based on id//

    });
    $("#previous_picture").on("click", function() {
      $("#image" + id).removeClass("showimage"); //remove class to hide the image initally
        id= id-1;
        if( id==0){
          id=4;
        }

      $("#image"+ id).addClass("showimage"); // adding class to show the image based on id//

    });
});
