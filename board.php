<?php
include ("includes/header.php");
// implement search functionality, developed by Yi Chen and Anisha, citations are present when needed
// This is the PHP class of board members. structure of class learned from python at umich during the summer, conept of this introduced by Yi
class Member {
		public $name;
		public $netid;
		public $job;
		public $school;
		public $description;
		public $image;

		function __construct($name = "", $netid = "", $job = "", $school = "", $description = "", $image = "") {
			$this->name = $name;
			$this->netid = $netid;
			$this->job = $job;
			$this->school = $school;
			$this->description = $description;
			$this->image = $image;
		}
	}
	// read board members information from data.txt
	$members = array();
	// check whether there is data.txt-- learned from python at umich
	if (!file_exists('data/data.txt')) {
		echo "No data.txt exists!";
		exit;
	}
	$file_pointer = fopen('data/data.txt', 'r'); //opening file based on what I learnt from Python at umich, syntax was googled
	while (!feof($file_pointer)) {
		$line = fgets($file_pointer);
		//CREDITS: http://stackoverflow.com/questions/16477098/how-can-i-remove-n-in-string-in-php
		$line = trim(preg_replace('/\s\s+/', ' ', $line));
		$member = explode( '\t', $line);
		$members[] = new Member($member[0], $member[1], $member[2], $member[3], $member[4], $member[5]);
	}
	fclose($file_pointer); //closing of file learned from python


  //search if submit button is pressed
  if (isset($_POST['search_submit'])) {
  $file_pointer = fopen("data/data.txt", "r");
  $members = array();
  //filter the input to lowercase and prevent html interruption
  $searchName = isset($_POST['searchName']) ? htmlentities(strtolower($_POST['searchName'])) : false;
  $searchNetid = isset($_POST['searchNetid']) ? htmlentities(strtolower($_POST['searchNetid'])) : false;
  // find matching CREDITS: http://www.w3school.com.cn/php/func_string_strtolower.asp
  while (!feof($file_pointer)) {
    $line = fgets($file_pointer);
    $line1 = trim(preg_replace('/\s\s+/', ' ', $line));

    //convert to lower case to compare CREDITS: http://stackoverflow.com/questions/16477098/how-can-i-remove-n-in-string-in-php
    $lowerCaseLine = strtolower($line1);
    $lowerCaseMember = explode('\t', $lowerCaseLine);
    $nameMatching = (empty($searchName) || preg_match("/$searchName/", $lowerCaseMember[0]));
    $netidMatching = (empty($searchNetid) || preg_match("/$searchNetid/", $lowerCaseMember[1]));
    $isMatch = $nameMatching && $netidMatching;
    if ($isMatch) {
      $member = explode('\t', $line);
      $members[] = new Member($member[0], $member[1], $member[2], $member[3], $member[4], $member[5]);
    }
  }

}
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Cornell Board Members</title>
  <link rel="stylesheet" href="styles/all.css" type="text/css">
  <link rel="icon" href="images/icon.png">
</head>
 <body>
   <div class = "container_events_projects">
     <div class = "container-text_board">
       <div class="title_image">
        <img class="title" src="images/cornell_students.jpg" alt = "title">
        <div class = "header">
          <h1> Current Cornell University  General Members and Board Members of SBA </h1>
        </div>
        <p class="main_statement">
          <b> <i> BOARD MEMBERS </i> </b><br/>
          These are the members of Cornell's SBA Board for the year 2017-2018.
          These members are hoping to create an enivoronment where students are
          motivated to aquire leaderhsip qualities that will help them in their
          future endeavors and will simulatneously learn about the various
          consultants that they can have and use to be the most successfull
          in whatthat they want to do. </p>
          <form id="search_form" name="search_form" class="search_form" method="POST" action="board.php">
            <!-- Search name and net id fields -->
            <div class="first_line">
              <input id="searchName" type="text" placeholder="Name" name="searchName" maxlength="25" autofocus pattern="[0-9A-Za-z-_ ]*">
            </div>
            <div class="first_line">
              <input id="searchNetid" type="text" placeholder="NetID" name="searchNetid" maxlength="10" autofocus pattern="[0-9a-zA-Z]*">
            </div>
            <div class="search_button">
              <input id="submit" id="sub_button" class="button" type="submit" name="search_submit" value="SEARCH">
            </div>
          </form>
        </div>
      </div>
      <!-- Code has been incoprorated by Yi Chen and Anisha , after Yi taught Anisha some php functions -->
      <div class="content-flex_board">
        <div class = "catalog_main">
          <?php
          global $members;
          // get member information from the class
          foreach ($members as $member) {
            $name = $member->name;
            $netid = $member->netid;
            $job = $member->job;
            $school = $member->school;
            $description = $member->description;
            $image = $member->image;
            ?>
            <div class = "catalog_item">
              <?php echo '<img class="catalog_image" src="' . $image . '" alt = $name>';?>
              <div class='catalog_description'>
                <div class='show_catalog'>
                  <div class='status_catalog'>
                    <h3 class='name'><?php echo $name ?> (<?php echo $netid ?>)</h3>
                    <h3 class='name'><?php echo $job ?></h3>
                    <h3 class='name'><?php echo $school ?></h3>
                  </div>
                </div>
                <div class='hide_catalog'>
                  <div class='description'>
                    <h4><?php echo $description ?></h4>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
        </div>
      </div>
    </div>
  </body>
  <?php include "includes/footer.php";?>
</html>
