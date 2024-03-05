<?php get_header(); ?>
<?php
$terms = get_term( 22, $taxonomy );
// $slug = $term->slug . ' term slug';
// echo get_field("features_&_amenities_icon",22);
// echo the_field("feature_area_image", 22);
// Retrieve the ACF field value for the given taxonomy term ID
$term_id = $terms->term_id; // Replace 22 with the actual taxonomy term ID
$image = get_field('features_&_amenities_icon', 'term_' . $term_id);
echo $image;
// // Check if the ACF field value exists and is not empty
// if ($image) {
//     // Output the image URL
//     echo $image['url'];
// } else {
//     // No image found or empty ACF field
//     echo 'Image not found';
// }

?>

<!-- sads -->
<?php get_footer(); ?>