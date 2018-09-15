<?php
/**
 * The template for displaying all single posts.
 * Template Name: Single Media
 * @package CLT_Theme
 */

get_header(); ?>

<div id="primary" class="content-area">

		<div class="media-container">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
					<header class="entry-header">
				<?php if ( has_post_thumbnail() ) : ?>
					<?php the_post_thumbnail( 'large' ); ?>
				<?php endif; ?>
				<div class="title-date">
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				<?php clt_posted_on(); ?>
				</div>
					</header><!-- .entry-header -->

					<div class="single-content-container">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php the_content(); ?>
				<?php endwhile; // End of the loop. ?>
				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
				?>
					</div><!-- end single-content-container -->
			</article><!-- #post-## -->

			<div class="social-links">
			<ul class="meks_share">
 
 <!-- twitter -->
 <li><a class="twitter-share-button" data-count="vertical" data-via="mekshq" data-url="<?php the_permalink() ?>"></a></li>

 <!-- LinkedIN -->
 <li><script type="IN/Share" data-counter="top" data-url="<?php the_permalink() ?>"></script></li>

 <!-- facebook like -->
 <li><div class="fb-like" data-send="false" data-layout="box_count" data-width="50" data-show-faces="false" data-href="<?php the_permalink() ?>"></div></li>

</ul>
					<?php $fblink = CFS()->get( 'facebook', 36 ); ?>
					<?php $twlink = CFS()->get( 'twitter', 36 ); ?>
					<?php $lilink = CFS()->get( 'linkedin', 36 ); ?>
				<p class="share">Share:<i class="fab fa-facebook-f"></i><i class="fab fa-twitter"></i><i class="fab fa-linkedin-in"></i></p>
				</div><!-- end of social-links -->
	
				<!-- custom field only print if there is a value inputted --> 

			<div class="email-container">
				<div class="email">
					<p>For Media Inquiries regarding Community Land Trust, Please Contact: <?php echo CFS()->get( 'email' ); ?></p>
				</div>
			</div> <!-- end of email-container -->
				
			</div> <!-- end of media-container --> 
			<div class="navigation-links">
				<div class="left"><?php previous_post_link( '%link', '<i class="fas fa-arrow-left"></i>' ); ?></div>
				<div class="middle"><a href="<?php echo get_permalink( get_page_by_title( 'Media' ) ) ?>"><span class="break">Back to </span>Media</a></div>
				<div class="right"><?php next_post_link( '%link', '<i class="fas fa-arrow-right"></i>' ); ?></div>
			</div><!-- end of navigation-links -->
			
		</div><!-- #primary -->
		
		
		<?php get_footer(); ?>

