<?php
/*
Plugin Name: Storename Below Product 
Plugin URI: https://github.com/towhidd/woocommerce-content-shop-product
Description: Storename Below Product in woocommerce content shop product
Version: 0.1
Author: Mirza Twhidul Imran
Author URI: https://www.facebook.com/mtimran
License: GPL2
*/

add_action( 'woocommerce_after_shop_loop_item_title',  'template_storename');

function template_storename(){

    global $product;

        $author     = get_user_by( 'id', $product->post->post_author );
        $store_info = dokan_get_store_info( $author->ID );
        //var_dump($store_info);
        if ( !empty( $store_info['store_name'] ) ) { ?>
                <span class="details">
                    <?php echo $store_info['price']; ?>
                    <?php //echo $store_info['social']['fb']; ?>
                    <?php printf( '<a href="%s">%s</a>', dokan_get_store_url( $author->ID ), $author->display_name ); ?>
                </span>
        <?php
        }
}
?>
