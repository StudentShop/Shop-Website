<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********                                                     *************
         **************************************************************************** -->
    <?php $subtitle = "Location";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("about_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!-- begin right navigation items       <h2> tag is needed for formatting and accessibility purposes -->
        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="http://www.map.wisc.edu/">Campus Map</a></li>
          <li><a href="https://rooms.engr.wisc.edu/?building=ECB">Engineering Centers Building</a></li>
          <li><a href="http://www.engr.wisc.edu/">College of Engineering</a></li>
        </ul>
      </div>

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Location</h1>
        <p>CoE Student Shop<br />Engineering Centers Building <a href="/about/floorplan.php">Rm B1086</a><br />1550 Engineering Dr.<br />Madison, WI 53706</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d5828.787866634351!2d-89.42045450746504!3d43.07521278458444!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8807acc1491c1457%3A0x9132eb9c9d425ee8!2s1550+Engineering+Dr%2C+University+of+Wisconsin-Madison%2C+Madison%2C+WI+53706!5e0!3m2!1sen!2sus!4v1433339179161" width="600" height="450" frameborder="0" style="border:0"></iframe>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
