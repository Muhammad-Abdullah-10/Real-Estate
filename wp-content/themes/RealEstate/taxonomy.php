<?php get_header(); ?>
<?php
$term = get_term( 22, $taxonomy );
$slug = $term->slug;
$name = $term->name;
echo $slug;
echo $name;
$test = the_field("features_&_amenities_icon");
echo $test;
 ?>

<!-- sads -->
<?php get_footer(); ?>