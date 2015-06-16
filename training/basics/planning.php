<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********     INSERT PAGE TITLE BELOW within quotations!!!!      **********
         **********     Title should be the same as the <h1> tag below     **********
         **************************************************************************** -->
    <?php $subtitle = "Planning";?>

    <?php include ("../../functions.php") ?>
    <?php include("../../header.php"); ?>
    <?php include("../../main_nav.php"); ?>

    <!-- *************************    End of Navigation Items    ****************************  -->

    <div id="wrapper">              <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("training_index_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
          <li><a href="../../events/index.php">Events</a></li>
          <!--<li><a href="#">Featured Videos</a></li>-->
        </ul>
      </div> <!-- END OF LEFT NAV DIV -->
      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Planning</h1><br />
        <h2>Overview</h2>

        <img src="../images_original/Design.png" alt="picture of planning"  />

        <p>Planning is an essential component of any fabrication process. Poor planning leads to poorly designed and low quality components being rushed through production and delivered late. Fortunately, planning well is not a difficult skill to learn.</p>

        <h2>Tips</h2>
        <p>Individuals not familar with fabricating components in a shop setting are the most susceptible to underestimating completion time. A good tip for these individuals is to estimate how long it will take to complete the fabrication part of your project and then double it. This is especially true when doing machining as the time it takes to setup everything properly in order to start machining is frequently underestimated.</p>
        <p>Consider the following when planning a project that you need the student shop for:</p>
        <ol>
          <li>Make sure you have met the requirements needed to use the Student Shop</li>
          <li>Design your part to minimize fabricating steps</li>
          <li>Bring a complete set of detailed, dimensioned prints</li>
          <li>Make a list of all operations needed to fabricate the part</li>
          <li>Organize the list of operations in the most logical order (don't forget some steps necessarily precede others)</li>
          <li>Make a list of all of the tooling and measuring devices needed for each operation</li>
          <li>Figure out how to hold the workpiece for machining during each operation</li>
          <li>Checkout the proper machine ahead of time</li>
          <li>Checkout tooling and measuring devices</li>
          <li>If the part is complex consider machining the part in discrete steps over several days.</li>
        </ol>
        <p>See also:<a href="../docs/machinedparts.pdf"> Tips on Designing Cost Effective Machined Parts</a> &amp; <a href="http://spacecraft.ssl.umd.edu/akins_laws.html" rel="external"> Akin's Laws of Spacecraft Design</a></p>

        <h2>Related Wikipedia Articles</h2>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Planning" rel="external">Planning</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Project_management" rel="external">Project management</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Time_management" rel="external">Time management</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Planning_fallacy" rel="external">Planning fallacy</a></li>
          <li><a href="https://en.wikipedia.org/wiki/Optimism_bias" rel="external">Optimism bias</a></li>
          <!--<li><a href=""></a></li>-->
        </ul>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../../footer.php"); ?>

  </body>
</html>
