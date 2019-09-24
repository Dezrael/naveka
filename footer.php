<div class="wrapper-dark">
		<footer class="container">
		  <div class="grid">
		    <div class="logo">
		      <?php the_custom_logo(); ?>
		    </div>
		    <a href="/order" class="menu-item order">Cделать заказ</a>
		    <a href="/about" class="menu-item company">О компании</a>
		    <p class="phone">
		      <a href="tel:<?php echo nl2br(esc_html(get_theme_mod('company_phone'))); ?>"><?php echo nl2br(esc_html(get_theme_mod('company_phone'))); ?></a>
		    </p>
		    <a href="/gallery" class="menu-item products">Продукция</a>
		    <a href="/contacts" class="menu-item contacts">Контакты</a>
		    <p class="mail">
		       <a href="mailto:<?php echo nl2br(esc_html(get_theme_mod('company_mail'))); ?>"><?php echo nl2br(esc_html(get_theme_mod('company_mail'))); ?></a>
		     </p>
		  </div>
		  <div class="line"></div>
		  <div class="social">
		    <div class="vk">
		      <a href="<?php echo nl2br(esc_html(get_theme_mod('company_vk'))); ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/vk.png" alt="Группа ВКонтакте"></a>
		    </div>
		    <div class="insta">
		      <a href="<?php echo nl2br(esc_html(get_theme_mod('company_insta'))); ?>" target="_blank"><img src="<?php bloginfo('template_url') ?>/img/insta.png" alt="Группа Инстаграм"></a>
		    </div>
		  </div>
		  <p class="copyright"><?php echo nl2br(esc_html(get_theme_mod('company_copy'))); ?></p>
		</footer>
	</div>

	

	

	<?php wp_footer(); ?>
  </body>
</html>