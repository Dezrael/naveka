<?php 
/*
Template Name: О компании
*/
?>

<?php get_header(); ?>
<style>
	body {
		background-color: white;
	}
</style>
<div class="wrapper" style="background-image: url(<?php the_field('banner') ?>); background-position: center; background-size: cover;">
	<header class="about-header">
		<div class="menu-container">
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
		<div class="about-banner">
			<div class="text">
				<h1><?php the_field('about_title') ?></h1>
				<p><?php the_field('about_text_1') ?></p>
				<p><?php the_field('about_text_2') ?></p>
			</div>
		</div>
	</header>
</div>


<section id="about-us" class="container">
	<div class="info clearfix">
		<div class="text">
			<div>
				<img src="<?php the_field('icon')?>" alt="Иконка мебели">
				<p><?php the_field('text_about_company_1') ?></p>
			</div>
			<p class="second"><?php the_field('text_about_company_2') ?></p>
		</div>
		<div class="photo">
			<img src="<?php the_field('image')?>" alt="Фото">
		</div>
	</div>

	<div class="feedback clearfix">
		<div class="form">
			<form id="feedback-form">
				<p>Имя *</p>
				<input type="text" id="name" name="name" required="required">
				<p>Телефон</p>
				<input type="text" id="phone" name="phone" required="required">
				<p>Информация к заказу</p>
				<textarea id="fbinfo" name="fbinfo" placeholder="" required="required"></textarea><br>
				<div class="but">
					<button id="submit">Отправить</button>
				</div>
			</form>
		</div>
		<div class="fbtext">
			<p><?php the_field('work_time') ?></p>
			<p>
				<div class="vk">
		      		<a href="<?php echo nl2br(esc_html(get_theme_mod('company_vk'))); ?>" target="_blank">Группа "ВКонтакте"</a>
		    	</div>
				<div class="insta">
			      <a href="<?php echo nl2br(esc_html(get_theme_mod('company_insta'))); ?>" target="_blank">Инстаграм</a>
			    </div>
			</p>
			<p>
				<?php the_field('address') ?><br>
				Телефон: <span class="phone"><?php echo nl2br(esc_html(get_theme_mod('company_phone'))); ?></span><br>
				E-mail: <span class="mail"><?php echo nl2br(esc_html(get_theme_mod('company_mail'))); ?></span><br>
			</p>
		</div>
	</div>
</section>

<?php get_footer(); ?>