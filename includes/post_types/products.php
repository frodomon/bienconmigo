<?php
  /** Create the Custom Post Type**/
  add_action('init', 'product_register');  
  function product_register() {  
    $labels = array(
      'name' => __('Productos'),
      'singular_name' => __('Producto'),
      'menu_name' => __('Product Manager'),
      'name_admin_bar' => __('Producto'),
      'add_new' => __('Add New Product'), 
      'add_new_item' => __('Add New Product'), 
      'new_item' => __('New Product'),
      'edit_item' => __('Edit Product'),
      'view_item' => __('View Product'),
      'all_items' => __('All Products'),
      'search_items' => __('Search Products'),
    );
    //Arguments to create post type.
    $args = array(  
      'labels' => $labels,
      'description' => __('Product'),
      'public' => true,  
      'show_ui' => true,
      'show_in_menu' => true,
      'rewrite' => array('slug' => 'productos', 'with_front' => false),
      'capability_type' => 'post',  
      'has_archive' => true,
      'hierarchical' => true,
      'menu_position' => null,
      'supports' => array('title', 'editor', 'thumbnail','excerpt'),
      'menu_icon' => 'dashicons-images-alt2',
    );  
    register_post_type( 'productos' , $args );   
  }
   function product_add_meta(){  
    add_meta_box("product-meta", "Product Options", "product_meta_options", "products", "normal", "high");   
  }
  add_action('add_meta_boxes','product_add_meta');
  function product_meta_options(){
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ) return $post_id;
        
    $custom = get_post_custom($post->ID);
    $package = $custom["package"][0]; 
  ?>  
    <div class="metabox">
      <div class="field group">
        <div class="fieldname">
          <label>Resumen:</label>
        </div>
        <div class="fieldvalue">
          <input name="package" style="width:100%" value="<?php echo $package; ?>" />
        </div>    
      </div>
    </div>   
    <?php  
  } 
    
  add_action('save_post', 'product_save_extras'); 
  
  function product_save_extras(){  
    global $post;  
    if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE ){ //if you remove this the sky will fall on your head.
      return $post_id;
    }else{
      update_post_meta($post->ID, "package", $_POST["package"]); 
    } 
  }  

  add_filter("manage_edit-product_columns", "product_edit_columns");   

  function product_edit_columns($columns){
    $columns = array(
      "cb" => "<input type=\"checkbox\" />",
      "title" => "Product Name",
      "package" => "Package",
    );  
    return $columns;
  } 

  add_action("manage_products_posts_custom_column",  "products_custom_columns"); 

  function products_custom_columns($column){
    global $post;
    $custom = get_post_custom();
    switch ($column)
    {
      case "package":
        echo $custom["package"][0];
        break;
    }
  }

  add_action('init', 'dohko_rewrite');
  function dohko_rewrite() {
    global $wp_rewrite;
    $wp_rewrite->add_permastruct('typename', 'typename/%year%/%postname%/', true, 1);
    add_rewrite_rule('typename/([0-9]{4})/(.+)/?$', 'index.php?typename=$matches[2]', 'top');
    $wp_rewrite->flush_rules(); // !!!
}
?>