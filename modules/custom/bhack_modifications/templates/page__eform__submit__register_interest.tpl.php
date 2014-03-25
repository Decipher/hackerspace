<?php
/**
 * @file
 * Register Interest / Temporary landing page template for bHack modifications
 * module.
 */
?>

<!-- HEADER -->
<div id="header-landing">
  <div id="nav-menu">
    <div class="container">
      <div id="logo">
        <h1><a href="index.html"><img
              src="/sites/all/modules/custom/bhack_modifications/assets/img/bhack.png"
              height="32"/> <?php echo $site_name ?>
          </a></h1>
      </div>
      <div class="menus" id="myScrollspy">
        <ul class="nav scroll-nav">
          <li class="active"><a href="#top"><i
                class="fa fa-home"></i><span>Home</span></a></li>
          <li><a href="#about"><i
                class="fa fa-laptop"></i><span>About</span></a></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- END NAV MENU FIXED POSITION -->

  <!-- HEADER SECTION CONTENT -->
  <div class="awesome-slogan">
    <h2>HACK.<span>CODE</span>.VOID.<span>MAKE</span></h2>
    <h4>A <span>Ballarat</span> Hackerspace</h4>

    <div class="clear"></div>

    <?php print render($page['content']); ?>

    <div class="thanks">
      <h2>Thanks for your interest.</h2>
      <p>If you haven't been to a meet yet, then come on in and say G'day. We would love to hear what projects you're working on and are always willing to help.</p>
    </div>

    <div class="social-icons">
      <a href="https://github.com/ballarat-hackerspace/" data-toggle="tooltip"
         title="GitHub"><i class="fa fa-2x fa-github-alt social ico-github"></i></a>
      <a href="https://plus.google.com/communities/106879016585907671427"
         data-toggle="tooltip" title="Google+"><i
          class="fa fa-2x fa-google-plus social ico-google-plus"></i></a>
    </div>
  </div>
  <!-- END HEADER SECTION CONTENT -->

</div>
<!-- END HEADER -->

<!-- SEECTION THEME COLOR -->
<div class="section-theme-landing"></div>
<!-- END SECTION THEME COLOR -->

<div class="section-page-landing section-light-grey" id="about">
  <div class="inner-section">
    <div class="container">

      <!-- SECTION TITLE -->
      <h1 class="text-center">About</h1>

      <!-- WRITE SOMETHING ABOUT FEATURES HERE -->
      <h4 class="text-center">
        <p>bHack is modeled on an <a href="http://hackerspaces.org">
            international
            community of like minded spaces</a> that started in Germany in 1995.
          It supports and encourages science, technology, engineering art and
          math
          culture in the Ballarat by providing a physical space for residents to
          meet, interact and create.</p>

        <p>We hold public meetups on the 1<sup>st</sup> and 3<sup>rd</sup>
          Tuesdays of each month. These meetups are where we invite you to join
          us
          and chat, participate in show and tell, get help or advice, or talk
          about your projects.</p>
      </h4>
      <!-- END FEATURES DESCRIPTION -->

      <!-- FEATURES COLUMN -->
      <div class="row">
        <div class="col-sm-6">
          <div class="the-box-landing border-hover-bottom text-center">
            <h4>The Hackerspace Movement</h4>
            <iframe class="youtube" width="560" height="315"
                    src="https://www.youtube.com/embed/WkiX7R1-kaY"
                    frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="the-box-landing border-hover-bottom text-center">
            <h4>Regional Hackerspaces</h4>
            <iframe class="youtube" width="560" height="315"
                    src="https://www.youtube.com/embed/hoe7YX_vdgk?list=UUPWv9iwjQ3SZ196VsjP3hEg"
                    frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END SECTION FEATURES -->

<!-- FOOTER -->
<footer>
  <div class="footer">
    <div class="container">
      &copy; 2014 <a href="http://bhack.in">bHack</a>
    </div>
  </div>
</footer>
<!-- END FOOTER -->


<!-- BACK TO TOP BUTTON -->
<div id="back-top">
  <a href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
<!-- END BACK TO TOP -->
