<?php get_header(); ?>
<?php

global $post;

$query = new WP_Query(array(
    'post_type' => 'properties'
));
while ($query->have_posts()) {
    $query->the_post();
    $terms = get_the_terms($post->ID, 'City');

?>
    <div class="container-fluid">
        <div class="row">
            <div class="single-property-banner">
            <img style="width:100vw; height:500px" src="<?php echo the_field("property_feature_image");  ?>" alt="" class="container-image-property-bg">
            <h1><?php the_title(); ?></h1>
            </img>
            </div>
            
        </div>
    </div>
    <!-- Type-->
    <div class="container py-5 ">
        <div class="row">
            <?php $propertyType = get_terms(['taxonomy' => 'Type', 'hide_empty' => true]);
            if (!empty($propertyType) && !is_wp_error($propertyType))
                foreach ($propertyType as $propDetails) {
            ?>
             <h3>Property Type : <?php echo  $propDetails->name; ?>
                <?php } ?>
                <!-- <?php print_r($propertyType); ?> -->
        </div>
    </div>
    <!-- Type-->
    <!-- Features & Amenities -->
    <div class="container">
        <div class="row">
        <h2 class="col-lg-12">Features & Amenities</h2>
            <?php
            // $featureimage = the_field('features_&_amenities_icon' , the_ID());
            $featureAndAmenities = get_terms(['taxonomy' => 'Feature-Aminities', 'hide_empty' => true]);
            if (!empty($featureAndAmenities) && !is_wp_error($featureAndAmenities)) {
                foreach ($featureAndAmenities as $featureAndAmenitiesData) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <h4><?php echo $featureAndAmenitiesData->name; ?><br></h4>
                        <p><?php echo term_description($featureAndAmenitiesData->term_id); ?><br></p>        
                        <p><?php
                        // Getting ACF Image URL Features and Aminities
                        $img_term_id = $featureAndAmenitiesData->term_id; 
                        $image_url = get_field('features_&_amenities_icon', 'term_' . $img_term_id);
                        ?><br></p>        
                        <img style="width: 100px;height:100px;object-fit:cover;" src="<?php echo $image_url; ?>" alt="<?php  ?>" />
                    </div>
            <?php
                }
            }
            ?>
            
        </div>
    </div>
    <!-- Features & Amenities -->
   <!-- Features -->
   <div class="container">
        <div class="row">
            <h2 class="col-lg-12">Features</h2>
        
            <?php
            $features = get_terms(['taxonomy' => 'Features', 'hide_empty' => true]);
            if (!empty($features)) {
                foreach ($features as $featuresData) {
            ?>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <?php echo $featuresData->name; ?><br>
                        <?php
                        $img_term_id = $featuresData->term_id; 
                        $image_url = get_field('feature_area_image', 'term_' . $img_term_id);
                        ?><br></p>        
                        <img style="width: 100px;height:100px;object-fit:cover;" src="<?php echo $image_url; ?>" alt="<?php  ?>" />
                        <img style="width: 200px;" src="<?php the_field("feature_area_image", 22) ?>" alt="<?php  ?>" />
                    </div>
            <?php
                }
            }
            ?>
        </div>
    </div>
    <!-- Features -->


    <!-- </ul> -->
    <div class="container">
        <div class="row">
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('unit_type'); ?></h3>            
            </div>
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('unit_size'); ?></h3>
            </div>
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('down_payment'); ?></h3>
            </div>
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('payment_plan'); ?></h3>
            </div>
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('handover'); ?></h3>
            </div>
            <div class="col-lg-4 my-2">
            <h3><?php echo get_field('property_price'); ?></h3>
            </div>
            <div class="col-lg-4 my-2">    
            <h3><?php echo get_field('features_&_amenities_icon'); ?></h3>
            </div>
        </div>
    </div>
    
    
  
   
   
    
    <!-- <h3><?php echo $arraay_tt = get_field('master_plan_image');
                echo $arraay_tt; ?></h3> -->
    <!-- <?php
            $image = get_field('master_plan_image');
            if (!empty($image)) : ?> -->
    <!-- <img style="max-width: 500px;" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" /> -->
    <!-- <?php endif; ?> -->
<?php }
get_footer(); ?>