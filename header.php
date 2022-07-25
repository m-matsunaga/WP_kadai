<!doctype html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/reset.css" type="text/css" />
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>" type="text/css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick.css">
  <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick-theme.css">
  <link rel="profile" href="https://gmpg.org/xfn/11">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@500&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>

<body>
  <!-- ーーーヘッダーーーー -->
  <header id="masthead" class="site-header">
    <div class="header-content">
      <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="lull-logo-a"><img src="<?php echo get_template_directory_uri(); ?>/images/lull-logo.svg" class="lull-logo-img" alt="株式会社LULL"></a>
      <!-- NAV PC用 -->
      <nav id="site-navigation" class="main-navigation">
        <div>
          <ul class="nav-wrapper">
            <li class="nav-item"><a href="<?php echo get_permalink(8); ?>">COMPANY</a></li>
            <li class="nav-item">
              <a href="<?php echo get_permalink(20); ?>">SERVICES</a>
              <ul class="dropdown__lists">
                <li class="dropdown__list"><a href="<?php echo get_permalink(20); ?>#service-block1">WEB制作事業</a></li>
                <li class="dropdown__list"><a href="<?php echo get_permalink(20); ?>#service-block2">SES事業</a></li>
                <li class="dropdown__list"><a href="<?php echo get_permalink(20); ?>#service-block3">一般派遣事業</a></li>
              </ul>
            </li>
            <li class="nav-item"><a href="<?php echo get_permalink(23); ?>" target="_blank">RECRUIT</a></li>
            <li class="nav-item-contact"><a href="<?php echo get_permalink(47); ?>">CONTACT</a></li>
          </ul>
        </div>
      </nav>
      <!-- NAV スマホ用 -->
      <nav class="sp-navigation">
        <!-- ハンバーガー -->
        <div class="hamburger-box">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </nav>
    </div>
  </header>
