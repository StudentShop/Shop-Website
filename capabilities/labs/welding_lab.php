<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Welding Lab";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("capabilities_labs_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Capabilities links</a></li>
              <li><a href="#">Capabilities more</a></li>

            </ul>-->
      </div> <!-- leftNav  -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->
        <h1>Welding Lab</h1>

        <h2>Overview</h2>
        <p>The welding lab has a variety of equipment available to facilitate various welding operations. The welding lab is open during the same hours as the Student Shop. However, students wishing to use the welding lab at other times may check out a keycard from the shop.</p>
        <p>Note: Most of the equipment in the welding lab requires a permit upgrade to use. You can review permit upgrades specific to welding and their requirements on the <a href="/permit/info/upgrades/index.php">Permit Upgrades</a> page.</p>

        <h2>Available Equipment</h2>
        <p>You can see pictures and discriptions of the various machines available <a href="/capabilities/machines/welding/index.php">here</a>.</p>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
