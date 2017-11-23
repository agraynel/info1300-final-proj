<?php
// Include files for CSV storage
include("includes/csvStorage.php");

// Load the comments file
$csvFile = csvGetFile('data/comments.csv');

// Create an array for the comments
$comments = array();

// get the comments
foreach($csvFile as $row) {
  array_push($comments, $row);
}

// If there was a submitted comment
$submit = $_POST["submit"];
if (isset($submit)) {
	$name = htmlspecialchars($_POST["name"]);
	$commentText = htmlspecialchars($_POST["comment"]);

	// create an array with the comment's information
	$newComment = array($name, $commentText);

	// add the new comment to the comment list so it is displayed
	// technically not necessary once we add the redirect below,
	// but we've left it in here so you can see how you would do it.
	array_push($comments, $newComment);

	// save new comment
	csvAppendToFile($csvFile, $newComment);

	// Send back a redirect so that a refresh triggers a GET
	header("Location: events.php");
	return;
  // Citation: code above is cited from lab13: comment system
}

?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Cornell SBA's Intended Events</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
   <link rel="icon" href="images/icon.png">
 </head>
  <?php include("includes/header.php"); ?>
   <div class = "container_events_projects">
    <div class = "container-text_events">
      <div class = "contains-header">
      </div>
        <img class="title" src="images/greenevents.png" alt = "title">
      <div class = "content-block">
          <h2>Education Seminars</h2>
        <div class = "content-flex">
          <div class = "content-flex-image">
            <img class="image" id="events-education" src="images/education.png" alt = "events-education">
          </div>
          <div class = "content-flex-text">
              <p> <i> EDUCATION SEMINARS  </i> </p>
              <p>SBA provides an educative training series to its members by hosting
                bi-monthly discussions and monthly seminars. These lectures begin with
                the basic elements of business, then develop into the purpose and practical
                applications of corporate sustainability. Our training series is an effective
                way to encourage competence and financial literacy in the fields of sustainable
                business without the pressure entailed by a typical, graded course.</p>
          </div>
        </div>
      </div>
      <div class = "content-block">
           <h2>Guest Lectures</h2>
        <div class = "content-flex">
          <div class = "content-flex-image">
            <img class="image" id="events-blackrock"  src="images/blackrock.png" alt = "events-blackrock">
          </div>
          <div class = "content-flex-text">
               <p> <i> GUEST SPEAKERS FROM BLACKROCK </i> </p>
             <p class="speakers1">SBA values the experience of today’s industry
                leaders. We invite representatives from companies such as Credit Suisse,
                Guest speakers give students a more dimensional perspective on
                sustainable business and its functions today. Guest Speaker from
                Black Rock will be able to provide information on the corporate
                financial sustainability and how that can be improved so that
                business start taking a more active role in the enviornment.The
                club plans to have speakers from various fields in Black
                Rock speak to the club
            </p>
          </div>
        </div>
      </div>
      <div class = "content-block">
          <h2>Private Networking</h2>
        <div class = "content-flex">
          <div class = "content-flex-image">
              <img class="image" id="events-networking" src="images/networking.png" alt = "events-networking">
          </div>
           <div class = "content-flex-text">
              <p> <i> NETWORKING WITH COMPANIES </i> </p>
              <p>A primary goal of SBA is to provide the means for our members to
              engage with industry leaders, powerful alumni, influential faculty, and
              other club members in the context of entering the industry. We achieve
              this through private networking events where members not only build
              connections, but practice and develop the networking skills
              necessary to succeed in business. We plans on networking with
              companies such as MorganStanley, Credit Suisse and Bank of
              American in the imminent future</p>
          </div>
        </div>
      </div>
    </div>
   </div>

   <div id="commentsSection">
  <div id="commentsHolder">
    <h2>Comments</h2>
    <?php foreach($comments as $row) {
      $name = $row[0];
      $commentText = $row[1];
      ?>
      <div class="comment">
        <p class="commentBody">
          <?php echo($commentText); ?>
        </p>
        <p class="commentAuthor">
          <?php echo($name); ?>
        </p>
      </div>
      <?php
    }
    ?>
  </div>

  <div id="addComment">
    <h3>Add a Comment</h3>
    <form method="post" action="events.php" id="commentForm" novalidate>
      <div class="nameHolder">
        <label for="name">Name: </label>
        <input id="name" name="name" placeholder="Your Name">
      </div>
      <div>
        <label class="commentLabel" for="comment">Comment: </label>
        <textarea name="comment" placeholder="Your Comment"></textarea>
      </div>

      <div>
        <button type="submit" name="submit" class="submit">Submit</button>
      </div>
    </form>
  </div>
</div>
  <?php include("includes/footer.php"); ?>
</html>
