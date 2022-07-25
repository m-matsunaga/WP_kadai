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

get_header("recruit");
?>

<!-- ーーーメインビジュアルーーー -->
<section id="page-main-visual">
  <div class="recruit-img-box">
    <div class="page-recruit-titile">
      <span class="recruit-mv-text-ja">代わりの<br>きかない<br>ワタシになる。</span>
      <span class="recruit-mv-text-en">ONE'S OWN POTENTIAL</span>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-1.jpeg" class="page-recruit-image" alt="LULLイメージ写真">
  </div>

  <?php
    $data = get_posts('post_type=post&order=DESC&orderby=date&showposts=1');
    if(isset($data[0])) { ?>

  <div class="recruit-news-box">
    <div class="recruit-news-wrapper">
      <div class="recruit-news-date-box">
        <p class="recruit-news-date-year"><?php echo sprintf(date('Y', strtotime($data[0]->post_date))) ?></p>
        <p class="recruit-news-date-day"><?php echo sprintf(date('m.d', strtotime($data[0]->post_date))) ?></p>
      </div>
      <div class="recruit-news-title-box">
        <p class="recruit-news-title"><?php echo sprintf(esc_html($data[0]->post_title)) ?></p>
      </div>
    </div>
    <div class="to-news-box">
      <a href="<?php echo home_url(); ?>/post" class="link-to-news">NEWS一覧へ</a>
    </div>
  </div>

  <?php } ?>
</section>

<!-- ーーーPhilosophyーーー -->
<section id="recruit-philosophy">
  <div class="page-container">
    <div class="philosophy-text-box">
      <p class="philosophy-text inview_re fadeIn_up">creating person creating value</p>
      <p class="mission-title inview_re fadeIn_up">人を創り、価値を創る</p>
      <p class="mission-text page-text inview_re fadeIn_up">お客様を豊かにし、満足できるサービスを提供するにはまず従業員が豊かでなくてはなりません。<br>
      私たちは人を育てるということを1番に考え、経済と社会を活性化させる新たな価値を生み出していくWEB制作会社です。</p>
    </div>
  </div>
</section>

<!-- ーーーGUIDELINESーーー -->
<section id="guidelines">
  <div class="page-container">
    <div class="">
      <h3>01.</h3>
      <h2 class="en-title">GUIDELINES</h2>
      <span class="ja-title">LULLの行動方針</span>
    </div>
    <div class="guidelines-wrapper">
      <ol class="guide-box">
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">志</div>
          <p>私たちは、志を高く持ち、目標達成のための努力をし続けます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">情熱</div>
          <p>私たちは、情熱の火を燃やし続けます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">素直</div>
          <p>私たちは、素直な姿勢で仕事に取り組みます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">挑戦</div>
          <p>私たちは、挑戦者のスタンスを常に持ち、新しい価値を作り続けます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">成長</div>
          <p>私たちは、成長のために学び続けます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">育成</div>
          <p>私たちは、人を育てるということを大切にします</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">利他</div>
          <p>私たちは、まずお客様、取引先、仲間が喜ぶことから行っていきます</p>
        </li>
        <li class="guide-list">
          <div class="guide-name inview_re fadeIn_up">感謝</div>
          <p>私たちは、感謝の気持ち、貢献の心を大切にします</p>
        </li>
      </ol>
    </div>
  </div>
</section>

<!-- ーーーLULLの由来ーーー -->
<section id="lull-origin">
  <div class="page-container">
    <div class="lull-origin-box">
      <p class="lull-origin-title">LULLの由来</p>
      <p class="lull-origin-text">
        大きな波の後には必ず凪があります。<br>
        そして凪の後には波があるように。<br>
        LULLでは自らが大きな時代の波をつくり、<br>
        世の中へインパクトを与える思いを込めています。
      </p>
    </div>
  </div>
</section>

