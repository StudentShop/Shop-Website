<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Instrument Shop";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("capabilities_ishop_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--    <h2> tag is needed for formatting and accessibility purposes -->
        <!--<ul>
          <li><a href="/about/"></a></li>
          <li><a href="/about/"></a></li>
        </ul>-->
        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/about/contact.php">Contact Us</a></li>
          <li><a href="/about/hours.php">Hours</a></li>
        </ul>
      </div><!-- LeftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <img src="/capabilities/images/instrumentshop.jpg" alt="Instrument maker machining on a mill."/>

        <h1>Instrument Shop</h1>
        <h2>Overview</h2>
        <p>The CoE Instrument Shop can provide the following:</p>
        <ul>
          <li> CNC Milling - 2D and 3D profiling</li>
          <li> CNC Turning - complex curves and shapes</li>
          <li> Precision grinding - surface, center and centerless, internal and       external in metals and ceramics</li>
          <li>Tool and die making</li>
          <li> Plastic injection mold making</li>
          <li> Specialized machines for abrasive blasting, hardness testing in metals, static balancing</li>
          <li> Welding: Ultra high vacuum welding, GTAW, GMAW, brazing and  soldering</li>
          <li> Heat treating of metals</li>
          <li> Sign and label engraving in metal and plastic</li>
          <li> Plunge electrical discharge machining (EDM)</li>
        </ul>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
