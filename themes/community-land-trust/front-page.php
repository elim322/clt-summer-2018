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

            <div class="timeline-block">

                <div class="year one">
                    <span>1993 - 2000</span>
                </div>

                <img class="lower" src="<?php echo get_template_directory_uri() ?>/assets/images/timeline/early.svg">
                <h3 class="lower-heading">The Early Years</h3>
                <p>Co-op & non-profit housing investments into the CLT</p>
            </div>


            <div class="timeline-block">
                <div class="year two">
                    <span>2012</span>
                </div>

                <img class="upper" src="<?php echo get_template_directory_uri() ?>/assets/images/timeline/breakthrough.svg">
                <h3>The Breakthrough</h3>
                <p>City of Vancouver's first partnership with CLT</p>
            </div>

            <div class="timeline-block">
                <div class="year three">
                    <span>2017</span>
                </div>

                <img class="lower" src="<?php echo get_template_directory_uri() ?>/assets/images/timeline/solving.svg">
                <h3 class="lower-heading">Solving Our Homes</h3>
                <p>Existing co-op homes transferred to the CLT</p>
            </div>

            <div class="timeline-block">
                <div class="year four">
                    <span>2018</span>
                </div>

                <img class="upper" src="<?php echo get_template_directory_uri() ?>/assets/images/timeline/growth.svg">
                <h3>Growth</h3>
                <p>Largest single investments by municipal & community partners </p>
            </div>

            <div class="timeline-block">
                <div class="year five">
                    <span>2019</span>
                </div>

                <img class="lower" src="<?php echo get_template_directory_uri() ?>/assets/images/timeline/future.svg">
                <h3 class="lower-heading">The Future</h3>
                <p>Over 2,800 homes and growing </p>
            </div>


            <!-- foreach loop over the achievement numbers entered on the wp backend through CFS -->
            <div class="timeline-growth">
				<?php $timeline_fields = CFS()->get( 'item' ); ?>
                    
                
				<?php foreach ( $timeline_fields as $timeline_field ) {
					echo "<span class='timeline-growth-numbers counter'>" . $timeline_field['achievements_numbers'] . "</span>";
				}
                ?>
                </div>

         

        </section> <!-- end of timeline section -->

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

                
                <?php echo( get_the_post_thumbnail( $clt_partners_thumbnail->ID ) );?>
                
                    </a>

                <?php endforeach;
			wp_reset_postdata();
			?>
        </div>


        <h2 class="more-info">Need More Information?</h2>

        <a href="<?php echo get_permalink( get_page_by_path( 'contact' ) ) ?>">
            <button class="mixin-button">Contact Us</button>
        </a>


    </main> <!-- end of .home-page main -->

<?php get_footer() ?>