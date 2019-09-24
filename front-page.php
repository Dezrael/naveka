<?php 
/*
Template Name: Главная
*/
?>

<?php get_header(); ?>
<header>
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

	<div class="main-banner">

		<div class="item" style="background-image: url(<?php the_field('banner_1')?>">
			<div class="text">
				<h2><?php the_field('pre_header') ?></h2>
				<h1>"<?php bloginfo('name') ?>"</h1>
				<h3><?php the_field('post_header') ?></h3>
				<div class=".buttons">
					<button class="ind-order">Заказать</button>
					<button  class="gallery_but">В галерею</button>
				</div>
			</div>
		</div>
		<div class="item" style="background-image: url(<?php the_field('banner_2')?>">
			<div class="text">
				<h2><?php the_field('pre_header') ?></h2>
				<h1>"<?php bloginfo('name') ?>"</h1>
				<h3><?php the_field('post_header') ?></h3>
				<div class=".buttons">
					<button class="ind-order">Заказать</button>
					<button  class="gallery_but">В галерею</button>
				</div>
			</div>
		</div>
		<div class="item" style="background-image: url(<?php the_field('banner_3')?>">
			<div class="text">
				<h2><?php the_field('pre_header') ?></h2>
				<h1>"<?php bloginfo('name') ?>"</h1>
				<h3><?php the_field('post_header') ?></h3>
				<div class=".buttons">
					<button class="ind-order">Заказать</button>
					<button  class="gallery_but">В галерею</button>
				</div>
			</div>
		</div>
	</div>
</header>

<section id="about" class="container">
	<div class="title">
		<img src="<?php bloginfo('template_url') ?>/img/leftfl.png" alt="">
		<p>Компания <span style="text-transform: uppercase;">"<?php bloginfo('name')?>"</span></p>
		<img src="<?php bloginfo('template_url') ?>/img/rightfl.png" alt="">
	</div>
	<div class="about-items grid">
		<div class="item">
			<h4><?php the_field('number_advantage_1'); ?></h4>
			<p><?php the_field('advantage_1'); ?></p>
		</div>
		<div class="item">
			<h4><?php the_field('number_advantage_2'); ?></h4>
			<p><?php the_field('advantage_2'); ?></p>
		</div>
		<div class="item">
			<h4><?php the_field('number_advantage_3'); ?></h4>
			<p><?php the_field('advantage_3'); ?></p>
		</div>
	</div>
	<p class="about-text">
		<?php the_field('company_desc'); ?>
	</p>
</section>

<div class="wrapper-dark">
	<section id="advantages" class="grid container">
		<div class="title">
			<h2>
				<?php the_field('adv_text'); ?>
			</h2>
			<div class="line"></div>
			<p> <?php the_field('adv_desc'); ?> </p>
		</div>
		
		<div class="advantage">
			<img src="<?php the_field('adv_image_2') ?>" alt="Гарантия">
				<p><span><?php the_field('adv_title_2'); ?></span><br>
				<?php the_field('adv_desc_2'); ?></p>
		</div>
		<div class="advantage">
			<img src="<?php the_field('adv_image_3') ?>" alt="Решения">
				<p><span><?php the_field('adv_title_3'); ?></span><br>
				<?php the_field('adv_desc_3'); ?></p>
		</div>
		<div class="advantage">
			<img src="<?php the_field('adv_image_4') ?>" alt="Скидки">
				<p><span><?php the_field('adv_title_4'); ?></span><br>
				<?php the_field('adv_desc_4'); ?></p>
		</div>
		<div class="advantage">
			<img src="<?php the_field('adv_image_5') ?>" alt="Выбор мебели">
				<p><span><?php the_field('adv_title_5'); ?></span><br>
				<?php the_field('adv_desc_5'); ?></p>
		</div>
		<div class="advantage">
			<img src="<?php the_field('adv_image_6') ?>" alt="Лояльные цены">
				<p><span><?php the_field('adv_title_6'); ?></span><br>
				<?php the_field('adv_desc_6'); ?></p>
		</div>
		<div class="advantage">
			<img src="<?php the_field('adv_image_1') ?>" alt="Индивидуальный подход">
				<p><span><?php the_field('adv_title_1'); ?></span><br>
				<?php the_field('adv_desc_1'); ?></p>
		</div>
		<div class="fix"></div>
	</section>
</div>


<section id="reviews" class="container">
	<div class="title">
		<img src="<?php bloginfo('template_url') ?>/img/leftfl.png" alt="">
		<p>Отзывы клиентов</p>
		<img src="<?php bloginfo('template_url') ?>/img/rightfl.png" alt="">
	</div>
	<div class="grid">
		<div class="review">
			<h5>Фамилия Имя</h5>
			<p class="date">Дата</p>
			<p class="text">Текст отзыва (не больше трех - четырех строк) текст отзыва (не больше трех - четырех строк) текст отзыва текст отзыва (не больше трех - четырех строк)</p>
			<a href="/reviews" class="more">Подробнее</a>
		</div>
		<div class="review">
			<h5>Фамилия Имя</h5>
			<p class="date">Дата</p>
			<p class="text">Текст отзыва (не больше трех - четырех строк) текст отзыва (не больше трех - четырех строк) текст отзыва текст отзыва (не больше трех - четырех строк)</p>
			<a href="/reviews" class="more">Подробнее</a>
		</div>
		<div class="review">
			<h5>Фамилия Имя</h5>
			<p class="date">Дата</p>
			<p class="text">Текст отзыва (не больше трех - четырех строк) текст отзыва (не больше трех - четырех строк) текст отзыва текст отзыва (не больше трех - четырех строк)</p>
			<a href="/reviews" class="more">Подробнее</a>
		</div>
		<div class="review">
			<h5>Фамилия Имя</h5>
			<p class="date">Дата</p>
			<p class="text">Текст отзыва (не больше трех - четырех строк) текст отзыва (не больше трех - четырех строк) текст отзыва текст отзыва (не больше трех - четырех строк)</p>
			<a href="/reviews" class="more">Подробнее</a>
		</div>
		<div class="review">
			<h5>Фамилия Имя</h5>
			<p class="date">Дата</p>
			<p class="text">Текст отзыва (не больше трех - четырех строк) текст отзыва (не больше трех - четырех строк) текст отзыва текст отзыва (не больше трех - четырех строк)</p>
			<a href="/reviews" class="more">Подробнее</a>
		</div>
	</div>
	<div class="but">
		<button class="rev-but" href="#review-form">Оставить отзыв</button>
	</div>
</section>

<div class="hidden">
	<form id="review-form">
		<p>Имя *</p>
		<input type="text" id="name" name="name" required="required">
		<p>Телефон</p>
		<input type="text" id="phone" name="phone" required="required">
		<p>Email</p>
		<input type="text" id="mail" name="mail">
		<p>Отзыв</p>
		<textarea id="review-text" name="review-text" placeholder="" required="required"></textarea><br>
		<div class="but">
			<button id="submit">Оставить отзыв</button>
		</div>
	</form>
</div>

<script>
	$('.gallery_but').on('click', function() { window.location = 'gallery'; 
	});
	$('.ind-order').on('click', function() { window.location = 'order'; 
	});
</script>
<script>
	$("#review-form").submit(function(){
		$('#submit').attr('disabled',true);
		$.ajax({
		type: "POST",
		url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>?action=send_review",
		data: $(this).serialize()
			}).done(function(){
				$('#review-form')[0].reset();
				$.magnificPopup.close();
				$('#submit').attr('disabled',false);
			});
		return false;
	});
</script>

<?php get_footer(); ?>