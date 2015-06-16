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
    <?php $subtitle = "Metal Working";?>

    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- *************************                          End of Navigation Items                         ****************************  -->
    <script type="text/javascript" src="/jquerry/carousel_capabilities/jquery-1.3.2.min.js"></script>
    <script type="text/javascript" src="/jquerry/carousel_capabilities/jquery.msCarousel-min.js"></script>

    <div id="wrapper">              <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

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

        <h1>Metal Working</h1>
        <p>The Student Shop has a variety of metal working equipment to help you complete your project. Click on the images below to see the various machines in the Student Shop and learn about their capabilities.</p>

        <div class="mainGallery">
          <table width="700px" border="0" cellspacing="0" cellpadding="0" class="bigtable">

            <tr>
              <td align="center" valign="middle" class="left footer"><a href="javascript:void(0)" id="imgLeftThumb" class="nextPrevious previous">Previous</a></td>
              <td class="footer middleContent">
                <div id="s">
                  <ul id="carouselThumb" class="gallerythumb">
                    <li><img alt="Small image of belt/disc sander" src="images/thumbs/beltdiscsander.jpg" /></li>
                    <li><img alt="Small image of Pexto brake" src="images/thumbs/pextobrake.jpg" /></li>
                    <li><img alt="Small image of Ellis drill press"src="images/thumbs/ellisdrillpress.jpg" /></li>
                    <li><img alt="Small image of Milwaukee grinder" src="images/thumbs/milwaukeegrinder.jpg" /></li>
                    <li><img alt="Small image of hydraulic press" src="images/thumbs/hydraulicpress.jpg" /></li>
                    <li><img alt="Small image of arbor press" src="images/thumbs/arborpress.jpg" /></li>
                    <li><img alt="Small image of bar folder" src="images/thumbs/barfolder.jpg" /></li>
                    <li><img alt="Small image of die punch" src="images/thumbs/diepunch.jpg" /></li>
                    <li><img alt="Small image of corner shear" src="images/thumbs/cornershear.jpg" /></li>
                    <li><img alt="Small image of Grizzly grinder" src="images/thumbs/grizgrinder.jpg" /></li>
                    <li><img alt="Small image of Wells horizontal bandsaw" src="images/thumbs/wellshorzsaw.jpg" /></li>
                    <li><img alt="Small image of Tannewitz bandsaw" src="images/thumbs/TannewitzBandSaw.jpg"/></li>
                    <li><img alt="Small image of Cleerman drillpress" src="images/thumbs/cleerdrillpress.jpg" /></li>
                    <li><img alt="Small image of Jet drill press" src="images/thumbs/jetdrillpress2.jpg" /></li>
                    <li><img alt="Small image of Jet drill press" src="images/thumbs/jetdrillpress1.jpg" /></li>
                    <li><img alt="Small image of Jet drill press" src="images/thumbs/jetdrillpress3.jpg" /></li>
                    <li><img alt="Small image of Wong Fu radial drill press" src="images/thumbs/furadialdrillpress.jpg" /></li>
                    <li><img alt="Small image of large Doall bandsaw" src="images/thumbs/lgdoallsaw.jpg" /></li>
                    <li><img alt="Small image of small Doall bandsaw" src="images/thumbs/smdoallsaw.jpg" /></li>
                    <li><img alt="Small image of multiform bender" src="images/thumbs/multiformbender.jpg" /></li>
                    <li><img alt="Small image of Pexto shear" src="images/thumbs/pextoshear.jpg" /></li>
                    <li><img alt="Small image of Pexto slip roller" src="images/thumbs/pextosliproller.jpg" /></li>
                    <li><img alt="Small image of Grizzly bender" src="images/thumbs/grizbender.jpg" /></li>
                    <li><img alt="Small image of Econo sand blaster" src="images/thumbs/econosandblaster.jpg" /></li>
                    <li><img alt="Small image of Ellis belt grinder" src="images/thumbs/ellisbeltgrinder.jpg" /></li>
                    <li><img alt="Small image of Westinghouse pedestal grinder" src="images/thumbs/westinghousegrinder.jpg" /></li>
                    <li><img alt="Small image of Utility grinder" src="images/thumbs/utilitygrinder.jpg" /></li>
                    <li><img alt="Small image of parts washer" src="images/thumbs/PartsWasher.jpg" /></li>
                  </ul>
                </div>
              </td>
              <td class="right footer" style="text-align:left"><a href="javascript:void(0)" id="imgRightThumb" class="nextPrevious next">Next</a></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="left"><a href="javascript:void(0)" id="imgLeftBig" class="nextPreviousBig previousBig">Previous</a></td>
              <td class="middleContent borderLR"><div id="carouselBig">

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of belt/disc sander" src="images/beltdiscsander.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Disc/Belt Sander</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Metal Only</li>
                        <li>Coarse Grit</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Pexto brake" src="images/pextobrake.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Pexto Brake</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>16 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Ellis drill press" src="images/ellisdrillpress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Ellis Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 60-900 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 18&quot; x 16&quot;</li>
                        <li>Drive: Belt</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Milwaukee grinder" src="images/milwaukeegrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Milwaukee Bench Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Carbide Tooling Only</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of hydraulic press" src="images/hydraulicpress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Hydraulic Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>75 ton capacity</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Back Hallway</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of arbor press" src="images/arborpress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Arbor Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>3 ton capacity</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of bar folder" src="images/barfolder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Bar Folder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>22 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of die punch" src="images/diepunch.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Die Punch</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>18 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of corner shear" src="images/cornershear.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Corner Shear</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>18 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Grizzly grinder" src="images/grizgrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Grizzly Bench Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Brass and steel wire wheels</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sanding Room</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Wells horizontal bandsaw" src="images/wellshorzsaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Wells Horizontal Band Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Can cut steel, aluminum, &amp; plastic</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Wood Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Tannewitz bandsaw" src="images/TannewitzBandSaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Tannewitz Band Saw</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Can cut steel, aluminum, &amp; plastic</li>
                        <li>Capable of cutting miters</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Cleerman drill press" src="images/cleerdrillpress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Cleereman Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 75-1600 rpm</li>
                        <li>Morse taper: MT4</li>
                        <li>Work envelope: 35&quot; x 28&quot;</li>
                        <li>Power feed speed range: 5-45 thousandths per revolution </li>
                        <li>Drive: Gear</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Jet drill press" src="images/jetdrillpress2.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 90-3610 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 19&quot; x 16&quot;</li>
                        <li>Drive: Gear</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Jet drill press" src="images/jetdrillpress1.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 60-3000 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 19&quot; x 21&quot;</li>
                        <li>Drive: Gear</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Jet drill press" src="images/jetdrillpress3.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Jet Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 90-3610 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 19&quot; x 16&quot;</li>
                        <li>Drive: Gear</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Wong Fu radial drill press" src="images/furadialdrillpress.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Rong Fu Radial Drill Press</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Speed range: 140-3000 rpm</li>
                        <li>Morse taper: MT3</li>
                        <li>Work envelope: 22&quot; x 18&quot;</li>
                        <li>Drive: Belt</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of large Doall bandsaw" src="images/lgdoallsaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>DoAll Band Saw (Large)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Steel only</li>
                        <li>Throat: 25-1/2&quot;</li>
                        <li>Usable blade height: 11&quot;</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of small Doall bandsaw" src="images/smdoallsaw.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>DoAll Band Saw (Small)</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Aluminum only</li>
                        <li>Throat: 16&quot;</li>
                        <li>Usable blade height: 9-1/5&quot;</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of multiform bender" src="images/multiformbender.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Kalamazoo Multiform Bender</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>20 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Pexto shear" src="images/pextoshear.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Pexto Shear</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>18 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Pexto slip roller" src="images/pextosliproller.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Pexto Slip Roller</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>22 gauge soft steel</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Grizzly bender" src="images/grizbender.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Grizzly Universal Bender</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>28-1/2 ton capacity</li>
                        <li>Max. capacity for round stock: 5/8&quot;</li>
                        <li>Max. capacity for square stock: 19/32&quot;</li>
                        <li>Max. capacity for flat stock: 1-3/16&quot; x 5/16&quot;</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sheetmetal Lab</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Econo sand blaster" src="images/econosandblaster.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Econoline Blast Cabinet</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Blast Media: Glass Bead</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Sanding Room</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Ellis belt grinder" src="images/ellisbeltgrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Ellis Belt Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Metal only</li>
                        <li>Coarse Grit</li>
                        <li>Belt Speed: 5000 SFM</li>
                        <li>Belt width: 2-1/2&quot;</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Westinghouse grinder" src="images/westinghousegrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Westinghouse Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>High speed steel tooling only</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Utility grinder" src="images/utilitygrinder.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Utility Grinder</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Mild steel only</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Main Shop</li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of parts washer" src="images/PartsWasher.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Allied Parts Washer</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Cleaning fluid: GrayMills <a href="/capabilities/docs/super_141_agitene.pdf">Super 141 Agitene</a></li>
                        <li>Work envelope: 20&quot; x 17&quot;</li>
                      </ul>
                      <h5>Location</h5>
                      <ul class="message">
                        <li>Wood Shop</li>
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
          //  alert(currentItem);
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

    </div> <!-- END OF WRAPPER -->

    <?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

  </body>
</html>
