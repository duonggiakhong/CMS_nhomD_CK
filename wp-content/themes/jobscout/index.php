
<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

get_header(); ?>
<style>
	.list-view .site-main article .post-thumbnail img {
		width: 200px !important;
		height: 190px !important;
	}

	.list-view .site-main article .content-wrap {
		width: 54%;
		padding: 0px 12px;
		height: auto;
		font-size: 15px;
	}

	.list-view .site-main article .post-thumbnail {
		padding-top: 20%;
		text-align: center;
		padding: 20px 0;
	}

	.container.site-main {
		width: max-content;
	}

	.content-area {
		width: 150%;
	}

	.entry-footer {
		/* position: absolute;
		bottom: 20%;*/
		font-size: 18px;


	}

	.entry-footer a {
		color: #ff5e00;
		font-weight: bold;
	}

	.new-header-blog {
		text-align: center;
		font-weight: bold;
		font-size: 30px;
	}
</style>
<div id="primary" class="content-area">

	<?php
	/**
	 * Before Posts hook
	 */
	do_action('jobscout_before_posts_content');
	?>

	<main id="main" class="container site-main">
		<h3 class="new-header-blog">
			NEWEST BLOG ENTRIES
		</h3>
		<div class="row">


			<?php
			if (have_posts()) :
				/* Start the Loop */
				while (have_posts()) : the_post();
					/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
					get_template_part('template-parts/content', get_post_format());

				endwhile;

			else :

				get_template_part('template-parts/content', 'none');

			endif; ?>
		</div>
	</main><!-- #main -->

	<?php
	/**
	 * After Posts hook
	 * @hooked jobscout_navigation - 15
	 */
	do_action('jobscout_after_posts_content');
	?>

</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
