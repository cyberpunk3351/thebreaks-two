<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
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