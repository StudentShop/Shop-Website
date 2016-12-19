<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Purchases &amp; Rentals";?>

    <?php include ("../../functions.php") ?>
    <?php include("../../header.php"); ?>
    <?php include("../../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("capabilities_purchases_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <!-- <h2 class="subnav2"><span>Related Links</span></h2>
             <ul>
               <li><a href="#">----</a></li>
               <li><a href="#">----</a></li>
               <li><a href="#">----</a></li>
             </ul> -->
      </div> <!-- End leftNav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Purchases &amp; Rentals</h1>

        <h2><a name="purchases"></a>Purchases</h2>
        <p>Students, faculty, and staff can purchase some materials from the Student Shop for academic or departmental use (The Student Shop can not make purchases for personal use). See "Stock &amp; Hardware" on the left for more information.</p>
        <p><a href="/capabilities/docs/account_form.pdf">Account Set-up Form</a></p>

        <h2>Rentals</h2>
        <p>The Student Shop provides for rental, lockable carts for students, staff, and faculty to store their projects in. See "Cart Rentals" at left for more information.</p>
        <p><a href="/capabilities/docs/cart_checkout.pdf">Cart Rental Form</a></p>

        <h2>Suppliers&#42;</h2>

        <h3>Hardware</h3>
        <ul>
          <li><a href="https://www.grainger.com" rel="external">Grainger</a></li>
          <li><a href="http://www.taindustrial.com/" rel="external">T &amp; A Industrial</a></li>
          <li><a href="https://www.engman-taylor.com/Welcome" rel="external">Engman-Taylor</a></li>
        </ul>

        <h3>Precision Hardware</h3>
        <ul>
          <li><a href="http://www.wmberg.com/" rel="external">Berg</a></li>
          <li><a href="http://www.sdp-si.com/" rel="external">Stock Drive Products/Sterling Instruments</a></li>
        </ul>

        <h3>Metal Stock</h3>
        <ul>
          <li><a href="http://www.liebovich.com/" rel="external">Liebovich</a></li>
          <li><a href="http://www.tkmna.com/tkmna/index.html" rel="external">Thyssenkrupp Materials NA</a></li>
          <li><a href="http://wiedenbeck.com/" rel="external">Wiedenbeck</a> (located in Madison, WI)</li>
	  <li><a href="https://www.mscdirect.com/" rel="external">MSC</a></li>
        </ul>
        <h3>Plastics</h3>
        <ul>
          <li><a href="http://www.midlandplastics.com/index.htm" rel="external">Midland Plastics</a> (located in New Berlin, WI)</li>
          <li><a href="http://freckleface.com/shopsite_sc/store/html/index.html" rel="external">freckleface.com</a></li>
                  </ul>
        <h3>Wood & Lumber</h3>
        <ul>
          <li><a href="http://www.baraboowoodworks.com/" rel="external">Baraboo Woodworks</a> (located in Madison, WI)</li>
          <li><a href="http://brunsell.com/" rel="external">Brunsell Lumber</a> (located in Madison, WI)</li>
          <li><a href="http://www.homedepot.com/" rel="external">Home Depot</a> (located in Madison, WI)</li>
          <li><a href="http://www.marling.com/" rel="external">Marling Lumber</a> (located in Madison, WI)</li>
          <li><a href="http://mccormicklumber.com/" rel="external">McCormick Lumber</a> (located in Madison, WI)</li>
          <li><a href="http://www.menards.com/main/home.html" rel="external">Menards</a> (located in Madison, WI)</li>
          <li><a href="http://www.probuild.com/" rel="external">Probuild</a> (located in Madison, WI)</li>
        </ul>

        <h3>Tooling</h3>
        <ul>
          <li><a href="https://www.use-enco.com/CGI/INSRHM" rel="external">Enco</a></li>
          <li><a href="https://www.engman-taylor.com/Welcome" rel="external">Engman-Taylor</a></li>
          <li><a href="https://www.mscdirect.com/" rel="external">MSC</a></li>
          <li><a href="http://www.taindustrial.com/" rel="external">T &amp; A Industrial</a></li>
        </ul>

        <h3>Electronics</h3>
	<ul>
	  <li><a href="https://www.adafruit.com/" rel="external">Adafruit Industries</a></li>
          <li><a href="https://www.digikey.com/" rel="external">DigiKey Corp.</a></li>
          <li><a href="https://www.jameco.com/webapp/wcs/stores/servlet/StoreCatalogDisplay?langId=-1&storeId=10001&catalogId=10001" rel="external">Jamco Electronics</a></li>
	  <li><a href="https://www.sparkfun.com/" rel="external">Sparkfun Electronics</a></li>
        </ul> 
	<p>&#42;(Listings are in no way an endorsement of quality goods or services)</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../../footer.php"); ?>

  </body>
</html>
