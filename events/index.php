<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
  <?php $subtitle = "News &amp; Events";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
      <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>
          <!-- ************************* End of Navigation Items ****************************  -->

          <div id="wrapper" class="clear">
            <!-- wrapper sets the content area including the left nav, middle (main content), and right nav -->
            <!-- container sets where contents begin including the left nav, middle (main content), and right nav -->
            <div id="leftNav">

              <?php /* include ("events_left_nav.php") */?>
                <!-- Left Navigation in the include file -->
                <!-- begin right navigation items   <h2> tag is needed for formatting and accessibility purposes -->
                <h2 class="subnav2">
                  <span>Related Links</span>
                </h2>
                <ul>
                  <li><a href="http://www.map.wisc.edu/">Campus Map</a></li>
                  <li><a href="https://rooms.engr.wisc.edu/?building=ECB">Engineering Centers Building</a></li>
                  <li><a href="http://www.engr.wisc.edu/">College of Engineering</a></li>
                </ul>
            </div>
            <!-- leftNav -->

            <div id="MainContent">
              <!-- sets the main content (middle column area) -->

              <h1>News &amp; Events</h1>

              <h2>Overview</h2>
              <p>The following is a list of news and upcoming events for the Student Shop. Upcoming seminars are not posted here. You can <a href="https://emu.engr.wisc.edu/emu_public/upcoming_seminars.php">view upcoming seminars</a> on EMU.</p>

              <div id="events">

                <!--<h2>No upcoming events.<h2>-->

                <!--<h2><a name="051415"></a>Title</h2>
                <h3>05/14/15</h3>
                    <p></p>-->

                <h2>
                  <a name="082415"></a>Shop Fees/Charges Policy</h2>
                <h3>08/24/15</h3>
                <p>Begining August 24, 2015 the shop will charge all shop users a materials fee. Some shop users will also be charged an hourly machine reservation fee. You can read more about this policy change on our <a href="/about/fees.php">charges &amp; fees policy page.</p>

                <h2>
                    <a name="090415"></a>Shop Closed</h2>
                  <h3>09/04/15</h3>
                  <p>The shop will be closed September 4<sup>th</sup> for the holiday weekend.</p>

                  <h2>
                    <a name="100615"></a>Shop Closed</h2>
                  <h3>10/06/15</h3>
                  <p>The shop will be closed October 6<sup>th</sup> for staff to attend a machine tool tradeshow.</p>

              </div>
              <!-- END OF EVENTS -->

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
