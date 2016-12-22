<?php include 'inc/top.inc';?>


</head>

<?php include 'inc/nav.inc';?>

    <!-- Top Section -->
    <section id="first">
        <div class="container">

            <h1>David Jeong</h1>
            <h2>Graphic Designer & Web Developer</h2>

            <div class="content">
            <p>I am a student at the University of Rochester, currently studying computer science and digital media studies.
            </p>
            <a href="#second">View accomplishments</a>

            </div><!-- .content -->

       </div><!-- .container -->

    </section>






    <!-- Second Section -->
    <section id="second">
        <div class="container">

            <h1>Skills & Accomplishments</h1>
            <div class="content">
              <div class="f1">
              <img src="images/me.png" alt="David Jeong" width=200>
              <p>I am experienced with programming in Java and Python along with HTML, CSS, PHP, and Javascript. Additionally, I am proficient with Adobe Photoshop, After Effects, Premiere, and Illustrator.</p>
              <a class="button" href="contact.php">Contact Me</a>
              </div>
              <div class="f1">
              <img src="images/me2.png" alt="Arduino Project" width=200>
              <p>For one of my course's final projects, I had to use Arduino and Processing to create an interactive art piece. By using a distance sensor, a user can place randomly sized rectangles along the xy-axis. </p>
              <a class="button" href="gallery.php">More Projects</a>
              </div>
            </div><!-- .content -->

       </div><!-- .container -->

    </section>

<!-- Use the following JavaScript code to do the smooth-scroll thing on the internal links -->

<script src="http://code.jquery.com/jquery-2.2.4.min.js"></script>
<script>
// From:    Smooth Scrolling by CHRIS COYIER, updated JANUARY 31, 2016
//          https://css-tricks.com/snippets/jquery/smooth-scrolling
$(function() {
  $('a[href*="#"]:not([href="#"])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top
        }, 250);
        return false;
      }
    }
  });
});
</script>

</body>

</html>
