<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_kadai
 */

?>

  <footer>
    <div class="footer-container">
      <div class="footer-left">
        <img src="<?php echo get_template_directory_uri(); ?>/images/lull-logo-wh.svg" class="logo-footer" alt="株式会社LULL">
        <p>
          株式会社LULL<br>
          〒150-0002<br>
          東京都渋谷区渋谷3-10-13 東急REIT渋谷Rビル B1<br>
          TEL 03-6457-3780<br>
          MAIL info@lull-inc.co.jp
        </p>
      </div>
      <div class="footer-right">
        <ul>
          <li><a href="<?php echo get_permalink(8); ?>">CAMPANY</a></li>
          <li><a href="<?php echo get_permalink(20); ?>">SERVICES</a></li>
          <li><a href="<?php echo get_permalink(23); ?>">RECRUIT</a></li>
          <li><a href="<?php echo get_permalink(47); ?>">CONTACT</a></li>
        </ul>
        <p><small>@LULL INC. ALL RIGHTS RESERVED.</small></p>
      </div>
    </div>
  </footer>

<?php wp_footer(); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
</body>
</html>
