<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
    <!-- <link rel="icon" href="favicon.ico" type="image/x-icon"/> -->
    <!-- <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
    <link rel="apple-touch-icon" sizes="180x180" href="apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest"> -->
	<?php wp_head(); ?>
</head>


<body <?php body_class( '' ); ?>>

    <header class="site-header">

        <?php get_template_part( 'template-parts/header/header'); ?>
        

        <nav>
            <div class="wrpMenu">
                <div class="mainMenu">
                    <?php get_template_part( 'template-parts/navigation/navigation', 'top' ); ?>
                </div>
            </div>
        </nav>
    </header>
