<?php get_header(); ?>
<?php

global $post;

$query = new WP_Query(array(
    'post_type' => 'properties'
));


while ($query->have_posts()) {
    $query->the_post();

    // $taxonomy_objects = get_object_taxonomies( 'properties', 'objects' );
    // print_r( $taxonomy_objects);
    // the_content();
    $terms = get_the_terms($post->ID, 'City');


    $propertyFeature_Aminities = get_the_terms(the_ID(), 'Feature-Aminities');
    
    // if (!empty($propertyType)) {
    //     echo $propertyType[0]->name;
    // }
    // echo $propertyFeature_Aminities . "this is";
    

    // $mycat = get_category(['taxonomy' =>'Type']); 
    // print_r($myterms);
    // print_r($mycat);
?>
    <!-- Type-->
    <div class="container py-5 ">
        <div class="row">
            <?php $propertyType = get_terms(['taxonomy' => 'Type', 'hide_empty' => true]);
            if (!empty($propertyType) && !is_wp_error($propertyType))
                foreach ($propertyType as $propDetails) {
            ?> <h3>Property Type : <?php echo  $propDetails->name; ?>
                <?php } ?>
                <!-- <?php print_r($propertyType); ?> -->
        </div>
    </div>
    <!-- Type-->
    <!-- Features & Amenities -->
    <div class="container">
        <div class="row">
            <?php
            $featureimage = the_field('features_&_amenities_icon');
            $featureAndAmenities = get_terms(['taxonomy' => 'Feature-Aminities', 'hide_empty' => true]);
            if (!empty($featureAndAmenities)) {
                foreach ($featureAndAmenities as $featureAndAmenitiesData) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h4><?php echo $featureAndAmenitiesData->name; ?><br></h4>
                        <p><?php echo term_description($featureAndAmenitiesData->term_id); ?><br></p>        
                    </div>
            <?php
                }
            }
            ?>
            <!-- <img style="max-width: 500px;" src="<?php echo esc_url($featureimage['url']); ?>" alt="<?php echo esc_attr($featureimage['alt']); ?>" /> -->
        </div>
    </div>
    <!-- Features & Amenities -->
   <!-- Features -->
   <div class="container">
        <div class="row">
            <?php
            $features = get_terms(['taxonomy' => 'Features', 'hide_empty' => true]);
            if (!empty($features)) {
                foreach ($features as $featuresData) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php echo $featuresData->name; ?><br>
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- Features -->


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