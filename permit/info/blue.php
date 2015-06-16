<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********        This will be shown in the browser tab        *************
         **************************************************************************** -->
    <?php $subtitle = "Blue Permit";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
      <div id="leftNav">

        <?php require($_SERVER['DOCUMENT_ROOT']."/permit/permit_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/training/index.php">Training</a></li>
          <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
        </ul>
      </div>

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Blue Permit</h1>

        <h2>Overview</h2>
        <p>The blue permit is the most basic permit available. The permit requires minimal training and allows minimal access to shop resources and does <em>not</em> allow access to the shop itself.</p>

        <img src="/permit/images/Application-Process-Blue-Permit.png" alt="Application process for blue permit. Application process takes about 1 day"/>

        <h2>Privileges</h2>
        <ul>
          <li>Checkout tools and equipment</li>
          <li>Make <a href="/capabilities/purchases/index.php">purchases</a> through the shop (once an account is set up)</li>
        </ul>

        <h2>Requirements</h2>
        <p>(must be completed in order)</p>
        <ul>
          <li><a href="/permit/application.php">Apply for a blue shop permit</a></li>
          <li>Complete the blue permit quizzes on <a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67" rel="external">Moodle</a></li>
          <li>Come to the shop and have Student Shop staff create a permit for you</li>
        </ul>

        <h2>Time Frame and Deadlines</h2>
        <ul>
          <li>The blue permit should take no longer than a day to complete</li>
          <li>Like all permits and upgrades, this permit must be completed within 45 days of applying for it. Failure to meet the 45 day deadline will result in all progress towards the permit being removed</li>
        </ul>
        <br />

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
