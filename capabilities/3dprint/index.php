<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!--*********************************************************************
        INSERT PAGE TITLE BELOW within quotations!!!!
        Title should be the same as the <h1> tag below
        This will be shown in the browser tab
         ********************************************************************-->
  <?php $subtitle = "3D Printing";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
      <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

          <!--******** End of Navigation Items ********-->

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

              <a href="http://www.thingiverse.com/thing:30654">
                <img src="/capabilities/images/arm.jpg" alt="Robot arm prototype" />
              </a>

              <h1>3D Printing</h1>
              <h2>Overview</h2>
              <p>The Student Shop has three rapid prototyping machines (a.k.a. 3D printers). These include a Dimension Elite and two RepRaps. All perform <a href="https://en.wikipedia.org/wiki/Fused_deposition_modeling" rel="external">fused deposition modeling</a>                with
                <acronym title="acrylonitrile butadiene styrene">ABS</acronym>. The machines are excellent for prototyping designs that would be cost or time prohibitive to make using conventional machining technologies.</p>
              <p>We recommend reading <a href="/capabilities/docs/machinedparts.pdf"> Tips on Designing Cost Effective Machined Parts</a> to help decide whether rapid prototying is the appropriate technology for fabricating your design.</p>

              <h2>
                <a name="estimates"></a>Printing Requests/Estimates</h2>
              <p>Indivduals looking to have prototypes printed by the shop will be charged strictly on a cost recovery basis. Printing is only available for University related projects. For a cost estimate please <a href="/about/contact.php">email the Student Shop</a>                and include the following:</p>
              <ul>
                <li>Your design in .STL format*</li>
                <li>Project Name</li>
                <li>Faculty/PI</li>
                <li>Course No. (if applicable)</li>
                <li>Current university funding number**</li>
                <li>Units (i.e. was the file exported/saved to .STL in inches or millimeters?)
              </ul>
              <p>*One part per .STL file, output should be binary, not ASCII and in either inches or milimeters.</p>
              <p>**A current unversity funding number is needed in advance of printing but is not required for estimates.</p>
              <p>All printing done by the shop will be done on the Dimension Elite printer. The printing costs can be found on the <a href="/capabilities/3dprint/elite.php#costs">Dimension Elite page</a>. During times of high demand printing will be done
                on a first come first served basis. Students, faculty, and staff of the College of Engineering will be given priority over individuals outside of the college.</p>

              <h2>Costs</h2>
              <ul>
                <li><a href="/capabilities/3dprint/elite.php#costs">Dimension Elite</a></li>
                <li><a href="/capabilities/3dprint/reprap.php#costs">Reprap</a></li>
              </ul>

              <h2>Access to Machines</h2>
              <p>The shop will print for anyone with a current university funding number. Students, faculty, and staff affiliated with College of Engineering can also print their own parts on specfic machines. See the specific machine pages for access information.</p>

              <h2>Disclaimer</h2>
              <p>In providing 3-D printing services, the Provider disclaims any warranties, express or implied, including the warranty of merchantability and warranty for fitness of any particular purpose, for the services themselves and any resulting tangible
                object or product thereof. The 3-D objects are provided to Customer for aesthetic purposes only, and are not intended for use as a functional tool or a functional part of a larger apparatus, and Provider shall not be liable for any damages
                resulting from such non-aesthetic use.</p>
              <p>In submitting a job to be printed, Customer warrants and represents that Customer owns, or has obtained, all rights necessary to allow Provider to provide the requested 3-D printing services. Customer shall be liable for any and all claims
                of intellectual property infringement that result from the 3-D printing services provided hereunder.</p>
              <p>Provider reserves the right to refuse to print any 3-D object which it deems to be discriminatory, offensive or hazardous.</p>

              <h2>External Resources:</h2>

              <h3>Additional Campus Resources</h3>
              <ul>
                <li><a href="https://3dprinting.wisc.edu/" rel="external">Campus 3D Printing</a></li>
                <li><a href="http://prototype.wisc.edu/" rel="external">UW Rapid Prototyping Consortium</a></li>
              </ul>

              <h3>Commercial Resources</h3>
              <ul>
                <li><a href="http://3dprintingpricecheck.com/" rel="external">3D Printing Price Check</a></li>
                <li><a href="http://www.midwestproto.com/" rel="external">Midwest Prototyping</a></li>
                <li><a href="http://www.ponoko.com/3d-printing" rel="external">Ponoko</a></li>
                <li><a href="http://www.shapeways.com/" rel="external">Shapeways</a></li>
                <li><a href="http://www.xcentricmold.com/rapid-prototyping.php" rel="external">Xcentric</a></li>
              </ul>

              <h3>Project Ideas &amp; CAD Files:</h3>
              <ul>
                <li><a href="http://www.thingiverse.com/" rel="external">Thingiverse</a></li>
                <li><a href="http://nasa3d.arc.nasa.gov/" rel="external">NASA 3D Resources</a></li>
                <li><a href="http://3dprint.nih.gov/discover" rel="external">NIH 3D Print Exchange</a></li>
                <li><a href="http://endlessforms.com/g/d5s8fb6yy2_4/" rel="external">Endless Forms</a></li>
              </ul>

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
