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
                  <a name="010116"></a>Shop Fees Policy</h2>
                <h3>01/01/16</h3>
                <p>The shop now requires either a materials fee or a reserach fee be paid before using the shop. You can read more about this policy change on our <a href="/about/fees.php">charges &amp; fees policy page</a>.</p>

                <h2>
                  <a name="022616"></a>Limited Shop Hours</h2>
                <h3>02/26/16</h3>
                <p>The shop will be closed Friday, February 26<sup>th</sup> from 12pm to 2pm to celebrate Mark Richardson's last day.</p>

                <h2>
                  <a name="031116"></a>Limited Shop Hours</h2>
                <h3>03/11/16, 03/18/16, 04/01/16</h3>
                <p>The shop will be closed March 11<sup>th</sup>, March 18<sup>th</sup>, and April 1<sup>st</sup> after 12pm to give tours to prospective students.</p>

                <h2>
                  <a name="032116"></a>Spring Break Hours</h2>
                <h3>03/21/16</h3>
                <p>The shop will be open March 21<sup>st</sup> through March 25<sup>th</sup> from 8am - 4pm.</p>

              </div>
              <!-- END OF EVENTS -->

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
