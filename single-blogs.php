<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
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
          <h2 class="en-title">BLOG</h2>
          <span class="ja-title">ブログ</span>
        </div>
      </div>
    </div>
  </section>

	<div class="archive-wrapper">
		<div class="archive-content-wrapper">
			<?php
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content', get_post_type() );

			endwhile; // End of the loop.
			?>
		</div>
			<?php
				get_sidebar("blogs");
			?>
	</div>
	</main><!-- #main -->
<?php

get_footer();
