<?php
/**
 * Plugin Name: Вывод категорий через ajax
 */
add_action('wp_ajax_category', 'show_categories');
add_action('wp_ajax_nopriv_category', 'show_categories');
add_action('wp_enqueue_scripts', 'category_scripts');

function show_categories(){
    if(!empty($_POST['parrentText']) && !empty($_POST['link'])){
        $link = trim($_POST['link']);
        $parrentCategory = trim($_POST['parrentText']);

        $categories = get_categories([
            'hide_empty' => 0,
            'exclude' => '1,33'
        ]);

        foreach ($categories as $category){

            if($category->name === $parrentCategory){
                $category_children = get_categories([
                    'hide_empty' => 0,
                    'child_of' => $category->term_id
                ]);

                foreach ($category_children as $cat){
                    if($cat->name === $link){
                        $img_id = $cat->term_id;

                        if (function_exists('get_tax_images')) $img_html = get_tax_images($img_id ,'full');

                        foreach ($img_html as $item){
                            echo '<div class="img-wrap">' . $item . '</div>';
                        }

                        wp_die();
                    }
                }
            }
        }
    }
}

function category_scripts(){
    wp_enqueue_script('category_script', plugins_url('category_script.js', __FILE__), ['cf-jquery'], null, true);
    wp_localize_script('category_script', 'catObj', ['ajaxurl' => admin_url('admin-ajax.php')]);
}
