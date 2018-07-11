<?php
/**
 * Template Name: Стандарты гост
 */
?>

<?php get_header(); ?>

<main>
    <?php $slider_index = new WP_Query([
        'post_type' => 'slider',
        'posts_per_page' => -1
    ]); ?>

    <?php if ($slider_index->have_posts()): ?>
		<div class="slider" id="js-slider">

            <?php while ($slider_index->have_posts()): $slider_index->the_post(); ?>
				<!-- /.slider__item -->
				<div class="slider__item">
                    <?php echo kama_thumb_img([
                        'width' => 1790
                    ]) ?>

					<div class="container">
						<div class="row">
							<!--slider__content-->
							<div class="slider__content">
								<h1><?php the_title(); ?></h1>

                                <?php the_content(); ?>

								<div class="buttons">
									<div class="btn btn--green">Подробнее</div>
									<div class="btn btn--black">Cмотреть наши работы</div>
								</div>
							</div>
						</div>
					</div>
				</div>
            <?php endwhile; ?>
		</div>
    <?php endif; ?>
	<!--slider-->

	<!--seven-reasons-->
    <?php $features_posts = new WP_Query([
        'category_name' => 'preimushhestva',
        'posts_per_page' => 7
    ]); ?>

    <?php if ($features_posts->have_posts()): ?>
		<section class="seven-reasons">
			<h2 class="section-title">7 причин обратиться к нашим специалистам</h2>

			<div class="container">
                <?php $i = 1; ?>

                <?php while ($features_posts->have_posts()): $features_posts->the_post(); ?>

                    <?php if($i % 2 !== 0):?>
						<div class="row">
							<div class="seven-reasons__block-item">
                    <?php endif;?>


                            <?php if ($i < 7): ?>
								<div class="seven-reasons__item">
									<h4 class="seven-reasons__item-title"><?php the_title(); ?></h4>
									<!-- /.seven-reasons__item-title -->
									<p class="seven-reasons__item-text">
                                        <?php the_content(); ?>
									</p>
									<!-- /.seven-reasons__item-text -->
								</div>                                <!-- /.seven-reasons__item -->
                            <?php endif; ?>
                            <?php if($i % 2 === 0):?>
								</div>
							</div>
                            <?php endif;?>

                    <?php if ($i === 7): ?>

							<!--seven-reasons__bottom-->
							<div class="seven-reasons__bottom">

								<!--seven-reasons__bottom-content-->
								<div class="seven-reasons__bottom-content">
									<h3 class="seven-reasons__bottom-title"><?php the_title(); ?></h3>
									<p class="seven-reasons__bottom-text">
                                        <?php the_content(); ?>
									</p>
								</div>                        <!--seven-reasons__bottom-content-->

								<div class="btn btn--yellow">Получить спецпредложение</div>
							<!--seven-reasons__bottom-->

						</div>
                    <?php endif; ?>

                    <?php $i++; ?>

                <?php endwhile; ?>

			</div>
		</section>
    <?php endif; ?>

	<!--standarts-->
	<?php
	$categories = get_categories([
		'hide_empty' => 0,
		'depth' => 1,
		'exclude' => '37,1,3',
	]);

	$categories_parent = array_filter($categories, function($t){
		if($t->parent === 0){
			return $t;
		}
	});
	?>
	<section class="standarts" >
		<div class="container-big">
		<h2 class="section-title">Высокие стандарты качества для всех видов работ</h2>
			<div class="standarts__content">
                <?php foreach ($categories_parent as $category):?>
                    <?php $children = get_categories([
                        'child_of' => $category->term_id,
                        'hide_empty' => 0
                    ]);?>
                    <?php if (function_exists('get_tax_image_urls')) $img_urls = get_tax_image_urls($children[0]->term_id ,'full'); ?>

					<?php
						$children_links = wp_list_categories([
							'title_li' => '',
							'hide_empty' => 0,
							'child_of' => $category->term_id,
							'echo' => false
						]);
					?>
				<div class="standarts__item">
					<div class="img-wrap">
						<img width="355" height="300" src="<?php echo $img_urls[0] ?>" alt="">
					</div>
					<!-- /.img-wrap -->
					<div class="standarts__item-content">
						<h6 class="standarts__item-title">
							<a href="#"><?php echo $category->name;?></a>
						</h6>
						<!-- /.standarts__item-title -->
						<ul class="standarts__item-list">
                            <?php echo $children_links;?>
						</ul>
						<!-- /.standarts__item-list -->
					</div>
					<!-- /.standarts__item-content -->
				</div>
				<!-- /.standarts__item -->
                <?php endforeach;?>
			</div>
		</div>

	</section>
	<!--standarts-->

	<!--for-what-->
	<section class="for-what">
		<h2 class="section-title">Как определить, какое вам нужно ограждение?</h2>
		<div class="container-big">

			<!--for-what__item-->
			<div class="for-what__item">

				<div class="for-what__item-top">
					<div class="for-what__item-left">
						<h4 class="for-what__title">Для дачи</h4>
						<!-- /.forw-what__title -->

						<ul class="for-what__item-list">
							<li>
								<a href="#">Забор из сетки рабица</a>
							</li>
							<li>
								<a href="#">забор из сварной сетки</a>
							</li>
							<li>
								<a href="#">Забор из евроштакетника</a>
							</li>
							<li>
								<a href="#">Забор из 3d панелей</a>
							</li>
						</ul>
						<!-- /.for-whate__list -->
					</div>

					<div class="img-wrap">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/for-what/for-what-1.png" alt="">
					</div>
					<!-- /.img-wrap -->
				</div>

				<p class="for-what__text">
					Такие заборы служат для определения визуальных границ участка
					и не создают теневые зоны, что важно для растений вашего огорода
				</p>
				<!-- /.for-what__text -->
			</div>
			<!--for-what__item-->

			<!--for-what__item-->
			<div class="for-what__item">

				<div class="for-what__item-top">
					<div class="for-what__item-left">
						<h4 class="for-what__title">Для складов и охраняемых территорий</h4>
						<!-- /.forw-what__title -->

						<ul class="for-what__item-list">
							<li>
								<a href="#">Забор из профлиста</a>
							</li>
							<li>
								<a href="#">забор из поликарбоната</a>
							</li>
							<li>
								<a href="#">сварной забор</a>
							</li>
						</ul>
						<!-- /.for-whate__list -->
					</div>

					<div class="img-wrap">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/for-what/for-what-2.png" alt="">
					</div>
					<!-- /.img-wrap -->
				</div>

				<p class="for-what__text">
					Такие заборы служат для определения визуальных границ участка
					и не создают теневые зоны, что важно для растений вашего огорода
				</p>
				<!-- /.for-what__text -->
			</div>
			<!--for-what__item-->

			<!--for-what__item-->
			<div class="for-what__item">

				<div class="for-what__item-top">
					<div class="for-what__item-left">
						<h4 class="for-what__title">Для частного дома или коттеджа</h4>
						<!-- /.forw-what__title -->

						<ul class="for-what__item-list">
							<li>
								<a href="#">Забор из дерева</a>
							</li>
							<li>
								<a href="#">Забор из евроштакетника</a>
							</li>
							<li>
								<a href="#">Сварной забор</a>
							</li>
						</ul>
						<!-- /.for-whate__list -->
					</div>

					<div class="img-wrap">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/for-what/for-what-3.png" alt="">
					</div>
					<!-- /.img-wrap -->
				</div>

				<p class="for-what__text">
					Такие заборы служат для определения визуальных границ участка
					и не создают теневые зоны, что важно для растений вашего огорода
				</p>
				<!-- /.for-what__text -->
			</div>
			<!--for-what__item-->

			<!--for-what__item-->
			<div class="for-what__item">
				<div class="form-wrap">
					<div class="form-top">
						<h3 class="form__title">Нужен бесплатный совет консультанта?</h3>
						<p class="form__text">
							Наш менеджер перезвонит, проконсультирует и поможет сделать предварительный расчет стоимости
							материалов и работ.
						</p>

						<form action="" class="form">
							<input type="text" name="name" placeholder="Ваше имя">
							<input type="text" name="phone" placeholder="Контактный телефон">
							<input class="btn btn--yellow" type="submit" name="call" value="Заказать звонок">
						</form>

						<p class="form__text">
							Отправляя заявку, вы соглашаетесь с нашей
							<a href="#" class="underline">Политикой конфиденциальности</a>
						</p>
					</div>

				</div>
				<!--for-what__form-wrap-->

				<div class="form-bottom">
					<div class="text">
						Вы можете позвонить нам сами в любое удобное время
					</div>

					<div class="phone">
						+7 (915) 600-43-21
					</div>

				</div>
				<!--form-bottom-->
			</div>
			<!--for-what__item-->

		</div>
	</section>
	<!--for-what-->

	<!--gost-->
	<section class="gost">
		<h2 class="section-title">Наши работы соответствуют стандартам ГОСТ</h2>

		<p class="gost__text">
			Компания "Городские Заборы" Рязань осуществляет свою деятельность с 2013 года, мы работаем максимально
			честно и
			открыто для Вас, все работы ведутся через договор, в котором указываем все необходимые материалы, реальные
			толщины, стоимость работ "под ключ", и сроки исполнения, даём письменную гарантию на монтаж.Если вам от
			забора
			нужны все написанные выше свойства, но при этом хочется видеть красивый ландшафт из окна вашего дома.
		</p>

		<div class="container-big">
			<div class="gost-slider-wrap" id="js-gost-slider-wrap">

				<div class="block-left"></div>
				<div class="block-right"></div>

				<!--gost-slider-->
				<div class="gost-slider" id="js-gost-slider">
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-1.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-2.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-3.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-4.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-5.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-1.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-2.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-3.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-4.jpg"
							 alt="">
					</div>
					<div class="slider__item">
						<img src="<?php bloginfo('template_url'); ?>/html/assets/i/gost-slider/gost-slider-5.jpg"
							 alt="">
					</div>
				</div>
				<!--gost-slider-->

			</div>
		</div>

	</section>
	<!--gost-->
</main>

<?php get_footer(); ?>



