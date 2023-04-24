			<?php if ( !is_home() && !is_page_template( 'template-fullwidth.php' ) && !is_page_template( 'template-homepage.php' ) ) : ?>
			<div class="clearfix"></div>
			</div><!-- end of #inner-page-wrapper .inner -->
			</div><!-- end of #inner-page-wrapper -->
		<?php endif ?>
	</main>
	
	<section class="globContactForm relative accent-bg">
		<div class="globContactFormContainer relative">
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Form") ) : ?><?php endif ?>		
		</div><!-- end of container -->
	</section>
	<footer class="footer">
		<div class="footer-container">

			<div class="footer-logo">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Logo") ) : ?><?php endif ?>		
			</div><!-- end of footer logo -->

			<div class="footer-contact-info">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Contact Info") ) : ?><?php endif ?>		
			</div><!-- end of footer info -->
			<div class="footer-nav">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu_class' => 'footernav', 'theme_location' => 'primary-menu','depth'=>1 ) ); ?>
			</div><!-- end of footer nav -->
			<div class="footer-disclaimer">
				<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Disclaimer") ) : ?><?php endif ?>
			</div><!-- end of footer disclaimer -->
			
			<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Footer: Tagline") ) : ?><?php endif ?>

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
