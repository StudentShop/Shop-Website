<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> 
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" /> 

<!-- ****************************************************************************
**********															*************
**********		INSERT PAGE TITLE BELOW within quotations!!!! 		*************
**********		Title should be the same as the <h1> tag below 		*************
**********															*************
*********************************************************************************	-->
				<?php $subtitle = "Shop Basics";?>

            
		<?php include ("../functions.php") ?>
 		<?php include("../header.php"); ?>
		<?php include("../main_nav.php"); ?>

<!-- ************************* 				End of Navigation Items 			****************************  -->

<div id="wrapper">		<!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
		
	<div id="leftNav">
	  <?php include ("basics/training_index_left_nav.php") ?>
	  <!-- Left Navigation in the include file -->

		<h2 class="subnav2"><span>Related Links</span></h2>
			<ul>
                <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>                
                <li><a href="../events/index.php">Events</a></li>
				<!--<li><a href="#">Featured Videos</a></li>-->				
            </ul>
	</div> <!-- END OF LEFT NAV DIV -->

  <div id="MainContent"> <!-- sets the main content (middle column area) -->

		<img src="images_original/shop-overview-small.png" align="right" alt="view of student shop" />
        <h1>Shop Basics</h1>
        
        	<h2>Overview</h2>
            	<p>Basic knowledge of the tools and methods used in simple shop fabrication is essential to being a good engineer. The left navigation bar lists the main categories of basic shop knowledge. It is strongly recommended that students familiarize themselves with these topics prior to working in the shop.</p> 
                <p><strong>Note:</strong> Study material specifically related to taking the quizzes in Moodle is located in Moodle.</p>
                
		<h2>Permit Upgrades</h2>
    			<p>If you are looking for information on a permit upgrade you can find it under <a href="../permit/index.php">"Get a Permit"</a>.</p>
          

	</div> <!-- END OF MAINCONTENT -->
	
</div> <!-- END OF WRAPPER -->

<?php include("../footer.php"); ?>

</body>
</html>

