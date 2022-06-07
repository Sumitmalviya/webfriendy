<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package revenue
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" >

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main --><br>
		<center><script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- 728 * 90 -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-8804241586333072"
     data-ad-slot="5973041552"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
			</center>
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>