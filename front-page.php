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
  <section id="main-visual">
    <div class="mv-wrapper">
      <div>
        <ul class="slider">
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/top-img1.jpeg" alt="LULLイメージ写真1"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/top-img2.jpeg" alt="LULLイメージ写真1"></li>
          <li><img src="<?php echo get_template_directory_uri(); ?>/images/top-img3.jpeg" alt="LULLイメージ写真1"></li>
        </ul>
      </div>
      <div class="mv-text">
        <p class="mv-text-jp">人の価値と</p>
        <br>
        <p class="mv-text-jp">未来を想像する</p>
        <br>
        <p class="mv-text-en">CREATING VALUE FOR</p>
        <br>
        <p class="mv-text-en">PEAPLE AND THE FUTURE</p>
      </div>
    </div>
  </section>

  <!-- ーーーニュースーーー -->
  <section id="news">
    <div class="news-container">
      <div class="news-content">
        <div class="news-titile">
          <h2 class="en-title">NEWS</h2>
          <span class="ja-title">お知らせ</span>
        </div>
        <div class="news-list">
          <ul>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <a href="<?php the_permalink(); ?>" class="news-list-a">
              <li class="news-list-li">
                <p class="news-list-date"><?php the_time('Y-m-d');?></p>
                <p><?php the_title();?></p>
              </li>
            </a>
          <?php endwhile; endif; ?>
          </ul>
        </div>
      </div>
      <a href="<?php echo home_url(); ?>/post" class="to-news-list">
        <p class="to-list-link">お知らせ一覧はこちら　→</p>
      </a>
    </div>
  </section>

  <!-- ーーー会社概要ーーー -->
  <section id="campany">
    <div class="content-rayout">
      <div class="top-image-size">
        <img src="<?php echo get_template_directory_uri(); ?>/images/COMPANY-img1.jpeg" class="top-images" alt="LULLイメージ写真4">
      </div>
      <div class="content-text">
        <span class="en-decoration">CAMPANY</span>
        <div class="jp-content-text">
          <h2 class="content-title inview_re fadeIn_up">会社概要</h2>
          <p class="inview_re fadeIn_up">株式会社LULLの企業情報をお伝えします。<br>
        私たちは「人を創り、価値を創る」を理念とし、人の持つ「価値」を伸ばしていく事をミッションとしています。</p>
          <a href="<?php echo get_permalink(8); ?>">
            <p class="to-list-link inview_re fadeIn_up">会社概要を詳しく見る　→</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ーーー事業内容ーーー -->
  <section id="service">
    <div class="content-rayout service-content-rayout">
      <div class="top-image-size service-content-img">
        <img src="<?php echo get_template_directory_uri(); ?>/images/SERVICE-img1.jpeg" class="top-images" alt="LULLイメージ写真6">
      </div>
      <div class="content-text service-content-text">
        <span class="en-decoration">SERVICES</span>
        <div class="jp-content-text">
          <h2 class="content-title inview_re fadeIn_up">事業内容</h2>
          <p class="inview_re fadeIn_up">株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
          <a href="<?php echo get_permalink(20); ?>">
            <p class="to-list-link inview_re fadeIn_up">事業内容を詳しく見る　→</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ーーー採用情報ーーー -->
  <section id="recruit">
    <div class="content-rayout">
      <div class="top-image-size">
        <img src="<?php echo get_template_directory_uri(); ?>/images/RECRUIT-img1.jpeg" class="top-images" alt="LULLイメージ写真6">
      </div>
      <div class="content-text">
        <span class="en-decoration">RECRUIT</span>
        <div class="jp-content-text">
          <h2 class="content-title inview_re fadeIn_up">採用情報</h2>
          <p class="inview_re fadeIn_up">株式会社LULLは、様々な事業モデルを通してお客様と企業様と繋がっています。LULLの「価値」を感じて頂けるよう、満足度の高いサービスを提供します。</p>
          <a href="<?php echo get_permalink(23); ?>">
            <p class="to-list-link inview_re fadeIn_up">採用情報を詳しく見る　→</p>
          </a>
        </div>
      </div>
    </div>
  </section>

  <!-- ーーーブログーーー -->
  <section id="blog">
    <div class="blog-container">
      <div class="blog-title">
        <h2 class="en-title">BLOG</h2>
        <span class="ja-title">ブログ</span>
      </div>

    <?php $args = array(
      'post_type' => 'blogs',
      'posts_per_page' => '3'
      );
      $the_query = new WP_query($args);
      if ($the_query->have_posts()):
    ?>

      <div class="blog-card">

    <?php while($the_query->have_posts()): $the_query->the_post(); ?>
        <!-- カード -->
        <div class="card-box">
            <a href="<?php the_permalink(); ?>" class="blog-card-a">
              <div class="card-img-box">
                <?php the_post_thumbnail('medium', array('class' => 'card-img-img')); ?>
              </div>
              <div class="card-text-box">
                <div class="card-body-box">
                  <p class="card-text"><?php the_title(); ?></p>
                </div>
                <div class="card-footer-box">
                  <p><?php echo get_the_terms($post->ID, 'blogs-category')[0]->name; ?></p>
                  <p><?php the_time('Y-m-d');?></p>
                </div>
              </div>
              </a>
          </div>
    <?php endwhile; ?>

      </div>

    <?php wp_reset_postdata(); endif; ?>

      <a href="<?php echo home_url(); ?>/blogs" class="to-blog-list">
        <p class="to-list-link">ブログ一覧はこちら　→</p>
      </a>
    </div>
  </section>

<?php
  get_footer();
?>
