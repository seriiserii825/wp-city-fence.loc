<?php get_header(); ?>
<main class="category">
    <?php
        $tax_obj = get_queried_object();
        $term_id = $tax_obj->term_id;
        if (function_exists('get_tax_images')) $img_html = get_tax_images($term_id ,'full');
    ?>

    <section>
        <h2 class="section-title"><?php echo $tax_obj->name;?></h2>
    </section>

    <div class="container">
        <div class="row">
            <?php foreach($img_html as $img):?>
                <div class="col-md-4">
                    <div class="img-wrap">
                        <?php echo $img;?>
                    </div>
                </div>
            <?php endforeach;?>
        </div>
    </div>

</main>

<?php get_footer();?>
