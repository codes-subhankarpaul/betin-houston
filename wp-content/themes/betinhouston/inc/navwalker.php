<?php

/**

 * Custom template tags for this theme

 *

 * Eventually, some of the functionality here could be replaced by core features.

 *

 * @package WordPress

 * @subpackage betinhouston

 */



/**

 * Navwalker for Custom Top-Menu.

 */





/* add class nav-item in menu li item */

/**************************************/

function add_classes_on_li($classes, $item, $args) {

    $classes[] = 'nav-item';

    return $classes;

}

add_filter('nav_menu_css_class','add_classes_on_li',1,3);



/* add class nav-link in menu li item anchor tag */

/*************************************************/

function add_classes_on_each_anchor( $atts, $item, $args ) {

    $class = 'nav-link';

    $atts['class'] = $class;

    return $atts;

}

add_filter( 'nav_menu_link_attributes', 'add_classes_on_each_anchor', 10, 3 );





/* add class active in current menu items and  menu-parent items */

/*****************************************************************/

function add_active_class($classes, $item) {

  if( $item->menu_item_parent == 0 && 

    in_array( 'current-menu-item', $classes ) ||

    in_array( 'current-menu-ancestor', $classes ) ||

    in_array( 'current-menu-parent', $classes ) ||

    in_array( 'current_page_parent', $classes ) ||

    in_array( 'current_page_ancestor', $classes )

    ) {

    $classes[] = "active";

  }

  return $classes;

}

add_filter('nav_menu_css_class', 'add_active_class', 10, 2 );





//** Navwalker **//

class wp_bootstrap_navwalker extends Walker_Nav_Menu {



public function start_lvl( &$output, $depth = 0, $args = array() ) {

    $indent = str_repeat( "\t", $depth );

    $output .= "\n$indent<ul class=\"dropdown-menu submenu-custom-list\" aria-labelledby=\"navbarDropdown\">\n";

}



public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {

    $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';



    if ( strcasecmp( $item->attr_title, 'divider' ) == 0 && $depth === 1 ) {

        $output .= $indent . '<li role="presentation" class="divider">';

    } else if ( strcasecmp( $item->title, 'divider') == 0 && $depth === 1 ) {

        $output .= $indent . '<li role="presentation" class="divider">';

    } else if ( strcasecmp( $item->attr_title, 'dropdown-header') == 0 && $depth === 1 ) {

        $output .= $indent . '<li role="presentation" class="dropdown-header">' . esc_attr( $item->title );

    } else if ( strcasecmp($item->attr_title, 'disabled' ) == 0 ) {

        $output .= $indent . '<li role="presentation" class="disabled"><a href="#">' . esc_attr( $item->title ) . '</a>';

    } else {

        $class_names = $value = '';

        $classes = empty( $item->classes ) ? array() : (array) $item->classes;

        $classes[] = 'menu-item-' . $item->ID;

        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );

        if ( $args->has_children )

            $class_names .= ' dropdown';

        if ( in_array( 'current-menu-item', $classes ) )

            $class_names .= ' active';

        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        $id = apply_filters( 'nav_menu_item_id', 'menu-item-'. $item->ID, $item, $args );

        $id = $id ? ' id="' . esc_attr( $id ) . '"' : '';

        $output .= $indent . '<li' . $id . $value . $class_names .'>';

        $atts = array();

        $atts['title']  = ! empty( $item->title )   ? $item->title  : '';

        $atts['target'] = ! empty( $item->target )  ? $item->target : '';

        $atts['rel']    = ! empty( $item->xfn )     ? $item->xfn    : '';

        // If item has_children add atts to a.

        if ( $args->has_children )

        {

        	if( $depth === 0 )

        	{

                $atts['href'] = $item->url;

                //$atts['data-toggle']    = 'dropdown';

                $atts['class']          = 'dropdown-item';

                //$atts['aria-haspopup']  = 'true';



                // $output .= '<div class="backBtn_1"></div>';

        	}

        	else

        	{

                $atts['href'] = $item->url;

                //$atts['data-toggle']    = 'dropdown';

                $atts['class']          = 'dropdown-item';

                //$atts['aria-haspopup']  = 'true';



                // $output .= '<div class="backBtn_2"></div>';

        	}



        } else {

            $atts['href'] = ! empty( $item->url ) ? $item->url : '';

        }



        $atts = apply_filters( 'nav_menu_link_attributes', $atts, $item, $args );

        $attributes = '';

        foreach ( $atts as $attr => $value ) {

            if ( ! empty( $value ) ) {

                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );

                $attributes .= ' ' . $attr . '="' . $value . '"';

            }

        }

        $item_output = $args->before;



        if ( ! empty( $item->attr_title ) )

            $item_output .= '<a'. $attributes .'><span class="glyphicon ' . esc_attr( $item->attr_title ) . '"></span>&nbsp;';

        else

            $item_output .= '<a'. $attributes .'>';

        $item_output .= $args->link_before . apply_filters( 'the_title', $item->title, $item->ID ) . $args->link_after;

        $item_output .= ( $args->has_children && 0 === $depth ) ? ' </a>' : '</a>' ;

        $item_output .= $args->after;



        $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );

        // if ( $args->has_children )

        // {

        //     $output .= '<span class="dd_opener"><i></i></span>';

        // }

    }

}



public function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {

    if ( ! $element )

        return;

    $id_field = $this->db_fields['id'];

    // Display this element.

    if ( is_object( $args[0] ) )

       $args[0]->has_children = ! empty( $children_elements[ $element->$id_field ] );

    parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );

}



public static function fallback( $args ) {

    if ( current_user_can( 'manage_options' ) ) {

        extract( $args );

        $fb_output = null;

        if ( $container ) {

            $fb_output = '<' . $container;

            if ( $container_id )

                $fb_output .= ' id="' . $container_id . '"';

            if ( $container_class )

                $fb_output .= ' class="' . $container_class . '"';

            $fb_output .= '>';

        }

        $fb_output .= '<ul';

        if ( $menu_id )

            $fb_output .= ' id="' . $menu_id . '"';

        if ( $menu_class )

            $fb_output .= ' class="' . $menu_class . '"';

        $fb_output .= '>';

        $fb_output .= '<li><a href="' . admin_url( 'nav-menus.php' ) . '">Add a menu</a></li>';

        $fb_output .= '</ul>';

        if ( $container )

            $fb_output .= '</' . $container . '>';

        echo $fb_output;

    }

}	}