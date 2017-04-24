<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package wip_theme
 */

?>

<article class="wip-post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="wip-post-date-icon">
                    <div class="wip-post-day">
			<?php echo esc_html( get_the_date("M j") )?>
                    </div>
                    <div class="wip-post-year">
                        <?php echo esc_html( get_the_date("Y") ) ?>
                    </div>
	</header><!-- .entry-header -->

	<div class="wip-post-content">
                <?php
                    if ( is_single() ) :
                            the_title( '<h3 class="entry-title wip-post-title">', '</h1>' );
                    else :
                            the_title( '<h3 class="entry-title wip-post-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                    endif;
                ?>
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'wip' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wip' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-## -->
