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
    <?php $subtitle = "Banned Materials";?>


    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php include ("about_policies_left_nav.php") ?> <!-- Left Navigation in the include file -->

        <!-- begin right navigation items       <h2> tag is needed for formatting and accessibility purposes -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
            </ul> -->
      </div> <!-- End of Left Nav -->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Banned Materials</h1>
        <p>Students are expected to have undertaken basic research into the safety and machinability of any materials they intend to work on in the shop (e.g. using a <a href="https://en.wikipedia.org/wiki/Msds" rel="external"><acronym title="Material Safety Data Sheet">MSDS</acronym></a> and the Machinery's Handbook). Materials that are known carcinogens, toxic, hardened (over 35 HRC), glass or glass filled, abrassive, corrosive, pyrophoric, produce fine particulate or aerosol when machined (i.e. produce dust or smoke), or require special tooling to be machined would not be acceptable. The Student Shop does not have the proper tooling or safety equipment to handle such materials and students working in the shop do not have sufficient training to properly deal with them.</p>

        <h2>The following are some examples of materials that would not be acceptable in the shop:</h2>
        <ul>
          <li><a href="https://en.wikipedia.org/wiki/Magnesium" rel="external">Magnesium</a> and its alloys (flammable)</li>
          <li><a href="https://en.wikipedia.org/wiki/Beryllium" rel="external">Beryllium</a> and its alloys (carcinogenic, dust, toxic)</li>
          <li><a href="https://en.wikipedia.org/wiki/FR-4">FR-4/G10</a> (toxic, glass filled)</li>
          <li><a href="https://en.wikipedia.org/wiki/Fiberglass" rel="external">Fiberglass</a> (glass filled)</li>
          <li><a href="https://en.wikipedia.org/wiki/Phenol_formaldehyde_resin" rel="external">Phenolic</a> (toxic)</li>
          <li><a href="https://en.wikipedia.org/wiki/Titanium" rel="external">Titanium</a> (special tooling)</li>
          <li><a href="https://en.wikipedia.org/wiki/Ceramic" rel="external">Ceramics</a> (abrassive, special tooling)</li>
          <li><a href="https://en.wikipedia.org/wiki/Graphite" rel="external">Graphite</a> (dust)</li>
          <li><a href="https://en.wikipedia.org/wiki/Hardened_steel" rel="external">Hardened Steels</a> (hardened)</li>
          <li>Higher Alloys (Super Alloys) such as <a href="https://en.wikipedia.org/wiki/Hastelloy" rel="external">hastelloy</a> or <a href="https://en.wikipedia.org/wiki/Niobium" rel="external">niobium</a> (special tooling)</li>
        </ul>

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../footer.php"); ?>

  </body>
</html>
