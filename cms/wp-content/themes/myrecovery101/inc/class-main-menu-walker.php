<?php
class Main_Menu_Walker extends Walker_Nav_Menu {
    private $count = 0;
    private $total = 0;

    public function start_el(&$output, $item, $depth = 0, $args = [], $id = 0) {
        $this->count++;

        if ($this->total === 0) {
            $menu_items = wp_get_nav_menu_items($args->menu);
            $this->total = count($menu_items);
        }

        $classes = empty($item->classes) ? [] : (array)$item->classes;
        $class_names = join(' ', apply_filters('nav_menu_css_class', array_filter($classes), $item, $args, $depth));
        $class_names = $class_names ? ' class="' . esc_attr($class_names) . '"' : '';

        $id = apply_filters('nav_menu_item_id', 'menu-item-' . $item->ID, $item, $args, $depth);
        $id = $id ? ' id="' . esc_attr($id) . '"' : '';

        $output .= '<li' . $id . $class_names . '>';

        $atts = [];
        $atts['title'] = !empty($item->attr_title) ? $item->attr_title : '';
        $atts['target'] = !empty($item->target) ? $item->target : '';
        $atts['rel'] = !empty($item->xfn) ? $item->xfn : '';
        $atts['href'] = !empty($item->url) ? $item->url : '';

        $atts['class'] = 'uppercase text-md text-black fw-semibold';
        $atts['data-replace'] = esc_attr($item->title);

        if ($this->count === $this->total) {
            $atts['class'] .= ' button';
        } else {
            $atts['class'] .= ' nav-link';
        }

        $atts = apply_filters('nav_menu_link_attributes', $atts, $item, $args, $depth);

        $attributes = '';
        foreach ($atts as $attr => $value) {
            if (!empty($value)) {
                $value = ('href' === $attr) ? esc_url($value) : esc_attr($value);
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = '<span>' . apply_filters('the_title', $item->title, $item->ID) . '</span>';

        $item_output = $args->before;
        $item_output .= '<a' . $attributes . '>';
        $item_output .= $args->link_before . $title . $args->link_after;
        $item_output .= '</a>';
        $item_output .= $args->after;

        $output .= apply_filters('walker_nav_menu_start_el', $item_output, $item, $depth, $args);
        $output .= '</li>';
    }
}