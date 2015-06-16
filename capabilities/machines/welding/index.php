<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********       This will be shown in the browser tab         *************
         **************************************************************************** -->
    <?php $subtitle = "Welding";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->
    <script type="text/javascript" src="/jquerry/carousel_capabilities/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="/jquerry/carousel_capabilities/jquery.msCarousel-min.js"></script>

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">
        <?php require("../capabilities_index_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!--    <h2> tag is needed for formatting and accessibility purposes -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">Calendar</a></li>
              <li><a href="#">Capabilities links</a></li>
              <li><a href="#">Capabilities more</a></li>
            </ul>-->
      </div>

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Welding</h1>
        <p>Click on the images below to see the various welding related equipment in the Student Shop and learn about their capabilities.</p>

        <div class="mainGallery">
          <table width="700px" border="0" cellspacing="0" cellpadding="0" class="bigtable">

            <tr>
              <td align="center" valign="middle" class="left footer"><a href="javascript:void(0)" id="imgLeftThumb" class="nextPrevious previous">Previous</a></td>
              <td class="footer middleContent">
                <div id="s">
                  <ul id="carouselThumb" class="gallerythumb">
                    <li><img alt="Small image of CP302 MIG welder (MIG 1)" src="images/thumbs/cp302Top.jpg" /></li>
                    <li><img alt="Small image of CP302 MIG welder (MIG 2)" src="images/thumbs/cp302Bottom.jpg" /></li>
                    <li><img alt="Small image of CP200 MIG welder (MIG 3)" src="images/thumbs/cp200.jpg" /></li>
                    <li><img alt="Small image of CP250 MIG welder (MIG 4)" src="images/thumbs/cp250Ts.jpg" /></li>
                    <li><img alt="Small image of SP100 MIG welder (MIG 5)" src="images/thumbs/sp100.jpg" /></li>
                    <li><img alt="Small image of Millermatic 140 MIG welder (MIG 6)" src="images/thumbs/miller140.jpg" /></li>
                    <li><img alt="Small image of Syncrowave250 TIG welder (TIG 1)" src="images/thumbs/syncrowave2501.jpg" /></li>
                    <li><img alt="Small image of Syncrowave250 TIG welder (TIG 2)" src="images/thumbs/syncrowave2502.jpg" /></li>
                    <li><img alt="Small image of Syncrowave250DX TIG welder (TIG 3)" src="images/thumbs/syncrowave250Dx.jpg" /></li>
                    <li><img alt="Small image of cutting torch" src="images/thumbs/cuttingTorch.jpg" /></li>
                    <li><img alt="Small image of oxyacetylene torch" src="images/thumbs/oxyacetyleneTorch.jpg" /></li>
                    <li><img alt="Small image of plasma torch" src="images/thumbs/plasmaTorch.jpg" /></li>
                    <li><img alt="Small image of spot welder" src="images/thumbs/spotWelder.jpg" /></li>
                    <li><img alt="Small image of sand blaster" src="images/thumbs/sandBlaster.jpg" /></li>
                    <li><img alt="Small image of bench grinder" src="images/thumbs/benchGrinder.jpg" /></li>
                  </ul>
              </div></td>
              <td class="right footer" style="text-align:left"><a href="javascript:void(0)" id="imgRightThumb" class="nextPrevious next">Next</a></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="left"><a href="javascript:void(0)" id="imgLeftBig" class="nextPreviousBig previousBig">Previous</a></td>
              <td class="middleContent borderLR"><div id="carouselBig">

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of CP302 MIG welder (MIG 1)" src="images/cp302Top.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller CP-302 (MIG 1)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Table size: 48&quot; x 18&quot;</li>
                        <li>Work Envelope: 96&quot; x 96&quot;</li>
                        <li>.035 ER70S-3 wire</li>
                        <li>1/8&quot; to 1/2&quot; ferrous steel only</li>
                        <li>CO2 shielding gas</li>
                        <li>250 amp units</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of CP302 MIG welder (MIG 2)" src="images/cp302Bottom.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller CP-302 (MIG 2)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Table size: 48&quot; x 18&quot;</li>
                        <li>Work Envelope: 36&quot; x 48&quot;</li>
                        <li>.035 ER70S-3 wire</li>
                        <li>1/8&quot; to 1/2&quot; ferrous steel only</li>
                        <li>CO2 shielding gas</li>
                        <li>250 amp units</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of CP200 MIG welder (MIG 3)" src="images/cp200.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller CP-200 (MIG 3)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Table size: 48&quot; x 11&quot;</li>
                        <li>Work Envelope: 36&quot; x 48&quot;</li>
                        <li>.035 ER705S-3 wire</li>
                        <li>1/8&quot; to 1/2&quot; ferrous steel only</li>
                        <li>CO2 shielding gas</li>
                        <li>250 amp units</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of CP250 MIG welder (MIG 4)" src="images/cp250Ts.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller CP-250 TS (MIG 4)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Table size: 48&quot; x 12&quot;</li>
                        <li>Work Envelope: 68&quot; x 72&quot;</li>
                        <li>.035 ER70S-3 wire</li>
                        <li>1/8&quot; to 1/2&quot; ferrous steel only</li>
                        <li>CO2 shielding gas</li>
                        <li>250 amp units</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of SP100 MIG welder (MIG 5)" src="images/sp100.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Lincoln SP-100 (MIG 5)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>110 volt</li>
                        <li>.030&quot; ER70S-6 wire</li>
                        <li>24 gauge (.024) to 12 gauge (.105)</li>
                        <li>Ferrous steel only</li>
                        <li>C25 shielding gas</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Millermatic 140 MIG welder" src="images/miller140.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller Millermatic 140 (MIG 6)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>110 volt</li>
                        <li>.030&quot; ER70S-6 wire</li>
                        <li>24 gauge (.024) to 12 gauge (.105)</li>
                        <li>Ferrous steel only</li>
                        <li>C25 shielding gas</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Syncrowave 250 TIG welder (TIG 1)" src="images/syncrowave2501.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller Syncrowave 250 (TIG 1)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Steel &amp; aluminum</li>
                        <li>100&#37; argon gas</li>
                        <li>4-300 amps</li>
                        <li>1/16&quot; to 1/2&quot; steel</li>
                        <li>1/16&quot; to 3/8&quot; aluminum</li>
                        <li>Foot pedal control</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Syncrowave 250 TIG welder (TIG 2)" src="images/syncrowave2502.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller Syncrowave 250 (TIG 2)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Steel &amp; aluminum</li>
                        <li>100&#37; argon gas</li>
                        <li>4-300 amps</li>
                        <li>1/16&quot; to 1/2&quot; steel</li>
                        <li>1/16&quot; to 3/8&quot; aluminum</li>
                        <li>Foot pedal control</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Syncrowave250DX TIG welder (TIG 3)" src="images/syncrowave250Dx.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller Syncrowave 250 DX (TIG 3)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Steel &amp; aluminum</li>
                        <li>100&#37; argon gas</li>
                        <li>Water cooled torch</li>
                        <li>Pulser</li>
                        <li>4-250 amps</li>
                        <li>1/16&quot; to 1/2&quot; steel</li>
                        <li>1/16&quot; to 3/8&quot; aluminum</li>
                        <li>Foot pedal control</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of cutting torch" src="images/cuttingTorch.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Oxy-Acetylene Cutting Torch</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Ferrous steel only</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of ocyacetylene torch" src="images/oxyacetyleneTorch.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Oxy-Acetylene Welder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Ferrous steel only</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of plasma torch" src="images/plasmaTorch.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Thermal Dynamics Plasma Cutter</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>0-60 amps</li>
                        <li>24 gauge to 3/8&quot;</li>
                        <li>Can cut any conductive metal</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of spot welder" src="images/spotWelder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Miller JB-4 Spot Welder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>5500 second amps</li>
                        <li>1/8&quot; total capacity</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of sand blaster" src="images/sandBlaster.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Kelco Blast Cabinet</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Blast Media: Sand</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of bench grinder" src="images/benchGrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Central Machinery Bench Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Tungsten only</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                </div>

              </td>

              <td align="center" class="right"><a href="javascript:void(0)" id="imgRightBig" class="nextPreviousBig nextBig">Next</a></td>
            </tr>
          </table>
        </div>
        <script type="text/javascript">
          function activateThumb(no) {
          $("#carouselThumb li").removeClass("active");
          $("#carouselThumb li:eq("+no+")").addClass("active");
          }
          function bigSlideControl(arg) {
          var oBigController = arg;
          var currentItem = oBigController.getCurrentID();
          activateThumb(currentItem);
          if(currentItem==0) {
          $("#imgLeftBig").css({opacity:0.4});
          } else {
          $("#imgLeftBig").css({opacity:1});
          }

          //console.debug("currentItem "+currentItem)
          if(thumbs!=undefined) {
          thumbs.goto(parseInt(currentItem));
          }
          //      alert(currentItem);
          }
          function thumbSlideControl(arg) {
          var oController = arg;
          var currentItem = oController.getCurrentID();
          if(currentItem==0) {
          $("#imgLeftThumb").css({opacity:0.4});
          } else {
          $("#imgLeftThumb").css({opacity:1})
          }
          }

          // autoSlide:2000,
          var oBigController = $("#carouselBig").msCarousel({width:595, height:750,callback:bigSlideControl, showMessage:true, messageOpacity:1}).data("msCarousel");
          var thumbs = $("#carouselThumb").msCarousel({boxClass:'li', width:560, height:105, callback:thumbSlideControl, scrollSpeed:100}).data("msCarousel");

          //big button click
          $("#imgRightBig").click(function() {
          oBigController.next();
          });
          $("#imgLeftBig").click(function() {
          oBigController.previous();
          })

          //thumb click
          $("#imgRightThumb").click(function() {
          thumbs.next();
          thumbs.next();
          thumbs.next();
          });

          $("#imgLeftThumb").click(function() {
          thumbs.previous();
          thumbs.previous();
          thumbs.previous();
          })

          //add click event
          $("#carouselThumb li").click(function(arg) {
          var target = this;
          var counter = $("#carouselThumb li").index(target);
          oBigController.goto(parseInt(counter));
          })

        </script>
      </div> <!-- END OF MAINCONTENT -->

    </div>
    <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
