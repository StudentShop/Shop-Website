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
  <?php $subtitle = "Dimension Elite";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
      <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

          <!-- ************************* End of Navigation Items ****************************  -->

          <div id="wrapper">
            <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

            <div id="leftNav">
              <?php require ($_SERVER['DOCUMENT_ROOT']."/capabilities/3dprint/capabilities_3d_left_nav.php") ?>
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

              <img src="/capabilities/images/elite-3d-printer.jpg" alt="Dimension Elite 3D printer" />
              <h1>Dimension Elite</h1>
              <h2>Overview</h2>
              <p>The Student Shop has a Dimension Elite 3D printer which can perform <a href="https://en.wikipedia.org/wiki/Fused_deposition_modeling" rel="external">fused deposition modeling</a> with
                <acronym title="acrylonitrile butadiene styrene">ABS</acronym>. The machine is excellant for high quility rapid prototyping.</p>
              <h2>Specifications</h2>
              <ul>
                <li>Build envelope: 8&quot; x 8&quot; x 12&quot; (203 x 203 x 305 mm)</li>
                <li>Print resolution: ~0.007&quot; or 0.010&quot; (.178 mm or .254 mm)</li>
                <li>Minimum size of a stand alone feature of .007&quot; part: 0.014&quot; </li>
                <li>Minimum size of a stand alone feature of .010&quot; part: 0.020&quot; </li>
                <li>Material: <a href="/capabilities/docs/ABSplusP430.pdf">Stratasys ABSplus P430</a></li>
                <li>Colors: ivory, black, red, blue, nectarine, and yellow</li>
                <li>Printable support: Dissolvable (P400 SR)</li>
              </ul>

              <h2>Access</h2>
              <p>Restricted to shop staff. Please see <a href="index.php#estimates">Printing Requests/Estimates</a> for more information.</p>

              <h2>
                <a name="costs"></a>Costs</h2>
              <ul>
                <li>Model Material: &#36;2.31 per cubic inch</li>
                <li>Support Material: &#36;4.44 per cubic inch</li>
                <li>Machine Time: &#36;3.48 per hour</li>
                <li>Base: &#36;5.21 per base</li>
                <li>For non-instructional printing requests, staff time will be charged as a flat fee of $15.</li>
              </ul>

              <h2>Default Settings</h2>
              <ul>
                <li>Layer Resolution: .010&quot;</li>
                <li>Model Interior: Sparse-High Density</li>
                <li>Support Fill: SMART</li>
                <li>Part Orientation: Prioritize cost over quality</li>
              </ul>

              <h2>External Resources</h2>
              <ul>
                <li><a href="http://www.stratasys.com/3d-printers/design-series/performance/dimension-elite" rel="external">Dimension Elite</a></li>
              </ul>

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
