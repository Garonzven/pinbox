<?php get_header(); ?>
<?php if (is_front_page()): ?>


	<div class="row od-home-banner-container pbox-home-banner">
		<?php the_post(); the_content(); ?>
		<!-- <?php echo get_template_directory_uri(); ?> -->
	</div>

    <div class="row pbox-promo">
        <h2 class="pbox-promo__title">Promociones!!!!!!!</h2>
        <?php echo do_shortcode("[3D-photo-gallery]"); ?>
        <h3 class="pbox-promo__sub-title">compra y juega</h3>
        <p class="pbox-promo__description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="col-md-3 pbox-promo__step">
            <img src="<?php echo get_template_directory_uri() . '/img/promo-1.png'; ?>">
            <p>Ingresa y egistyrate en Pinbox Shop</p>
        </div>
        <div class="col-md-3 pbox-promo__step">
            <img class="pbox-promo-steps__image_step" src="<?php echo get_template_directory_uri() . '/img/promo-2.png'; ?>">
            <p class="pbox-promo-steps__text_step">Elije en nuestro cat&aacute;logo de tarjetas</p>
        </div>
        <div class="col-md-3 pbox-promo__step">
            <img class="pbox-promo-steps__image_step" src="<?php echo get_template_directory_uri() . '/img/promo-3.png'; ?>">
            <p class="pbox-promo-steps__text_step">Paga tui tarjeta por la plataforma de pago</p>
        </div>
        <div class="col-md-3 pbox-promo__step">
            <img class="pbox-promo-steps__image_step" src="<?php echo get_template_directory_uri() . '/img/promo-4.png'; ?>">
            <p class="pbox-promo-steps__text_step">Recibe tu pin en pocos minutos</p>
        </div>
    </div>

    <div class="row pbox-cards">
		<div class="col-lg-12">
			<div class="pbox-cards__holder">
				<ul id="jpContainer" class="pbox-cards__list">
				<?php query_posts(array('category_name' => 'Cards')); ?>
				<?php while (have_posts()): the_post(); ?>
					<?php $thumbnail = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID())); ?>
					<?php $custom = get_post_custom_values($key = 'href'); ?>
					<li class="pbox-cards__card">
						<p class="pbox-cards__card-title"><?php the_title(); ?></p>
						<img src="<?php echo $thumbnail; ?>">
						<p class="pbox-cards__card-content"><?php the_content(); ?></p>
						<a class="pbox-cards__buy" href="<?php echo $custom[0]; ?>">Comprar</a>
					</li>
				<?php endwhile; ?>
				</ul>
				<div class="holder"></div>
			</div>
		</div>
    </div>

	<script type="text/javascript">
		jQuery(function () {
			jQuery("#wds_container1_0").css('position','relative').append("<div class='pbox-home-banner__footer'></div>");
			jQuery("div.holder").jPages({
				containerID: 'jpContainer',
				perPage: 8,
				startPage: 1,
				startRange: 1,
				midRange: 4,
				endRange: 1,
				minHeight: false
			});
		});
	</script>
<?php endif; ?>
<?php get_footer(); ?>
