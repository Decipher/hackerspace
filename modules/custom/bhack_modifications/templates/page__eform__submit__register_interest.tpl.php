<?php
/**
 * @file
 * Register Interest / Temporary landing page template for bHack modifications
 * module.
 */
?>
<div id="top"></div>

<!-- HEADER -->
<div id="header-landing">
  <div id="nav-menu">
    <div class="container">
      <div id="logo">
        <h1><a href="/"><img
              src="/sites/all/modules/custom/bhack_modifications/assets/img/bhack.png"
              height="32"/> <?php echo $site_name ?>
          </a></h1>
      </div>
      <div class="menus" id="myScrollspy">
        <ul class="nav scroll-nav">
          <li><a href="#top"><i class="fa fa-home"></i><span>Home</span></a></li>
          <li><a href="#about"><i class="fa fa-lightbulb-o"></i><span>About</span></a></li>
          <li><a href="#what"><i class="fa fa-question"></i><span>What</span></a></li>
          <li><a href="#where"><i class="fa fa-map-marker"></i><span>Where</span></a></li>
          <li><a href="http://pages.bhack.in/blog/"><i class="fa fa-bullhorn"></i><span>Blog</span></a></li>
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

<div class="section-theme-landing"></div>

<div class="section-page-landing section-light-grey" id="about">
  <div class="inner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">About</h1>

          <p>bHack is modeled on an <a href="http://hackerspaces.org"> international community of like minded spaces</a> that started in Germany in 1995. It supports and encourages science, technology, engineering, art and math culture in the Ballarat region by providing a physical space for residents to meet, interact and create.</p>

          <p>We hold public meetups on the 1<sup>st</sup> and 3<sup>rd</sup> Tuesdays of each month. These meetups are where we invite you to join us and chat, participate in show and tell, get help or advice, or talk about your projects.</p>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="the-box-landing border-hover-bottom text-center">
            <h4>The Hackerspace Movement</h4>
            <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/WkiX7R1-kaY" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-page-landing section-grey" id="what">
  <div class="inner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">What</h1>

          <p>Hackerspaces are centers of unique community, each supporting the individuals there to explore and do what they love, each an inspirational source of true education where anyone can learn what they need to live the lives they want to live, each a vibrant hub of local community.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="the-box-landing border-hover-bottom text-center">
            <h4>Regional Hackerspaces</h4>
            <iframe class="youtube" width="560" height="315" src="https://www.youtube.com/embed/hoe7YX_vdgk?list=UUPWv9iwjQ3SZ196VsjP3hEg" frameborder="0" allowfullscreen></iframe>
          </div>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-12">
          <p>A hackerspace is a real physical space, like a shop or warehouse, where people are supported to explore and do what they love through hacking. Hacking is taking what is, improving on it to the best of your ability, and sharing it. Since anything, no matter how cool, can be improved, we can hack anything. We can hack computers and electronics, of course, but also art and craft, math, science, yourself, society, the planet. We can and do hack anything.</p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-page-landing section-transparent" id="quote">
  <div class="section-overlay">
    <div class="inner-section">
      <div class="container text-center">
        <div class="quote">
          <h1>To invent, you need a good imagination and a pile of junk.</h1>
          <h3>&ndash; Thomas A. Edison</h3>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="section-page-landing section-light-grey" id="where">
  <div class="inner-section">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1 class="text-center">Where</h1>

          <p>Whilst bHack does not yet have permanent home, it does not stop us from getting together and sharing our projects. Our temporary location is at Pilates Ballarat located at 113 Albert St, Sebastopol. There is parking at the rear.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-sm-offset-2 col-sm-8">
          <div class="the-box-landing border-hover-bottom text-center">
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3161.4412906296457!2d143.841486!3d-37.591772!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad15b4b35371405%3A0xa2845dd5cd0bafe5!2s113+Albert+St!5e0!3m2!1sen!2sau!4v1395922552175" width="100%" height="300" frameborder="0" style="border:0"></iframe>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- FOOTER -->
<footer>
  <div class="footer">
    <div class="container">&copy; 2014 <a href="http://bhack.in">bHack</a></div>
  </div>
</footer>
<!-- END FOOTER -->


<!-- BACK TO TOP BUTTON -->
<div id="back-top">
  <a href="#top"><i class="fa fa-chevron-up"></i></a>
</div>
