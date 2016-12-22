<?php include 'inc/top.inc';?>


<!-- bxSlider CSS file -->
    <link href="css/jquery.bxslider.css" rel="stylesheet" />


<?php include 'inc/nav.inc';?>

    <section id="third">

        <ul class="bxslider">
          <li><img src="images/turtle" height=450/><div class="textt"><h1>Diamondback Terrapin Stamp</h1><p>This stamp was created in Adobe Illustrator for a project. I took a Diamondback Terrapin turtle and simplified it into vector graphics. A lot of focus was put into the layout of the text and the overall color palette.</p> <a class="button" href="https://postimg.org/image/70mdrh2t9/">Check it out</a></div></li>
          <li><img src="images/milk" height=450/><h1>Milk</h1><p>This is a simple, long-scrolly website that was created to promote the goodness of milk. I worked with a partner to design a Photoshop mock-up and develop the actual website. The pages were designed to follow the basic principles of webpage design, including properties like proximity and contrast.</p><a class="button" href="http://urcsc170.org/imosebro/lab09/">Go to Site</a> </li>
          <li><img src="images/city" height=450/><h1>Flying Through the City</h1><p>This project was created as a 2.5-dimensional video animation exercise. Done in Adobe AfterEffects, I took 2-D drawings/pictures of buildings, structured them in a 3-D environment, and had a camera move throughout the city.</p><a class="button" href="https://www.youtube.com/watch?v=eD8SlgoOT5Q">Watch Video</a></li>
        </ul>
    </section>

<!-- jQuery library (served from Google) -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<!-- bxSlider Javascript file -->
<script src="js/jquery.bxslider.min.js"></script>

<script>
$(document).ready(function(){
  $('.bxslider').bxSlider();
});
</script>

</body>
</html>