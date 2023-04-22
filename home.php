<?php get_header(); ?>

<div class="globPopup fixed w-100 h-100">
	<div class="globPopupWrap flex items-center justify-center w-100 h-100">
		<div class="globPopupContainer relative flex">
			<div class="globPopupImage relative">
				<canvas width="410" height="514" class="block w-100"></canvas>
				<img  width="460" height="400" src="<?=do_shortcode('[stylesheet_directory]')?>/images/popup-image.jpg" alt="join network" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
			</div><!-- end popup image -->

			<div class="globPopupContent">
				<div class="globPopupClose absolute">
					<i class="ai-font-close-b"></i>
				</div>
				<div class="popupLogo">
					<img src="<?= do_shortcode('[ai_client_ip_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
				</div><!-- end of poup logo -->

				<div class="default-title text-center">
					<h2 class="inline-block">
						<span class="justify-center"> Subscribe</span>
						<em>Join Our Network</em>
					</h2>
				</div>
				<p>Join our list of insiders and be the first to receive exclusive listings and market updates!</p>


				<div class="globPopForm">
					<?= do_shortcode('[contact-form-7 id="424" title="Popup Form" html_class="use-floating-validation-tip"]')?>
				</div>

			</div><!-- end of popup content -->


		</div><!-- end of popup container -->
	</div><!-- end of popup wrap -->
</div><!-- end of popup -->

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

<section id="hpFeaturedListings" class="relative accent-bg">

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
									<strong>1022 N Adams St.</strong>
									Wilmington, Delaware 19801
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
			<a href="#" class="fl-prev">prev</a>
			<div class="fl-divider"></div>
			<a href="#" class="fl-next">next</a>
		</div>

		<div class="default-button text-center">
			<a href="#">VIEW ALL LISTINGS</a>
		</div>
	</div><!-- end of container -->
</section><!-- end of listings -->
<section  class="hpServices relative accent-bg">


	<div class="hpServicesContainer relative">

		<div class="default-title text-center">
			<h2 class="inline-block">
				<span>Services</span>
				<em>We clear the clutter</em>
			</h2>
		</div>

		<p>You see more of what you want, and less of what you don't.</p>

		<div class="hpServicesCtas flex w-100">

			<div class="hpServicesCta">
				<a href="#" class="block relative">
					<div class="hpServicesCtaImage relative">
						<canvas width="631" height="350" class="block w-100"></canvas>
						<img width="631" height="350" src="<?=do_shortcode('[stylesheet_directory]')?>/images/cta-1.jpg" alt="Buy a Home" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">

					</div><!-- end of cta image -->
					<div class="hpServicesCtaContent absolute">
						<i class="buy-a-home"></i>
						<h5>Buy a Home</h5>
						<span>Find your new home faster with constant updates, and real recommendations from a live professional.</span>
						<em>LEARN MORE</em>
					</div> <!-- end of cta content -->
					
				</a>
			</div><!-- end of services cta -->
			<div class="hpServicesCta">
				<a href="#" class="block relative">
					<div class="hpServicesCtaImage relative">
						<canvas width="631" height="350" class="block w-100"></canvas>
						<img  width="631" height="350" src="<?=do_shortcode('[stylesheet_directory]')?>/images/cta-2.jpg" alt="Sell a Home" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">

					</div><!-- end of cta image -->
					<div class="hpServicesCtaContent absolute">
						<i class="sell-a-home"></i>
						<h5>Sell a Home</h5>
						<span>Whether you're ready to sell or looking for answers, we're here to guide you with expertise specific to your area.</span>
						<em>LEARN MORE</em>
					</div> <!-- end of cta content -->
					
				</a>
			</div><!-- end of services cta -->


		</div>

	</div>

</section><!-- end of hp services -->

<section class="hpWelcome relative accent-bg">
	<div class="hpWelcomeContainer relative flex items-center">
		<div class="hpWelcomeImage relative">
			<canvas width="868" height="559" class="block w-100"></canvas>
			<img  width="868" height="559" src="<?=do_shortcode('[stylesheet_directory]')?>/images/welcome-image.jpg" alt="Welcome" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
		</div><!-- end of welcome image -->
		<div class="hpWelcomeContent">

			<div class="default-title">
				<h2 class="inline-block">
					<span>WELCOME TO</span>
					<img src="<?= do_shortcode('[ai_client_ip_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
				</h2>
			</div>
			<p>We see change as opportunity, not a threat and Start with the belief that there is a <i>better way!</i></p>

			<div class="hpWelcomeBttns flex">
				<div class="default-button">
					<a href="#">LEARN MORE</a>
				</div>
				<div class="default-button default-button-solid">
					<a href="#">MEET OUR AGENTS</a>
				</div>

			</div>
		</div><!-- end of welcome content -->
	</div><!-- end of welcome container -->
</section><!-- end of welcome area -->

