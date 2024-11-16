<?php 

/* 
* Template Name: Home Page Template
*/
get_header(); 
?>


<?php if( have_rows('homepage_section') ): while ( have_rows('homepage_section') ) : the_row(); ?>

<?php if( get_row_layout() == 'front_page' ): 

$image = get_sub_field('image');


?>
  <div class="della-banner della-common-sec" style="background-image: url(<?php echo $image;?>);">
    
    <div class="custom-container">
      <div class="row della-banner-row">
        <div class="col-md-6 col-sm-12">
          <div class="della-banner-content">
            <h1><?php the_sub_field('front_content'); ?></h1>
            <?php
            $explore_services = get_sub_field('explore_services');
            if( $explore_services ):
            ?>
            <a href="<?php echo esc_url($explore_services['url']); ?>" class="btn btn-primary">
              <?php echo esc_html($explore_services['title']); ?>
            </a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

<?php if( get_row_layout() == 'legacy_in_our_tourism_care' ): ?>
 <div class="secure-sec della-common-sec">
        <div class="custom-container">
            <div class="secure-contant">
                <h2><?php the_sub_field('title');?></h2>
                <?php the_sub_field('content');?>
				<?php
    $explore_services = get_sub_field('let_get_start'); // Get the field
    if( $explore_services ): // Check if the field exists
						
						?>
                <a href="<?php echo $explore_services['url']; ?>" class="btn-get-started"><?php echo esc_html($explore_services['title']);?> </a>
				<?php endif;?>
            </div>
        </div>
    </div>
<?php endif;?>

<?php if( get_row_layout() == 'planning_section' ): ?>
<div class="della-estate-sec della-common-sec" id ="planning-section">
    <div class="custom-container">
        <div class="della-estate-contant">
            <h2><?php echo esc_html( get_sub_field('title') ); ?></h2>
            <?php the_sub_field('planning_content');?>
        </div>
        <?php if( have_rows('cards') ): ?>
        <div class="row della-estate-row">
            <?php 
            $index = 1; // Initialize index
            while( have_rows('cards') ): the_row();
                $image = get_sub_field('image_logo');
                if ($image): // Check if the image exists ?>
                <div class="col-md-4 col-sm-12 cs-img-box-<?php echo $index; ?>">
                    <img src="<?php echo esc_url( $image ); ?>" alt="">
                    <h3><?php echo esc_html( get_sub_field('title') ); ?></h3>
                    <?php the_sub_field('content');?>
                </div>
                <?php 
                $index++; // Increment index
                endif; 
            endwhile; ?>
        </div>
        <?php endif; ?>
    </div>
</div>
<?php endif; ?>

<?php if( get_row_layout() == 'tell_us_your_need' ): ?>
 <div class="della-tell-sec">
        <div class="custom-container">
            <div class="della-tell-contant">
                <h3><?php the_sub_field('title');?></h3>
                <?php the_sub_field('content');?>
				<?php
    $explore_services = get_sub_field('contact_us'); // Get the field
    if( $explore_services ): // Check if the field exists
						
						?>
                <a href="<?php echo $explore_services['url']; ?>" class="btn"><?php echo esc_html($explore_services['title']);?> </a>
				<?php endif;?>
            </div>
        </div>
    </div>
 <?php endif; ?>
<?php if( get_row_layout() == 'why_infinity_expeditions' ): ?>
<div class="why-della-sec" id="della-rocca-law">
        <div class="custom-container">
            <h2><?php the_sub_field('title');?></h2>
            <?php the_sub_field('content');?>
        </div>
    </div>
<?php endif; ?>
<?php if( get_row_layout() == 'what_we_do' ): ?>

<div class="della-grid-sec">
        <div class="custom-container">
			<?php if( have_rows('cards') ): ?>
            <div class="row">
				<?php while( have_rows('cards') ): the_row();
                   $image = get_sub_field('image');
				?>
                <div class="inner-grid">
                    <img src="<?php echo $image; ?>" alt="">
                    <h3><?php the_sub_field('title');?></h3>
                    <?php the_sub_field('content');?>
                </div>
				<?php endwhile;?>
               
            </div>
			<?php endif; ?>
        </div>
    </div>

 <?php endif; ?>
<?php if( get_row_layout() == 'testimonials' ): ?>
<?php if( have_rows('our_testimony') ): ?>
 <div class="della-slider">
        <div class="custom-container">
			
            <div class="slider-sec">
				<?php while( have_rows('our_testimony') ): the_row();
				?>
                <div class="testimonials-content">
                    <?php the_sub_field('content');?>
                    <h6>— <?php the_sub_field('full_name');?></h6>
                </div>
				<?php endwhile;?>
            </div>
			
        </div>
    </div>
<?php endif; ?>
 <?php endif; ?>
<?php if( get_row_layout() == 'experience_you_can_trust' ): ?>
<div class="della-experience" id="about-us">
        <div class="row">
            <div class="col-md-4 col-sm-12 della-exper-left">
               <?php the_sub_field('title');?>
                <?php the_sub_field('content');?>
            </div>
            <div class="col-md-8 col-sm-12 della-exper-right">
				
                <div class="row">
					<?php while( have_rows('teams') ): the_row();
				                   $image = get_sub_field('profile');
				?>
                    <div class="col-md-6 col-sm-12">
                        <div class="inner-content">
                            <img src="<?php echo $image; ?>" alt="">
							
                            <h3><?php the_sub_field('full_name');?></h3>
                            <h4><?php the_sub_field('title');?></h4>
                            <?php the_sub_field('content');?>
                        </div>
						<div class="row">
							
						<div >
							<?php 
							$image = get_sub_field('linkedin_icon');

?>
							<div class="linked-icons">
								<img src ="<?php echo $image ?>"/>
							</div>
							</div>
						<?php
    $explore_services = get_sub_field('linkedin_link'); // Get the field
    if( $explore_services ): // Check if the field exists
						
						?>
  <a href="<?php echo $explore_services['url']; ?>" class="btn-get-started"><?php echo                     esc_html($explore_services['title']);?> 
						</a>
						
						<?php endif;?>
							</div>
                    </div>
                  <?php endwhile; ?>
                </div>
				
            </div>
        </div>
    </div>
<?php endif; ?>
<?php if( get_row_layout() == 'infinity_expeditions_contact_section' ): ?>
<div class="della-contact" id="contact">
        <div class="custom-container">
            <h2><?php the_sub_field('title');?></h2>
            <?php the_sub_field('content');?>
			<?php if (get_sub_field( 'contact_us' ) ): ?>
<?php the_sub_field('contact_us');?>
			
<?php endif; ?>
        </div>
    </div>
<?php endif; ?>

<?php 
    endwhile; 
    endif;
?>
<?php get_footer();