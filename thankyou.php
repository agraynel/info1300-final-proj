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
  <?php include("includes/header.php"); ?>
  <p id= "response"> To <?php echo($name) ?>: Your response has been recorded. Thank you for your interests in joining us.!<p/>
  <?php include("includes/footer.php"); ?>
</html>
