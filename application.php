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
      <form class="form_container">
        <div class="form-row">
          <div class="form-group1">
            <p> <label>Please Write Your First Name(REQUIRED):</label></p>
            <input type="text" name="firstname" id="firstname"
             placeholder="Please enter your first name" required><br>
            <span class="errorContainer hiddenError" id="nameError">
              Your first name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Last Name(REQUIRED):</label></p>
            <input type="text" name="lastname" cols="100"  id="lastname"
              placeholder="Please write your last name" required><br>
            <span class="errorContainer hiddenError" id="nameError">
              Your last name is required.
            </span>
          </div>
          <div class="form-group1">
            <p> <label>Please Write your Email(REQUIRED):</label></p>
            <input type="email" id=“userEmail” cols="100" name="E-mail"
              placeholder="Please write your email"required><br>
            <span class="errorContainer hiddenError" id="nameError">
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
            <textarea name="message"  cols="220"
            required>Please write your intended Major(s)</textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please, briefly explain why you want to join us. Max 400 words (REQUIRED)</label></p>
            <textarea name="message" rows="20" cols="220" required>Please explain why you want to join the program</textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p> <label>Please provide a link to your resume (REQUIRED). </label></p><br>
            <textarea name="message" rows="5" cols="220" required>Please provide the link to your resume </textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-flex">
            <input class="button" id="submit" value="SUBMIT" type="submit">
            <input class="button" id="reset" value="RESET" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
</html>
