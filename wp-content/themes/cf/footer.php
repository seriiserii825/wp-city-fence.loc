<!--footer-->
<footer class="footer-main">
	<div class="footer-main__content">
		<div class="footer-main__item copy">
			<p>
				© ООО «Городские заборы» 6+
				Рязань, Москва,  Московская область
			</p>
		</div>
    <!-- /.copy -->

		<div class="footer-main__item phones">
			<div class="phones__top">
				<span class="phones__top-item">+7 (4912) 99-08-19</span>
				<span class="phones__top-item">+7 (915) 600-43-21</span>
				<span class="phones__top-item">+7 (903) 839-08-19</span>
			</div>

			<div class="phones__bottom">
				Звоните, наши сотрудники окажут бесплатную консультацию, рассчитают стоимость забора и ответят на все Ваши вопросы.
			</div>
      <!-- /.phones__bottom -->
		</div>
    <!-- /.phones -->

		<div class="footer-main__item info">
			<ul>
				<li>
					<a href="#">Реквизиты</a>
				</li>
				<li>
					<a href="#">Политика конфиденциальности</a>
				</li>
				<li>
					<a href="#">Разработка сайта — Динамика</a>
				</li>
			</ul>
		</div>
    <!-- /.info -->
	</div>
</footer>
<!--[if lt IE 9]>
    <script src="<?php bloginfo('template_url'); ?>/html/assets/libs/html5shiv/es5-shim.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/html/assets/libs/html5shiv/html5shiv.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/html/assets/libs/html5shiv/html5shiv-printshiv.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/html/assets/libs/html5shiv/respond.min.js"></script>
    [endif]-->

<div class="overlay" id="js-overlay"></div>
<div class="modal-wrap" id="js-modal">
	<div class="form-wrap">
		<div class="form-top">
			<a id="js-close-modal" class="close-modal" href="#">
				<img src="<?php bloginfo('template_url'); ?>/html/assets/i/close-modal.png" alt="">
			</a>
			<h3 class="form__title">Заказать расчет</h3>
			<p class="form__text">
				Наш менеджер перезвонит, проконсультирует и поможет сделать предварительный расчет стоимости
				материалов и работ.
			</p>

			<form action="" class="form">
				<input type="text" name="name" placeholder="Ваше имя">
				<input type="text" name="phone" placeholder="Контактный телефон">
				<input id="js-close-modal" class="btn btn--yellow" type="submit" name="call" value="Заказать звонок">
			</form>

			<p class="form__text">
				Отправляя заявку, вы соглашаетесь с нашей <a href="#" class="underline">Политикой конфиденциальности</a>
			</p>
		</div>

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
  <!--for-what__form-wrap-->
</div>

<?php wp_footer();?>

<script>
	jQuery(document).ready(function($){
	  
    /* slider in index.html
	  ====================================================*/
    $('#js-slider').slick({
      arrows: true,
      nextArrow: '<i class="icon icon-arrow-right"></i>',
      prevArrow: '<i class="icon icon-arrow-left"></i>',
      //autoplay: true,
      speed: 1200,
      responsive: [{

        breakpoint: 578,
        settings: {
          arrows: false
        }

      }]
    });

    /* gost slider
    ====================================================*/
    $('#js-gost-slider').slick({
      slidesToShow: 8,
      slidesToScroll: 3,
      arrows: true,
      nextArrow: '<i class="fa fa-chevron-right"></i>',
      prevArrow: '<i class="fa fa-chevron-left"></i>',
      responsive: [
        {
          breakpoint: 1600,
          settings: {
            slidesToShow: 6,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 770,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3
          }
        },
        {
          breakpoint: 500,
          settings: {
            arrows: false,
            slidesToShow: 2,
            slidesToScroll: 2
          }
        }
      ]
    });
  });
</script>
</body>
</html>
