<?php
/*
Plugin name:davidsplugin
Description: blabla 
Author: David Wong
Version: 1.0
*/ 
function ta_bort_breadcrumbs(){

        remove_action( 'storefront_before_content', 'woocommerce_breadcrumb', 10);
}
add_action('wp', 'ta_bort_breadcrumbs');


?>