<!-- ーーーLULLの事業内容ーーー -->
<section id="service">
  <div class="page-container">
    <div class="">
      <h3 class="inview_re fadeIn_up">02.</h3>
      <h2 class="en-title inview_re fadeIn_up">SERVICES</h2>
      <span class="ja-title inview_re fadeIn_up">LULLの事業内容</span>
    </div>
    <div class="service-li-wrapper">
      <ol class="service-filter">
        <li class="service-list active" data-filter="ed-tech">
          <span>Ed Tech</span>
          <p>Ed Tech</p>
        </li>
        <li class="service-list" data-filter="web">
          <span>WEB制作事業</span>
          <p>Web Production Project</p>
        </li>
        <li class="service-list" data-filter="ses">
          <span>SES事業</span>
          <p>System Engineering Service Project</p>
        </li>
        <li class="service-list" data-filter="general">
          <span>一般派遣事業</span>
          <p>General Dispatch Project</p>
        </li>
      </ol>
      <ul class="service-wrapper">
        <li class="service-list-explain is-clicked" data-category="ed-tech">
          <p>日本のIT人材の不足を解決し「IT人材のプロフェッショナルを創出」するため、未経験からでもIT人材を目指せる独自のカリキュラム「Tech Flag」を運営、「教育」×「IT」を推進しています。「Tech Flag」では、実践的な研修や最先端のWEBスキルが学べる独自教材Atlasを用いて、これまで多くのエンジニア・WEBデザイナーを排出しております。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-service-list01.jpeg" alt="事業イメージ">
        </li>
        <li class="service-list-explain" data-category="web">
          <p>様々なクライアント様から要求される、高い知識力やコミュニケーション力を育成し、販売スタッフをはじめ、営業ラウンダー、一般事務、営業事務、コールセンタースタッフ、オペレーターなど幅広い業界に即戦力の人材をご提供致します。スタッフに対しても面談や研修カリキュラムだけでなく、スキルアップやモチベーションを高く保つための独自の評価制度を設けることで、「価値」の高い人財を育んでまいります。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-service-list02.jpeg" alt="事業イメージ">
        </li>
        <li class="service-list-explain" data-category="ses">
          <p>独自の育成カリキュラムを導入し、徹底した技術の指導と人間力の向上を行い、自社開発や様々なクライアント様のプロジェクトに参加させていただいた弊社のWEBクリエイター・エンジニアスタッフを派遣しております。制作開発の実務に精通しているコンサルタントが御社の採用をサポート。業務に必要なスキルや求める人物像にマッチした人材をご紹介いたします。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-service-list03.jpeg" alt="事業イメージ">
        </li>
        <li class="service-list-explain" data-category="general">
          <p>様々なクライアント様から要求される、高い知識力やコミュニケーション力を育成し、販売スタッフをはじめ、営業ラウンダー、一般事務、営業事務、コールセンタースタッフ、オペレーターなど幅広い業界に即戦力の人材をご提供致します。スタッフに対しても面談や研修カリキュラムだけでなく、スキルアップやモチベーションを高く保つための独自の評価制度を設けることで、「価値」の高い人財を育んでまいります。</p>
          <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-service-list04.jpeg" alt="事業イメージ">
        </li>
      </ul>
    </div>
  </div>
</section>

<!-- ーーーLULLのインフォメーションーーー -->
<section id="infomation">
  <div class="page-container">
    <div class="">
      <h3 class="inview_re fadeIn_up">03.</h3>
      <h2 class="en-title inview_re fadeIn_up">INFOMATION</h2>
      <span class="ja-title inview_re fadeIn_up">数字で見るLULL</span>
    </div>
    <div class="infomation-wrapper">
      <div class="lull-founded information-bottom">
        <img src="<?php echo get_template_directory_uri(); ?>/images/lull-logo.svg" alt="LULLロゴ">
        <div class="founded-textbox">
          <p class="founded-since">2019年6月設立</p>
          <p class="founded-year inview_re fadeIn_up">創業<span>3</span>年</p>
        </div>
      </div>
      <div class="lull-employee information-bottom">
        <div class="employee-box">
          <div class="employee-text-box">
            <p class="employee-li">従業員平均年齢</p>
            <p class="inview_re fadeIn_up"><span>26</span>歳</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/person.png" alt="">
        </div>
        <div class="employee-box">
          <div class="employee-text-box">
            <p class="employee-li">管理職平均年齢</p>
            <p class="inview_re fadeIn_up"><span>32</span>歳</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/person.png" alt="">
        </div>
        <div class="employee-box">
          <div class="employee-text-box">
            <p class="employee-li">従業員数</p>
            <p class="inview_re fadeIn_up"><span>264</span>人</p>
          </div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/person-team.png" class="employee-image3" alt="">
        </div>
      </div>
      <div class="lull-employee2">
        <div class="employee-box2">
          <p class="employee-li">男女比率</p>
          <div class="graph-img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-graph1.png" class="graph-img" alt="グラフ1">
          </div>
          <div class="graph-text-wrapper">
            <div class="graph-text-box">
              <p class="graph-text-name">男性</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span class="emphasis-percent">47</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">女性</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span class="emphasis-percent">53</span>%</p>
            </div>
          </div>
        </div>
        <div class="employee-box2">
          <p class="employee-li">出身地割合</p>
          <div class="graph-img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-graph2.png" class="graph-img" alt="グラフ2">
          </div>
          <div class="graph-text-wrapper">
            <div class="graph-text-box">
              <p class="graph-text-name">関東</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span class="emphasis-percent">60</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">中部</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>14</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">東北</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>8</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">九州</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>6</span>%</p>
            </div>
          </div>
        </div>
        <div class="employee-box2">
          <p class="employee-li">最終学歴</p>
          <div class="graph-img-box">
            <img src="<?php echo get_template_directory_uri(); ?>/images/employee-graph3.png" class="graph-img" alt="グラフ3">
          </div>
          <div class="graph-text-wrapper">
            <div class="graph-text-box">
              <p class="graph-text-name">四大学</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span class="emphasis-percent">49</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">専門</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>29</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">高等</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>11</span>%</p>
            </div>
            <div class="graph-text-box">
              <p class="graph-text-name">短期</p>
              <p class="graph-text-percent inview_re fadeIn_up"><span>7</span>%</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ーーーメッセージーーー -->
