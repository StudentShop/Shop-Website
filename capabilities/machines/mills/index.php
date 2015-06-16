<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
  <head>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

    <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********      This will be shown in the browser tab          *************
         **************************************************************************** -->
    <?php $subtitle = "Mills";?>


    <?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
    <?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->
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

        <h1>Mills</h1>
        <p>The Student Shop currently has 8 milling machines. Four of the milling machines have two-axis CNC and the remaining mill has three-axis CNC. Click on the images below to see the various mills in the Student Shop and learn about their capabilities.</p>

        <div class="mainGallery">
          <table width="700px" border="0" cellspacing="0" cellpadding="0" class="bigtable">

            <tr>
              <td align="center" valign="middle" class="left footer"><a href="javascript:void(0)" id="imgLeftThumb" class="nextPrevious previous">Previous</a></td>
              <td class="footer middleContent">
                <div id="s">
                  <ul id="carouselThumb" class="gallerythumb">
                    <li><img alt="Small image of Eisen 1 mill" src="images/thumbs/Eisen1.jpg" /></li>
                    <li><img alt="Small image of Eisen 2 mill" src="images/thumbs/Eisen2.jpg" /></li>
                    <li><img alt="Small image of Eisen 6 mill" src="images/thumbs/Eisen6.jpg" /></li>
                    <li><img alt="Small image of Eisen 7 mill" src="images/thumbs/Eisen7.jpg" /></li>
                    <li><img alt="Small image of Trak DPM2 mill" src="images/thumbs/Trakdpm2.jpg" /></li>
                    <li><img alt="Small image of Trak 2 mill" src="images/thumbs/Trak2.jpg" /></li>
                  </ul>
                </div>
              </td>
              <td class="right footer" style="text-align:left"><a href="javascript:void(0)" id="imgRightThumb" class="nextPrevious next">Next</a></td>
            </tr>
            <tr>
              <td align="center" valign="top" class="left"><a href="javascript:void(0)" id="imgLeftBig" class="nextPreviousBig previousBig">Previous</a></td>
              <td class="middleContent borderLR"><div id="carouselBig">

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Eisen 1 mill" src="images/Eisen1.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Eisen 1</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 30&quot;</li>
                        <li>y: 17&quot;</li>
                        <li>z: 13&quot;</li>
                        <li>Table Length: 54&quot;</li>
                        <li>Table Width: 10&quot;</li>
                        <li>Max/Min RPM: 0-2000 RPM (for shop use)</li>
                        <li>Quill Travel: 4.8&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak EMX</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Eisen 2 mill" src="images/Eisen2.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Eisen2</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 30&quot;</li>
                        <li>y: 17&quot;</li>
                        <li>z: 13&quot;</li>
                        <li>Table Length: 54&quot;</li>
                        <li>Table Width: 10&quot;</li>
                        <li>Max/Min RPM: 0-2000 RPM (for shop use)</li>
                        <li>Quill Travel: 4.8&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak EMX</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Eisen 6 mill" src="images/Eisen6.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Eisen 6</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 26&quot;</li>
                        <li>y: 15&quot;</li>
                        <li>z: 14&quot;</li>
                        <li>Table Length: 50&quot;</li>
                        <li>Table Width: 10&quot;</li>
                        <li>Max/Min RPM: 0-2000 RPM (for shop use)</li>
                        <li>Quill Travel: 4.7&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak EMX</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Eisen 7 mill" src="images/Eisen7.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Eisen 7</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 26&quot;</li>
                        <li>y: 15&quot;</li>
                        <li>z: 14&quot;</li>
                        <li>Table Length: 50&quot;</li>
                        <li>Table Width: 10&quot;</li>
                        <li>Max/Min RPM: 0-2000 RPM (for shop use)</li>
                        <li>Quill Travel: 4.7&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak EMX</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Trak DPM 2 mill" src="images/Trakdpm2.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Trak DPM 2</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 29&quot;</li>
                        <li>y: 15-1/2&quot;</li>
                        <li>z: 24&quot;</li>
                        <li>Table Length: 49&quot;</li>
                        <li>Table Width: 9&quot;</li>
                        <li>Max/Min RPM: 40-5000 RPM</li>
                        <li>Quill Travel: 4-1/2&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak SMX</a></li>
                      </ul>
                    </div>
                    <div class="clear"></div>
                  </div>

                  <div class="set">
                    <div class="imgImage"><img alt="Large image of Trak 2 mill" src="images/Trak2.jpg" width="550" height="370" /></div>
                    <div class="imgCaption">
                      <h2>Trak 2</h2>
                      <h5>Specifications</h5>
                      <ul class="message">
                        <li>Usable Travel:</li>
                        <li>x: 29&quot;</li>
                        <li>y: 11.5&quot;</li>
                        <li>z: 14&quot;</li>
                        <li>Table Length: 49&quot;</li>
                        <li>Table Width: 9&quot;</li>
                        <li>Max/Min RPM: 0-2000 RPM (for shop use)</li>
                        <li>Quill Travel: 4.7&quot;</li>
                        <li>Controller: <a href="/training/machining/cnc.php">Proto Trak Edge</a></li>
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
