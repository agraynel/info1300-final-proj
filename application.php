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


    $formValid = $firstnameValid && $lastnameValid && $input1Valid && $emailValid && $input2Valid && $input3Valid;
    if ($formValid) {
      session_start();

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

  }?>




<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Cornell Application</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
   <link rel="icon" href="images/icon.png">
 </head>
  <?php include("includes/header.php"); ?>
   <div class = "container">
    <div class = "contains">
      <div class = "contains-header">
        <h1 class="application_heading"> JOIN US </h1>
      </div>
      <form action= "application.php" class="form_container" novalidate>
        <div class="form-row">
          <div class="form-group1">
            <p> <label>Please Write Your First Name(REQUIRED):</label></p>
            <input type="text" name="firstname" id="firstname" value="<?php echo($firstName);?>"
             placeholder="Please enter your first name" required><br>
            <span class="errorContainer <?php if ($firstnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              Your first name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Last Name(REQUIRED):</label></p>
            <input type="text" name="lastname" cols="100"  id="lastname"
              placeholder="Please write your last name" value="<?php echo($lastName);?>" required><br>
            <span class="errorContainer <?php if ($lastnameValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              Your last name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Email(REQUIRED):</label></p>
            <input type="email" name= "email" id=“userEmail” cols="100" name="E-mail" value="<?php echo($email);?>"
              placeholder="Please write your email"required><br>
            <span class="errorContainer <?php if ($emailValid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              Your e-mail is required.
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group1">
            <p> <label> Please Select your Class Year (REQUIRED)</label> </p>
               <select name="contact">
                   <option value=""> -- Select One -- </option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
            </p><br>
          </select>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label> Please Write your Major(REQUIRED)</label></p>
            <textarea name="message"  cols="220" placeholder="Please write your intended Major(s)"
            required value="<?php echo($input1);?>"></textarea><br>
            <span class="errorContainer <?php if ($input1Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              This section is required.
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please, briefly explain why you want to join us. Max 400 words (REQUIRED)</label></p>
            <textarea name="message1" rows="20" cols="220" value="<?php echo($input2);?>"
            placeholder="Please explain why you want to join the program" required></textarea><br>
            <span class="errorContainer <?php if ($input2Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              This section is required.
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please provide a link to your resume (REQUIRED). </label></p><br>
            <textarea name="message2" rows="5" cols="220" value="<?php echo($input3);?>" 
            placeholder="Please provide the link to your resume " required></textarea><br>
            <span class="errorContainer <?php if ($input3Valid) { echo($HIDDEN_ERROR_CLASS);} ?>" id="nameError">
              Your resume is required.
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-flex">
            <input class="button" name = "submit" id="submit" value="SUBMIT" type="submit">
            <input class="button" id="reset" value="RESET" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
</html>
