<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Stock &amp; Hardware";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("capabilities_purchases_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <!--
            <h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
              <li><a href="#"></a></li>
            </ul>
            -->
      </div><!-- leftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Stock &amp; Hardware</h1>
        <p>Students, faculty, and staff can purchase some materials from the Student Shop for academic or departmental use (The Student Shop can not make purchases for personal use). This includes both hardware such as nuts and bolts and materials such as wood, metal, and plastic. In order to make purchases the buyer must set up an account with the Student Shop using an approved UW funding number (see your department's financial specialist for how to get a funding number). The form required to set up an account can be found below. A 15% mark-up is applied to the cost of all purchases to cover materials and services overhead.</p>
        <h2>Account Set-up Form</h2>
        <p><a href="/capabilities/docs/account_form.pdf">Account Set-up Form</a></p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
