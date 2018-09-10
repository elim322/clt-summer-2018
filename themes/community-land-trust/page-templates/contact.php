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

      <?php while ( have_posts() ) : the_post(); ?>

      <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
    <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    <div class="border-bottom"></div>
	</header><!-- .entry-header -->
  <div class="contact-info">
  <p class="contact-number">
<i class="fas fa-phone fa-rotate-180"></i>
<?php echo CFS()->get( 'contact_number' );?>
</p>
<p class="email-address">
<i class="fas fa-envelope"></i>
<?php echo CFS()->get( 'email' );?>
</p>
<p class="address">
<i class="fas fa-map-marker-alt"></i>
<?php echo CFS()->get( 'location' );?>
</p>
      </div>
  <div class="map">
  <img src="<?php echo CFS()->get( 'screenshot' );?>"/>
  </div>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->

      <?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
</section>


<?php get_footer(); ?>
