<?php
/**
 * The template for displaying Contact Us
 * Template Name: Contact
 * @package CLT_Theme
 */

get_header(); ?>

<section class="contact-us">
    <div id="primary" class="content-area">
        <main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) :
			the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <div class="entry-header">
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                </div><!-- .entry-header -->

                <section class="upper-content">
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
                    <div class="map">
                        <a href="https://www.google.ca/maps?q=1651+commercial+drive&rlz=1C5CHFA_enJP803JP803&um=1&ie=UTF-8&sa=X&ved=0ahUKEwiB2ca5h7TdAhWprlQKHZVOC6QQ_AUICigB"
                           target="_blank"><img src="<?php echo CFS()->get( 'screenshot' ); ?>"/></a>
                    </div>
    </div>
    <div id="contact-container" class="contact-container">
		<?php the_content(); ?>
		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
			'after'  => '</div>',
		) );
		?>
    </div><!-- .contact-container -->
    </article><!-- #post-## -->
    <div class="featured-person">
        <div class="featured-person-photo">
            <img src="<?php echo CFS()->get( 'photo' ); ?>"/>
        </div>
        <div class="featured-person-content">
            <a href="mailto:info@cltrust.ca"><h2 class="featured-person-name"><?php echo CFS()->get( 'name' ); ?></h2>
            </a>
            <p class="featured-person-title"><?php echo CFS()->get( 'title' ); ?></p>
            <p><?php echo CFS()->get( 'description' ); ?></p>
        </div>
    </div>

	<?php endwhile; // End of the loop. ?>

    </main><!-- #main -->
    </div><!-- #primary -->
</section>


<?php get_footer(); ?>
