<?php
/*
Plugin Name: Exclude specific category
Description: Exclude specific category from WordPress home and featured widget
*/


function exclude_category_home( $query ) {
if ( $query->is_home ) {
$query->set( 'cat', '-5' );
}
return $query;
}
 
add_filter( 'pre_get_posts', 'exclude_category_home' );

?>


