<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********                                                     *************
         **************************************************************************** -->
  <?php $subtitle = "Warning Policy";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
      <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

          <!-- ************************* End of Navigation Items ****************************  -->

          <div id="wrapper">
            <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

            <div id="leftNav">
              <?php include ("about_policies_left_nav.php") ?>
                <!-- Left Navigation in the include file -->

                <!-- begin right navigation items   <h2> tag is needed for formatting and accessibility purposes -->
                <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
            </ul> -->
            </div>
            <!-- End of leftNav -->

            <div id="MainContent">
              <!-- sets the main content (middle column area) -->

              <h1>Warning Policies</h1>

              <h2>Standard Rule Violations</h2>
              <p>When a violation is committed an email warning notice will be sent out addressing the violation issue. The number of violations incurred within the
                <em>same year</em> will be dealt with according as follows:</p>
              <ul>
                <li>Second violation- 30 day suspension of shop privileges</li>
                <li>Third violation- Permanent suspension of shop privileges</li>
              </ul>

              <h2>Special Rule Violations</h2>
              <p>The following violations will result in immediate and permanent suspension of shop privileges:</p>
              <ul>
                <li>Using a permit under false pretenses (e.g. using a forged permit or representing someone else's permit as your own)</li>
                <li>Aiding or abetting someone using a permit under false pretenses</li>
              </ul>

            </div>
            <!-- END OF MAINCONTENT -->

          </div>
          <!-- END OF WRAPPER -->

          <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

            </body>

</html>
