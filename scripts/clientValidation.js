// On load
$(document).ready(function () {

  $("#contact_form").on("submit", function() {
    var formValid = true;
    //checking if name, phone and question is valid
    var nameIsValid = $("#firstname").prop("validity").valid;
    if(nameIsValid) {
      $("#fnameError").hide();
    } else {
      $("#fnameError").show();
      formValid = false;
    }
    var nameIsValid = $("#lastname").prop("validity").valid;
    if(nameIsValid) {
      $("#lnameError").hide();
    } else {
      $("#lnameError").show();
      formValid = false;
    }
      var EmailMissing= $("#email").prop("validity").valueMissing;
      var EmailInvalid= $("#email").prop("validity").typeMismatch;
      if(EmailMissing){
            $("#emailError").show();
            formValid = false;
      } else if (EmailInvalid) {
            $("emailError").show();
            formValid = false;
      } else {
            $("#emailError").hide();
      }
      var studentyear= $("#contact").prop("validity").valid;
      if(studentyear){
            $("#dropError").hide();
      } else {
            $("#dropError").show();
            formValid = false;
      }

      var something=0;
      var InterestsIsCorrect= $("#major").val().length > 0;
      if (InterestsIsCorrect){
              something=1;
       } else {
              $("#majorError").show();
              formValid = false;
       }
      if (something==1) {
              $("#majorError").hide();
       }

       var something=0;
       var InterestsIsCorrect= $("#join").val().length > 0;
       if (InterestsIsCorrect){
              something=1;
       } else {
              $("#joinError").show();
              formValid = false;
       }
       if (something==1) {
              $("#joinError").hide();
       }

    return formValid;
  });

});
