<?php
/*
 * The header for theme hw_18
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Roboto:400,700" rel="stylesheet">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr"
    crossorigin="anonymous">

	<?php wp_head(); ?>
</head>

<body>

        <header class="site-header">
                <div class="wrapper">
                    <div class="site-branding">
                        <?php
                        the_custom_logo();
                        if ( is_front_page() && is_home() ) :
                            ?>
                            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
                            <?php
                        else :
                            ?>
                            <p class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                            <?php
                        endif;
                        $hw_18_description = get_bloginfo( 'description', 'display' );
                        if ( $hw_18_description || is_customize_preview() ) :
                            ?>
                            <p class="site-description"><?php echo $hw_18_description; /* WPCS: xss ok. */ ?></p>
                        <?php endif; ?>
                    </div><!-- .site-branding -->

                    <nav class="main-navigation">
                        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hw_18' ); ?></button>
                        <?php
                        wp_nav_menu( array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'primary-menu',
                        ) );
                        ?>
                    </nav><!-- .main-navigation -->
                </div>
        </header>

