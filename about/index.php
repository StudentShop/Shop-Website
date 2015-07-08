<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                                                               *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!               *************
         **********   Title should be the same as the <h1> tag below                         *************
         **********                                                                                               *************
         **************************************************************************** -->
    <?php $subtitle = "Shop Information";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper" class="clear"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
      <!-- container sets where contents begin including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("about_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <!-- begin right navigation items       <h2> tag is needed for formatting and accessibility purposes -->
        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="http://www.map.wisc.edu/">Campus Map</a></li>
          <li><a href="https://rooms.engr.wisc.edu/?building=ECB">Engineering Centers Building</a></li>
          <li><a href="http://www.engr.wisc.edu/">College of Engineering</a></li>
        </ul>

      </div> <!-- END OF LEFTNAV -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Shop Information</h1>

        <h2>Overview</h2>
          <p>The College of Engineering Student Machine Shop is
        located in the Engineering Centers Building on the beautiful University
        of Wisconsin campus. The Student Shop provides Unveristy of Wisconsin
        engineering students with the majority of the tools and equipment found
        in a modern machine shop. The shop is equipped with both manual and CNC
        mills and lathes, drill presses, grinders, belt sanders, band saws, and
        additional equipment used in various educational training/manufacturing
        operations. The shop also houses a full wood shop, welding lab and sheet
        metal lab. A staff comprised of both professional instrument makers and
        trained students are available to assist and educate engineering
        students engaged in work in the shop. These resources are used to
        support the instructional and research goals of the University of
        Wisconsin's College of Engineering.</p>

        <h2>Mission Statement</h2>
          <p>To support the educational and research
        programs of the College of Engineering by providing students with the
        opportunity for a safe, hands-on fabrication experience in a modern
        machine shop.</p>

        <h2>Note to Educators</h2>
          <p>Because the Student Shop's target
        audience is engineering students, the training material on this site may
        differ slightly from what a machinist in industry might recommend or be
        familiar with. Our training focuses on creating one-off prototype parts
        and safety. If reusing information on this site for training elsewhere
        bear in mind it may not be the best method of instruction for
        non-engineering students.</p>

          <p>In keeping with the <a href="http://wisconsinidea.wisc.edu/"
          rel="external">Wisconsin Idea</a>, we try to make as much of our
          training publicly available as possible. In additon to the content on
          this website, we also have additional content on <a
          href="https://github.com/StudentShop">Github</a>.</p>

        <h2>Disclaimer of Liability</h2>
          <p>The University of
        Wisconsin-Madison, in accordance with the <a
        href="http://wisconsinidea.wisc.edu/" rel="external">Wisconsin Idea</a>,
        presents the information on this web site as a service to the university
        community and other internet users. While information on this site is
        about proper machine shop practices, it is not a substitute for formal
        training. Moreover, we make no warranty or guarantee concerning the
        accuracy or reliability of the content at this site or at other sites to
        which we link.</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
