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
                <h2><a name="112017"></a>Limited Shop Hours</h2>
                <h3>11/20/17 - 11/22/17</h3>
                    <p>The shop will be open from 8am to 4pm Monday, November 20<sup>th</sup> through Wednesday, November 22<sup>nd</sup>.</p>  

                <h2><a name="112317"></a>Shop Closed</h2>
                <h3>11/23/17 &amp; 11/24/17</h3>
                    <p>The shop will be closed Thursday, November 23<sup>rd</sup> and Friday, November 24<sup>th</sup> for the holiday.</p>

                <h2><a name="112717"></a>Extended Shop Hours</h2>
                <h3>11/27/17 - 12/12/17</h3>
                    <p>The shop will be open from 8am to 10pm Monday through Thursday from November 27<sup>th</sup> to December 12<sup>th</sup>.</p> 

                <h2><a name="120217"></a>Saturday Hours</h2>
                <h3>12/02/17 &amp; 12/09/17</h3>
                    <p>The shop will be open from 9am to 4pm on December 2<sup>nd</sup> &amp; December 9<sup>th</sup>.</p> 
              </div>
              <!-- END OF EVENTS -->
            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
