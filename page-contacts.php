<?php 
/*
Template Name: Контакты
*/
?>


<?php get_header(); ?>
<style>
	body {
		background-color: white;
	}
</style>
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

<section id="contacts" class="container clearfix">
	<div class="text">
		<div class="adress">
			<h3>Адрес:</h3>
			<p><?php the_field('address') ?></p>
		</div>
		<div class="work">
			<h3>График работы:</h3>
			<p><?php the_field('work_time') ?></p>
		</div>
		<div class="tel">
			<h3>Телефон:</h3>
			<p><?php the_field('phone_1') ?><br>
			<?php the_field('phone_2') ?></p>
		</div>
		<div class="mail">
			<h3>Email:</h3>
			<p><?php echo nl2br(esc_html(get_theme_mod('company_mail'))); ?></p>
		</div>
		<div class="enjoy">
			Мы будем рады видеть Вас!
		</div>
	</div>
	<div class="map">
		<?php the_field('map') ?>
	</div>
</section>

<?php get_footer(); ?>