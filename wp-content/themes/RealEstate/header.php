<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php get_bloginfo(); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
    <title><?php get_bloginfo(); ?></title>
</head>

<body <?php body_class(); ?>>
    <!-- HEADER -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav navbar-collapse mr-auto">
                    <li class="nav-item">
                        <a class="navbar-brand" href="<?php echo site_url(); ?>">
                            <?php if (has_custom_logo()) {
                                // $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo_other_size = wp_get_attachment_image_src(get_theme_mod('custom_logo'), 'thumbnail')[0];
                            ?>
                                <img class="main-logo" src="<?php echo $logo_other_size; ?>" alt="">
                            <?php  } else {
                                echo bloginfo();
                            }  ?>
                        </a>
                        <button class="nav-ham">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </li>
                    <li class="nav-item">
                        <?php wp_nav_menu(array(
                            'menu' => 'HeaderOneMain',
                            'menu_id' => 'main-header-menu'
                        )); ?>
                    </li>
                    <li class="nav-item">
                        <button class="get-listing btn btn-primary button-listing">Get Listing</button>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <!-- END HEADER -->