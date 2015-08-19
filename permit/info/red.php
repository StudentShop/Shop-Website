<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en">

<head>
	<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />

	<!-- ****************************************************************************
**********															*************
**********		INSERT PAGE TITLE BELOW within quotations!!!! 		*************
**********		Title should be the same as the <h1> tag below 		*************
**********															*************
*********************************************************************************	-->
	<?php $subtitle = "Red Permit";?>


		<?php require($_SERVER['DOCUMENT_ROOT']."/functions.php") ?>
			<?php require($_SERVER['DOCUMENT_ROOT']."/header.php"); ?>
				<?php require($_SERVER['DOCUMENT_ROOT']."/main_nav.php"); ?>

					<!-- ************************* 				End of Navigation Items 			****************************  -->

					<div id="wrapper">
						<!-- wrapper sets the content area including the left nav, middle (main content), and right nav  -->

						<div id="leftNav">

							<?php require($_SERVER['DOCUMENT_ROOT']."/permit/permit_left_nav.php") ?>
								<!-- Left Navigation in the include file -->

								<h2 class="subnav2">
									<span>Related Links</span>
								</h2>
								<ul>
									<li><a href="/training/index.php">Training</a></li>
									<li><a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67">Moodle</a></li>
								</ul>
						</div>
						<!-- END OF LEFT NAV DIV -->

						<div id="MainContent">
							<!-- sets the main content (middle column area) -->


							<h1>Red Permit</h1>

							<h2>Overview</h2>
							<p>The red permit is the mid-level permit. It is a good alternative to the green permit for students who do not wish to complete the addtional training on the mills and lathes but still need access to machines like drill presses, cutoff saws, and
								band saws.</p>
							<p>All students in classes using the Student Shop must obtain a green permit (a red permit would
								<em>not</em> be an acceptable alternative) with the exception of InterEgr 160 which requires a red permit.</p>

							<img src="/permit/images/Application-Process-Red-Permit.png" alt="Application process for red permit. Application process takes about 1-2 weeks" align="middle" height="259px" width="710px" />

							<p>
								<em>
									<strong>Note: </strong>The process to obtain a red permit usually takes about 1-2 weeks but may take longer depending on the number of applicants applying, such as at the start and end of the semester. Please plan accordingly.</em>
							</p>

							<h2>Privileges</h2>
							<ul>
								<li>Checkout tools and equipment</li>
								<li>Make <a href="/capabilities/purchases/index.php">purchases</a> through the shop (once an account is set up)</li>
								<li>Use everything in the shop
									<em>except</em> the lathes and mills (which require a green permit) or equipment that requires an <a href="/permit/info/upgrades/index.php">upgrade</a></li>
							</ul>

							<h2>Requirements</h2>
							<p>(must be completed in order)</p>
							<ul>
								<li><a href="/permit/application.php">Apply for a red shop permit</a></li>
								<li>Complete the red permit quizzes on <a href="https://special.moodle.wisc.edu/prod/course/view.php?id=67" rel="external">Moodle</a></li>
								<li>Attend a <a href="/permit/info/seminars/red_seminar.php">red permit seminar</a></li>
								<li>Come to the shop and have Student Shop staff create a permit for you</li>
							</ul>

							<h2>Time Frame and Deadlines</h2>
							<ul>
								<li>The red permit should take no longer than 1-2&#42; weeks to complete</li>
								<li>Like all permits and upgrades, this permit must be completed within 45 days of applying for it. Failure to meet the 45 day deadline will result in all progress towards the permit being removed</li>
							</ul>
							<p>&#42; The process to obtain a red permit usually takes about 1-2 weeks but may take longer depending on the number of applicants applying, such as at the start or end of the semester. Please plan accordingly.</p>

							<h2>Upgrades Available&#42;</h2>
							<ul>
								<li><a href="/permit/info/upgrades/woodworking_1.php">Woodworking 1 Upgrade</a> (Wood Saws)</li>
								<br />
								<li><a href="/permit/info/upgrades/welding_1.php">Welding 1 Upgrade</a> (MIG)</li>
								<li><a href="/permit/info/upgrades/welding_2.php">Welding 2 Upgrade</a> (TIG)</li>
								<li><a href="/permit/info/upgrades/welding_3.php">Welding 3 Upgrade</a> (MIG Aluminum)</li>
								<br />
								<li><a href="/permit/info/upgrades/ironworker_1.php" <a>Ironworker 1 Upgrade</a> (Ironworker)</li>
								<li><a href="/permit/info/upgrades/coldsaw_1.php">Coldsaw 1 Upgrade</a> (Circular cold saw)</li>
								<li><a href="/permit/info/upgrades/laser_1.php">Laser 1 Upgrade</a> (Laser cutter)</li>
							</ul>
							<p>&#42;Individuals will only be able to see upgrades in EMU for which they have completed the prerequisites.</p>
							<br />

						</div>
						<!-- END OF MAINCONTENT -->

					</div>
					<!-- END OF WRAPPER -->

					<?php require($_SERVER['DOCUMENT_ROOT']."/footer.php"); ?>

						</body>

</html>
