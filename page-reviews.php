<?php 
/*
Template Name: Отзывы
*/
?>

<?php get_header(); ?>
	<header>
		<div class="menu-container"  style="background-color: #4f3330; position: relative;">
		<div class="menu grid">
			<div class="logo">
				<?php the_custom_logo(); ?>
			</div>
			<p class="phone">
				<a href="tel:<?php echo nl2br(esc_html(get_theme_mod('company_phone'))); ?>"><?php echo nl2br(esc_html(get_theme_mod('company_phone'))); ?></a>
			</p>
			<nav>
				<ul>
					<li><a href="/order">Сделать заказ</a></li>
					<li><a href="/gallery">Продукция</a></li>
					<li><a href="/about">О компании</a></li>
					<li><a href="/contacts">Контакты</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>

<section id="all_reviews" class="container">
	<?php 
		$posts = get_posts( array(
		'numberposts' => 0,
		'post_type'   => 'reviews',
		'suppress_filters' => true, 
	) );
		foreach( $posts as $post ){
			setup_postdata($post);
			$name = get_field('author');
			$date = get_field('date');
			$text = get_the_content();
			$moderated = get_field('moderated');
			if($moderated) {
				echo '
				<div class="item">
						<p><span class="name">'.$name.'</span><br> <p class="date">'.$date.'</p> 
						<p class="review">'.$text.'</p> 
				</div>';
			}
		} 
		wp_reset_postdata();
	?>
</section>

<?php get_footer(); ?>