<?php get_header(); ?>
<?php
while (have_posts()) {
    the_post(); 
 
the_content();
// $terms = get_the_terms( $post->ID , 'City' );
$taxonomy = '';
$terms = get_the_terms($post->ID, $taxonomy);
if ($terms && !is_wp_error($terms)) {
    foreach ($terms as $term) {
        echo var_dump($term);
    }
}

// foreach ( $terms as $term ) {

//     echo $term->name;
    
//     }
// the_title();
echo get_field('unit_type');
echo get_field('unit_size');
}
 get_footer(); ?>