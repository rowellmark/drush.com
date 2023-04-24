<?php get_header(); ?>

<div class="globPopup fixed w-100 h-100">
	<div class="globPopupWrap flex items-center justify-center w-100 h-100">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Popup") ) : ?><?php endif ?>
	</div><!-- end of popup wrap -->
</div><!-- end of popup -->

<section class="floating-smi fixed h-100" data-aos="fade-left" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Floating Contact Info") ) : ?><?php endif ?>
</section><!-- end of floating smi -->
<section id="hero" class="relative">
	<div class="slideshow relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Slider") ) : ?><?php endif ?>
	</div><!-- end of slide show -->

	<div class="hpQuickSearch absolute">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Quick Search") ) : ?><?php endif ?>
	</div><!-- end of quick search -->
	<div class="hpScrollTo absolute" data-aos="fade-up" data-aos-once="true"  data-aos-offset="200" data-aos-duration="800" data-aos-delay="500">
		<a href="#hpFeaturedListings" class="aios-scroll-to flex justify-center flex-col items-center" data-offset="100">
			<span>EXPLORE</span>
			<i></i>
			<div class="hpScrollLine relative"></div>
		</a>
	</div><!-- end of hp scroll to -->
</section><!-- end of hero -->

<section id="hpFeaturedListings" class="relative accent-bg">
	<div class="hpFeaturedListingsContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Listings") ) : ?><?php endif ?>		
	</div><!-- end of container -->
</section><!-- end of listings -->
<section  class="hpServices relative accent-bg">
	<div class="hpServicesContainer relative">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Services") ) : ?><?php endif ?>		
	</div>
</section><!-- end of hp services -->

<section class="hpWelcome relative accent-bg">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Welcome") ) : ?><?php endif ?>		
</section><!-- end of welcome area -->

<section class="hpFeaturedCommunities relative accent-bg">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Featured Communities") ) : ?><?php endif ?>		
</section><!-- end of featured communties -->

<section class="hpExclusiveAccess relative">
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Exclusive Access") ) : ?><?php endif ?>		
</section><!-- end of exclusive access -->

<section class="hpWhyWorkWithUs relative accent-bg">
	<div class="hpWhyWorkWithUsContainer">
		<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Home: Our Success") ) : ?><?php endif ?>		
	</div><!-- end of why work with us -->
</section><!-- end of how work with us -->

<?php get_footer(); ?>