<section class="hpFeaturedCommunities relative accent-bg">
	<div class="hpFeaturedCommunitiesContainer relative flex">

		<div class="hpFeaturedContent">
			<div class="default-title">
				<h2 class="inline-block">
					<span>Explore CiTIES</span>
					<em>Communities</em>
				</h2>
			</div>
			<h5>Get to know more about the list of communities on where Rush Home Realty serves for all realty needs. Choose one along the cities to get to know more about them.</h5>
			<p>Rush Home Realty is a team of experienced, licensed real estate agents serving the Delaware, Maryland and Pensylvenia. With a proven track record  of getting results quickly and a direct line of communication at all times.</p>
			<div class="default-button">
				<a href="#">VIEW ALL CITIES</a>
			</div>
		</div><!-- end of content -->

		<div class="hpFeaturedCommunitiesLists flex">

			<div class="hpFeaturedCommunitiesList relative">
				<div class="hpFeaturedCommunitiesListWrap relative">
					<div class="hpFeaturedCommunitiesImage relative">
						<canvas width="275" height="580" class="block w-100"></canvas>
						<img width="275" height="580" src="<?=do_shortcode('[stylesheet_directory]')?>/images/com-1.jpg" alt="Delaware" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
					</div><!-- end of image -->
					<div class="hpFeaturedCommunitiesContent absolute w-100 h-100 top-0 left-0">
						<h4><a href="#">Delaware</a></h4>
						<ul>
							<li><a href="#">Dover</a></li>
							<li><a href="#">Middletown</a></li>
							<li><a href="#">Newark</a></li>
							<li><a href="#">Wilmington</a></li>
							<li><a href="#">Rehoboth</a></li>
							<li><a href="#">New Castle</a></li>
						</ul>
					</div><!-- end of content -->
				</div>
			</div><!-- end of featured communities -->
			<div class="hpFeaturedCommunitiesList relative">
				<div class="hpFeaturedCommunitiesListWrap relative">
					<div class="hpFeaturedCommunitiesImage relative">
						<canvas width="275" height="580" class="block w-100"></canvas>
						<img width="275" height="580" src="<?=do_shortcode('[stylesheet_directory]')?>/images/com-2.jpg" alt="Maryland" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
					</div><!-- end of image -->
					<div class="hpFeaturedCommunitiesContent absolute w-100 h-100 top-0 left-0">
						<h4><a href="#">Maryland</a></h4>
						<ul>
							<li><a href="#">Dover</a></li>
							<li><a href="#">Middletown</a></li>
							<li><a href="#">Newark</a></li>
							<li><a href="#">Wilmington</a></li>
							<li><a href="#">Rehoboth</a></li>
							<li><a href="#">New Castle</a></li>
						</ul>
					</div><!-- end of content -->
				</div>
			</div><!-- end of featured communities -->
			<div class="hpFeaturedCommunitiesList relative">
				<div class="hpFeaturedCommunitiesListWrap relative">
					<div class="hpFeaturedCommunitiesImage relative">
						<canvas width="275" height="580" class="block w-100"></canvas>
						<img width="275" height="580" src="<?=do_shortcode('[stylesheet_directory]')?>/images/com-3.jpg" alt="Pennsylvania" class="block w-100 h-100 top-0 left-0 object-fit-cover object-position-center absolute">
					</div><!-- end of image -->
					<div class="hpFeaturedCommunitiesContent absolute w-100 h-100 top-0 left-0">
						<h4><a href="#">Pennsylvania</a></h4>
						<ul>
							<li><a href="#">Dover</a></li>
							<li><a href="#">Middletown</a></li>
							<li><a href="#">Newark</a></li>
							<li><a href="#">Wilmington</a></li>
							<li><a href="#">Rehoboth</a></li>
							<li><a href="#">New Castle</a></li>
						</ul>
					</div><!-- end of content -->
				</div>
			</div><!-- end of featured communities -->

		</div><!-- end of lists -->


	</div>
</section><!-- end of featured communties -->

<section class="hpExclusiveAccess relative">
	<div class="hpExclusiveAccessContainer relative flex items-center">
		<div class="hpExclusiveAccessContent">
			<div class="default-title">
				<h2 class="inline-block">
					<span>Exclusive Access</span>
					<em>New Construction</em>
				</h2>
			</div>
			<h5>From small boutique buildings to large scale residential towers, our team partners with developers to elevate their sales strategy and exclusively bring these projects to life.</h5>
			<p>Explore our current offerings and the locations that best suit your lifestyle - from sleek city living to suburban convenience to tranquil communities along the coast.</p>

			<div class="hpExclusiveAccessBttns flex">
				<div class="default-button">
					<a href="#">LEARN MORE</a>
				</div>
				<div class="default-button default-button-solid">
					<a href="#">CONTACT US</a>
				</div>

			</div>

		</div><!-- end of exclusive content -->
		<div class="hpExclusiveAccessImage">
			<img src="<?= do_shortcode('[stylesheet_directory]')?>/images/exclusive-img.jpg" alt="Exclusive Access" class="block w-100 h-auto" width="730" height="564">
		</div><!-- end of hp exclusive accent image -->

	</div>
</section><!-- end of exclusive access -->

<section class="hpWhyWorkWithUs relative accent-bg">
	<div class="hpWhyWorkWithUsContainer">

		<div class="default-title text-center">
			<h2 class="inline-block">
				<span>OUR SUCCESS</span>
				<em>Why Work With Us</em>
			</h2>
		</div>

		<ul class="wwu-lists flex justify-center items-start">
			<li>
				<span>SALES VOLUME</span>
				<p># <em data-number="1">0</em></p>
				<i>MA-Based Firm in 2022</i>
			</li>
			<li>
				<span>CLIENTS</span>
				<p><em data-number="2">0</em>.<em data-number="9">0</em>K+</p>
				<i>Clients Represented In 2022</i>
			</li>
			<li>
				<span>TOTAL SALES</span>
				<p><strong>$</strong><em data-number="3">0</em>.<em data-number="6">0</em>B</p>
				<i>Sales Volume in 2022</i>
			</li>
		</ul>
	</div><!-- end of why work with us -->
</section><!-- end of how work with us -->

<?php get_footer(); ?>
