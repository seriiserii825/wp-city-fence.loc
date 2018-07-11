<?php
class Custom_Walker_Category extends Walker_Category {
    public function start_el(&$output, $category, $depth = 0, $args = array(), $id = 0){
        $html = '';

        if($depth === 0){
            $html .= PHP_EOL.'<li class="sidebar__list-item"><a href="#" class="sidebar__list-link">%s</a>';
        }elseif ($depth === 1){
            $html .= PHP_EOL.'<li class="sidebar__inner-list-item"> <a class="sidebar__inner-list-link" href="#">%s</a>';
        }

        $output .= sprintf($html, $category->name);
    }

    public function end_el(&$output, $category, $depth = 0, $args = array()){
        if($depth === 0){
            $output .= '</li>';
        }elseif ($depth === 1){
            $output .= PHP_EOL.'</li>';
        }
    }

    public function start_lvl(&$output, $depth = 0, $args = array()){
        if($depth === 0){
            $output .= '<ul class="sidebar__inner-list">';
        }
    }

    public function end_lvl(&$output, $depth = 0, $args = array()){
        if($depth === 0){
            $output .= '</ul>';
        }
    }
}
