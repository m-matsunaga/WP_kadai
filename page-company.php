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
        <h2 class="en-title">COMPANY</h2>
        <span class="ja-title">会社概要</span>
      </div>
      <img src="<?php echo get_template_directory_uri(); ?>/images/COMPANY-img1.jpeg" class="page-mv-image" alt="LULLイメージ写真">
    </div>
  </section>

  <!-- ーーー01.PHILOSOPHYーーー -->
  <section id="page-philosophy">
    <div class="page-container">
      <h3 CLASS="inview_re fadeIn_up">01.<br>PHILOSOPHY</h3>
      <span class="philosophy-text inview_re fadeIn_up">creating person<br>creating value</span>
      <p class="mission-title inview_re fadeIn_up">人を創り、価値を創る</p>
      <p class="mission-text page-text inview_re fadeIn_up">私たち『LULL』は、一人一人の人間性とスキルの向上を目指し、人の持つ『価値』を伸ばしていく事をミッションとしています。</p>
      <p class="mission-text page-text inview_re fadeIn_up">私たちは学び、働き、そして遊びを通して成長をしていくことで、物心両面が豊かになり、より良い未来を創造していくことが可能と考えております。</p>
      <p class="mission-text page-text inview_re fadeIn_up">私たちと関わる顧客、企業の皆様にとって、より最適でかつ満足度の高いサービスを開発し続け、皆様から最高の『価値』を感じていただける組織を目指して参ります。</p>
      <p class="mission-text page-text inview_re fadeIn_up">これからの未来へ向けて常に新しい『価値』を生み出していくことに挑戦します。</p>
    </div>
  </section>

  <!-- ーーー02.MESSAGEーーー -->
  <section id="page-message">
    <div class="page-container">
      <h3>02.<br>MESSAGE</h3>
      <img src="<?php echo get_template_directory_uri(); ?>/images/company-img2.jpeg" class="message-img" alt="代表写真">
      <div class="message-box">
        <div>
          <p class="message-title inview_re fadeIn_up">代表挨拶</p>
        </div>
        <div class="message-text-box">
          <p class="page-text inview_re fadeIn_up">弊社のコーポレートサイトにお越しいただきありがとうございます。</p>
          <p class="page-text inview_re fadeIn_up">2019年に株式会社LULLを設立しました。</p>
          <p class="page-text inview_re fadeIn_up">現在、「人を創り、価値を創る」を理念に掲げ、顧客・従業員・社会と弊社に関わる全ての人たちに向けて貢献できる企業作りを行っています。</p>
          <p class="page-text inview_re fadeIn_up">近年、グローバル化やAIの発達で単純作業や知識のスキルの需要はなくなっていくことが容易に想像できます。</p>
          <p class="page-text inview_re fadeIn_up">今後、ビジネス社会で求められるのは「新たな価値を生み出す力」です。</p>
          <p class="page-text inview_re fadeIn_up">人や組織の可能性を大切にし、新たな価値を生み出す組織がこのLULLです。</p>
          <p class="page-text inview_re fadeIn_up">まだまだ発展途上の組織ではありますが、情熱はどの会社にも負けません。</p>
          <p class="page-text inview_re fadeIn_up">世の中にインパクトを与える価値を創造し、日本を代表する会社になります。</p>
          <p class="page-text inview_re fadeIn_up">従業員の成長が会社の成長と信じ、一人一人が自己実現できる舞台としてLULLを活用していける企業を目指します。</p>
          <p class="page-text inview_re fadeIn_up">代表取締役 仁藤 敬介</p>
        </div>
      </div>
    </div>
  </section>

  <!-- ーーー会社情報ーーー -->
  <section id="campany-info">
    <div class="page-container">
      <div class="campany-info-title">
        <h2 class="campany-info-en-title">COMPANY INFO</h2>
        <span class="campany-info-ja-title">会社情報</span>
      </div>
      <ul class="list-group list-group-flush">
        <li class="list-group-item">
          <p class="list-item-title">会社名</p>
          <p>株式会社LULL</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">所在地</p>
          <p>〒150-0002<br>東京都渋谷区渋谷3-10-13<br>東急REIT渋谷Rビル B1</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">代表取締役</p>
          <p>仁藤 敬介</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">事業内容</p>
          <p>WEB制作事業 / SES事業 / 一般派遣事業</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">許可番号</p>
          <p>WEB制作事業 / SES事業 / 一般派遣事業</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">事業内容</p>
          <p>労働者派遣事業<br>（許可番号／派13-314354）<br>
          有料職業紹介事業<br>（許可番号／13-ユ-311300）</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">設立年月日</p>
          <p>2019年6月3日</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">資本金</p>
          <p>20,000,000円</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">電話番号</p>
          <p>03-6457-3780</p>
        </li>
        <li class="list-group-item">
          <p class="list-item-title">従業員数</p>
          <p>264名(パート・アルバイトを含む) <br>※2021年9月現在</p>
        </li>
      </ul>
    </div>
  </section>

<?php
  get_footer();
?>
