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
    <?php $subtitle = "Permit Information";?>

    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("permit_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/training/index.php">Training</a></li>
          <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
        </ul>
      </div> <!-- END OF LEFT NAV DIV -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Permit Information</h1>

        <img src="images/green.png" alt="green permit image"/>

        <h2>Overview</h2>
        <p>Students, faculty, and staff wishing to use the Student Shop must obtain a shop permit. There are three different permits (blue, red, and green), each providing a certain level of training and access to shop resources. Students coming to the shop will be expected to have their permit with them and while working in the shop the permit must be worn visibly. If you would like to learn more about shop permits follow the links on the left or read the <a href="/permit/permitFAQ.php">FAQ page.</a></p>

        <h2>Prerequisites</h2>
        <p>To apply for a permit you must be at least 18 years old and either a current UW-Madison student with an affiliation to the College of Engineering (either an engineering major, enrolled in an engineering course, or in an engineering student organization) or a current member of the UW-Madison College of Engineering faculty or staff. A materials fee or a research fee may also be required before using the shop (including prior to permit/upgrade training). You can read about these fees on the <a href="/about/fees.php">fees policy page</a>.</p>

        <h3>Students not enrolled in the College of Engineering</h3>
        <p>Any student wishing to apply for a permit but who is not enrolled in the College of Engineering must have their professor or advisor <a href="/about/contact.php">contact the Student Shop</a> and verify that the student in question has a legitimate reason to be given access to the shop (i.e. that they are in some way affiliated with the College of Engineering) as well as the student's NetID or Campus ID number. We will then send a confirmation email to that student when they can apply online.</p>

        <h3>Faculty and Staff</h3>
        <p>Most engineering faculty and staff should not have a problem applying for a permit. However, if the system does not recognize you as either faculty or staff you must <a href="/about/contact.php">contact the Student Shop</a> letting us know you wish to apply for a permit. Please include your NetID or Campus ID number. We will then send you a confirmation email when you can apply online.</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../footer.php"); ?>

  </body>
</html>
