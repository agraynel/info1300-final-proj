<!--
	Search function developed by Yi Chen(yc2329) in INFO2300 17spring
-->

<?php
// This is the PHP class of board members.
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
	// check whether there is data.txt
	if (!file_exists('files/data.txt')) {
		echo "No data.txt exists!";
		exit;
	}

	$file_pointer = fopen('files/data.txt', 'r');

	while (!feof($file_pointer)) {
		$line = fgets($file_pointer);
		//CREDITS: http://stackoverflow.com/questions/16477098/how-can-i-remove-n-in-string-in-php
		$line = trim(preg_replace('/\s\s+/', ' ', $line));
		$member = explode( '\t', $line);
		$members[] = new Member($member[0], $member[1], $member[2], $member[3], $member[4], $member[5]);
	}

	fclose($file_pointer);
?>
