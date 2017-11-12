<?php include("includes/header.php"); ?>
  <div class = "container">
    <div class = "container-text">
      <div class = "contains-header">
        <h1> Current Cornell University Board Members of SBA  </h1>
      </div>
      <div class = "catalog_main">
        <img class="title" src="images/projects_mainimage.png" alt = "title">
        <h2>Goals for Colloborations </h2>
        <p>These are the members of Cornell's SBA Board for the year 2017-2018. These members are hoping to create an enivoronment where students are motivated to aquire leaderhsip qualities that will help them in their future endeavors and will simulatneously learn about the various consultants that they can have and use to be the most successfult that they want to do. </p>
      </div>
      <div class="search_form">
      	<form id="search_form" name="search_form" class="form" method="POST" action="board.php">
      		<!-- Search and name fields -->
      		<div class="first_line">
      			<input id="search_name" type="text" placeholder="Name" name="search_name">
            <input id="search_netid" type="text" placeholder="netid" name="search_netid">
            <input id="search_keyword" type="text" placeholder="keyword" name="search_keyword">
      		</div>
          <div class="first_line">
      			<input id="submit" class="button" type="submit" name="search_submit" value="SEARCH">
      		</div>
      	</form>
      </div>
      <div class="content-flex">
        <div class = "catalog_main">
          <div class = "catalog_item">
            <img class="catalog_image" src="images/member1.jpg" target="_blank"alt ="content-image"> </a>
            <div class='catalog_description'>
         			<div class='show_catalog'>
         				<div class='status_catalog'>
         					<h3 class='name'>Ogbonnaya Ngwu (oan5)</h3>
                  <div class='school'>
                    <p>Founder | President</p>
                    <p>College of Ag. and Life Sciences ‘20: AEM</p>
                  </div>
         				</div>
         			</div>
         			<div class='hide_catalog'>
         				<h4 class='description'>He is a sophomore from Potomac, Maryland, is concentrating in Finance and Resource Economics.<br>He is committed to educating his peers at Cornell on the power of corporate sustainability, and hopes to land a career within ESG research and impact investing in the near future.</h4>
         			</div>
         		</div>
          </div>
          <div class ="catalog_item">
           <img class="catalog_image" src="images/member2.jpg" target="_blank" alt = "content-image"> </a>
           <div class='catalog_description'>
             <div class='show_catalog'>
               <div class='status_catalog'>
                 <h3 class='name'>Anthony Ghaly</h3>
                 <div class='school'>
                   <p>Executive Vice President</p>
                   <p>College of Agriculture and Life Sciences ‘20: AEM</p>
                 </div>
               </div>
             </div>
             <div class='hide_catalog'>
               <h4 class='description'>A sophomore concentrating in Finance and Entrepreneurship, has co-founded a startup called Stilovi centering around the idea of sustainable fashion. </h4>
             </div>
           </div>
         </div>
         <div class = "catalog_item">
           <img class="catalog_image" src="images/member3.jpg" target="_blank" alt = "content-image"> </a>
           <div class='catalog_description'>
             <div class='show_catalog'>
               <div class='status_catalog'>
                 <h3 class='name'>Eric Jaehyun Kim</h3>
                 <h4>Treasurer</h4>
                 <p class="school">College of Human Ecology ‘19; Policy Analysis and Management</p>
               </div>
             </div>
             <div class='hide_catalog'>
               <h4 class='description'>Eric is a junior from Fullerton California looking to creak into an investment and portfolio management role within the finance industry. He hopes to one day invest in the renewable energy sector.</h4>
             </div>
           </div>
          </div>
          <div class = "catalog_item">
            <img class="catalog_image" src="images/member4.jpg" target="_blank" alt = "content-image"> </a>
            <div class='catalog_description'>
              <div class='show_catalog'>
                <div class='status_catalog'>
                  <h3 class='name'>Thiago Bandeira</h3>
                  <h4> VP of Communications</h4>
                  <p class="school">College of Engineering ‘20: Mechanical Engineering</p>
                </div>
              </div>
              <div class='hide_catalog'>
                <h4 class='description'>Thiago is an enthusiastic mechanical engineer from Seattle, WA looking to take both business and technically sustainable strategies into the aerospace and aeronautical industry.</h4>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </div>
    <?php include "includes/footer.php";?>
