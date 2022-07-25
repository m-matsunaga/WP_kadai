<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_kadai
 */


?>

<aside id="secondary" class="widget-area">
	<section id="block-8" class="widget widget_block">
		<div class="wp-container-2 wp-block-group">
			<div class="wp-block-group__inner-container">
				<h2>Category</h2>
				<div class="wp-container-1 wp-block-group">
					<div class="wp-block-group__inner-container">
						<ul>
							<?php
								$terms = get_terms('blogs-category');
								foreach ( $terms as $term ) {
									echo '<li><a href="'.get_term_link($term->slug, 'blogs-category').'">'.$term->name.'</a></li>';
								}
							?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="widget widget_block">
		<div class="wp-container-2 wp-block-group">
			<div class="wp-block-group__inner-container">
				<h2>Archive</h2>
				<div class="wp-container-1 wp-block-group">
					<div class="wp-block-group__inner-container">
						<ul class="yearly-list">
							<?php wp_get_archives( 'post_type=blogs&type=monthly' ); ?>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
</aside><!-- #secondary -->
