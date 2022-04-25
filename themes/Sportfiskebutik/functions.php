<?php



add_theme_support('post-thumbnails');


function ta_bort_sidebar(){


        remove_action( 'storefront_sidebar', 'storefront_get_sidebar', 10);


}

add_action( 'wp', 'ta_bort_sidebar');



function lagg_till(){


    echo '<h1>🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣🎣</h1>';
}
add_action('storefront_sidebar', 'lagg_till');

remove_filter('the_content', 'wpautop');
?>