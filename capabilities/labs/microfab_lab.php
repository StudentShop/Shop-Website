<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "MicroFab Lab";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("capabilities_labs_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Capabilities links</a></li>
              <li><a href="#">Capabilities more</a></li>
            </ul>-->
      </div> <!-- leftNav  -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->
        <h1>MicroFab Lab</h1>
        <h2>Overview</h2>
        <p>Located in ECB room B1026, the MicroFab Lab is set up to accomodate rapid prototyping and small parts fabrication. The room includes:
	<ul>
		<li>A variety of <acronym title="Fused Deposition Modeling">FDM</acronym> machines (a.k.a. 3D printers)</li>
		<li>40 Watt Epilog laser cutter</li>
		<li>4-axis Tormach mill</li>
		<li>Bandsaw</li>
		<li>Scroll saw</li>
		<li>Die filer</li>
		<li>2-axis Bridgeport mill</li>
		<li>Conventional lathe</li>
		<li>Computers with CAD/CAM software</li>
		<li>Large amount of bench space</li>
	</ul>
	</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
