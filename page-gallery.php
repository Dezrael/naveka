<?php 
/*
Template Name: Галерея
*/
?>

<?php get_header(); ?>
<style>
	body {
		background-color: white;
	}
</style>
<div class="wrapper" style="background-image: url(<?php the_field('image'); ?>); background-position: center; background-size: cover;">
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
				<h1><?php the_field('title') ?></h1>
				<p><?php the_field('text') ?></p>
			</div>
		</div>
	</header>
</div>


<section id="gallery" class="container">
	<form id="order-form" >
		<div class="top clearfix">
			<p class="text">Выберите категории, которые Вас интересуют</p>
			<p class="select">Выбрать всё</p>
		</div>
		<div class="line"></div>
		<div class="cats">
			<div class="first">
				<p>Мебель</p>
				<input type="checkbox" class="checkbox" value="2"> 
				<label for="checkbox">Шкафы</label><br>
				<input type="checkbox" class="checkbox" value="3">
				<label for="checkbox">Тумбы</label><br>
				<input type="checkbox" class="checkbox" value="4">
				<label for="checkbox">Столы</label><br>
				<input type="checkbox" class="checkbox" value="5">
				<label for="checkbox">Стулья</label><br>
				<input type="checkbox" class="checkbox" value="6">
				<label for="checkbox">Кровати</label><br>
			</div>
			<div class="second">
				<p>Двери</p>
				<input type="checkbox" class="checkbox" value="7">
				<label for="checkbox">Входные двери</label><br>
				<input type="checkbox" class="checkbox" value="8">
				<label for="checkbox">Межкомнатные двери</label><br>
				<input type="checkbox" class="checkbox" value="9">
				<label for="checkbox">Раздвижные двери</label><br>
				<input type="checkbox" class="checkbox" value="10">
				<label for="checkbox">Раздвижные перегородки</label><br>
			</div>
			<div class="third">
				<p>Интерьер</p>
				<input type="checkbox" class="checkbox" value="11">
				<label for="checkbox">Стеновые панели</label><br>
				<input type="checkbox" class="checkbox" value="12">
				<label for="checkbox">Лестницы</label><br>
				<input type="checkbox" class="checkbox" value="13">
				<label for="checkbox">Гардеробные</label><br>
				<input type="checkbox" class="checkbox" value="14">
				<label for="checkbox">Кухни</label><br>
				<input type="checkbox" class="checkbox" value="15">
				<label for="checkbox">Библиотеки</label><br>
				<input type="checkbox" class="checkbox" value="16">
				<label for="checkbox">Гостиные</label><br>
				<input type="checkbox" class="checkbox" value="17">
				<label for="checkbox">Кабинеты</label><br>
				<input type="checkbox" class="checkbox" value="18">
				<label for="checkbox">Мебель для спальни</label><br>
			</div>
			<input id='res' type='hidden' name='res'/> 
			<div class="button">
				<input type="submit" id="submit" value="Показать">
			</div>
		</div>
	</form>
</section>
<script>
	var names = [];
	var descriptions = [];
	var photos = [];
</script>
<section id="products-list" class="container clearfix">

<?php
	$cats_arr = array();
	$cats .= $_GET['res'];
	if(preg_match_all("/[0-9]{1,},{0,}/",$cats,$match)) {
		$cats = "";
		foreach ($match[0] as $x) {
			$cats_arr[] = (int)$x;
		}
	}
	$posts = get_posts( array(
		'numberposts' => 0,
		'post_type'   => 'furniture',
		'suppress_filters' => true, 
	) );
	foreach( $posts as $post ){
		setup_postdata($post);
		$content = get_the_content();
		$title = get_the_title();
		$fr_image = get_field('image');
		$short_desc = get_field('short_desc');
		$is_in = is_object_in_term( $post->ID, 'category_furniture', $cats_arr );
		if( $is_in )
			echo '
			<div id="'.$id.'" class="product" href=".full-desc">
				<div class="picture-box">
					<img class="picture" src="'.$fr_image.'"> 
				</div>
				<div class="desc">'.$short_desc.'</div>
			</div>
		';
		echo '
			<script>
				names ['.$id.'] = "'.$title.'";
				descriptions ['.$id.'] = "'.$content.'";
				photos ['.$id.'] = "'.$fr_image.'";
			</script>
		';
		} 
		wp_reset_postdata();
	?>

	
</section>

<div class="hidden">
	<div class="full-desc clearfix">
		<div class="product-photo">
			<img class="prod-photo" src="products/bed1.png" alt="Товар">
		</div>
		<div class="product-text">
			<h2 class="product-name">Наименование товара</h2>
			<p class="product-desc">
				Описание
			</p>
			<div class="but">
				<button class="submit-order" href="#make-order-form">Заказать</button>
			</div>
		</div>
	</div>

	<form id="make-order-form">
		<input type="text" id="item" name="item" readonly="readonly">
		<p>Имя *</p>
		<input type="text" id="name" name="name" required="required">
		<p>Телефон</p>
		<input type="text" id="phone" name="phone" required="required">
		<p>Email</p>
		<input type="text" id="mail" name="mail">
		<p>Информация к заказу</p>
		<textarea id="order-text" name="order-text" placeholder="" required="required"></textarea><br>
		<div class="but">
			<button id="make-order-submit">Сделать заказ</button>
		</div>
	</form>
</div>

		
<script>
	$(document).ready(function(){
		var id
		$(".product").magnificPopup();
		$(".submit-order").magnificPopup();
		$(".submit-order").on('click', function(){
			$('#item').val(names[id]);
		});
		$('.product').on('click', function() {
			id = this.id;
			$('.product-name').text(names[id]);
			$('.product-desc').text(descriptions[id]);
			$('.product-name').text(names[id]);
			$('.prod-photo').attr("src",photos[id]);
			$('.submit-order').attr("id",id);
		});
		var select = true;
		$(".select").on('click',function() {
			if(select) {
				$(".checkbox").prop("checked",true);
				$(this).text("Снять выбор");
				select = !select;
			}
			else {
				$(".checkbox").prop("checked",false);
				$(this).text("Выбрать всё");
				select = !select;
			}
		});

		$('#order-form').submit(function() { 
	        var chk = $('.checkbox:checked'); 
	        if(!chk.length) return false; 
	        $('#res').val($.map(chk, function(e) { 
	            return e.value 
	        }).join(','))
	    }); 
	});
</script>
<script>
	$("#make-order-form").submit(function(){
		$('#make-order-submit').attr('disabled',true);
		$.ajax({
		type: "POST",
		url: "<?php echo esc_url( admin_url('admin-post.php') ); ?>?action=make_order",
		data: $(this).serialize()
			}).done(function(){
				$.magnificPopup.close();
				$('#make-order-submit').attr('disabled',false);
			});
		return false;
	});
</script>
<?php get_footer(); ?>