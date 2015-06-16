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
    <?php $subtitle = "Hours";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require ("about_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!-- begin right navigation items   <h2> tag is needed for formatting and accessibility purposes -->
        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/events/index.php">Events</a></li>
        </ul>
      </div>

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Hours of Operation</h1>
	<h2>Student Shop</h2>
        <?php include ($_SERVER['DOCUMENT_ROOT']."/hours_setter.php"); ?>

	<h2>Instrument Shop</h2>
          <p>Monday - Friday 8am - 4:30pm<br />
	  Weekends: Closed<br />
	  Holidays: Closed</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
