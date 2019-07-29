<div id="fh5co-register" style="background-image: url(images/img_bg_2.jpg);">
<div class="overlay"></div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 animate-box">
      <div class="date-counter text-center">
        <h2>Get 400 of Online Courses for Free</h2>
        <h3>By Mike Smith</h3>
        <div class="simply-countdown simply-countdown-one"></div>
        <p><strong>Limited Offer, Hurry Up!</strong></p>
        <p><a href="#" class="btn btn-primary btn-lg btn-reg">Register Now!</a></p>
      </div>
    </div>
  </div>
</div>

<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
	<div class="overlay"></div>
	<div class="container">
		<?php include('includes/menu-footer.php'); ?>
			<div class="row copyright">
			<div class="col-md-12 text-center">
				<p>
					<small class="block">&copy; <?php echo date('Y'); ?> Free HTML5. All Rights Reserved.</small> 
					<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
				</p>
			</div>
		</div>
		</div>
</footer>
</div>

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="js/jquery.min.js"></script>
<!-- jQuery Easing -->
<script src="js/jquery.easing.1.3.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<!-- Waypoints -->
<script src="js/jquery.waypoints.min.js"></script>
<!-- Stellar Parallax -->
<script src="js/jquery.stellar.min.js"></script>
<!-- Carousel -->
<script src="js/owl.carousel.min.js"></script>
<!-- Flexslider -->
<script src="js/jquery.flexslider-min.js"></script>
<!-- countTo -->
<script src="js/jquery.countTo.js"></script>
<!-- Magnific Popup -->
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/magnific-popup-options.js"></script>
<!-- Count Down -->
<script src="js/simplyCountdown.js"></script>
<!-- Main -->
<script src="js/main.js"></script>
<script>
   var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

   // default example
   simplyCountdown('.simply-countdown-one', {
       year: d.getFullYear(),
       month: d.getMonth() + 1,
       day: d.getDate()
   });
   //jQuery example
   $('#simply-countdown-losange').simplyCountdown({
       year: d.getFullYear(),
       month: d.getMonth() + 1,
       day: d.getDate(),
       enableUtc: false
   });
</script>
</body>
</html>