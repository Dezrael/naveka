<?php 
/*
Template Name: Сделать заказ
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

<section id="make-order" class="container clearfix">
	<div class="left">
		<h3>Форма заказа</h3>
		<form id="order-form">
			<p>Имя *</p>
			<input type="text" id="name" name="name" required="required">
			<p>Телефон</p>
			<input type="text" id="phone" name="phone" required="required">
			<p>Email</p>
			<input type="text" id="mail" name="mail" required="required">
			<p>Информация к заказу</p>
			<textarea id="fbinfo" name="fbinfo" placeholder="" required="required"></textarea><br>
			<div class="but">
				<button id="submit">Заказать</button>
			</div>
		</form>
	</div>
	<div class="photo">
		<img src="<?php the_field('image') ?>" alt="Фото">
	</div>
</section>
<script>
	$("#order-form").submit(function(){
		$('#submit').attr('disabled',true);
		$.ajax({
		type: "POST",
		url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>?action=make_ind_order",
		data: $(this).serialize()
			}).done(function(){
				$('#order-form')[0].reset();
				$('#submit').attr('disabled',false);
			});
		return false;
	});
</script>

<?php get_footer(); ?>