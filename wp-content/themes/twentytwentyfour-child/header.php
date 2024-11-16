<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Four
 * @since Twenty Twenty-Four 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyfour_the_html_classes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
	<link href="https://fonts.googleapis.com/css2?family=Be+Vietnam+Pro:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
<!-- 	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />

	
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

<header class="della-header">
        <div class="custom-container">
		<?php
		$header = get_field('header', 'option');
		$header_logo = $header['logo'];
		$header_menu = $header['menu'];
		?>
            <div class="row">
                <div class="col-md-4">
					<?php if ($header_logo): ?>
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="della-header_logo">
                        <img src="<?php echo esc_html($header_logo); ?>" class="img-fluid" alt="Logo">
                    </a>
					 <?php endif; ?>
					<button type="button" class="menu-toggle-icon">
                            <div></div>
                            <div></div>
                            <div></div>
					</button>
                </div>
                <div class="col-md-8 della-menu">
				
					<?php
					// Retrieve the selected nav menu from the ACF theme options page
					$menu = get_field('header_menu', 'option');

					if ($menu) {
						wp_nav_menu(array(
							'menu' => $menu, // Use the menu ID retrieved from ACF
							'menu_class' => 'custom-header-menu', // Optional: Add your own CSS classes
							'container' => false, // Optional: No container element around the menu
						));
					}
					?>
					
                </div>
            </div>
        </div>
    </header>
 <body>