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
    <?php $subtitle = "Questions";?>

    <?php include ("../functions.php") ?>
    <?php include("../header.php"); ?>
    <?php include("../main_nav.php"); ?>

    <!-- ************************* End of Navigation Items ****************************  -->

    <div id="wrapper"> <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

      <div id="leftNav">

        <?php include ("about_left_nav.php") ?> <!-- Left Navigation in the include file -->
        <!-- begin right navigation items   <h2> tag is needed for formatting and accessibility purposes -->
        <!--<h2 class="subnav2"><span>Related Links</span></h2>
            <ul>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
              <li><a href="#">----</a></li>
            </ul>-->

      </div> <!--END LEFTNAV-->

      <div id="MainContent"> <!-- sets the main content (middle column area) -->

        <h1>Questions, Concerns, or Accessibility Issues</h1>
        <!--<p>Please submit comments in the space provided below. If you would like to send a message via E-mail, please send to-->
        <p>If you have questions, concerns, or accessiblity issues please contact us via email at <a href="&#109;&#97;&#105;&#108;&#116;&#111;&#58;&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#115;&#104;&#111;&#112;&#64;&#101;&#110;&#103;&#114;&#46;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;">&#115;&#116;&#117;&#100;&#101;&#110;&#116;&#115;&#104;&#111;&#112;&#64;&#101;&#110;&#103;&#114;&#46;&#119;&#105;&#115;&#99;&#46;&#101;&#100;&#117;</a>.</p>
        <!--<div id="middle_form">
            <form action="feedback.php" method="post" id="sendEmail">
              <table width="583" border="0" cellpadding="0" cellspacing="0" class="contacttable">
                <tr>
                  <td width="10" valign="top"><strong>*Full Name:</strong></td>
                  <td width="295"><input type="text" name="nameFrom" id="nameFrom" value="<?= $_POST['nameFrom']; ?>"  class="textfield"/></td>
                </tr>
                <tr>
                  <td valign="top"><strong>*Email:</strong></td>
                  <td><input type="text" name="emailFrom" id="emailFrom" value="<?= $_POST['emailFrom']; ?>" class="textfield"/></td>
                </tr>
                <tr>
                  <td valign="top"><strong>*Subject: </strong></td>
                  <td><input type="text" name="subject" id="subject" value="<?= $_POST['subject']; ?>" class="textfield"/></td>
                </tr>
                <tr>
                  <td valign="top"><strong>*Message: </strong></td>
                  <td><textarea name="message" id="message"><?= $_POST['message']; ?></textarea></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td><p class="alert">* All fields are required</p></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td><div id="recaptcha_widget" style="display:none">
                      <div id="recaptcha_image"></div>
                      <div class="recaptcha_only_if_incorrect_sol" style="color:red">Incorrect please try again</div>
                      <span class="recaptcha_only_if_image">Please validate the texts above:</span> <br />
                      <input type="text" id="recaptcha_response_field" name="recaptcha_response_field" size="25" style="height:20px;border:1px;border-color:#b5b5b5;border-style:solid;"/>
                      <?= $_POST['recaptcha_response_field']; ?>
                      <div><a href="javascript:Recaptcha.reload()">Get another reCAPTCHA</a></div>
                      <div class="recaptcha_only_if_image"></div>
                      <div class="recaptcha_only_if_audio"><a href="javascript:Recaptcha.switch_type('image')">Get an image CAPTCHA</a></div>
                    </div>
                    <?php
                require_once('recaptchalib.php');

                // Get a key from http://recaptcha.net/api/getkey
                $publickey = "6LeDWr4SAAAAAMcl1Ke-JweFRUrouQgVUfIyADKY"; // you need to change this to your own key

                # the response from reCAPTCHA
                $resp = null;
                # the error code from reCAPTCHA, if any
                $error = null;

                echo recaptcha_get_html($publickey, $error);
                ?></td>
                </tr>
                <tr>
                  <td valign="top">&nbsp;</td>
                  <td><input type="submit" value="Submit" name="submit" id="submit"/>
                    <input name="reset" type="reset" class="fb" /></td>
                </tr>
              </table>
            </form>-->

      </div> <!-- END OF MAINCONTENT -->

    </div> <!-- END OF WRAPPER -->

    <?php include("../footer.php"); ?>

  </body>
</html>
