<?php
/**
 * @package wip_theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                    <input type="hidden" id="wip-directory-categories-field" value="<?php echo get_option('wip_directory_categories'); ?>">
                    <form id="wip-directory-form">
                        <select id="wip-directory-categories-select">
                            <option value="" disabled selected>Select a Category</option>
                        </select>
                        <input type="text" placeholder="Title" id="wip-directory-title" required>
                        <textarea placeholder="Description" id="wip-directory-description" required></textarea>
                        <input type="submit" value="Submit">
                    </form>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
