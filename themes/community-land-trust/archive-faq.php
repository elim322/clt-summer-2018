<?php get_header(); ?>

<div class="faq-header">

	<h1>Frequently Asked Questions</h1>

</div>

<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="faq_container">

		<div class="faq">

		<?php the_title( '<h2 class="faq_question">', '</h2>' ); ?>
		<img class="faq-arrow-down" src="<?php echo get_template_directory_uri() ?>/assets/images/icons/arrow-down.svg">

      <div class="faq_answer_container">
				
					<?php the_content(); ?>

					<?php
					wp_link_pages( array(
						'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
						'after'  => '</div>',
					) );
					?>

</div>

</div>

</div>

  </article>

<?php endwhile; ?>

<?php get_footer(); ?>