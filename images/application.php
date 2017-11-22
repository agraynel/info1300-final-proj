
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title> Application Form for Environmental Outreach Porgrams </title>
  <link rel="stylesheet" type="text/css" href="styles/all.css">
  <script type="text/javascript" src="scripts/jquery-3.2.1.js"></script>
  <script type="text/javascript" src="scripts/site.js"></script>
</head>
<body>
  <div class="bod">
    <h1> <em>  Application Form for National Environmental Outreach Events </em> </h1>
              <?php include "includes/navigation.php"; ?> <br/>
       <div class="form_info">
          <p class="paragraph">
            As stated in the Contact Me webpage, I will be attending and working with
            various Environmantal Organizations around the country providing various
            programs to help students understand career options and expand on
            opportunities that can help steer them into certain paths. The goal
            of these programs are to find passionate, people who want to contrbute
            and give backk to the environment, a platform to express their ideas
            with current entreprenurs, scientsits and other individuals. The people
            you network with will allow you to demonstrate your innner creativity
            and make your ideas come to life! </p>
        <p class="descriptions"> Here are the descriptions of the three Environmental
            Programs Offered in the Country </p>
        <p class="form_option"> <b> Environmental Decisions: </b>
           In this program, you will be working with mentors and other students to evaluate
           how business and schools look at environmental program and the degree to which the
           lack of effective decision making regarding environmental issues has resulted in
           harm to the enviornmental. In this program, you will exploring B corp. organizations
           and comparing their leadership styles to other public and private companies.
           You will also be learning about corporate social responsiblity, the triple bottom
           link and how businesses can transform their business modesl to incorporate
           sustainable oriented innovation  </p>
       <p class="form_option"> <b> Environmental Entrepreneuship </b>
          In this program, you will be learning about how to apply your passion for
          enivironmental science to create companies that actually priortize the
          environment. These startups that you will build do not necessarily have to
          be for profit large companies. They can also be volunteering initiatives that you
          want ot keep for your community for example. Through this program, you will be
          learning how to create a business plan in which you unqiue define the value
          proposition for your company, you competitors, your plan for continued
          sustainability, partnerships, and any other goals and ambitions you have for the
          organization. </p>
      <p class="form_option"> <b> Designing Technologies for Social Impact: </b>
         In this program, you will learn about how to incorporate elements of desing in
         creating enviornmental technologies. You will attend seminars in which you will
         get to work with tech engineers who have created wearable design products, personal,
         localized heating/cooling festivals, etc. These seminars will also provide you with
         basics into coding schools to help you plan out your design. You will also learn
         how basic elements of design, 3D modeeling and more to incorproate into your
         designs. At the end of this program, there will be a winner who will receive funding
         to continue the project </p>
     </div>
     <h2> Here is the 2017 Summer Outreach Event Application Program </h2>
        <form id= "form_application" name="form_application" action="process.php" method= "post" novalidate>

            <div class="box">
                <label for="firstname">Please type you First Name(<b>REQUIRED</b>):</label>
                <input type="text" id="firstname" name="firstname" placeholder="Your First Name" required >
            </div>

            <span class="errors HiddenError" id="firstNameError">
                  First name is required.
            </span>

            <div class="box">
                <label for="lastname"> Please type your Last Name(<b>REQUIRED</b>):</label>
                <input type="text" id="lastname" name="lastname" placeholder="Your Last Name" required >
           </div>

           <span class="errors HiddenError" id="lastNameError">
                  Last name is required.
          </span>

          <div class="box">
              <label for="email">Please type a valid email address(<b>REQUIRED</b>):</label>
              <input type="email" id="email" name="email" placeholder="Your Valid Email with @domain" required>
          </div>

          <span class="errors HiddenError" id="noEmail">
                  Inputting an actual email is required
          </span>

          <span class="errors HiddenError" id="invalidEmail">
                  Not a valid email address, missing the valid @domain.com.
          </span>

          <div class="box">
              <div id= "sessions">
                  <label>Select the session you would like to be considered
                  for(CHOOSE ONE ONLY)(<b>REQUIRED</b>): </label> <br/>

                  <label class="button_style"> <input type="radio" name="session"
                   id="session1" value="Session1: From May 12th To June 15th 2018">
                  Session 1: May 12th- June 15th 2018 <br> <label>

                  <label class="button_style"><input type="radio" name="session"
                   id="session2"value="Session 2: From June 18th To July 21rst 2018 ">
                   Session 2: June 18th- July 21rst 2018 <br> </label>

                  <label class="button_style"> <input type="radio" name="session"
                   id="session3" value="Session 3: From July 25th To August 28th 2018">
                   Session 3: July 25th- August 28th 2018 <br/> </label>
              </div>
          </div>

          <span class="errors HiddenError" id="sessionsError">
                  You must sign up for one session
          </span>

          <div class="box">
              <div class="programs required">
                  <label> Please Choose ALL the programs you would like to be selected for(<b>REQUIRED</b>):</label> <br/>
                    <label class="button_style"><input type="checkbox" name="program[]"
                    id="program1" value="Evaluating Environmental Decisions" > Evaluating Environmental Decisions<br> </label>

                    <label class="button_style"><input type="checkbox" name="program[]"
                    id="program2"value="Environmental Entreprenurship"> Environmental Entreprenurship <br></label>

                   <label class="button_style"><input type="checkbox" name="program[]"
                   id="program3" value="Designing Technologies for Social Impact">
                   Designing Technologies for Social Impact <br/></label>
            </div>
        </div>

        <span class="errors HiddenError" id="programsError">
              You must sign up for atleast one program
        </span>
        <div id="status">
            <label for="status"> Please select your student status (<b>REQUIRED</b>):</label> <br/>
                <select id="StudentsStatus" name="StudentsStatus" required>
                    <option value=""> -- Select One -- </option>
                      <label class="button_style"> <option value="Middle Schooler">
                      Middle Schooler</option></label>

                      <label class="button_style">  <option value="High Schooler">
                      High Schooler</option></label>

                      <label class="button_style">  <option value="Undergraduate College Student">
                      College Student</option></label>

                      <label class="button_style"><option value="Graduate College Student">
                      Graduate College Student</option></label>

                      <label class="button_style"><option value="Other">
                      Other </option></label>
               </select>
        </div>
        <span class="errors HiddenError" id="statusIncorrect">
              Please Select one Student Option
        </span>
        <div class="box">
            <div class="locations required">
                <label>Please choose ALL your location preferences(<b>REQUIRED</b>):</label> <br/>
                  <label class="button_style"><input type="checkbox" name="locations[]"
                  value="Princeton, New Jersey" > Princeton, New Jersey <br></label>

                  <label class="button_style"><input type="checkbox" name="locations[]"
                  value="Philladelphia, Pennsylvania">Philladelphia, Pennsylvania <br></label>

                  <label class="button_style"><input type="checkbox" name="locations[]"
                  value="New York, New York">  New York, New York<br/></label>
            </div>
       </div>
       <span class="errors HiddenError" id="locationIncorrect">
              Please Select Your Location Preference(s)
        </span>

        <div class="box">
            <label for="message"> List suggestions you have for the Outreach Events
            of any of the three programs. Please limit
            your response to 400 WORDS or less.(OPTIONAL): </label>

                <textarea placeholder=" Please Write Here Your sugggestions on how to improve the programs" form="form_application" id="suggestions"name="suggestions" cols="100" rows="4" ></textarea>
       </div>

       <span class="errors HiddenError" id="wrong">
             Please Select atleast one location
        </span>

        <div class="box">
            <label for="message"> Please explain briefly why you are interested in
             in the environmental outreach events? Please limit your response
             to 400 WORDS or less(REQUIRED) </label>

                 <textarea form="form_application"id="interests"name="interests"cols="100"rows="4"required placeholder="Please Write Here Your Explanation for why you want to be a part of the programs"></textarea>
       </div>

        <span class="errors HiddenError" id="InvalidInput">
                  Please Write a Short Response to the Question Above
       </span>

       <div class="box">
        <label for="message"> Please submit the link to your Resume OR LinkedIn (REQUIRED)</label>
          <input type="text" id="resume" name="resume" placeholder="Please Write the Link to Your Resume OR LinkedIn Here"required>
       </div>

       <span class="errors HiddenError" id="ResumeNotHere">
                  Please Input ONLY the link to your Resume ORLinkedIn
       </span>

       <div class="button">
        <button type="submit" id="submit"> Submit Form </button>
      </div>

     </form>
    </div>
     <?php include "includes/footer.php"; ?>
  </body>
</html>
