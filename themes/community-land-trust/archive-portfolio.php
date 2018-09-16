<?php

/* Template Name: Portfolio Archive */

get_header(); ?>

<div class="portfolio-page-container">

	<?php
	$terms = get_terms( array(
		'taxonomy' => 'Portfolio Type'
	) );
	?>

    <div class="banner-container">
        <div class="button-container">

            <button id="0" class="selected">All</button>

            <?php foreach ( $terms as $term ) {
                echo '<button id="' . $term->term_id . '" >' . $term->name . '</button>';
            } ?>

        </div>    
        <p class="error-message">Please refresh the page and try again.</p>
    </div>

    <div class="offset-container">
        <div class="portfolio-grid-container">

            <?php // js fills in containers here ?>

        </div>

        <div class="more-info">

            <h2>Need More Info<span class="contraction">rmation</span>?</h2>

            <button class="cta-button">
                <a href="<?php echo esc_url(get_permalink( get_page_by_title( 'Contact Us' ) )) . "#contact-container" ?>">Contact
                    Us</a>
            </button>

        </div>
    </div>

</div>

<?php get_footer(); ?>
