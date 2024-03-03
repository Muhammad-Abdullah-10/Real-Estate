<?php get_header(); ?>
<?php
while (have_posts()) {
    the_post(); 
 
// the_content();
// $terms = get_the_terms( $post->ID , 'City' );
$propertyType =  get_the_terms($post->ID, 'Type');;
$propertyFeatures = get_the_terms($post->ID , 'Features');
$featureimage = get_field('feature_area_image');
if (!empty($propertyType)) {
echo $propertyType[0]->name ;
} ?>
<br>
<ul>
<?php 
if(!empty($propertyFeatures)  ){
    var_dump($propertyFeatures);
    foreach( $propertyFeatures as $featuresData)
    ?>
        <br><br><li><?php echo $featuresData-> name; ?></li><br>
        <li><?php echo $featuresData-> term_id; ?></li><br> 
        
<?php }

?>
<!-- <img style="max-width: 500px;" src="<?php echo esc_url($featureimage['url']); ?>" alt="<?php echo esc_attr($featureimage['alt']); ?>" /> -->
</ul>

<h3><?php echo get_field('unit_type'); ?></h3>
<h3><?php echo get_field('unit_size'); ?></h3>
<h3><?php echo get_field('down_payment'); ?></h3>
<h3><?php echo get_field('payment_plan'); ?></h3>
<h3><?php echo get_field('handover'); ?></h3>
<h3><?php echo get_field('property_price'); ?></h3>
<!-- <h3><?php echo $arraay_tt = get_field('master_plan_image'); echo $arraay_tt; ?></h3> -->
<?php 
$image = get_field('master_plan_image');
if( !empty( $image ) ): ?>
    <img style="max-width: 500px;" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>
<?php }
 get_footer(); ?>