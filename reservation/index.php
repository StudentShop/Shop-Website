<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Reservations";?>

    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="../permit/index.php">Permit Info</a></li>
          <li><a href="../about/machinereservation.php">Reservation Policies</a></li>
          <li><a href="../capabilities/index.php">Machine Layout</a></li>
          <li><a href="../events/index.php">Events</a></li>
        </ul>
      </div> <!-- END OF LEFT NAV DIV -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->
        <h1>Reservations</h1>
        <h2><a href="https://emu.engr.wisc.edu/emu/index.php">Reserve/Unreserve a Machine, Check Status, or Register for a Seminar</a></h2>
        <p>To reserve a machine, cancel a reservation, check your status, register for a seminar, etc. simply <a href="https://emu.engr.wisc.edu/emu/index.php" rel="external">click here to log into the reservation system</a>. This will take you to a different site requiring a NetID login. Don't forget to logout once you are done. If you have any comments or questions please <a href="../about/contact.php">contact us</a>.</p>
        <p>Before making a reservation be sure you have read and understood the <a href="/about/machinereservation.php">Student Shop machine reservation policies</a>.</p>
        <h2><a href="https://emu.engr.wisc.edu/emu_public/emu_public_display.php">Reservation Schedule</a></h2>
        <p>To see what machines are currently available without having to log in, simply click here to see<a href="https://emu.engr.wisc.edu/emu_public/emu_public_display.php" rel="external"> machine availability</a>. This will take you to a different site. You will need to click the "back" button on your browser to return to the shop website. If you have any comments or questions please <a href="../about/contact.php">contact us</a>.</p>

      </div> <!-- end of MainContent tag -->

    </div>

    <?php include("../footer.php"); ?>

  </body>
</html>
