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
  <section id="page-main-visual">
    <div class="page-mv-wrapper">
      <div class="page-titile">
        <h2 class="en-title">SERVICES</h2>
        <span class="ja-title">事業内容</span>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/SERVICE-img1.jpeg" class="page-mv-image" alt="LULLイメージ写真">
    </div>
  </section>

  <!-- ーーー01 WEB制作事業ーーー -->
  <section id="service-block1">
    <div class="page-container service-box-flex">
      <div class="service-img-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/service-img01.jpeg" class="service-img" alt="事業イメージ写真">
      </div>
      <div class="service-text-box">
        <p class="service-index inview_re fadeIn_up">01</p>
        <p class="service-jp-title inview_re fadeIn_up">WEB制作事業</p>
        <span class="inview_re fadeIn_up">Web Production Project</span>
        <p class="service-explanation inview_re fadeIn_up">様々なクライアントのデジタル戦略に関してUX/UIデザイン・開発および運用面のサポートを提供しています。ユーザーにとって品質高いサービスを提供するデザインテックカンパニーとして、スタッフは教育レイヤーから徹底的に技術と人間力の指導を行っています。自分自身の「価値」を向上させるという事業ビジョンのリレーションを行うことにより、スタッフ一人一人がやりがいを持って仕事をしています。</p>
      </div>
    </div>
  </section>

  <!-- ーーー02 SES事業ーーー -->
  <section id="service-block2">
    <div class="page-container service-box-flex">
      <div class="service-img-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/service-img02.jpeg" class="service-img" alt="事業イメージ写真">
      </div>
      <div class="service-text-box">
        <p class="service-index inview_re fadeIn_up">02</p>
        <p class="service-jp-title inview_re fadeIn_up">SES事業</p>
        <span class="inview_re fadeIn_up">System Engineering Service Project</span>
        <p class="service-explanation inview_re fadeIn_up">独自の育成カリキュラムを導入し、徹底した技術の指導と人間力の向上を行い、自社開発や様々なクライアント様のプロジェクトに参加させていただいた弊社のWEBクリエイター・エンジニアスタッフを派遣しております。制作開発の実務に精通しているコンサルタントが御社の採用をサポート。業務に必要なスキルや求める人物像にマッチした人材をご紹介いたします。</p>
      </div>
    </div>
  </section>

  <!-- ーーー03 一般派遣事業ーーー -->
  <section id="service-block3">
    <div class="page-container service-box-flex">
      <div class="service-img-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/service-img03.jpeg" class="service-img" alt="事業イメージ写真">
      </div>
      <div class="service-text-box">
        <p class="service-index inview_re fadeIn_up">03</p>
        <p class="service-jp-title inview_re fadeIn_up">一般派遣事業</p>
        <span class="inview_re fadeIn_up">General Dispatch Project</span>
        <p class="service-explanation inview_re fadeIn_up">様々なクライアント様から要求される、高い知識力やコミュニケーション力を育成し、販売スタッフをはじめ、営業ラウンダー、一般事務、営業事務、コールセンタースタッフ、オペレーターなど幅広い業界に即戦力の人材をご提供致します。スタッフに対しても面談や研修カリキュラムだけでなく、スキルアップやモチベーションを高く保つための独自の評価制度を設けることで、「価値」の高い人財を育んでまいります。</p>
      </div>
    </div>
  </section>

  <!-- ーーー04 Ed Techーーー -->
  <section id="service-block4">
    <div class="page-container service-box-flex">
      <div class="service-img-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/service-img04.jpeg" class="service-img" alt="事業イメージ写真">
      </div>
      <div class="service-text-box">
        <p class="service-index inview_re fadeIn_up">04</p>
        <p class="service-jp-title inview_re fadeIn_up">Ed Tech</p>
        <span class="inview_re fadeIn_up">Ed Tech</span>
        <p class="service-explanation inview_re fadeIn_up">日本のIT人材の不足を解決し「IT人材のプロフェッショナルを創出」するため、未経験からでもIT人材を目指せる独自のカリキュラム「Tech Flag」を運営、「教育」×「IT」を推進しています。「Tech Flag」では、実践的な研修や最先端のWEBスキルが学べる独自教材Atlasを用いて、これまで多くのエンジニア・WEBデザイナーを排出しております。</p>
      </div>
    </div>
  </section>

<?php
  get_footer();
?>
