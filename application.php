<?php
  $HIDDEN_ERROR_CLASS = "hiddenError";
  $submit = $_REQUEST["submit"];

  if (isset($submit)){
    error_log("user submitted form");
    $firstName = $_REQUEST['firstname'];
    if (!empty($firstName)){
      $firstnameValid = true;
    } else {
      $firstnameValid = false;
    }
    $lastName = $_REQUEST['lastname'];
    if (!empty($lastName)){
      $lastnameValid = true;
    } else {
      $lastnameValid = false;
    }
    $email = $_REQUEST['email'];
    if (!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) ){
      $emailValid = true;
    } else {
      $emailValid = false;
    }
    $input1 = $_REQUEST['message'];
    if (!empty($input1)){
      $input1Valid = true;
    } else {
      $input1Valid = false;
    }
    $input2 = $_REQUEST['message1'];
    if (!empty($input2)){
      $input2Valid = true;
    } else {
      $input2Valid = false;
    }
    $input3 = $_REQUEST['message2'];
    if (!empty($input3)){
      $input3Valid = true;
    } else {
      $input3Valid = false;
    }

    $contact = $_REQUEST["contact"];
    if (!empty(trim($contact))){
      $dropdownValid = true;
    } else {
      $dropdownValid= false;
    }



    //checking is form is valid, then submitting to response.php page
    $formValid = $firstnameValid && $lastnameValid && $input1Valid && $emailValid && $input2Valid && $input3Valid && $dropdownValid;
    if ($formValid) {
      session_start();
      $_SESSION['firstname'] = $firstName;
      $_SESSION['lastname'] = $lastName;
      $_SESSION["contact"] = $contact;

      header("Location: thankyou.php");
      return;
    }
  } else{
    error_log("no form submitted");
    $firstnameValid = true;
    $lastnameValid = true;
    $input1Valid = true;
    $emailValid = true;
    $input2Valid = true;
    $input3Valid = true;
    $dropdownValid=true;
  }?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Cornell Application</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
   <link rel="icon" href="images/icon.png">
     <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
     <script src="scripts/events_application.js"></script>
     <script src="scripts/clientValidation.js"></script>

 </head>
  <?php include ("includes/header.php"); ?>
  <div class = "container_events_projects">
   <div class = "container-text">
     <div class = "contains-header">
        <h1 class="application_heading"> JOIN US: Apply by February 15th 2018 </h1>
      </div>
      <p class="section1"> <i> Learn about the detials reagrding the Application Process </i> </p>
      <div class="speakers1">
       <p class="citaitons"> Information Guiding Application</p>
        <ul>
             <li> All members will be able to join regarless of major, there is no
             prescreening based on major, although the intedended members are
             business students interested in corporate sustainability </li>
             <li> As by Standard Cornell University Policy, no discrimination will
              be made based on AGE, RACE, or GENDER. All applicants will be eqaully
              viewed by the selection committee</li>
             <li> Applications are based on qualifications and you interests,
             which will help the committee decide whether you are good fit for the club </li>
            <li> In order to test validity, there will be an interview process
            which you will get notified about if you qualifiy </li>
            <li> NOTE: Information such as AGE, GENDER AND RACE are not required on this form
                due to standard Cornell Univeristy Policiy indicating that
                 these factors are not what's deterministic of making it to Round 2</li>
            <li> If you don't get in the next semester, you may reapply the following
                 fall semester </li>
        </ul>
      </div>
      <form action= "application.php" class="form_container" novalidate>
        <div class="form-row">
          <div class="form-group1">
            <p> <label>Please Write Your First Name(REQUIRED):</label></p>
            <input type="text" name="firstname" id="firstname" value="<?php echo($firstName);?>"
             placeholder="Please enter your first name" required><br>
            <span class="errorContainer <?php if ($firstnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="fnameError">
              Your first name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Last Name(REQUIRED):</label></p>
            <input type="text" name="lastname" id="lastname"
              placeholder="Please write your last name" value="<?php echo($lastName);?>" required><br>
            <span class="errorContainer <?php if ($lastnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="lnameError">
              Your last name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Email(REQUIRED):</label></p>
            <input type="email" name= "email" id=“userEmail”  value="<?php echo($email);?>"
              placeholder="Please write your email with a valid domain such as jon@gmail.com" required><br>
            <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="emailError">
               Please entter an email that has a valid domain, ex @gmail.com
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group1">
            <?php
              $status1="";
              $status2="";
              $status3="";
              $status4="";
              $status5="";
              if ($contact == "2018") {
                     $status1 = "selected";
              } else if ($contact == "2019"){
                     $status2= "selected";
              } else if ($contact == "2020"){
                     $status3= "selected";
              } else if ($contact == "2021"){
                     $status4= "selected";
             }
             ?>
            <p> <label> Please Select your Class Year (REQUIRED)</label> </p>
               <select id="contact" name="contact" >
                   <option value="0"> -- Select One -- </option>
                <option value="2018" <?php echo $status1; ?>>2018</option>
                <option value="2019" <?php echo $status2; ?>>2019</option>
                <option value="2020" <?php echo $status3; ?>>2020</option>
                <option value="2021" <?php echo $status4; ?>>2021</option>
          </select>
         </div>
        </div>
        <span class="errorContainer <?php if ($dropdownValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="dropError">
           Please select your class year
        </span>
        <div class="form-row">
          <div class="form-group">
            <p> <label> Please Write your Major and how that correlates with future interests(REQUIRED)</label></p>
            <textarea name="message" id="major" cols="220" placeholder="Please write your intended Major(s)"
            required ><?php echo($input1);?></textarea><br>
            <span class="errorContainer <?php if ($input1Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="majorError">
               Please write your correlation with your major to your future ambitions here
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please, briefly explain why you want to join us. Max 400 words (REQUIRED)</label></p>
            <textarea name="message1" id="join" rows="20" cols="220"
            placeholder="Please explain why you want to join the program" required><?php echo($input2);?></textarea><br>
            <span class="errorContainer <?php if ($input2Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="joinError">
               Please explain why you want to join us here
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please let us know anything else that has not been covered in this application(OPTIONAL) </label></p><br>
            <textarea name="message2" rows="5" cols="220"
            placeholder="Start your additional commentary here" required><?php echo($input3);?></textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-flex">
            <input class="button" name = "submit" id="sub" value="SUBMIT" type="submit">
            <input class="button" id="reset" value="RESET" type="reset">
          </div>
        </div>
      </form>
    </div>
   </div>
   <?php include ("includes/footer.php"); ?>
 </body>
</html>
