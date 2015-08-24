<!--
    <div class="hide">
      <ul title="Accessibility Options">
        <li>
          <a href="#content" accesskey="S">Skip to Content</a>
        </li>
        <li>
          <a href="#localNav">Skip to Local Navigation</a>
        </li>
      </ul>
    </div>
    -->

<div id="NavBackground">
  <div id="NavAlign">

    <h2 class="navigation"><span>Navigation:</span></h2> <!-- needed for accessibility standards purposes; display is set to none - invisible -->

    <ul id="nav">
      <li <?php navclass('coestudentshop.engr.wisc.edu:80/index.php'); ?> class="home"><a href="/index.php" >Home</a>
        <ul>
          <li ><a href="#">&nbsp;</a></li>
        </ul>
      </li>

      <!-- navclass php function:
           IF parameters within ('  ') match the URL/file path
           THEN navclass spits out html code for browser: CLASS="ON", which highlights the navition item
           ELSE don't do anything; i.e. no html code is spit out.
        -->

      <li <?php navclass('/permit/'); ?>><a href="/permit/index.php" >Get a Permit</a>
        <ul>
          <li <?php navclass('permit/info/') || navclass('permit/index.php'); ?>><a href="/permit/index.php" title="Permit Information">Permit Info</a></li>
          <li><a href="https://emu.engr.wisc.edu/emu/">Application</a></li>
          <li <?php navclass('permit/permitFAQ.php'); ?>><a href="/permit/permitFAQ.php">Permit FAQ</a></li>
        </ul>
      </li>

      <li><a href="https://emu.engr.wisc.edu/">Reservations</a>
        <ul>
          <li ><a href="#">&nbsp;</a></li>
        </ul>
      </li>

      <li <?php navclass('/training/'); ?>><a href="/training/index.php" >Training</a>
        <ul>
          <li <?php navclass('training/basics/') || navclass('training/index.php'); ?>><a href="/training/index.php"><span>Shop Basics</span></a></li>
          <li <?php navclass('training/machining/'); ?>><a href="/training/machining/index.php">Machining</a></li>
          <li <?php navclass('training/welding/'); ?>><a href="/training/welding/index.php">Welding</a></li>
          <li <?php navclass('training/wood/'); ?>><a href="/training/wood/index.php">Wood</a></li>
          <li <?php navclass('training/cadcam/'); ?>><a href="/training/cadcam/index.php">CAD/CAM</a></li>
          <li <?php navclass('training/electronics/'); ?>><a href="/training/electronics/index.php">Electronics</a></li>
        </ul>
      </li>

      <li <?php navclass('/capabilities/'); ?>><a href="/capabilities/index.php" >Capabilities</a>
        <ul>
          <li <?php navclass('capabilities/machines/') || navclass('capabilities/index.php'); ?>><a href="/capabilities/index.php"><span>Machines</span></a></li>
          <li <?php navclass('capabilities/labs/'); ?>><a href="/capabilities/labs/index.php">Labs</a></li>
          <li <?php navclass('capabilities/purchases/'); ?>><a href="/capabilities/purchases/index.php">Purchases/Rentals</a></li>
    	  <li <?php navclass('capabilities/3dprint/'); ?>><a href="/capabilities/3dprint/index.php">3D Printing</a></li>
          <li <?php navclass('capabilities/consult/'); ?>><a href="/capabilities/consult/index.php">Design Consultation</a></li>
          <li <?php navclass('capabilities/instrshop/'); ?>><a href="/capabilities/instrshop/index.php">Instrument Shop</a></li>
        </ul>
      </li>

      <li <?php navclass('/about/'); ?>><a href="/about/index.php" >About Us</a>
        <ul>
          <li <?php navclass('about/index.php') || navclass('about/hours.php') || navclass('about/contact.php') || navclass('about/location.php') ; ?>><a href="/about/index.php"><span>Shop Info</span></a></li>
          <li <?php navclass('about/policies.php')|| navclass('about/safetyanduse.php')|| navclass('about/machinereservation.php')|| navclass('about/toolcheckinout.php')|| navclass('about/fees.php')|| navclass('about/warning.php')|| navclass('about/bannedmaterials.php'); ?>><a href="/about/policies.php">Policies</a></li>
          <li <?php navclass('about/staff.php'); ?>><a href="/about/staff.php">Staff</a></li>
          <li <?php navclass('about/jobs.php'); ?>><a href="/about/jobs.php">Jobs</a></li>
        </ul>
      </li>

    </ul>

  </div> <!-- MenuAlign -->

  <div class="SubNavBackground">
  </div> <!-- divSubNavBackground -->

</div> <!-- divNav -->
