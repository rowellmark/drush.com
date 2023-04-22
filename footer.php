			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
	<section class="globContactForm relative accent-bg">
		<div class="globContactFormContainer relative">
			<div class="default-title text-center">
				<h2 class="inline-block">
					<span>Need help?</span>
					<em>Contact Us</em>
				</h2>
			</div>
			<p>Whether buying your dream home or selling your current one, the Rush Home  team is here to help. Never miss out on a newsletter,real estate tips, upcoming events, and more!</p>

			<div class="globFormWrap">
				<?= do_shortcode('[contact-form-7 id="339" title="HP Contact Us" html_class="use-floating-validation-tip"]')?>
			</div>

		</div><!-- end of container -->
	</section>
	<footer class="footer">
		<div class="footer-container">

			<div class="footer-logo">
				<a href="<?= do_shortcode('[blogurl]')?>" class="site-name block w-100">
					<img src="<?= do_shortcode('[ai_client_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
				</a>
			</div><!-- end of footer logo -->

			<div class="footer-contact-info">
				<div class="ft-smi flex justify-center items-center">
					<a href="<?= do_shortcode('[ai_client_facebook]')?>" target="_blank">
						<i class="ai-font-facebook"></i>
						facebook
					</a>
					<a href="<?= do_shortcode('[ai_client_instagram]')?>" target="_blank">
						<i class="ai-font-instagram"></i>
						instagram
					</a>
					<a href="<?= do_shortcode('[ai_client_zillow]')?>" target="_blank">
						<i class="ai-font-zillow"></i>
						zillow
					</a>
					<a href="<?= do_shortcode('[ai_client_linkedin]')?>" target="_blank">
						<i class="ai-font-linkedin"></i>
						linkedin
					</a>
				</div>

				<ul class="flex flex-wrap-wrap justify-between">
					<li>
						<i class="ai-font-location-c"></i>
						<span><?= do_shortcode('[ai_client_address]')?></span>
					</li>
					<li>
						<i class="ai-font-phone"></i>
						<span><?= do_shortcode('[ai_client_phone]{default-phone}[/ai_client_phone]')?></span>
					</li>
					<li>
						<i class="ai-font-envelope-filled-a"></i>
						<span><?= do_shortcode('[ai_client_email]{default-email}[/ai_client_email]')?></span>
					</li>
					<li>
						<i class="ai-font-clock"></i>
						<span>Mon - Fri 8:30 AM to 5 PM <br>
							Sat - 9 AM to 12 PM</span>
					</li>
				</ul>
			</div><!-- end of footer info -->
			<div class="footer-nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div><!-- end of footer nav -->
			<div class="footer-disclaimer">
				<p>Rush Home is committed to providing an accessible website. If you have difficulty accessing content, have difficulty viewing a file on the website, or notice any accessibility problems, please contact us at  4302.219.67076 to specify the nature of the accessibility issue and any assistive technology you use. We strive to provide the content you need in the format you require.</p>
				<p>The information being provided by Bright MLS is for the consumer's personal, non-commercial use and may not be used for any purpose other than to identify prospective properties consumer may be interested in purchasing. Any information relating to real estate for sale referenced on this web site comes from the Internet Data Exchange (IDX) program of the Bright MLS. Rush Home is not a Multiple Listing Service (MLS), nor does it offer MLS access. This website is a service of Rush Home, a broker participant of Bright MLS. This web site may reference real estate listing(s) held by a brokerage firm other than the broker and/or agent who owns this web site.</p>
				<p>The accuracy of all information, regardless of source, including but not limited to open house information, square footages and lot sizes, is deemed reliable but not guaranteed and should be personally verified through personal inspection by and/or with the appropriate professionals. The data contained herein is copyrighted by Bright MLS and is protected by all applicable copyright laws. Any unauthorized dissemination of this information is in violation of copyright laws and is strictly prohibited. Copyright 2023 Bright MLS. All rights reserved.</p>
			</div><!-- end of footer disclaimer -->
			
			<div class="footer-copyright-head flex justify-between items-center">
				<h5>#FINDYOUR<span>WAYHOME.</span></h5>
				<a href="<?= do_shortcode('[blogurl]')?>" class="site-name block w-100">
					<img src="<?= do_shortcode('[ai_client_logo]')?>" alt="Rush Home" class="block w-100 h-auto" width="500" height="66">
				</a>
			</div><!-- end of footer copyright head -->
			<div class="ft-copyright flex justify-between items-center">
				<p>Copyright &copy; <?php echo date('Y') ?> Rush Home. All rights reserved. <a href="#">Terms of Use</a> | <a href="#">Sitemap</a>. <?= do_shortcode('[agentimage_credits renew="true" credits="Real Estate Website Design by <a target="_blank" href="https://www.agentimage.com" style="text-decoration:underline;font-weight:bold; color:#fcce64">Agent Image</a>"]')?></p>

				<div class="copyright-logos flex items-center justify-center">
					<i class="ai-font-eho"></i>
					<i class="ai-font-realtor-mls"></i>
					
				</div>
			</div><!-- end of copyright -->
		</div>		
	</footer>
	
	<?php do_action('aios_neighborhoods_footer')?>
	<?php do_action('aios_landing_page_footer')?>
		
	</div><!-- end of #main-wrapper -->

	<?php wp_footer(); ?>
</body>
</html>
