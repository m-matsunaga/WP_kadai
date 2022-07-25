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
 * @package WP_kadai
 */

get_header();
?>

  <!-- ーーーメインビジュアルーーー -->
  <section id="single-mv">
    <div class="mv-wrapper">
      <div class="single-mv">
        <img src="<?php echo get_template_directory_uri(); ?>/images/top-img1.jpeg" class="single-img" alt="LULLイメージ写真1">
        <div class="news-titile">
          <h2 class="en-title">CONTACT</h2>
          <span class="ja-title">お問合せ</span>
        </div>
      </div>
    </div>
  </section>

  <!-- ーーー問い合わせフォームーーー -->
  <section id="page-contact">
    <div class="page-container contact-wrapper">
      <h2>お問合せフォーム</h2>
      <?php the_content(); ?>
    </div>
  </section>



<?php
  get_footer();
?>
