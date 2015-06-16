<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" >
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

<!-- ****************************************************************************
**********                                                                                                                      *************
**********              INSERT PAGE TITLE BELOW within quotations!!!!           *************
**********              Title should be the same as the <h1> tag below          *************
**********                                                                                                                      *************
*********************************************************************************       -->
                                <?php $subtitle = "Lathe Training";?>


                <?php include ("../../functions.php") ?>
                <?php include("../../header.php"); ?>
                <?php include("../../main_nav.php"); ?>

<!-- *************************                          End of Navigation Items                         ****************************  -->

<div id="wrapper">              <!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

    <div id="leftNav">
                <?php include ("training_machines_left_nav.php") ?> <!-- Left Navigation in the include file -->

                <h2 class="subnav2"><span>Related Links</span></h2>
                        <ul>
                <li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
                <li><a href="../../events/index.php">Events</a></li>
                <li><a href="../../permit/info/testpiece.php">Test Piece</a></li>
                                <!--<li><a href="#">Featured Videos</a></li>-->
            </ul>
    </div> <!-- END LEFTNAV -->

        <div id="MainContent"> <!-- sets the main content (middle column area) -->


                <h1>Lathe Training</h1>

                <h2>Overview</h2>
                <p>The lathe is one of the most commonly used tools in a machine shop (second only to the mill) and can perform a number of essential machining operations.</p>
                <p>If you are looking for a print of the test piece you can find it <a href="../../permit/info/testpiece.php">here</a></p>

            <h2>Shop Training</h2>
            	<p>The shop provides training in the form of <a href="/permit/info/upgrades/index.php">permit upgrades</a>. The following permit upgrades deal with lathes:</p>
                <ul>
		    <li><a href="/permit/info/upgrades/cnc_lathe_1.php">CNC Lathe 1</a></li>
		    <li><a href="/permit/info/upgrades/cnc_lathe_2.php">CNC Lathe 2</a></li>
                </ul>

            <h2>Videos</h2>
	<p>All shop videos can be found on our Youtube page: <a href="http://www.youtube.com/user/UWStudentShop?feature=watch">UWStudentShop</a>.</p>
			
		<a name="speeds"></a>
            <h2>Shop Speeds and Feeds Calculator</h2>
                <p>These speeds are optimized for engineering students learning to machine, professionals may want to use a different calculator.</p>
                        <object classid="clsid:D27CDB6E-AE6D-11cf-96B8-444553540000" width="600" height="600">
                                <param name="movie" value="media/RPM-Calculator_v4.swf" />
                                <!--[if !IE]>-->
                                <object type="application/x-shockwave-flash" data="media/RPM-Calculator_v4.swf" width="600" height="600">
                    </object>
                                <!--<![endif]-->
                        </object>

            <a name="threadcut"></a>
            <h2>Thread Cutting on the lathe</h2>
                                <h3>Depth to feed tool when cutting American threads</h3>
                <h4>National coarse and fine</h4>
                <table border="1">
                                        <tr>
                                                <th>Threads per inch</th>
                                                <th>Depth of thread <sub>1</sub></th>
                        <th>Double depth of thread</th>
                        <th>Feed depth compound at 30&deg; <sub>2</sub></th>
                        <th>Width of flat</th>
                        <th>Threads per inch</th>
                                        </tr>
                                        <tr> <!--Row 1-->
                                                <td>2</td>
                                                <td>0.3247</td>
                        <td>0.64950</td>
                        <td>0.3749</td>
                        <td>0.0625</td>
                        <td>2</td>
                                        </tr>
                                        <tr> <!--Row 2-->
                                                <td>2 1/4</td>
                                                <td>0.2887</td>
                        <td>0.5773</td>
                        <td>0.3334</td>
                        <td>0.0556</td>
                        <td>2 1/4</td>
                                        </tr>
                    <tr> <!--Row 3-->
                                                <td>2 3/8</td>
                                                <td>0.2735</td>
                        <td>0.54694</td>
                        <td>0.3158</td>
                        <td>0.0526</td>
                        <td>2 3/8</td>
                                        </tr>
                    <tr> <!--Row 4-->
                                                <td>2 1/2</td>
                                                <td>0.2598</td>
                        <td>0.51960</td>
                        <td>0.3000</td>
                        <td>0.0500</td>
                        <td>2 1/2</td>
                                        </tr>
                    <tr> <!--Row 5-->
                                                <td>2 5/8</td>
                                                <td>0.2474</td>
                        <td>0.49485</td>
                        <td>0.2856</td>
                        <td>0.0476</td>
                        <td>2 5/8</td>
                                        </tr>
                    <tr> <!--Row 6-->
                                                <td>2 3/4</td>
                                                <td>0.2362</td>
                        <td>0.47256</td>
                        <td>0.2727</td>
                        <td>0.0455</td>
                        <td>2 3/4</td>
                                        </tr>
                    <tr> <!--Row 7-->
                                                <td>2 7/8</td>
                                                <td>0.2259</td>
                        <td>0.45182</td>
                        <td>0.2608</td>
                        <td>0.0435</td>
                        <td>2 7/8</td>
                                        </tr>
                    <tr> <!--Row 8-->
                                                <td>3</td>
                                                <td>0.2165</td>
                        <td>0.4330</td>
                        <td>0.2500</td>
                        <td>0.0417</td>
                        <td>3</td>
                                        </tr>
                    <tr> <!--Row 10-->
                                                <td>3 1/4</td>
                                                <td>0.1998</td>
                        <td>0.39966</td>
                        <td>0.2307</td>
                        <td>0.0385</td>
                        <td>3 1/4</td>
                                        </tr>
                    <tr> <!--Row 11-->
                                                <td>3 1/2</td>
                                                <td>0.1856</td>
                        <td>0.37114</td>
                        <td>0.2143</td>
                        <td>0.0357</td>
                        <td>3 1/2</td>
                                        </tr>
                    <tr> <!--Row 12-->
                                                <td>4</td>
                                                <td>0.1624</td>
                        <td>0.32475</td>
                        <td>0.1875</td>
                        <td>0.0312</td>
                        <td>4</td>
                                        </tr>
                    <tr> <!--Row 13-->
                                                <td>4 1/2</td>
                                                <td>0.1443</td>
                        <td>0.28869</td>
                        <td>0.1667</td>
                        <td>0.0278</td>
                        <td>4 1/2</td>
                                        </tr>
                    <tr> <!--Row 14-->
                                                <td>5</td>
                                                <td>0.1299</td>
                        <td>0.2598</td>
                        <td>0.1500</td>
                        <td>0.0250</td>
                        <td>5</td>
                                        </tr>
                    <tr> <!--Row 15-->
                                                <td>5 1/2</td>
                                                <td>0.1181</td>
                        <td>0.23618</td>
                        <td>0.1363</td>
                        <td>0.0227</td>
                        <td>5 1/2</td>
                                        </tr>
                    <tr> <!--Row 16-->
                                                <td>6</td>
                                                <td>0.1083</td>
                        <td>0.2165</td>
                        <td>0.1250</td>
                        <td>0.0208</td>
                        <td>6</td>
                                        </tr>
                    <tr> <!--Row 17-->
                                                <td>7</td>
                                                <td>0.0928</td>
                        <td>0.18557</td>
                        <td>0.1071</td>
                        <td>0.0178</td>
                        <td>7</td>
                                        </tr>
                    <tr> <!--Row 18-->
                                                <td>8</td>
                                                <td>0.0812</td>
                        <td>0.16237</td>
                        <td>0.0937</td>
                        <td>0.0156</td>
                        <td>8</td>
                                        </tr>
                    <tr> <!--Row 19-->
                                                <td>9</td>
                                                <td>0.0722</td>
                        <td>0.14433</td>
                        <td>0.0833</td>
                        <td>0.0139</td>
                        <td>9</td>
                                        </tr>
                    <tr> <!--Row 20-->
                                                <td>10</td>
                                                <td>0.0650</td>
                        <td>0.1299</td>
                        <td>0.0750</td>
                        <td>0.0125</td>
                        <td>10</td>
                                        </tr>
                    <tr> <!--Row 21-->
                                                <td>11</td>
                                                <td>0.0590</td>
                        <td>0.11809</td>
                        <td>0.0682</td>
                        <td>0.0113</td>
                        <td>11</td>
                                        </tr>
                    <tr> <!--Row 22-->
                                                <td>11 1/2</td>
                                                <td>0.0564</td>
                        <td>0.11295</td>
                        <td>0.0651</td>
                        <td>0.0108</td>
                        <td>11 1/2</td>
                                        </tr>
                    <tr> <!--Row 23-->
                                                <td>12</td>
                                                <td>0.0541</td>
                        <td>0.10825</td>
                        <td>0.0624</td>
                        <td>0.0104</td>
                        <td>12</td>
                                        </tr>
                    <tr> <!--Row 24-->
                                                <td>13</td>
                                                <td>0.0500</td>
                        <td>0.09992</td>
                        <td>0.0577</td>
                        <td>0.0096</td>
                        <td>13</td>
                                        </tr>
                    <tr> <!--Row 25-->
                                                <td>14</td>
                                                <td>0.0464</td>
                        <td>0.09278</td>
                        <td>0.0535</td>
                        <td>0.0089</td>
                        <td>14</td>
                                        </tr>
                    <tr> <!--Row 26-->
                                                <td>15</td>
                                                <td>0.0433</td>
                        <td>0.08660</td>
                        <td>0.0499</td>
                        <td>0.0083</td>
                        <td>15</td>
                                        </tr>
                    <tr> <!--Row 27-->
                                                <td>16</td>
                                                <td>0.0406</td>
                        <td>0.08118</td>
                        <td>0.0469</td>
                        <td>0.0078</td>
                        <td>16</td>
                                        </tr>
                    <tr> <!--Row 28-->
                                                <td>18</td>
                                                <td>0.0361</td>
                        <td>0.07216</td>
                        <td>0.0417</td>
                        <td>0.0069</td>
                        <td>18</td>
                                        </tr>
                    <tr> <!--Row 29-->
                                                <td>20</td>
                                                <td>0.0325</td>
                        <td>0.06495</td>
                        <td>0.0375</td>
                        <td>0.0062</td>
                        <td>20</td>
                                        </tr>
                    <tr> <!--Row 30-->
                                                <td>22</td>
                                                <td>0.0295</td>
                        <td>0.05904</td>
                        <td>0.0340</td>
                        <td>0.0056</td>
                        <td>22</td>
                                        </tr>
                    <tr> <!--Row 31-->
                                                <td>24</td>
                                                <td>0.02706</td>
                        <td>0.05412</td>
                        <td>0.03122</td>
                        <td>0.0052</td>
                        <td>24</td>
                                        </tr>
                    <tr> <!--Row 32-->
                                                <td>26</td>
                                                <td>0.02498</td>
                        <td>0.04996</td>
                        <td>0.0288</td>
                        <td>0.0047</td>
                        <td>26</td>
                                        </tr>
                    <tr> <!--Row 33-->
                                                <td>27</td>
                                                <td>0.02405</td>
                        <td>0.04811</td>
                        <td>0.0277</td>
                        <td>0.0046</td>
                        <td>27</td>
                                        </tr>
                    <tr> <!--Row 34-->
                                                <td>28</td>
                                                <td>0.02319</td>
                        <td>0.04639</td>
                        <td>0.0267</td>
                        <td>0.0044</td>
                        <td>28</td>
                                        </tr>
                    <tr> <!--Row 35-->
                                                <td>30</td>
                                                <td>0.02165</td>
                        <td>0.04330</td>
                        <td>0.0249</td>
                        <td>0.0041</td>
                        <td>30</td>
                                        </tr>
                    <tr> <!--Row 36-->
                                                <td>32</td>
                                                <td>0.0203</td>
                        <td>0.04059</td>
                        <td>0.0234</td>
                        <td>0.0039</td>
                        <td>32</td>
                                        </tr>
                    <tr> <!--Row 37-->
                                                <td>34</td>
                                                <td>0.0191</td>
                        <td>0.03820</td>
                        <td>0.0220</td>
                        <td>0.0036</td>
                        <td>34</td>
                                        </tr>
                    <tr> <!--Row 38-->
                                                <td>36</td>
                                                <td>0.01804</td>
                        <td>0.03608</td>
                        <td>0.0208</td>
                        <td>0.0034</td>
                        <td>36</td>
                                        </tr>
                    <tr> <!--Row 39-->
                                                <td>38</td>
                                                <td>0.01709</td>
                        <td>0.03418</td>
                        <td>0.0197</td>
                        <td>0.0032</td>
                        <td>38</td>
                                        </tr>
                    <tr> <!--Row 40-->
                                                <td>40</td>
                                                <td>0.0162</td>
                        <td>0.03247</td>
                        <td>0.0187</td>
                        <td>0.0031</td>
                        <td>40</td>
                                        </tr>
                                </table>
                <h4>Footnotes</h4>
                <p>1. Single depth of thread = 0.6495/N where N is threads per inch<br />
                For N=8, Single depth=0.6495/8=0.0812<br />
                2. Feed depth with compound at 30&deg; = sec30x(single depth of thread) {=1.1547x(0.6495/N) or 0.75/N}<br />
                For N=8, Feed depth =1.1547x(0.6495/8) {=1.1547x0.0812=0.0937}, or Feed depth=0.75/8=0.0937</p>


            <!--<h2>Recommended Reading</h2>
                <p><em></em>by</p>-->
            <a name="wiki"></a>
            <h2>Related Wikipedia Articles</h2>
            <ul>
                <li><a href="https://en.wikipedia.org/wiki/Lathe_%28metal%29" rel="external">Metal lathe</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Turning" rel="external">Turning</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Work_hardening" rel="external">Work hardening</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Machinability" rel="external">Machinability</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Machining_vibrations" rel="external">Chatter</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Tool_bit" rel="external">Tool bit</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Tool_wear" rel="external">Tool wear</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Pilot_hole" rel="external">Pilot hole</a></li>
                <!--<li><a href="https://en.wikipedia.org/wiki/Rake_angle">Rake Angle</a></li>-->
                <li><a href="https://en.wikipedia.org/wiki/Speeds_and_feeds" rel="external">Speeds &amp; feeds</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Lathe_faceplate" rel="external">Faceplate</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Lathe_carrier" rel="external">Lathe dog</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Lathe_center" rel="external">Lathe center</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Collet" rel="external">Collet</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Machine_taper" rel="external">Machine Taper</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Threading_%28manufacturing%29" rel="external">Threading</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Chamfer" rel="external">Chamfer</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Burr_%28edge%29" rel="external">Burr (edge)</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Sphericity" rel="external">Sphereicity</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Indexing_%28motion%29" rel="external">Indexing (motion)</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Interference_fit" rel="external">Interference fit</a></li>
                <li><a href="https://en.wikipedia.org/wiki/Drilling" rel="external">Drilling</a></li>
            </ul>

        </div> <!-- END OF MAINCONTENT -->

</div> <!-- END OF WRAPPER -->

<?php include("../../footer.php"); ?>

</body>
</html>
