<?php
/**
 * The template for displaying Contact Us
 * Template Name: Contact
 * @package CLT_Theme
 */

 $email = 'info@cltrust.ca';

 get_header(); ?>

<section class="contact-us container">
    <div class="banner-container">
        
    <div class="entry-header">
        <h2 class="entry-title"><?php the_title(); ?></h2>
    </div><!-- .entry-header -->
  
    <section class="contact-email-address">
        <div class="contact-info">
            <p class="contact-number">
                <i class="fas fa-phone fa-rotate-180"></i>
                <?php echo CFS()->get( 'contact_number' ); ?>
            </p>
            <p class="email-address">
                <i class="fas fa-envelope"></i>
                <?php echo CFS()->get( 'email' ); ?>
            </p>
            <p class="address">
                <i class="fas fa-map-marker-alt"></i>
                <?php echo CFS()->get( 'location' ); ?>
            </p>
        </div>
        <div class="map-container">
            <div id="map-canvas"></div>
        </div>
    </section>
    </div> <!-- end of banner container -->

    <div class="offset-container">
    <div class="contact-container">
        <a id="contact-container"></a>
		<?php gravity_form( 1, true, true, false, null, false, null, true ); ?>
    </div><!-- .contact-container -->

    <div class="featured-person">
        <div class="featured-person-photo">
            <img src="<?php echo esc_html( CFS()->get( 'photo' )); ?>"/>
        </div>
        <div class="featured-person-content">
            <a href="mailto:<?php echo $email; ?>">
                <h2 class="featured-person-name"><?php echo esc_html( CFS()->get( 'name' )); ?></h2>
            </a>
            <p class="featured-person-title"><?php echo esc_html( CFS()->get( 'title' )); ?></p>
            <p><?php echo esc_html( CFS()->get( 'description' )); ?></p>
        </div>
    </div> <!-- end of featured-person -->

    </div> <!-- end of offset -->
</section><!-- #primary -->

<?php get_footer(); ?>
