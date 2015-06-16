<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
    <meta name="robots" content="noindex, nofollow">

      <!-- ****************************************************************************
           **********                                                     *************
           **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
           **********   Title should be the same as the <h1> tag below    *************
           **********                                                     *************
           **************************************************************************** -->
      <?php $subtitle = "401 Authorization Required";?>

      <?php include ("functions.php") ?>
      <?php include("header.php"); ?>
      <?php include("main_nav.php"); ?>

      <!-- ************************* End of Navigation Items ****************************  -->

      <div id="wrapper" class="clear"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->
        <!-- container sets where contents begin including the left nav, middle (main content), and right nav  -->
        <div id="leftNav">
          <?php include ("about/about_left_nav.php") ?> <!-- Left Navigation in the include file -->

          <h2 class="subnav2"><span>Related Links</span></h2>
          <ul>
            <li><a href="http://www.map.wisc.edu/">Campus Map</a></li>
            <li><a href="https://rooms.engr.wisc.edu/?building=ECB">Engineering Centers Building</a></li>
            <li><a href="http://www.engr.wisc.edu/">College of Engineering</a></li>
          </ul>
        </div> <!-- end of leftNav-->
        <div id="MainContent"> <!-- sets the main content (middle column area) -->
          <img src="http://coestudentshop.engr.wisc.edu/images/old-hand-drill-small.jpg"j alt="old hand drill" align="right" style="border:0px;"/>
          <h1>Authorization Required</h1>
          <p>We're sorry, it seems you tried to reach a page that you requires authorization to be accessed.</p>
          <p>Please use our site navigation to find what you're looking for. Alternatively, you can search for content using our search box above. If you wish, you can also <a href="http://coestudentshop.engr.wisc.edu/about/contact.php">contact us</a>.</p>
          <!--Hard linking was used here so link works no matter what level of the site they are on when they reach the page-->

          <?php /*

$ip = getenv ("REMOTE_ADDR");

$requri = getenv ("REQUEST_URI");
$servname = getenv ("SERVER_NAME");
$combine = $ip . " tried to load " . $servname . $requri ;

$httpref = getenv ("HTTP_REFERER");
$httpagent = getenv ("HTTP_USER_AGENT");

$today = date("D M j Y g:i:s a T");



$message = "$today \n
<br>
  $combine <br> \n
    User Agent = $httpagent \n
    <h2> $note </h2>\n
    <br> $httpref ";

      $message2 = "$today \n
      $combine \n
      User Agent = $httpagent \n

      $httpref ";

      $to = "";
      $subject = "CoE 404 Error: Page not found";
      $from = "From: CoE Student Shop";

      mail($to, $subject, $message2, $from);

      /*echo $message; */
      ?>

        </div> <!-- END OF MAINCONTENT -->
      </div> <!-- END OF WRAPPER -->

      <?php include("footer.php"); ?>

    </body>
  </html>