<section id="recruit-message">
  <div class="recruit-message-container">
    <img src="<?php echo get_template_directory_uri(); ?>/images/recruit-message.jpeg" class="recruit-message-img" alt="LULLイメージ写真">
  </div>
  <div class="page-container">
    <div class="message-textbox">
      <h3 class="inview_re fadeIn_up">04.</h3>
      <h2 class="en-title inview_re fadeIn_up">MESSAGE</h2>
      <span class="ja-title inview_re fadeIn_up">メッセージ</span>
      <p class="inview_re fadeIn_up">
        私たち『LULL』は、一人一人の人間性とスキルの向上を目指し、人の持つ『価値』を伸ばしていく事をミッションとしています。<br>
        私たちは学び、働き、そして遊びを通して成長をしていくことで、物心両面が豊かになり、より良い未来を創造していくことが可能と考えております。<br>
        私たちと関わる顧客、企業の皆様にとって、より最適でかつ満足度の高いサービスを開発し続け、皆様から最高の『価値』を感じていただける組織を目指して参ります。<br>
        これからの未来へ向けて常に新しい『価値』を生み出していくことに挑戦します。
      </p>
    </div>
  </div>
</section>

<!-- ーーーインタビューーーー -->
<section id="interiew">
  <div class="page-container">
    <div class="">
      <h3>05.</h3>
      <h2 class="en-title">INTERVIEW</h2>
      <span class="ja-title">インタビュー</span>
    </div>
  </div>
  <ul class="interview-ul">
    <li class="interview-li">
      <div class="interview-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog1.jpeg" class="interview-img" alt="">
      </div>
      <div class="interview-textbox">
        <p>1人1人の可能性と活躍のできる場をお届けしたい。</p>
        <ul>
          <li>見澤真一</li>
          <li>人材コンサルティング事業部</li>
          <li>採用広報</li>
        </ul>
      </div>
    </li>
    <li class="interview-li">
      <div class="interview-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog2.jpeg" class="interview-img" alt="">
      </div>
      <div class="interview-textbox">
        <p>自らのチャレンジで、共に会社を作る。</p>
        <ul>
          <li>宗村勇斗</li>
          <li>人材コンサルティング事業部</li>
          <li>人事</li>
        </ul>
      </div>
    </li>
    <li class="interview-li">
      <div class="interview-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/blog3.jpeg" class="interview-img" alt="">
      </div>
      <div class="interview-textbox">
        <p>人と人との関わりで最大限の豊かさを創る。</p>
        <ul>
          <li>加藤正之</li>
          <li>営業部</li>
          <li>営業・主任</li>
        </ul>
      </div>
    </li>
    <li class="interview-li">
      <div class="interview-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/interview4.jpeg" class="interview-img" alt="">
      </div>
      <div class="interview-textbox">
        <p>ゼロスタートだったからこそ、全力で教えていきたい。</p>
        <ul>
          <li>伊藤万衣</li>
          <li>デジタルクリエイション部</li>
          <li>Web講師</li>
        </ul>
      </div>
    </li>
    <li class="interview-li">
      <div class="interview-image-box">
        <img src="<?php echo get_template_directory_uri(); ?>/images/interview5.jpeg" class="interview-img" alt="">
      </div>
      <div class="interview-textbox">
        <p>クリエイティブの先の感動を伝える。</p>
        <ul>
          <li>久保昂平</li>
          <li>デジタルクリエイション部</li>
          <li>Web講師</li>
        </ul>
      </div>
    </li>
  </ul>
</section>

<!-- ーーーPOSITIONーーー -->
<section id="position">
  <div class="page-container">
    <div class="">
      <h3>06.</h3>
      <h2 class="en-title">POSITION</h2>
      <span class="ja-title">募集職種</span>
    </div>
  </div>
  <div class="position-imagebox">
    <a href="" class="position-imagebox-a">
      <img src="<?php echo get_template_directory_uri(); ?>/images/position-img.jpeg" class="position-image" alt="">
    </a>
  </div>
</section>

<?php
  get_footer();
?>
