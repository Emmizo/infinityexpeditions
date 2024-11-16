<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Four
 * @since Twenty Twenty-Four 1.0
 */

?>




 <?php 
    $footer = get_field('footer', 'option');
    $footer_logo = $footer['logo'];
    $menu_title = $footer['menu_title'];
	$services_menu = $footer['services_menu'];
	$why_della_menu = $footer['why_infinity_expeditions_menu'];
	$about_us_menu = $footer['about_us_menu'];
	$menu_title_2 = $footer['menu_title_2'];
	$menu_title_3 = $footer['menu_title_3'];
	$menu_title_4 = $footer['menu_title_4'];
	$phone_number = $footer['phone_number'];
	$terms_and_condition_title = $footer['terms_and_condition_title'];
	$terms_and_condition_contents = $footer['terms_and_condition_contents'];
	$copy_right = $footer['copy_right'];
	$social_media_links = $footer['social_media_links'];
	?>
    <footer>
        <div class="footer-menu">
            <div class="custom-container">
                <div class="row">
                    <div class="footer-grid logo-column">
						<?php if ($footer_logo): ?>
                           <a href="<?php echo esc_url(home_url('/')); ?>">
    							<img src="<?php echo esc_html($footer_logo); ?>" alt="">
							</a>

                        <?php endif; ?>
                    </div>
                    <div class="footer-grid">
						<?php if ($menu_title): ?>
                            <h3><?php echo esc_html($menu_title); ?></h3>
                        <?php endif; ?>
						<?php
                            $menu_object = wp_get_nav_menu_object($services_menu);
							if ($menu_object) {
								wp_nav_menu(array('menu' => $menu_object->name));
							}
                            ?>
                    </div>
                    <div class="footer-grid">
						<?php if ($menu_title_2): ?>
                            <h3><?php echo esc_html($menu_title_2); ?></h3>
                        <?php endif; ?>
						<?php
                            $menu_object = wp_get_nav_menu_object($why_della_menu);
							if ($menu_object) {
								wp_nav_menu(array('menu' => $menu_object->name));
							}
                            ?>
                    </div>
                    <div class="footer-grid wide-column">
						<?php if ($menu_title_3): ?>
                            <h3><?php echo esc_html($menu_title_3); ?></h3>
                        <?php endif; ?>
						<?php
                            $menu_object = wp_get_nav_menu_object($about_us_menu);
							if ($menu_object) {
								wp_nav_menu(array('menu' => $menu_object->name));
							}
                            ?>
                    </div>
                    <div class="footer-grid cs-contact">
						<?php if ($menu_title_4): ?>
                            <h3><?php echo esc_html($menu_title_4); ?></h3>
                        <?php endif; ?>
						<?php if ($phone_number): ?> 
							<?php echo $phone_number; ?>
						<?php endif; ?> 
						
						<?php if ($social_media_links): ?>
                            <div class="cs-social-links">
								<p class="cs-txt">Follow on: </p>
                                <?php foreach ($social_media_links as $social_media_links): ?>
                                    <a href="<?php echo esc_url($social_media_links["links"]); ?>" class="cs-links" target="_blank">
                                        <img class="cs-img" src="<?php echo esc_url($social_media_links["icon"]); ?>" alt="social-icons">
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
						
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-terms">
            <div class="custom-container">
				<?php if ($terms_and_condition_title): ?>
					<h4><?php echo esc_html($terms_and_condition_title); ?></h4>
				<?php endif; ?>
				<?php if ($terms_and_condition_contents): ?> 
					<?php echo $terms_and_condition_contents; ?>
				<?php endif; ?> 
				<?php if ($copy_right): ?>
					<p class="copyright"><?php echo esc_html($copy_right); ?></p>
				<?php endif; ?>
            </div>
        </div>
    </footer>

	</div><!-- #page -->
<!-- Load Slick CSS in the footer -->
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick.css">
<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick-theme.css">

<!-- Load jQuery (if not already loaded) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Load Slick JS in the footer -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/slick/slick.js"></script>
    <script type="text/javascript">
		jQuery(document).on("click", "header button.menu-toggle-icon", function(){
        jQuery(this).toggleClass("show");
        jQuery("header .della-menu").toggleClass("show");
		});
		
        jQuery(".slider-sec").slick({
            dots: true,
            arrow: false,
            slidesToShow: 1,
            slidesToScroll: 1
          });
    </script>

<?php wp_footer(); ?>

</body>
</html>