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
    <?php $subtitle = "Wood Working";?>

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

        <h1>Wood Working</h1>
        <p>Click on the images below to see the various wood working equipment in the Student Shop and learn about their capabilities.
        </p>

        <div class="mainGallery">
          <table width="700px" border="0" cellspacing="0" cellpadding="0" class="bigtable">

            <tr>
              <td align="center" valign="middle" class="left footer"><a href="javascript:void(0)" id="imgLeftThumb" class="nextPrevious previous">Previous</a></td>
              <td class="footer middleContent">
                <div id="s">
                  <ul id="carouselThumb" class="gallerythumb">
                    <li><img alt="Small image of Clausing drill press"  src="images/thumbs/clausingDrillPress.jpg"/></li>
                    <li><img alt="Small image of LS121 miter saw" src="images/thumbs/ls1214MiterSaw.jpg"/></li>
                    <li><img alt="Small image of large Jet bandsaw" src="images/thumbs/largeJetBandSaw.jpg"/></li>
                    <li><img alt="Small image of small Jet bandsaw" src="images/thumbs/smallJetBandSaw.jpg"/></li>
                    <li><img alt="Small image of Delta bandsaw" src="images/thumbs/deltaBandSaw.jpg"/></li>
                    <li><img alt="Small image of spindle sander" src="images/thumbs/spindleSander.jpg"/></li>
                    <li><img alt="Small image of disc sander" src="images/thumbs/discSander.jpg"/></li>
                    <li><img alt="Small image of Jet disc/belt sander" src="images/thumbs/jetDiscBeltSander.jpg"/></li>
                    <li><img alt="Small image of small belt/disc sander" src="images/thumbs/smallDiscBeltSander.jpg"/></li>
                    <li><img alt="Small image of DXT miter saw" src="images/thumbs/dxtMiterSaw.jpg"/></li>
                    <li><img alt="Small image of SawStop table saw" src="images/thumbs/sawStopTableSaw.jpg"/></li>
                    <li><img alt="Small image of Delta table saw" src="images/thumbs/deltaTableSaw.jpg"/></li>
                    <li><img alt="Small image of panel saw" src="images/thumbs/panelSaw.jpg"/></li>
                    <li><img alt="Small image of radial drill press" src="images/thumbs/radialDrillPress.jpg"/></li>
                    <li><img alt="Small image of buffing wheel" src="images/thumbs/buffingWheel.jpg"/></li>
                  </ul>
              </div></td>
              <td class="right footer" style="text-align:left"><a href="javascript:void(0)" id="imgRightThumb" class="nextPrevious next">Next</a></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="left"><a href="javascript:void(0)" id="imgLeftBig" class="nextPreviousBig previousBig">Previous</a></td>
              <td class="middleContent borderLR"><div id="carouselBig">


                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Clausing drill press" src="images/clausingDrillPress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Clausing Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 240 - 2000 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 22&quot; x 19&quot;</li>
                        <li>Drive: Belt</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of LS121 miter saw" src="images/ls1214MiterSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Makita Miter Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Blade diameter: 12&quot;</li>
                        <li>Crown molding (nested): 6-5/8&quot;</li>
                        <li>Baseboard (vertical): 4-3/4&quot;</li>
                        <li>Max cutting capacity:
                          <ul>
                            <li>90&deg;/90&deg; = 2-13/16&quot; x 12&quot;</li>
                            <li>45&deg;/45&deg;(L/R) = 2-13/16&quot; x 8-1/2&quot;</li>
                          </ul>
                        </li>
                        <li>No load speed: 3,200 rpm</li>
                        <li>Wood only</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of large Jet bandsaw" src="images/largeJetBandSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Bandsaw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Wood/plastic only</li>
                        <li>Throat: 25-1/2&quot;</li>
                        <li>Usable blade height: 11&quot;</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of small Jet bandsaw" src="images/smallJetBandSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Bandsaw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Wood/plastic only</li>
                        <li>Throat: 16&quot;</li>
                        <li>Usable blade height: 12&quot;</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Delta bandsaw" src="images/deltaBandSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Delta Bandsaw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Wood/plastic only</li>
                        <li>Throat: 13&quot;</li>
                        <li>Usable blade height: 6&quot;</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of spindle sander" src="images/spindleSander.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Grizzly Oscillating Spindle Sander</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Spindle sizes: 1/2&quot;, 3/4&quot;, 1&quot;, 1-1/2&quot;, 2&quot;, 3&quot;</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>


                  <div class="set">
                    <div class="imgImage"><img alt="Large image of disc sander" src="images/discSander.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Grizzly Disc Sander</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>12&quot; sanding disc</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Jet disc/belt sander" src="images/jetDiscBeltSander.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Disc/Belt Sander</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>12&quot; sanding disc</li>
                        <li>6&quot; sanding belt</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of small disc/belt sander" src="images/smallDiscBeltSander.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Disc/Belt Sander</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>6&quot; sanding disc</li>
                        <li>4&quot; sanding belt</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of DXT miter saw" src="images/dxtMiterSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Makita Compound Miter Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Blade diameter: 10&quot;</li>
                        <li>Crown molding (nested): 6-5/8&quot;</li>
                        <li>Baseboard (vertical): 4-3/4&quot;</li>
                        <li>Max cutting capacity:
                          <ul>
                            <li>90&deg;/90&deg; = 2-13/16&quot; x 12&quot;</li>
                            <li>45&deg;/45&deg;(L/R) = 2-13/16&quot; x 8-1/2&quot;</li>
                          </ul>
                        </li>
                        <li>No load speed: 3,200 rpm</li>
                        <li>Wood only</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of SawStop table saw" src="images/sawStopTableSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>SawStop Table Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Absolutely no plastics, treated lumber, or damp wood</li>
                        <li>10&quot; blade</li>
                        <li>Fence and miter guage available</li>
                        <li><a href="https://www.youtube.com/watch?v=cTUOhYcw4ZY" rel="external">SawStop safety system</a></li>
                        <li>More detailed specifications can be found <a href="http://www.sawstop.com/table-saws/by-model/industrial-cabinet-saw" rel="external">here</a>.</li>
                        <li>SawStop manual available <a href="/training/wood/saws.php" rel="external">here</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Delta table saw" src="images/deltaTableSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Table Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>10&quot; blade</li>
                        <li>Fence and miter guage available</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of panel saw" src="images/panelSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Panel Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Can handle panels up to 8&#39; x 4&#39; x 2&quot;</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of radial drill press" src="images/radialDrillPress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Radial Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Angles: yes</li>
                        <li>16&quot; throat</li>
                        <li>9&quot; usable depth</li>
                        <li>3&quot; quill travel</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of buffing wheel" src="images/buffingWheel.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Radial Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Rouge buffing compound available for (ask shop staff):
                          <ul>
                            <li>brass</li>
                            <li>copper</li>
                            <li>aluminium</li>
                            <li>stainless steel</li>
                            <li>steel</li>
                            <li>iron</li>
                          </ul>
                        </li>
                        <li>2-6&quot; buffing wheels</li>
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
