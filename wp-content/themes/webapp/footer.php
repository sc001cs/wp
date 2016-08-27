<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WEBAPP
 */

?>

<!--  Footer -->
<div class="social">
	<div class="row">

		<div class="col-sm-6">
			<ul>
				<li><a href="#" title="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
				</li>
				<li><a href="#" title="twitter" target="_blank"><i class="fa fa-twitter"></i></a>
				</li>
				<li><a href="#" title="pinterest" target="_blank"><i class="fa fa-pinterest"></i></a>
				</li>
				<li><a href="#" title="rss" target="_blank"><i class="fa fa-rss"></i></a>
				</li>
				<li><a href="#" title="instagram" target="_blank"><i class="fa fa-instagram"></i></a>
				</li>
				<li><a href="#" title="github" target="_blank"><i class="fa fa-github"></i></a>
				</li>
			</ul>
		</div>

		<div class="col-sm-6">

			<div id="mc_embed_signup">
				<form class="form-inline validate" action="//audemedia.us7.list-manage.com/subscribe/post?u=b5638e105dac814ad84960d90&amp;id=9345afa0aa" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
					<div class="row no-gutter">
						<div class="col-sm-9">
							<input type="email" value="" name="EMAIL" class="form-control" id="mce-EMAIL" placeholder="Subscribe to our newsletter" required>
							<div style="position: absolute; left: -5000px;">
								<input type="text" name="b_b5638e105dac814ad84960d90_9345afa0aa" tabindex="-1" value="">
							</div>
						</div>
						<div class="col-sm-3">
							<input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe">
						</div>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<section class="footer">
	<div class="row">
		<div class="col-sm-3">
			<h4>Choose.</h4>
			<ul>
				<li><a href="">Shared Hosting</a>
				</li>
				<li><a href="">Reseller Hosting</a>
				</li>
				<li><a href="">Cloud Managed VPS</a>
				</li>
				<li><a href="">Managed Dedicated Servers</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h4>Get Support.</h4>
			<ul>
				<li><a href="">Contact Us</a>
				</li>
				<li><a href="">Knowledge Base</a>
				</li>
				<li><a href="">Submit a Ticket</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h4>Start.</h4>
			<ul>
				<li><a href="">WordPress Hosting</a>
				</li>
				<li><a href="">Joomla Hosting</a>
				</li>
				<li><a href="">Magento Hosting</a>
				</li>
				<li><a href="">Drupal Hosting</a>
				</li>
			</ul>
		</div>
		<div class="col-sm-3">
			<h4>Ask.</h4>
			<ul class="questions">
				<li><a href=""><i class="fa fa-comment"></i> LIVE CHAT</a>
				</li>
				<li><i class="fa fa-phone"></i> +1.186.704.2263</li>
				<li><a href=""><i class="fa fa-envelope"></i> E-MAIL US</a>
				</li>
			</ul>
		</div>
	</div>
</section>
<!--  End of Footer -->

<?php wp_footer(); ?>

<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/bootstrap.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/hoverIntent.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/superfish.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/owl.carousel.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/wow.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.circliful.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/waypoints.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/jquery.slicknav.min.js"></script>
<script src="<?php bloginfo('template_directory') ?>/assets/js/custom.js"></script>

<script>
	/* Home Page Slider
	 ========================================================================== */
	$(document).ready(function() {


		var sync1 = $("#mainslider");
		var sync2 = $("#mainslider-nav");

		sync1.owlCarousel({
			singleItem : true,
			slideSpeed : 1000,
			paginationSpeed: 800,
			navigation: false,
			pagination:false,
			autoPlay:7500,
			afterAction : syncPosition,
			responsiveRefreshRate : 200,
		});

		sync2.owlCarousel({
			items : 4,
			itemsDesktop : [1199,4],
			itemsDesktopSmall : [979,4],
			itemsTablet : [768,4],
			itemsMobile : [479,2],
			pagination:false,
			responsiveRefreshRate : 100,
			afterInit : function(el){
				el.find(".owl-item").eq(0).addClass("synced");
			}
		});

		function syncPosition(el){
			var current = this.currentItem;
			$("#mainslider-nav")
				.find(".owl-item")
				.removeClass("synced")
				.eq(current)
				.addClass("synced")
			if($("#mainslider-nav").data("owlCarousel") !== undefined){
				center(current)
			}
		}

		$("#mainslider-nav").on("click", ".owl-item", function(e){
			e.preventDefault();
			var number = $(this).data("owlItem");
			sync1.trigger("owl.goTo",number);
		});

		function center(number){
			var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
			var num = number;
			var found = false;
			for(var i in sync2visible){
				if(num === sync2visible[i]){
					var found = true;
				}
			}

			if(found===false){
				if(num>sync2visible[sync2visible.length-1]){
					sync2.trigger("owl.goTo", num - sync2visible.length+2)
				}else{
					if(num - 1 === -1){
						num = 0;
					}
					sync2.trigger("owl.goTo", num);
				}
			} else if(num === sync2visible[sync2visible.length-1]){
				sync2.trigger("owl.goTo", sync2visible[1])
			} else if(num === sync2visible[0]){
				sync2.trigger("owl.goTo", num-1)
			}
		}

	});

	/* Τestimonials
	 ========================================================================== */
	$(document).ready(function() {
		$("#testimonials-carousel").owlCarousel({
			items: 1,
			autoPlay: 5000,
			itemsDesktop: [1199, 1],
			itemsDesktopSmall: [979, 1],
			itemsTablet: [768, 1]
		});
	});

	// ______________ STATS
	jQuery(document).ready(function() {
		$('.statistics').waypoint(function() {

			$('#myStat1').circliful();
			$('#myStat2').circliful();
			$('#myStat3').circliful();
			$('#myStat4').circliful();

		}, { offset: 800, triggerOnce: true });
	});

</script>

</body>
</html>
