<?php get_header(); ?>
<div class="container-fluid px-5 py-1">
    <div class="row">
        <div class="col-xl-6 col-md-6 col-sm-12 banner-content d-flex flex-column justify-content-start align-items-start p-5 home-banner-right">
            <div class="contain-h1">
                <h1 class="banner-main-heading">Primo Real <span>Estate
                    </span>
                </h1>
            </div>

            <h3 class="banner-sub-heading">
                Find the <span class="golden-color"> perfect place to</span>
                live <span class="golden-color">with your</span> family
            </h3>
            <div class="form-banner">
                <h3 class="form-banner-heading">WHAT ARE YOU LOOKING FOR?
                    <span class="form-banner-inner">(Easily find the house of your choice)
                    </span>
                </h3>
                <form>
                    <div class="form-row banner-drop-down-option">
                        <div class="col">
                            <select class="custom-select my-1 mr-sm-2 py-3" id="inlineFormCustomSelectPref">
                                <option selected >Property Type</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col">
                            <select class="custom-select my-1 mr-sm-2 py-3" id="inlineFormCustomSelectPref">
                                <option selected>City Neighbourhood , Community</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary my-1 button-banner-form-search-btn">Search</button>
                    </div>
                </form>
            </div>
            <div class="agent-img-banner-sec">
                <div class="row">
                        <?php echo get_field('agent_name'); ?>
                        <?php echo  get_field('agent_image'); ?>
                        <img src="<?php echo get_theme_file_uri(); ?>/inc/images/agent1.webp" alt="" class="agent-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/inc/images/agent1.webp" alt="" class="agent-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/inc/images/agent1.webp" alt="" class="agent-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/inc/images/agent1.webp" alt="" class="agent-img">
                        <img src="<?php echo get_theme_file_uri(); ?>/inc/images/agent1.webp" alt="" class="agent-img">
                        <p class="agent-number">50+ Agents <a href="#" class="listing-link-banner">See All Listing</a></p>
                </div>
            </div>
        </div>
        <div class="col-xl-6 col-md-6 col-sm-12 background-banner-home"></div>
    </div>
</div>

<?php get_footer(); ?>