<?php include("includes/header.php"); ?>

  <div class = "container">
    <div class = "container-text">
      <div class = "contains-header">
        <h1>PROJECTS</h1>
      </div>
      <div class = "container-header-text">
        <img class="title" src="images/projects_mainimage.png" alt = "title">
        <h2>Goals for Colloborations </h2>
        <p> The foremost aim of the Sustainable Business Alliance, is to create leaders
           for the future’s standard of business. This is primarily achieved through
           educating our members in sustainable financial literacy and competency,as well
           as encouraging specific career paths in management, finance, and other areas
         in which corporate sustainability can be usefully implemented. </p>
      </div>
      <div class = "content-block">
        <div class = "content-flex">
          <div class = "content-flex-image">
            <a href="http://www.gapinc.com/content/gapinc/html.html"><img class="image" src="images/gap.png" target="_blank"alt ="content-image"></a>
          </div>
          <div class='content-button'>
              <button class='button' onclick='show_proj_1()'><h3 id='show_proj_1'>Show details</h3></button>
          </div>
        </div>

        <div class ="content-flex">
          <div class = "content-flex-image">
            <a href="http://www.alphanr.com/Pages/Default.aspx"> <img class="image" src="images/alpha.png" target="_blank" alt = "content-image"> </a>
          </div>
          <div class='content-button'>
              <button class='button' onclick='show_proj_2()'><h3 id='show_proj_2'>Show details</h3></button>
          </div>
        </div>
        <div class ="content-flex">
          <div class = "content-flex-image">
            <a href="http://www.sustainalytics.com/"> <img class="image" src="images/sustainable.png" target="_blank" alt = "content-image"> </a>
          </div>
          <div class='content-button'>
              <button class='button' onclick='show_proj_3()'><h3 id='show_proj_3'>Show details</h3></button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal pop up -->
    <div id='proj_1_popup' class='modal'>
      <div class='modal-content'>
        <button class='close' onclick='close_proj_1()'>×</button>
        <div class='popup-message-container'>
          <p>This is one of the first companies that SBA will be working with. Gap,
            Inc known to many as one of the finer clothing places, has been faced with
           with many charges due to the lack of thier care for child labor, and requring safe practices of workers in factories.
            This has led to Gap facing any credibility issues which is affecting their
             market shares. Gap needs to focus on fixing their appareance
           so that facotr no longer affects their competitive advantage in the market
          and so that they can rise to the top again </p>
        </div>
      </div>
    </div>

    <div id='proj_2_popup' class='modal'>
      <div class='modal-content'>
        <button class='close' onclick='close_proj_2()'>×</button>
        <div class='popup-message-container'>
          <p>This is the company Alpha Natural Resoruces.
            They are currently having many issues due to the fact that their internal
             operations has been releasing a lot of pollutants into the atmopshere.
             SBA hopes to work with this company and provide them with
             metrics that they can use to help sove many of the enviornmental issues they
              are having. One way in which SBA hopes to help this company is through their
             partnerships with envrionmetnal companies to give them a good name </p>
        </div>
      </div>
    </div>

    <div id='proj_3_popup' class='modal'>
      <div class='modal-content'>
        <button class='close' onclick='close_proj_3()'>×</button>
        <div class='popup-message-container'>
          <p>This is another company that SBA plans to work with. There are a company that aims to help other companies evaluate their sustainability progress through the use of metrics. This Semester SBA will work with this company in order to help them find companies who require environmental consulations.</p>
        </div>
      </div>
    </div>
  </div>



  <?php include "includes/footer.php";?>
