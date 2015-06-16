<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Shop Capabilities";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("machines/capabilities_index_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--    <h2> tag is needed for formatting and accessibility purposes -->

        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Capabilities links</a></li>
              <li><a href="#">Capabilities more</a></li>

            </ul>-->
      </div><!-- LeftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Shop Capabilities</h1>
        <p>If you are interested in what machines the Student Shop is equipped with or are trying to figure out if our machines meet the needs or your project the links at left will help. Each link covers a specific range of machines in the shop and includes information about the machines size and capabilites.</p>

        <h2>Student Shop Machine Layout</h2>

        <img src="/capabilities/images/B1086layout.jpg" alt="Student Shop Machine Layout - Main Shop"/>
	<img src="/capabilities/images/DiscoveryArea.jpg" alt="Student Shop Machine Layout - Discovery Area"/>
	<img src="/capabilities/images/B1026layout.jpg" alt="Student Shop Machine Layout - "/>
      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
