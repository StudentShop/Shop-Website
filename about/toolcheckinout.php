<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********                                                     *************
         **************************************************************************** -->
    <?php $subtitle = "Tool Check in/out";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items  ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php include ("about_policies_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!-- begin right navigation items   <h2> tag is needed for formatting and accessibility purposes -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
            </ul>-->
      </div> <!-- leftNav  -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Equipment Check in/out</h1>
        <h2>Tool Check-out Procedure:</h2>
        <p>There is an assortment of tools for checkout at the Student Shop. Most tools can be checked out with only a permit and permit number (see <a href="/about/toolcheckinout.php#prohibitions">"Prohibitions"</a> for exeptions). Equipment can be checked out for up to 3 business days. They may be renewed once for another 3 day period.</p>

        <h2>Tool Check-in Procedure:</h2>
        <p>Anytime an individual returns a single tool or all the tools checked out they must make sure the returned item(s) get crossed off their list by the shop staff. If all the items are returned it is <em>that individual's</em> responsibility to take the slip when leaving. If the slip is forgotten shop staff will assume the items on the slip <em>have not</em> been returned and will be the individual's responsibility at the end of 3 days.</p>
        <p>If an individual does not return their checked out items within 3 business days they will be notified via email that the items need to be returned. If tools are returned broken or damaged or if tools are not returned at all, the person who checked out the tools will be charged for their replacement cost.</p> 
        <p>If the tools are not returned/renewed or the replacment cost paid within a week, that individual may have their shop privileges suspended and a hold put on their grades/records until the items are returned or the replacement cost is paid.</p>

        <h2>Key Card Checkout/Check-in Procedure:</h2>
        <p>Keycards for the welding lab and paint booth can be checked out for up to 3 business days. A shop permit is required and a tool checkout slip must be filled out. The card number should be used in place of the tool number. The individual who checked out the card will be held responsible for the condition of the space.</p>

        <h2><a name="prohibitions"></a>Prohibitions</h2>
        <ul>
          <li>The shop will not check out bolt cutters (For lock removal contact <a href="http://uwpd.wisc.edu/about-uwpd/contact-uwpd/">UWPD's non-emergency number</a>).</li>
          <li>Some equipment requires a <a href="/permit/info/upgrades/index.php">permit upgrade</a> to be checked out.</li>
          <li>A photo ID is required for checking out equipment with a value greater than $100.</li>
          <li>Certain tools including, but not limited to, milling cutters, lathe tools, milling machine clamps and other machine tool accessories, may be checked out only for use in the Student Shop.</li>
          <li>One person per checkout form. Checking in/out equipment on another person's form is not allowed.</li>
        </ul>

        <h2>Tool Checkout Forms</h2>
        <p><a href="/about/images/whitecheckoutform.jpg">White Form:</a>
          For checking out tools only.</p>
        <p><a href="/about/images/yellowcheckoutform.jpg">Yellow Form:</a>
          For checking out tools while using a lathe or mill.</p>
        <p><a href="/about/images/bluecheckoutform.jpg">Blue Form:</a>
          For checking out tools while using a lathe or mill in room B1088.</p>
        <h3>Required Information:</h3>
        <ul>
          <li>Machine name (if applicable)</li>
          <li>Name</li>
          <li>Date</li>
          <li>Permit number</li>
          <li>Tool name/description
          <li>Quanity
          <li>Size
          <li>Tool number (if applicable)</li>
          <li>Signature</li>
          </ul>

          </div> <!-- END OF MAINCONTENT -->

          </div> <!-- END OF WRAPPER -->

          <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

        </body>
      </html>
