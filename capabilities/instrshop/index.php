<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Instrument Shop";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("capabilities_ishop_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--    <h2> tag is needed for formatting and accessibility purposes -->
        <!--<ul>
          <li><a href="/about/"></a></li>
          <li><a href="/about/"></a></li>
        </ul>-->
        <h2 class="subnav2"><span>Related Links</span></h2>
        <ul>
          <li><a href="/about/contact.php">Contact Us</a></li>
          <li><a href="/about/hours.php">Hours</a></li>
        </ul>
      </div><!-- LeftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <img src="/capabilities/images/instrumentshop.jpg" alt="Instrument maker machining on a mill."/>

        <h1>Instrument Shop</h1>
        <h2>Overview</h2>
        <p>The CoE Instrument Shop can provide the following:</p>
        <ul>
          <li> CNC Milling - 2D and 3D profiling</li>
          <li> CNC Turning - complex curves and shapes</li>
          <li> Precision grinding - surface, center and centerless, internal and external in metals and ceramics</li>
          <li>Tool and die making</li>
          <li> Plastic injection mold making</li>
          <li> Specialized machines for abrasive blasting, hardness testing in metals, static balancing</li>
          <li> Welding: Ultra high vacuum welding, GTAW, GMAW, brazing and  soldering</li>
          <li> Heat treating of metals</li>
          <li> Sign and label engraving in metal and plastic</li>
          <li> Plunge electrical discharge machining (EDM)</li>
          <li>Waterjet cutting</li>
        </ul>
        <h2>Fabrication Requests</h2>
        <p>For a cost estimate (labor rate: $75 per hour, minimum half hour charge) please <a href="/about/contact.php">email one of the instrument makers</a> and arrange a time to meet to discuss your project. You email should include the following:</p>
          <ul>
            <li>Times you are available</li>
            <li>A CAD drawing or model of your project (if possible)</li>
          </ul>

        <img src="/capabilities/images/waterjetglass.jpg" alt="A glass part cut on the waterjet."/>
        
          <h2>Waterjet Requests</h2>
        <p>For a cost estimate please email <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#104;&#117;&#103;&#104;&#101;&#115;&#51;&#64;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;">Mike Hughes</a> or <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#106;&#114;&#97;&#112;&#112;&#101;&#64;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;">Jeff Rappe</a> and include the following information in your email:</p>
          <ul>
              <li>An Imperial (a.k.a. English) CAD drawing in DXF format</li>
              <li>The drawing should include only the part itself (see <a href="../docs/good_example.PDF">good example</a>, <a href="../docs/bad_example.PDF">bad example</a>)</li>
              <li>The part needs to be normal to when it is saved (i.e. must be straight on, no isometric drawings or skewed parts)</li>
              <li>One part per file, if there are multiple parts please include the quanitity of each. Do not draw multiple parts in a single file.</li>
              <li>Material type</li>
              <li>Thickness of material</li>
          </ul>

          <h3>Waterjet Costs</h3>
          <ul>
            <li>Staff time: $1.15/min</li>
            <li>Machine run time: $.70/min</li>
            <li>Machine startup fee: $15.00 (waived for instructional use)</li>
          </ul>

          <h3>Waterjet Specifications</h3>
          <ul>
            <li>Cut envelope: 4' x 4' x 6" (121.92cm x 121.92cm x 15.24cm)</li>
            <li>Kerf: ~.05" (~1.270mm)</li>
            <li>Minimum hole size: 3/16" (4.762mm)</li>
          </ul>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
