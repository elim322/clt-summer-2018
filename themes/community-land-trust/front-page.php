<?php
/**
 * Template Name: Front Page
 *
 */

get_header(); ?>

    <!-- HEADER/HERO BANNER SECTION BEGINS -->

    <section class="hero-banner">

		<?php the_post_thumbnail(); ?>

        <div class="company-header-info">
            <h1 class="company-name">Community Land Trust</h1>
            <p class="slogan"><?php echo CFS()->get( 'slogan' ); ?></p>
        </div>

        <a href="<?php echo get_permalink( get_page_by_path( 'find' ) ) ?>">
            <button class="mixin-button">Find a Home</button>
        </a>


    </section> <!-- end of .hero-banner section -->


    <!-- COMPANY MISSION SECTION BEGINS -->

    <main class="home-page">


        <h2 class="front-page-headings">Our Mission</h2>


		<?php while ( have_posts() ) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
				?>

            </article>

		<?php endwhile; ?>
        <!-- end of company mission section -->


        <!-- TIMELINE SECTION BEGINS -->

        <h2 class="front-page-headings">Timeline</h2>

    <section class="timeline-section-wrapper">

        <!-- foreach loop over the achievement numbers entered on the wp backend through CFS -->      
        <?php $timeline_fields = CFS()->get( 'achievements_loop' ); 
    
                $i = 1;

				foreach ( $timeline_fields as $timeline_field ) : ?>
                    <div class="timeline-block">
                    
                        <div class="year year-entry-<?php echo $i; $i++; ?>">
                            <p>
                              <?php echo $timeline_field['achievements_year'];?>
                            </p>
                        </div>

                        <div class="timeline-line"></div>

                        <img class="lower" src="<?php echo $timeline_field['achievements_icon']; ?>">

                        <p class="timeline-growth-numbers">
                            <?php echo $timeline_field['achievements_numbers']; ?>
                        </p>

                        <h3><?php echo $timeline_field['achievements_title']; ?></h3>

                        <p class="timeline-description">
                            <?php echo $timeline_field['achievements_description']; ?>
                        </p>

                    </div>
                <?php
                endforeach;
                ?>
    
                </section>

        <h2 class="front-page-headings">Our Work</h2>

        <div class="main-carousel">
			<?php
			$portfolio_args      = array(
				'post_type' => 'portfolio',
				'order'     => 'DSC',
			);
			$clt_portfolio_posts = get_posts( $portfolio_args );

			foreach ( $clt_portfolio_posts as $clt_portfolio_post ):
				echo( get_the_post_thumbnail( $clt_portfolio_post->ID ) );

			endforeach;
			wp_reset_postdata();
			?>
        </div>

        <h2 class="front-page-headings">Our Partners</h2>

        <div class="partners-logo-wrapper">

			<?php
			$arguments = array(
				'post_type' => 'partner',
				'order'     => 'DSC'
			);

			$clt_partners_thumbnails = get_posts( $arguments ); ?>

                <?php foreach ( $clt_partners_thumbnails as $clt_partners_thumbnail ):?>

                    <a href="<?php echo get_permalink( get_page_by_path( 'partners' ) ) ?>">

                         <?php echo( get_the_post_thumbnail( $clt_partners_thumbnail->ID) );?>
                
                    </a>

                <?php endforeach;
			wp_reset_postdata();
			?>
        </div>


    <h2 class="more-info">Need More Information?</h2>
    
    <div class="button-container">
        <button class="mixin-button">
            <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) . "#contact-container"; ?>">
                Contact Us
            </a>
        </button>
    </div>
        
    </main> <!-- end of .home-page main -->

<?php get_footer() ?>

