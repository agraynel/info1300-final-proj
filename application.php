<?php include("includes/header.php"); ?>

  <div class = "container">
    <div class = "contains">
      <div class = "contains-header">
        <h1>JOIN US</h1>
      </div>
      <form class="form_container">
        <div class="form-row">
          <div class="form-group1">
            <p>First name:</p>
            <input type="text" name="firstname" id="firstname" placeholder="First name" required><br>
            <span class="errorContainer hiddenError" id="nameError">
              Your first name is required.
            </span>
          </div>
          <div class="form-group1">
            <p>Last name:</p>
            <input type="text" name="lastname" placeholder="Last name" id="lastname" required><br>
            <span class="errorContainer hiddenError" id="nameError">
              Your last name is required.
            </span>
          </div>
          <div class="form-group1">
            <p>E-mail:</p>
            <input type="email" id=“userEmail” name="E-mail" placeholder="E-mail" required><br>
            <span class="errorContainer hiddenError" id="nameError">
              Your e-mail is required.
            </span>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group1">
            <p> <label> Please Select your Class Year </label> </p>
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
            <p>Please, briefly explain why you want to join us. Max 400 words</p>
            <textarea name="message" required>Please explain why you want to join the program</textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group">
            <p>Please provide a link to your resume (REQUIRED).</p><br>
            <textarea name="message" required >Please provide the link to your resume </textarea><br>
          </div>
        </div>
        <div class="form-row">
          <div class="form-flex">
            <input class="button" value="SUBMIT" type="submit">
            <input class="button" value="RESET" type="reset">
          </div>
        </div>
      </form>
    </div>
  </div>
  <?php include("includes/footer.php"); ?>
