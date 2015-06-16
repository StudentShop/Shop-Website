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
				<?php $subtitle = "Machine Reservation";?>

            
		<?php require($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
 		<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
		<?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

<!-- ************************* 				End of Navigation Items 			****************************  -->

<div id="wrapper">		<!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

    <div id="leftNav">
            <?php require("about_policies_left_nav.php") ?> <!-- Left Navigation in the include file -->
                <!-- begin right navigation items	<h2> tag is needed for formatting and accessibility purposes -->
                 <!-- <h2 class="subnav2"><span>Related Links</span></h2>
                      <ul>
                          <li><a href="#">----</a></li>
                          <li><a href="#">----</a></li>
                          <li><a href="#">----</a></li>
                      </ul> -->
                      
    </div> <!-- End leftNav -->

	<div id="MainContent"> <!-- sets the main content (middle column area) -->
    
    	<h1>Machine Reservation Policies</h1>
        	<ul>
            	<li>All lathes and mills can be reserved for periods of time up to 14 days in advance</li>
                <li>Reservations can not be changed less than 12 hours in advance of the reservation start time without shop staff approval in person or by phone (<a href="/about/contact.php">staff contact information</a>).</li>
                <li>Individuals who sign up for a machine and are more than 15 minutes late will have their reservation removed and will be suspended for 3 days. All reservations during that time will be removed as well.</li>
                <li>Individuals may not reserve a machine for another person to use.</li>
                <li>Individuals may not reserve a machine without intending to use it.</li>
                <li>Reservations should be made for a reasonable length of time for the part to be made (e.g. reserving a machine for a whole day to machine a part that should only take two hours would not be acceptable).</li>
                <li>All machines in the Student Shop areas must be cleaned up prior to the end of your reservation. Shop staff must check your machine before you leave. Use of water-based coolants on machines requires special cleanup procedures. <strong>Note</strong>: Failure to properly clean-up your machine may result in the suspension of shop privileges.</li>
                <li>Crashing a machine will result in a 24 hour suspension of shop privileges.</li>
                <li>Causing damage to a machine/equipment will result in a suspension not less than 48 hours in addition to being charged for the damage.</li>
            </ul>
            
        <h2>How to Reserve a Machine</h2>
        	<p>To reserve a machine log on to a computer with an internet connection and go to the Student Shop website (the site you are at now) and click "Reservations" in the navigation bar at the top of the page. From there you will be sent to the EMU reservation system. This is a separate site requiring a NetID login. Once you have logged in you can view your reservation times, make new ones, or cancel old ones.</p>
        
	</div> <!-- END OF MAINCONTENT -->
	
</div> <!-- END OF WRAPPER -->

<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

</body>
</html>
