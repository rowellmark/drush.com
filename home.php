<?php get_header(); ?>


<section class="floating-smi fixed h-100 flex items-center">
	<ul>
		<li>
			<?= do_shortcode('[ai_client_phone]<i class="ai-font-phone"></i>[/ai_client_phone]')?>
		</li>
		<li>
			<?= do_shortcode('[ai_client_email]<i class="ai-font-envelope-filled-a"></i>[/ai_client_email]')?>
		</li>
		<li>
			<div class="fS-divider"></div>
		</li>
		<li>
			<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank">
				<i class="ai-font-facebook"></i>
				facebook
			</a>
		</li>
		<li>
			<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank">
				<i class="ai-font-instagram"></i>
				instagram
			</a>
		</li>
		<li>
			<a href="<?= do_shortcode('[ai_client_zillow]')?>" target="_blank">
				<i class="ai-font-zillow"></i>
				zillow
			</a>
		</li>
		<li>
			<a href="<?= do_shortcode('[ai_client_linkedin]')?>" target="_blank">
				<i class="ai-font-linkedin"></i>
				linkedin
			</a>
		</li>
	</ul>
</section><!-- end of floating smi -->
<section id="hero" class="relative">
	<div class="slideshow relative">
		<?php echo do_shortcode('
			[aios_slider id="Homepage Slide"]
		'); ?>
	</div><!-- end of slide show -->

	<div class="hpQuickSearch absolute">
		<h2>Get Home Faster</h2>
		<p>SEARCH in Delaware, Maryland and Pennsylvania</p>
		<div class="hpQuickSearchContainer">
			<form action="#" method="get" class="block flex">

				<div class="hpQsCol relative">
					<label for="qsSearch" class="hide">search by State, Country, or ZIP code</label>
					<i class="ai-font-location-b"></i>
					<input type="text" name="zip-state-country" placeholder="Search by State, Country, or ZIP code" id="qsSearch">
				</div>
				<div class="hpQsSubmit relative">
					<input type="submit" value="SEARCH">
					<div class="qcBttnControl flex w-100 h-100 items-center justify-center">
						<span>Search</span>
						<i class="ai-font-magnifying-glass-g"></i>
					</div>
					
				</div>

			</form>
		</div>
		<span>Real Estate IDX Powered by iHomefinder</span>
	</div><!-- end of quick search -->
	<div class="hpScrollTo absolute">
		<a href="#" class="aios-scroll-to flex justify-center flex-col items-center">
			<span>EXPLORE</span>
			<i></i>
			<div class="hpScrollLine relative"></div>
		</a>
	</div><!-- end of hp scroll to -->
</section><!-- end of hero -->

<section id="hpFeaturedListings" class="relative">

	<div class="hpFeaturedListingsContainer relative">

		<div class="default-title text-center">
			<h2 class="inline-block">
				<span>FEATURED</span>
				<em>Listings</em>
			</h2>
		</div>
		
		<div class="hpFlLists splide">
			<div class="splide__track">
				<div class="splide__list">

					<div class="splide__slide hpFlList">
						<a href="#" class="block relative">
							<div class="hpFlImage relative">
								<canvas width="460" height="400" class="block w-100"></canvas>
								<img  width="460" height="400" src="<?=do_shortcode('[stylesheet_directory]')?>/images/fp-1.jpg" alt="25 Belfry DR #BUR Greenwood, Delaware 19950" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
							</div>
							<div class="hpFlContent absolute">
								<h3>
									<strong>25 Belfry DR #BUR</strong>
									Greenwood, Delaware 19950
								</h3>
								<h5><i>$</i>295,000</h5>
								<ul>
									<li>
										<i class="flBeds"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flBaths"></i>
										<span>3 Baths</span>
									</li>
									<li>
										<i class="flSqft"></i>
										<span>1,955 SQFT</span>
									</li>
								</ul>
							</div>
							<div class="flButton">VIEW DETAILS</div>
						</a>
					</div><!-- end of fp list -->
					<div class="splide__slide hpFlList">
						<a href="#" class="block relative">
							<div class="hpFlImage relative">
								<canvas width="460" height="400" class="block w-100"></canvas>
								<img  width="460" height="400" src="<?=do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="25 Belfry DR #BUR Greenwood, Delaware 19950" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
							</div>
							<div class="hpFlContent absolute">
								<h3>
									<strong>25 Belfry DR #BUR</strong>
									Greenwood, Delaware 19950
								</h3>
								<h5><i>$</i>395,000</h5>
								<ul>
									<li>
										<i class="flBeds"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flBaths"></i>
										<span>3 Baths</span>
									</li>
									<li>
										<i class="flSqft"></i>
										<span>1,955 SQFT</span>
									</li>
								</ul>
							</div>
							<div class="flButton">VIEW DETAILS</div>
						</a>
					</div><!-- end of fp list -->
					<div class="splide__slide hpFlList">
						<a href="#" class="block relative">
							<div class="hpFlImage relative">
								<canvas width="460" height="400" class="block w-100"></canvas>
								<img  width="460" height="400" src="<?=do_shortcode('[stylesheet_directory]')?>/images/fp-3.jpg" alt="25 Belfry DR #BUR Greenwood, Delaware 19950" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
							</div>
							<div class="hpFlContent absolute">
								<h3>
									<strong>25 Belfry DR #BUR</strong>
									Greenwood, Delaware 19950
								</h3>
								<h5><i>$</i>309,000</h5>
								<ul>
									<li>
										<i class="flBeds"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flBaths"></i>
										<span>3 Baths</span>
									</li>
									<li>
										<i class="flSqft"></i>
										<span>1,955 SQFT</span>
									</li>
								</ul>
							</div>
							<div class="flButton">VIEW DETAILS</div>
						</a>
					</div><!-- end of fp list -->
					<div class="splide__slide hpFlList">
						<a href="#" class="block relative">
							<div class="hpFlImage relative">
								<canvas width="460" height="400" class="block w-100"></canvas>
								<img  width="460" height="400" src="<?=do_shortcode('[stylesheet_directory]')?>/images/fp-2.jpg" alt="25 Belfry DR #BUR Greenwood, Delaware 19950" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
							</div>
							<div class="hpFlContent absolute">
								<h3>
									<strong>25 Belfry DR #BUR</strong>
									Greenwood, Delaware 19950
								</h3>
								<h5><i>$</i>295,000</h5>
								<ul>
									<li>
										<i class="flBeds"></i>
										<span>3 Beds</span>
									</li>
									<li>
										<i class="flBaths"></i>
										<span>3 Baths</span>
									</li>
									<li>
										<i class="flSqft"></i>
										<span>1,955 SQFT</span>
									</li>
								</ul>
							</div>
							<div class="flButton">VIEW DETAILS</div>
						</a>
					</div><!-- end of fp list -->
					
				</div>
			</div>
		</div><!-- end of fp lists -->


		<div class="fl-pagination">
			<a href="#">prev</a>
			<a href="#">next</a>
		</div>

		<div class="default-button">
			<a href="#" class="block">VIEW ALL LISTINGS</a>
		</div>
	</div><!-- end of container -->
</section><!-- end of listings -->
<?php get_footer(); ?>
