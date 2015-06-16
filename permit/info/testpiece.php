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
    <?php $subtitle = "Green Permit Test Piece";?>

    <?php include ("../../functions.php") ?>
    <?php include("../../header.php"); ?>
    <?php include("../../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
      <div id="leftNav">

        <?php include ("../permit_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/training/index.php">Training</a></li>
          <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
        </ul>
      </div>

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Green Permit Test Piece</h1>

        <h2>Overview</h2>
        <p>The test piece is a simple hands-on test for students applying for the green permit to prove they have learned what was covered in the quizzes and seminar. After taking the online quizzes and attending the green permit seminar students will be expected to reproduce a simple part from a print, demonstrating what they have learned. There are two versions of the part, alpha and beta, and they are assigned to students more or less randomly at the end of the green permit seminar. Students who do poorly on the test piece may be required to do it over.</p>
        <p>To make the test piece simply <a href="https://emu.engr.wisc.edu/emu" rel="external">reserve a mill and lathe online</a> (which machines you reserve does not matter) and then come to the shop and make it. The shop will provide you with the metal you will be machining when you arrive.</p>

        <h2>Prints</h2>
        <ul>
          <li><a href="/permit/docs/AlphaPart.PDF">Test Piece Alpha Print</a></li>
          <li><a href="/permit/docs/BetaPart.PDF">Test Piece Beta Print</a></li>
        </ul>

        <h2>Grading</h2>
        <ul>
          <li><a href="/permit/docs/GradingSheet.pdf">Green Part Grading Rubric</a></li>
        </ul>
        <br />

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../../footer.php"); ?>

  </body>
</html>
