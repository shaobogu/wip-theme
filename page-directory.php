<?php
/**
 * @package wip_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    
                    <div onclick='WIPDirectory.createPost()'>Click Me</div>

			<?php
                        $query = new WP_Query(array('post_type' => 'wip_directory'));
                        if ( $query->have_posts() ) :

                                /* Start the Loop */
                                while ( $query->have_posts() ) : $query->the_post();

                                        /*
                                         * Include the Post-Format-specific template for the content.
                                         * If you want to override this in a child theme, then include a file
                                         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
                                         */
                                        get_template_part( 'template-parts/content', get_post_format() );

                                endwhile;

                        else :

                                get_template_part( 'template-parts/content', 'none' );

                        endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
