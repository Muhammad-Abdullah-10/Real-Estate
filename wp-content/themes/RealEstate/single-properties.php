<?php get_header(); ?>
<?php

global $post;

$query = new WP_Query(array(
    'post_type' => 'properties'
));

while ($query ->have_posts()) {
    $query-> the_post();

    // $taxonomy_objects = get_object_taxonomies( 'properties', 'objects' );
	// print_r( $taxonomy_objects);
    // the_content();
    $terms = get_the_terms( $post->ID , 'City' );
    $propertyType =  get_the_terms($query->ID, 'Type');;
    $propertyFeatures = get_the_terms($query->ID, 'Features');
    $propertyFeature_Aminities = get_the_terms(the_ID(), 'Feature-Aminities');
    $featureimage = get_field('feature_area_image');
    // if (!empty($propertyType)) {
    //     echo $propertyType[0]->name;
    // }
    // echo $propertyFeature_Aminities . "this is";
    $featureAndAmenities = get_terms(['taxonomy' =>'Feature-Aminities','hide_empty' => true]); 
    // $mycat = get_category(['taxonomy' =>'Type']); 
    // print_r($myterms);
    // print_r($mycat);
     ?>
    <div class="container">
        <div class="row">
            
            <?php
        if (!empty($featureAndAmenities)) {
            // var_dump($propertyFeatures);
            foreach ($featureAndAmenities as $featureAndAmenitiesData){
        ?>
            <div class="col-lg-4 col-md-6 col-sm-12">
            <?php echo $featureAndAmenitiesData->name; ?><br>
            <?php echo term_description($featureAndAmenitiesData-> term_id); ?><br>
            <!-- <img style="max-width: 500px;" src="<?php echo esc_url($featureimage['url']); ?>" alt="<?php echo esc_attr($featureimage['alt']); ?>" /> -->
            <?php echo print_r($featureimage); ?>
            </div>      
        <?php
        }
    }
        ?>
           
        </div>
    </div>
        
        
    <!-- </ul> -->

    <!-- <h3><?php echo get_field('unit_type'); ?></h3>
    <h3><?php echo get_field('unit_size'); ?></h3>
    <h3><?php echo get_field('down_payment'); ?></h3>
    <h3><?php echo get_field('payment_plan'); ?></h3>
    <h3><?php echo get_field('handover'); ?></h3>
    <h3><?php echo get_field('property_price'); ?></h3>
    <h3><?php echo get_field('features_&_amenities_icon'); ?></h3> -->
    <!-- <h3><?php echo $arraay_tt = get_field('master_plan_image');
                echo $arraay_tt; ?></h3> -->
    <!-- <?php
    $image = get_field('master_plan_image');
    if (!empty($image)) : ?> -->
        <!-- <img style="max-width: 500px;" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
    <!-- <?php endif; ?> -->
<?php }
get_footer(); ?>