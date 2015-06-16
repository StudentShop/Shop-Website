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
				<?php $subtitle = "CAM Software";?>

            
		<?php include ("../../functions.php") ?>
 		<?php include("../../header.php"); ?>
		<?php include("../../main_nav.php"); ?>

<!-- ************************* 				End of Navigation Items 			****************************  -->

<div id="wrapper">		<!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

	<div id="leftNav">
	
	<?php include ("training_cadcam_left_nav.php") ?> <!-- Left Navigation in the include file -->

		<h2 class="subnav2"><span>Related Links</span></h2>
			<ul>
            	<li><a href="../machining/cnc.php">CNC</a></li>
                <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
                <li><a href="../../events/index.php">Events</a></li>
				<!--<li><a href="#">Featured Videos</a></li>-->
            </ul>
	</div> <!-- END OF LEFT NAV DIV -->

	<div id="MainContent"> <!-- sets the main content (middle column area) -->


			<h1>CAM Software</h1>
            	
                <h2>Overview</h2>
            		<p>Computer Aided Manufacturing (CAM) software is essential to convert a CAD designed part into CNC machine-readable code. FeatureCAM (used in the Student Shop) and <a href="https://en.wikipedia.org/wiki/MasterCAM" rel="external">Mastercam</a> are examples of two such CAM programs. The instructional material that follows will give some very basic information on the use of FeatureCAM.</p>
                    
            <h2>Shop Training</h2>
            	<p>The shop provides training in the form of <a href="/permit/info/upgrades/index.php">permit upgrades</a>. The following permit upgrades deal with CAM software:</p>
                <ul>
		    <li><a href="/permit/info/upgrades/cnc_mill_2.php">CNC Mill 2</a></li>
		    <li><a href="/permit/info/upgrades/cnc_mill_3.php">CNC Mill 3</a></li>
		    <li><a href="/permit/info/upgrades/cnc_mill_4.php">CNC Mill 4</a></li>
		    <li><a href="/permit/info/upgrades/haas_1.php">HAAS 1</a></li>
		    <li><a href="/permit/info/upgrades/cnc_lathe_1.php">CNC Lathe 1</a></li>
		    <li><a href="/permit/info/upgrades/cnc_lathe_2.php">CNC Lathe 2</a></li>                        
                </ul>                    
                
                <h2>Instructional material:</h2>
                	<ul>
                    	<li><a href="../docs/feature_cam_training.pdf">Getting started with FeatureCAM</a></li>
                    	<li><a href="../docs/featurecam_basic_features.pdf">Basic Features of FeatureCAM</a></li>
                        <li><a href="../docs/importing_a_file_into_featurecam.pdf">Importing a file into FeatureCAM</a></li>
                        <li><a href="../docs/exporting_nc_code.pdf">Exporting NC code from FeatureCAM</a></li>                        
                    </ul>

            	<h2>Related Wikipedia Articles</h2>
            		<ul>                         
                    	<li><a href="https://en.wikipedia.org/wiki/Computer-aided_design" rel="external">CAD</a></li>
                    	<li><a href="https://en.wikipedia.org/wiki/Computer-aided_manufacturing" rel="external">CAM</a></li>
                    	<li><a href="https://en.wikipedia.org/wiki/Solid_modeling" rel="external">Solid modeling</a></li>
                    	<li><a href="https://en.wikipedia.org/wiki/Finite_element_analysis" rel="external">Finite element analysis</a></li>                    
                    	<!--<li><a href=""></a></li>-->
           	   		</ul>               
            
	</div> <!-- END OF MAINCONTENT -->

</div> <!-- END OF WRAPPER -->

<?php include("../../footer.php"); ?>

</body>
</html>

