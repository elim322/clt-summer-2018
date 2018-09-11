<?php 

/* Template Name: Find a Home */

get_header(); ?>

<section class="find-page-container">

	<?php the_post_thumbnail(); ?>

	<h1><?php the_title(); ?></h1>

	<?php echo get_post_field('post_content', $post->ID) ?>

	<div class="map-and-buttons">

		<div id="map-canvas"></div>

		<ul class="locations-menu">
			<?php
				$terms = get_terms( array( 'taxonomy' => 'Portfolio Location',
										'orderby'  => 'id' ) );
				foreach ( $terms as $term ) {
					$term_link = get_term_link( $term );
					// If there was an error, continue to the next term.
					if ( is_wp_error( $term_link ) ) {
						continue;
					}
					echo '<li><button class="fetch-property" data-id="' . $term->term_id . '" >' . $term->name . '</button></li>';
					echo ' ';
				} ?>
		</ul>

	</div>
	
	<div class="gravity-form">

		<?php //@TODO: this doesn't work with CFS
			echo '<h2>' . CFS()->get( 'sign_up_cta' ) . '</h2>';
			echo '<p>' . CFS()->get( 'sign_up_copy' ) . '</p>';
		?>

		<h3>Which Best Describes You?</h3>

		<button class="form-button">Looking for a Home</button>
		<button class="form-button">Partner and Investor</button>

		<button class="cta-button">Next</button>

	</div>

	<div class="more-info">
		<h2>Need More Info?</h2>
		<button class="cta-button">Contact Us</button>
	</div>

</section>

<?php get_footer(); ?>