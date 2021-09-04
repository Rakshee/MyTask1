<?php
function register_hometemplate(){
  //menu register code

  register_nav_menus(
    array(
      'primary' => 'Primary Menu'
         )
    );
   
	

}



//attach with action hook
add_action('init', 'register_hometemplate');
function hometemplate_add_li_class($classes, $item, $args){
    $classes[] = "nav-item eco-theme";
   return $classes;
   }
  
   add_filter("nav_menu_css_class","hometemplate_add_li_class",1,3);
  //add class to anchor link
  function hometemplate_add_anchor_links($classes, $item, $args){
    $classes['class'] = "nav-link page-scroll eco-link-class";
    return $classes;
  }
  add_filter("nav_menu_link_attributes","hometemplate_add_anchor_links",1,3);
//sidebar widget 1
  function register_sidebar1(){
    register_sidebar(array(
      'name' => __('Primary Sidebar1', ''),
      'id' => 'sidebar-1',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
    ) );
  }
  add_action("widgets_init","register_sidebar1");

//sidebar widget 2
  function register_sidebar2(){
    register_sidebar(array(
      'name' => __('Primary Sidebar 2', ''),
      'id' => 'sidebar-2',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
    ) );
  }
  add_action("widgets_init","register_sidebar2");
//sidebar widget 3
  function register_sidebar3(){
    register_sidebar(array(
      'name' => __('Primary Sidebar3', ''),
      'id' => 'sidebar-3',
      'before_widget' => '<aside id="%1$s" class="widget %2$s">',
      'after_widget' => '</aside>',
      'before_title' => '<h1 class="widget-title">',
      'after_title' => '</h1>',
    ) );
  }
  add_action("widgets_init","register_sidebar3");
  
  add_filter('woocommerce_placeholder_img_src', 'custom_woocommerce_placeholder_img_src');
  function custom_woocommerce_placeholder_img_src( $src ) {
      $upload_dir = wp_upload_dir();
      $uploads = untrailingslashit( $upload_dir['baseurl'] );
     
      $src = $uploads . '/images/product1.jpeg';
      return $src;
  }


  add_filter('woocommerce_placeholder_img', 'downloadclub_woocommerce_placeholder_img', 10, 3);
function downloadclub_woocommerce_placeholder_img($image_html, $size, $dimensions){
	$image      = wc_placeholder_img_src( $size );
   
	$image_html = '<img src= "product1.jpeg"' . esc_attr( $image ) . '" alt="' . esc_attr__( 'Placeholder', 'woocommerce' ) . '" width="' . esc_attr( $dimensions['width'] ) . '" class="woocommerce-placeholder wp-post-image" height="' . esc_attr( $dimensions['height'] ) . '" />';

	return $image_html;
}
?>