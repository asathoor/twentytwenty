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
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

get_header();
?>

<main id="site-content" role="main">

	<?php

	$archive_title    = '';
	$archive_subtitle = '';

	if ( is_search() ) {
		global $wp_query;
		/* Translators: %s = The search query */
		$archive_title = sprintf( _x( 'Search: %s', '%s = The search query', 'twentytwenty' ), '&ldquo;' . get_search_query() . '&rdquo;' );
		if ( $wp_query->found_posts ) {
			/* Translators: %s = Number of results */
			$archive_subtitle = sprintf( _nx( 'We found %s result for your search.', 'We found %s results for your search.', $wp_query->found_posts, '%s = Number of results', 'twentytwenty' ), $wp_query->found_posts );
		} else {
			$archive_subtitle = __( 'We could not find any results for your search. You can give it another try through the search form below.', 'twentytwenty' );
		}
	} elseif ( ! is_home() ) {
		$archive_title    = get_the_archive_title();
		$archive_subtitle = get_the_archive_description( '<div>', '</div>' );
	}

	if ( $archive_title || $archive_subtitle ) :
		?>

		<header class="archive-header has-text-align-center">

			<div class="archive-header-inner section-inner medium">

				<?php if ( $archive_title ) : ?>
					<h1 class="archive-title"><?php echo wp_kses_post( $archive_title ); ?></h1>
				<?php endif; ?>

				<?php if ( $archive_subtitle ) : ?>
					<div class="archive-subtitle section-inner thin max-percentage intro-text"><?php echo wp_kses_post( wpautop( $archive_subtitle ) ); ?></div>
				<?php endif; ?>

			</div><!-- .archive-header-inner -->

		</header><!-- .archive-header -->

	<?php endif; ?>

	<div class="posts">

		<?php
		if ( have_posts() ) {

			while ( have_posts() ) {
				the_post();

				get_template_part( 'content', get_post_type() );

			}
		} elseif ( is_search() ) {
			?>

			<div class="no-search-results-form">

				<?php get_search_form(); ?>

			</div><!-- .no-search-results -->

			<?php
		}
		?>

	</div><!-- .posts -->

	<?php get_template_part( 'template-parts/pagination' ); ?>

</main><!-- #site-content -->

<?php
get_footer();
