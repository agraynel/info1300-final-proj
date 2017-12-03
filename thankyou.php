<?php
  session_start();

  $firstName = $_SESSION['firstname'];
  $lastName = $_SESSION['lastname'];

  $name = $firstName . " " . $lastName;
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Cornell Application</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
   <link rel="icon" href="images/icon.png">
 </head>
 <body>
  <?php include ("includes/header.php"); ?>
  <p id= "response"> To <?php echo($name) ?>: Your response has been recorded. Thank you for your interests in joining us.!<p/>
  <p id="process"> While you await your response form us, here are links you can use to learn more about enivornmental conuslting <br/> <br/>
    <a href="http://www.sustainabilityconsulting.com/blog/2016/5/18/free-learning-resources-for-aspiring-sustainability-professionals"> Sustainable Consutling 101 </a> <br/> <br/>
    <a href="http://www.sustainabilityconsulting.com/blog/2016/5/18/free-learning-resources-for-aspiring-sustainability-professionals"> Sustainable Consulting Skills </a>
  </p>
  <?php include ("includes/footer.php"); ?>
</body>

</html>
