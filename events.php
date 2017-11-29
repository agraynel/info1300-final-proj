
<?php
//Citation from Lab 13
// Code for inputting data of comments  into CSV file
include ("includes/csvStorage.php");
$csvFile = csvGetFile('data/comments.csv');
$comments = array();
foreach($csvFile as $row) {
  array_push($comments, $row);
}

$submit = $_POST["submit"];
if (isset($submit)) {
	$name = htmlspecialchars($_POST["name"]);
	$commentText = htmlspecialchars($_POST["comment"]);
	$newComment = array($name, $commentText);
	array_push($comments, $newComment);
	csvAppendToFile($csvFile, $newComment);
	header("Location: events.php");
	return;

}
?>

<!DOCTYPE html>
<html>
 <head>
   <meta charset="UTF-8">
   <title>Cornell SBA's Intended Events</title>
   <link rel="stylesheet" href="styles/all.css" type="text/css">
   <link rel="icon" href="images/icon.png">
   <script src="scripts/jquery-3.2.1.min.js" type="text/javascript"></script>
   <script src="scripts/events.js"></script>
</head>
  <?php include ("includes/header.php"); ?>
   <div class = "container_events_projects">
    <div class = "container-text_events">
      <div class = "contains-header">
          <h1>Events for SBA Members:</h1>
      </div>
        <img class="title" src="images/greenevents.png" alt = "title">
      <div class = "content-block">
          <h2>Education Seminars</h2>
        <div class = "content-flex">
          <div class = "content-flex-image">
            <img class="image" id="events-education" src="images/education.png" alt = "events-education">
          </div>
          <div class = "content-flex-text">
            <p>SBA provides an educative training series to its members by hosting
                bi-monthly discussions and monthly seminars. These lectures begin with
                the basic elements of business, then develop into the purpose and practical
                applications of corporate sustainability. Our training series is an effective
                way to encourage competence and financial literacy in the fields of sustainable
                business without the pressure entailed by a typical, graded course.</p>
          <p class="section1"> <i>  More Information on Educational Seminars </i> </p>
        </div>
        <div class="speakers1">
          <p class="citations">
            <i> Seminar 1: Sustainable Operations-January 2018 </i><br/> </p>
            <p>Sustainable Operations is not only about "greening" and "lean-ing" an
               organization's operations; it is beginning with the design of the
               environment in mind right from the get-go. In this video, you will
               learn how to create a lean and green enterprise and look at operations
               from a strategic level. Covering topics like the Toyota Way, Cradle-to-Cradle
               design and Biomimicry, you will see how to save a company a lot of money
               and make operations sustainable at the same time.</p>
           <p class="citations">
             <i> Seminar 2: Marketing for Sustainability-January 2018  </i><br/> </p>
             <p> Marketing for sustainability includes understanding stakeholder
               language, being authentic about a company's brand and aligning its
               sustainability efforts with your organization’s communication and
               outreach efforts. In this video, you will learn how to talk about
                a company's sustainability efforts in a way that is truthful, authentic,
               and connects the company's marketing efforts with everything else an
              organization is doing on sustainability. </p>
           <p class="citations">
            <i> Seminar 3: Stakeholder Engagement-February 2018 </i><br/> </p>
            <p>Business is about more than just maximizing the return for your
              shareholders. In today's business landscape, companies are increasingly
               responding to the demands from all of its stakeholders:customers,
               suppliers, vendors, investors, employees and communities. In this video
               you will learn how to take a comprehensive look at stakeholder engagement
               to drive business value and prepare for future business challenges by
               understanding the issues most material to your organization.</p>
           <p class="citations">
            <i> Seminar 4: Sustainable Finance- February 2018 </i><br/> </p>
            <p>Sustainability, CSR and Socially Responsible Investment (SRI) are
               increasing influencing the financial markets. This video examines
               topics related to finance as it relates to how social and environmental issues
               are being incorporated into both traditional and new forms of finance.
               It explains what is happening in the equity and debt markets, and explores topics
               such as SRI, the equator principles, institutional investors and shareholder actions,
               slow money and impact investing related to sustainability. By the end of this video you
               will understand both conventional and non-conventional methods of financing such
               as microfinance and crowdfunding and recognizes a variety of alternative approaches
              that support positive social and environmental results.</p>
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
             <p>SBA values the experience of today’s industry
                leaders. We invite representatives from companies such as Credit Suisse,
                Guest speakers give students a more dimensional perspective on
                sustainable business and its functions today. Guest Speaker from
                Black Rock will be able to provide information on the corporate
                financial sustainability and how that can be improved so that
                business start taking a more active role in the enviornment.The
                club plans to have speakers from various fields in Black
                Rock speak to the club
            </p>
            <p class="section2"> <i> More Information on Guest Speakers </i> </p>
          </div>
          <div class="speakers2">
              <p class="citations">
                <i> Black Rock Guest Session 1: Marketing- Frank Cooper III </i><br/>
              </p>
              <p>
                Frank Cooper III, Senior Managing Director, is the Global Chief
                Marketing Officer of BlackRock. He is a member of the Global Executive
               Committee and Global Operating Committee. As Global CMO, Mr. Cooper is
               responsible for shaping BlackRock’s global brand and marketing strategy for
               institutional and retail clients, including overseeing all digital, branding,
               research and insights functions at the firm.
            </p>
            <p class="citations">
              <i> Black Rock Guest Session 2: Finance- Gary Shedlin    </i><br/> </p>
              <p> Gary Shedlin is BlackRock's Chief Financial Officer and a member
                of BlackRock's Global Executive Committee.Prior to joining BlackRock in
                2013, Mr. Shedlin was at Morgan Stanley where he was a Vice Chairman,
                Investment Banking, and a Managing Director in the Financial Institutions
                 Group. During his investment banking career, he focused on providing
                strategic advice to a broad array of banks, finance, asset management
                and brokerage clients. Prior to joining Morgan Stanley, Mr. Shedlin was
                Chairman of Citi’s Financial Institutions Group and a Managing Director
                and Co-Head of the Financial Institutions Group at Lazard.Mr. Shedlin received a BA in Economics,
                summa cum laude, from Colgate University, where he was elected to Phi Beta Kappa,
                and his MBA from Harvard Business School.
            </p>
            <p class="citations">
              <i> Black Rock Guest Session 3:</i><br/>
            </p>
            <p>Business is about more than just maximizing the return for your
              shareholders. In today's business landscape, companies are increasingly
              responding to the demands from all of its stakeholders:customers,
              suppliers, vendors, investors, employees and communities. In this video
              you will learn how to take a comprehensive look at stakeholder engagement
              to drive business value and prepare for future business challenges by
              understanding the issues most material to your organization.
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
             <p>  A primary goal of SBA is to provide the means for our members to
              engage with industry leaders, powerful alumni, influential faculty, and
              other club members in the context of entering the industry. We achieve
              this through private networking events where members not only build
              connections, but practice and develop the networking skills
              necessary to succeed in business. We plans on networking with
              companies such as MorganStanley, Credit Suisse and Bank of
              American in the imminent future. Networking is often more important
              than simply suceeding in academics. This is because Networking allows
              people to understand the opportunities that exist outside the business
              world. </p>
            <p class="section3"> <i> More Information about Networking Opportunities at Cornell </i></p>
            </div>
              <div class="speakers3">
                <p class="citations">
                  <i> Special Events for Club Members taking place in January </i><br/> </p>
                  <p>SBA willregularly hosts professional mixers for its students, at which students can
                    mingle with area scientists and consultants, hearing about potential career paths,
                     learning about the environmental science community in Ithaca, and making connections wtih
                     prospective employers and mentors. Students have the opportunity to meet with SBA supporters
                     like SBA's first Research Scholarship Fundraiser at Cornell in January EVS also brings in
                     guests to speak with EVS students about everything from environmental consulting with guest Pete Regan,
                     former chairman of Environmental Resources Management, to environmental behavior and poverty alleviation
                     with guest Dr. Saleem Ali, author of Treasures of the Earth: Need, Green, and a Sustainable Future.</p>
                 <p class="citations">
                   <i> Potential Enivronmental Consulting Companies that students may network with in the appraoching semester </i><br/> </p>
                   <ul>
                     <li>  ASI Energy     </li>
                     <li>   GSI Consultants </li>
                     <li>   Tetra Tech       </li>
                     <li>   Eco Consulting Ithaca Services </li>
                   </ul>
                <p class="citations">
                  <i> Networking Conference Opportunities for Environmental Consulting</i><br/> </p>
                  <ul>
                    <li>  Ithaca Conference of Sustainable Engineers  </li>
                    <li>   National Business Association of Environmental Consultants </li>
                    <li>   Environmental Consulting Assoication of New York University </li>
                    <li>   Assoicationg for Enviroment and Business Minded Individuals National Conference</li>
                  </ul>
            </div>
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
