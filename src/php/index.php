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
            
                <?php get_template_part( 'template-parts/content/content', 'slider'); ?>
                <?php get_template_part( 'template-parts/content/content'); ?>
            </div> <!-- END: mainContent -->
        </div> <!--END: containers -->

        <?php the_posts_navigation(); ?>

    </section>

<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:3000/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>