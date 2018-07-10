<!doctype html>
<html <?php language_attributes();?>>
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta name="viewport" content="width=device-width">

<?php wp_head();?>
</head>

<body>

<!--main-header-->
<header class="main-header">
	<!--container-->
	<div class="container">

		<!--header-top-->
		<div class="header-top">

			<!--row-->
			<div class="row">
				<!--logo-->
				<div class="col-lg-2">

					<div class="logo">
            <?php the_custom_logo();?>
						<div class="address">Рязань <br> Московская область</div>
					</div>
          <!--logo-->
				</div>

				<div class="col">
					<!--header-top__content-->
					<div class="header-top__content">

						<!--header-top__content-top-->
						<div class="header-top__content-top">

							<!--row-->
							<div class="row justify-content-end">

								<!--header-top__content-top-item-->
								<div class="col-md-auto">
									<div class="header-top__content-top-item">
										<span class="icon icon-header-phone"></span>
										<a class="phone" href="tel:<?php echo carbon_get_theme_option('cf_phone');?>"><?php echo carbon_get_theme_option('cf_phone');?></a>
									</div>
								</div>
                <!--header-top__content-top-item-->

                <!--header-top__content-top-item-->
								<div class="col-md-auto">
									<div class="header-top__content-top-item">
										<span class="icon icon-header-email"></span>
										<a class="email" href="mailto:<?php echo carbon_get_theme_option('cf_email');?>">
                      <?php echo carbon_get_theme_option('cf_email');?>
										</a>
									</div>
								</div>
                <!--header-top__content-top-item-->

								<div class="col-md-auto">
									<div class="header-top__content-top-item">
										<span class="time">Ежедневно с <?php echo carbon_get_theme_option('cf_time_first');?><sup>00</sup>
                      до <?php echo carbon_get_theme_option('cf_time_last');?><sup>00</sup></span>
									</div>
								</div>
							</div>
              <!--row-->

						</div>
            <!--header-top__content-top-->

            <!--header-top__content-bottom-->
						<div class="header-top__content-bottom">
							<div class="row">
								<div class="col-sm-8 col-md-9">

									<!--menu-bar-->
									<div class="menu-bar">Меню <span class="fa fa-bars" id="js-show-menu"></span></div>
                  <!-- /.menu-bar -->

                                    <?php wp_nav_menu([
                                    	'theme_location' => 'menu-header',
										'container' => '',
										'menu_id' => 'js-menu'
									]);?>
								</div>

								<div class="col-sm-4 col-md-3">
									<a href="#" id="js-show-modal" class="btn btn--yellow">Заказать расчет</a>
								</div>
							</div>
						</div>
            <!--header-top__content-bottom-->

					</div>
				</div>

			</div>
      <!--row-->

		</div>
    <!--header-top-->
	</div>
  <!--container-->

  <!--header-bottom-->
	<div class="header-bottom">
		<!--container-big-->
		<div class="container">
			<div class="row">

				<div class="header-categories-wrap">
					<div class="header-categories-navbar"><span class="title">Категории</span> <span id="js-show-categories" class="fa fa-bars"></span></div>
          <!--header-categories-->
                    <?php
					echo '<ul class="header-categories" id="js-categories">';
                    wp_list_categories([
                    	'hide_empty' => 0,
						'title_li' => '',
						'exclude' => '1,3'
					]);
                    echo '</ul>';
					?>
					<!--<ul class="header-categories" id="js-categories">
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Заборы</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Навесы</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Калитки и ворота</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Металлопрокат</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Откатные вороты</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Теплицы</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Бытовки</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
						<li class="header-categories__item">
							<a href="#" class="header-categories__link">Услуги</a>
							<ul class="inner">
								<li class="inner__item">
									<a href="#" class="inner__link">Односкатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Двускатные навесы</a>
								</li>
								<li class="inner__item">
									<a href="#" class="inner__link">Арочные навесы</a>
								</li>
							</ul>
						</li>
					</ul>-->
          <!-- /.header-categories -->
				</div>
			</div>
		</div>
    <!-- /.container-big -->
	</div>
  <!--header-bottom-->

</header>
<!--main-header-->
