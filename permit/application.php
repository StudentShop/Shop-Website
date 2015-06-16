<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********        This will be shown in the browser tab        *************
         **************************************************************************** -->
    <?php $subtitle = "Application";?>

    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("permit_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
        </ul>
      </div> <!-- END OF LEFT NAV DIV -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Application</h1>

        <h2>Overview</h2>
        <p>Individuals wishing to apply for a shop permit must read the <a href="../about/safetyanduse.php">shop safety and use page</a> and submit an online application form. Follow the instructions in the online application to log into <a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67" rel="external">Moodle</a> and take the necessary quizzes.

          <h2>Apply Online Today!</h2>
          <a href="https://emu.engr.wisc.edu/emu/index.php" rel="external">Student Shop Online Permit Application</a>
        <p>Note: This will take you to a different site requiring a NetID login.</p>

        </div> <!-- END OF MAINCONTENT -->

      </div> <!-- END OF WRAPPER -->

      <?php include("../footer.php"); ?>

    </body>
  </html>
