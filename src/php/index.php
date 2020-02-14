<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package thebreaks-two
 */

get_header();?>
    <section class="content">
        <div class="mainContent">
            <div class="containers">            
                <?php get_template_part( 'template-parts/shortcontent/shortcontent', 'slider'); ?>
                <div class="contentAll">
                    <div class="contentAll__left">
                        <?php get_template_part( 'template-parts/shortcontent/shortcontent'); ?>
                    </div>
                    <div class="contentAll__right">
                        <?php get_sidebar(); ?>
                    </div>
                </div>
            </div> <!-- END: mainContent -->
        </div> <!--END: containers -->

        <?php the_posts_navigation(); ?>

    </section>

<?php
get_footer();
