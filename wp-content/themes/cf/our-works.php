<?php
/**
 * Template Name: Наши работы
 */
get_header();

?>
<main>
    <div class="portfolio">
        <div class="container">
            <div class="row">
                <div class="row">
                    <!--breadcrumbs-->
                    <ul class="breadcrumbs">
                        <li class="active">
                            <a href="#">Главная</a>
                        </li>
                        <li>
                            <a href="#">Наши работы</a>
                        </li>
                    </ul>
                    <!--breadcrumbs-->
                </div>
            </div>
            <!--row-->
            <h2 class="section-title">Наши работы</h2>

            <div class="row">

                <!--sidebar-->
                <div class="col-md-3">
                    <aside class="sidebar">
                        <!--sidebar__list-->
                        <ul class="sidebar__list" id="js-sidebar__list">
                            <?php $categories = wp_list_categories([
                                'hide_empty' => 0,
                                'exclude' => '37,1,3',
                                'title_li' => '',
                                'walker'             => new Custom_Walker_Category(),
                            ])?>
                        </ul>
                    </aside>
                    <!-- /.sidebar -->
                </div>
                <!--portfolio-content-->
                <div class="col-md-9">
                    <section class="portfolio__content">
                        <h3 class="section-title">Заборы из профлиста</h3>

                        <div class="portfolio__gallery">

                        </div>

                    </section>
                    <!-- /.text-page -->
                    <!--pagination-->
                    <div class="row">
                        <ul class="pagination">
                            <li class="previous active">
                                <a href="#"></a>
                            </li>
                            <li class="pagination__item active">
                                <a href="#" class="pagination__link">1</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#" class="pagination__link">2</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#" class="pagination__link">3</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#" class="pagination__link">4</a>
                            </li>
                            <li class="pagination__item">
                                <a href="#" class="pagination__link">5</a>
                            </li>
                            <li class="next">
                                <a href="#"></a>
                            </li>
                        </ul>
                    </div>
                    <!--pagination-->
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!--container-->
    </div>
    <!--portfolio-->
</main>
<?php get_footer();?>
