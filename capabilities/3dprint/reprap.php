<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********        This will be shown in the browser tab        *************
         **************************************************************************** -->
  <?php $subtitle = "RepRap";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
      <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

          <!-- ************************* End of Navigation Items ****************************  -->

          <div id="wrapper">
            <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

            <div id="leftNav">
              <?php require($_SERVER['DOCUMENT_ROOT']."/capabilities/3dprint/capabilities_3d_left_nav.php") ?>
                <!-- Left Navigation in the include file -->
                <!--    <h2> tag is needed for formatting and accessibility purposes -->
                <h2 class="subnav2">
                  <span>Related Links</span>
                </h2>
                <ul>
                  <li><a href="/about/contact.php">Contact Us</a></li>
                  <li><a href="/about/hours.php">Hours</a></li>
                </ul>
            </div>
            <!-- LeftNav -->

            <div id="MainContent">
              <!-- sets the main content (middle column area) -->

              <img src="/capabilities/images/wiscrap.jpg" alt="WiscRap 3D printer" />

              <h1>RepRap</h1>
              <h2>Overview</h2>
              <p>The Student Shop has a <a href="http://reprap.org/" rel="external">RepRap</a> which can perform <a href="https://en.wikipedia.org/wiki/Fused_deposition_modeling" rel="external">fused deposition modeling</a> with
                <acronym title="acrylonitrile butadiene styrene">ABS</acronym>. The machine is excellent for low cost, low quality rapid prototyping.</p>

              <h3>Specifications:</h3>
              <ul>
                <li>Build envelope: 7.5&quot; x 7.5&quot; x 3&quot; (200mm x 200mm x 75mm)</li>
                <li>Print resolution: ~.02&quot; (.5mm)</li>
                <li>Tolerance: +/-.02" (.5mm)</li>
                <li>Maximum Speed: 2.362&quot; (60mm)/4.724&quot; (120mm) per second (infill/travel)</li>
                <li>Material(s): ABS</li>
                <li>Colors: Black, Red, Blue</li>
                <li>Printable support: Cut away (ABS)</li>
              </ul>

              <h2>Access</h2>
              <p>Requires the <a href="/permit/info/upgrades/3dprinting_1.php">3D Printing 1 upgrade</a>.</p>
              <p>To set up a time to use this machine please <a href="http://coeshoptest.engr.wisc.edu/about/contact.php">contact the shop.</a></p>

              <h2>
                <a name="costs"></a>Costs</h2>
              <ul>
                <li>Free</li>
              </ul>

              <h2>External Resources:</h2>

              <ul>
                <li><a href="http://reprap.org/wiki/Main_Page" rel="external">RepRap</a></li>
                <li><a href="http://reprapbook.appspot.com/" rel="external">RepRap Book</a></li>
              </ul>

              <h3>Project Ideas &amp; CADD Files:</h3>
              <ul>
                <li><a href="http://www.thingiverse.com/" rel="external">Thingiverse</a></li>
                <li><a href="http://endlessforms.com/g/d5s8fb6yy2_4/" rel="external">Endless Forms</a></li>
              </ul>

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
