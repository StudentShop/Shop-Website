<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
  <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

  <!-- ****************************************************************************
         **********                                                     *************
         **********    INSERT PAGE TITLE BELOW within quotations!!!!    *************
         **********   Title should be the same as the <h1> tag below    *************
         **********                                                     *************
         **************************************************************************** -->
  <?php $subtitle = "Student Shop";?>

    <?php require ($_SERVER['DOCUMENT_ROOT']."/functions.php"); ?>
      <?php require ($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
        <?php require ($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

          <script type="text/javascript" src="jquerry/homepage_rotate/rotate.js"></script>

          <script type="text/javascript" src="jquerry/homepage_rotate/fadeslideshow.js">
            // Ultimate Fade In Slideshow v2.0- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
            // This notice MUST stay intact for legal use
            // Visit Dynamic Drive at http://www.dynamicdrive.com/ for this script and 100s more
          </script>

          <script type="text/javascript">
            var mygallery = new fadeSlideShow({
              //ID of blank DIV on page to house Slideshow
              wrapperid: "fadeshow1",
              //width/height of gallery in pixels. Should reflect dimensions of largest image
              dimensions: [420, 267],
              imagearray: [
                //array is of the form ["image url", "url to go to  when image is clicked", "target attribute", "text displayed over image", "alt attribute" ]
                //["/images/pictures_homepage/welcomeBack.jpg", "/about/policies.php", "", "Welcome back!"],
                  //["/images/pictures_homepage/pre_diff_tuition.jpg", "/about/differentialtuition.php", "", "The shop before differential tuition. Click to learn more.", "Differential tuition advertisement"],
                ["/images/pictures_homepage/waterjet.gif", "/about/capabilities/instrshop/index.php", "", "Have two dimensional parts cut in record time using the new waterjet service", "waterjet service now available"],

                ["/images/pictures_homepage/jebresearch.jpg", "", "", "Jeb Phillips displays a friction stir welding tool that can transmit temperature data to aid research.", "Jeb Phillips displays a friction stir welding tool that can transmit temperature data aid research."],               
                ["/images/pictures_homepage/ME429F11.jpg", "http://courses.engr.wisc.edu/me/me429.html", "_new", "Engineering students learning about tool life for ME 429", "Student machining on a lathe"],
                ["/images/pictures_homepage/markresearch.jpg", "", "", "Mark Rodarte displays a research apparatus he built to allow researchers to see R245FA while boiling.", "Mark Rodarte displays a research apparatus he built to allow researchers to see R245FA while boiling."],
                    //["/images/pictures_homepage/amandamic.jpg", "/training/basics/measurement.php#mic", "", "This engineering student knows how to read a micrometer, do you? Click to learn how.", "Student measuring part on lathe with micrometer"],
                    //["/images/pictures_homepage/DiffTuitionMachi.gif", "/about/differentialtuition.php", "", "Learn how differential tuition is improving your education.", "Differential tuition advertisement"],
                    ["/images/pictures_homepage/instrumentshop.jpg", "http://instrumentshop.engr.wisc.edu/", "_new", "The Instrument Shop can fabricate custom parts for students and faculty", "Instrument maker fabricating part on mill"]
                    //<!--no trailing comma after very last image element!-->
                  ],
                  displaymode: {
                    type: 'auto',
                    pause: 6000,
                    cycles: 0,
                    wraparound: false
                  },
                  persist: false, //remember last viewed slide and recall within same session?
                  fadeduration: 750, //transition duration (milliseconds)
                  descreveal: "always",
                  togglerid: ""
                })
              </script>

              <!-- ************************* End of Navigation Items ****************************  -->

              <div id="wrapper">
                <!-- <h1>Student Shop</h1> -->

                <div id="container">

                  <div id="side-a">

                    <h1 class="hide">Student Shop</h1>
                    <!-- <h1> tag is only here for accessibility purposes   -->

                    <img src="/images/Clock.jpg" align="left" alt="icon: image of a clock" />

                    <div class="headerLeftCol">Shop Hours</div>

                    <div class="specialtycontent">
                      <?php include ($_SERVER['DOCUMENT_ROOT']."/hours_setter.php"); ?>
                    </div>
                    <!-- spceialtycontent -->


                    <img src="images/icons/letter.jpg" align="left" alt="icon image of mail" />

                    <div class="headerLeftCol2"><a href="/about/contact.php">Contact us</a></div>

                    <div class="specialtycontent">
                      <p>Email: <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#115;&#104;&#111;&#112;&#64;&#101;&#110;&#103;&#114;&#46;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;">&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#115;&#104;&#111;&#112;&#64;&#101;&#110;&#103;&#114;&#46;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;</a>
                        <br /> Phone: <a href="&#116;&#101;&#108;&#58;&#49;&#45;&#54;&#48;&#56;&#45;&#50;&#54;&#49;&#45;&#49;&#49;&#49;&#50;">(&#54;&#48;&#56;) &#50;&#54;&#49;&#45;&#49;&#49;&#49;&#50;</a>
                        <br /> Fax: (608) 261-1111</p>
                      <p>CoE Student Shop
                        <br /> Engineering Centers Bdg
                        <br />
                        <a href="/about/floorplan.php">Rm B1086</a>
                        <br />
                        <a href="http://coestudentshop.engr.wisc.edu/about/location.php">1550 Engineering Dr<br />
                    Madison, WI 53706</a></p>
                    </div>
                    <!-- specialtycontent -->

                  </div>
                  <!-- side-a -->

                  <div id="middle">

                    <div class="slideshow">
                      <div id="fadeshow1"></div>
                    </div>
                    <!-- slideshow -->

                    <a href="https://emu.engr.wisc.edu/emu/">

                      <p id="get-a">Get a</p>

                      <img src="images/GearsFeaturedTraining.png" align="left" style=" position:relative; margin: 30px 0px 0px -20px;" alt="image of a shop permit" />

                      <div class="headerMiddleCol">
                        <div class="firstchar">Shop</div>
                        <div class="firstchar2">Permit</div>
                      </div>
                      <!-- headerMiddleCol -->

                      &nbsp;&nbsp;&nbsp;&nbsp;

                      <img src="images/permits.jpg" alt="image of shop permits" style="margin: -100px 0px 0px 20px;" />
                    </a>

                  </div>

                  <div id="side-b">

                    <!-- Top Right Events Area -->

                    <img src="images/icons/calendar3.jpg" align="left" alt="icon: image of a calendar" style="z-index:-10;" />

                    <div class="headerRightCol2"><a href="events/index.php">News &amp; Events</a></div>

                    <div class="specialtycontent">
                      <!-- Add Events Here -->
                      <!--<p><a href="/events/index.php">No Upcoming Events</a><br /></p>-->
                  <p><a href="/events/index.php#090116">Shop Closed</a>
                        <br />09/01/16 - 09/05/16</p>
                  <p class="more"><a href="/events/index.php">View more...</a></p>

                  <!-- Bottom Right Featured Training Area -->

                  <img src="/images/icons/training.jpg" align="left" alt="icon: image of a gear" />

                  <div class="headerRightCol"><a href="training/index.php">Featured Training</a></div>

                  <div class="specialtycontent">

                    <!-- Add Featured Events Here -->
                    <p><a href="/permit/info/upgrades/woodworking_2.php">Woodworking 2 Upgrade</a></p>
                    <p><a href="/permit/info/upgrades/laser_1.php">Laser 1 Upgrade</a></p>
                    <p><a href="/permit/info/upgrades/ironworker_1.php">Ironworker 1 Upgrade</a></p>

                  </div>
                  <!-- specialtycontent -->

                </div>
                <!-- side-b -->

              </div>
              <!-- container -->

            </div>
            <!-- wrapper -->

            <?php require ($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>
              </body>

</html>
