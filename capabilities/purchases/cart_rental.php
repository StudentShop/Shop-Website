<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Cart Rentals";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php require("capabilities_purchases_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <!-- <h2> tag is needed for formatting and accessibility purposes -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
            </ul>-->
      </div> <!--End of leftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Cart Rentals</h1>
        <p>The Student Shop provides for rental, lockable carts for engineering students, staff, and faculty. They are rented for a semester and are intended to store materials needed for a project that is being worked on in the discovery area (open space in front of the Shop) or Student Shop. Locks are not provided but the carts can be locked with personal locks. To rent a locker for a semester simply print off and fill out the cart rental form below and turn it into the Student Shop. The form is also available already printed at the Student Shop.</p>
        <h2>Cart Rental Form</h2>
        <p><a href="/capabilities/docs/cart_checkout.pdf">Cart Rental Form</a></p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
