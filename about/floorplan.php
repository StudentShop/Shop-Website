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
    <?php $subtitle = "ECB Basement Floor Plan";?>

    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper" class="clear"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
      <!-- container sets where contents begin including the left nav, middle (main content), and right nav  -->

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

        <h1>ECB Basement Floor Plan</h1>

        <img src="/about/images/ecb_basement.jpg" alt="Engineering Centers Basement Floor Plant" />

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../footer.php"); ?>

  </body>
</html>
