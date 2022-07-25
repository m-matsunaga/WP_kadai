<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WP_kadai
 */

get_header();
?>

	<main id="primary" class="site-main">

<!-- ーーーメインビジュアルーーー -->
  <section id="single-mv">
    <div class="mv-wrapper">
      <div class="single-mv">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top-img1.jpeg" class="single-img" alt="LULLイメージ写真1">
        <div class="news-titile">
          <h2 class="en-title">NEWS</h2>
          <span class="ja-title">お知らせ</span>
        </div>
      </div>
    </div>
  </section>

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="archive-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<div class="archive-wrapper">
				<div class="archive-content-wrapper">
					<?php
					/* Start the Loop */
					while ( have_posts() ) :
						the_post();

						/*
						 * Include the Post-Type-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'archive' );

					endwhile;

						the_posts_navigation();

					else :

						get_template_part( 'template-parts/content', 'none' );

					endif;
					?>
					</div>
					<?php
						get_sidebar();
					?>
			</div>
	</main><!-- #main -->

<?php
get_footer();
