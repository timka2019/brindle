<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package theme-test
 */

 $theme_settings = get_theme_global_settings();
 $page_settings = get_page_settings();


?>


	<?php
		$section = get_field('before_footer', 'option');

		// print_r($page_settings);

		if( !$page_settings['before_footer']['hide_section'] ):
	?>
	<section class="site-before-footer regular-content" id="before-footer">
		<a class="regular-content__anchor" name="before-footer"></a>
		<div class="regular-content__wrap">

			<?php echo regular_content_background( $section['background_settings'] ); ?>

			<div class="regular-content__main">
				<div class="container-fluid">
					<div class="row">
						<div class="col col-12">
							<div class="col__wrap">
								<h2><?php echo $section['title']; ?></h2>
								<hr>
								<div class="buttons">
									<?php echo acf_button($section['button_regular'], 'btn'); ?>
									<?php echo acf_button($section['button_outline'], 'btn btn-outline d-none d-md-flex'); ?>


									<?php echo acf_button($section['button_outline_mobile'], 'btn btn-outline d-md-none'); ?>
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section>
	<?php endif; ?>



<?php
	$section = get_field('footer', 'option');
?>
	<footer id="footer" class="site-footer regular-content regular-content--white">
		<a class="regular-content__anchor" name="footer"></a>
		<div class="regular-content__wrap">

			<?php echo regular_content_background( $section['background_settings'] ); ?>
			
			<div class="regular-content__main">
				<div class="container-fluid">
					<div class="row">

						<div class="col col-12 col--navigation">
							<div class="col__wrap">

								<nav class="footer-navigation">
									<div class="navigation-group item item--1">
										<h2 class="link-large"><?php echo $section['menu_1_title']; ?></h2>
										<div>


											<?php 
											
												echo wp_nav_menu( array(
													'theme_location' => 'footer_menu', // Do not fall back to first non-empty menu.
													'menu_class'    => 'footer-menu--first'
												) );

												echo wp_nav_menu( array(
													'theme_location' => 'footer_menu', // Do not fall back to first non-empty menu.
													'menu_class'    => 'footer-menu--second'
												) );
											?>

											<!-- <ul>
												<li>
													<a href="#">
														FLOOR PLANS
													</a>
												</li>
												<li>
													<a href="#">
														NEIGHBORHOOD
													</a>
												</li>
												<li>
													<a href="#">
														GALLERY
													</a>
												</li>
												<li>
													<a href="#">
														AMENITIES
													</a>
												</li>
											</ul>
											<ul>
												<li>
													<a href="#">
														RESIDENT LOGIN
													</a>
												</li>
												<li>
													<a href="#">
														CONTACT US
													</a>
												</li>
												<li>
													<a href="#">
														SCHEDULE A TOUR
													</a>
												</li>
												<li>
													<a href="#">
														APPLY ONLINE
													</a>
												</li>
											</ul> -->


										</div>
									</div>

									<div class="navigation-group item item--2">
										<h2 class="link-large"><?php echo $section['menu_2_title']; ?></h2>
										<div>


											<!-- <ul>
												<li>
													THE WILDER APARTMENTS
												</li>
												<li>
													4000 Minnetonka Blvd.
												</li>
												<li>
													Minnetonka, MN 55345
												</li>
												<li  class="underline">
													<a href="#">
														Get Directions <i class="fa-solid fa-arrow-right"></i>
													</a>
												</li>
												<li>
													<a href="#">
													970-000-0000
													</a>
												</li>
											</ul> -->

											<?php
												echo $section['menu_2_content'];
											?>


										</div>
									</div>

									<div class="navigation-group socials">
										<div>
											<ul>
												<?php foreach($theme_settings['socials'] as $social ): ?>
													<li>
														<a href="<?php echo $social['social']['url']; ?>" target="<?php echo $social['social']['target']; ?>">
															<?php echo $social['icon']; ?>
														</a>
													</li>
												<?php endforeach; ?>
											</ul>
										</div>
									</div>
								</nav>

							</div>
						</div>

						<div class="col col-12 col--bottom">
							<div class="col__wrap">

								<!-- <small>
									© Copyright <?php echo date('Y'); ?> Bluprint Wilder Apartments  | <br class="d-md-none"> <a href="#">Accessibility Statement</a> | <a href="#">Privacy Policy</a>
								</small> -->

								<div class="copyright">
									<?php echo $section['bottom_content']; ?>
								</div>


								<ul>

									<?php
									
										if( $section['icons'] ){
											foreach( $section['icons'] as $icon ){
												?>
												
													<li>
														<a href="<?php echo $icon['link']['url']; ?>" target="<?php echo $icon['link']['target']; ?>">
															<img src="<?php echo $icon['icon']['url']; ?>" alt="<?php echo $icon['link']['title']; ?>">
														</a>
													</li>

												<?php
											}
										}

									?>

								</ul>

								
								<?php
									if( $section['logo'] && isset( $section['logo']['logo'] ) ){
										?>
											<a href="<?php echo $section['logo']['link']['url']; ?>" target="<?php echo $section['logo']['link']['target']; ?>" class="logo">
												<img src="<?php echo $section['logo']['logo']['url']; ?>" alt="<?php echo $section['logo']['link']['title']; ?>">
											</a>

										<?php
									}
								?>

							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->



</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
