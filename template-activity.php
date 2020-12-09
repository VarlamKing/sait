<?php
/**
 * Template Name: Мероприятия
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

get_header(); ?>

<main id="site-content" role="main" class="page-events">

    <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">
        <div class="entry-content">

            <div class="background_part">
                <div class="breadcrumbs breadcrumbs-black" typeof="BreadcrumbList" vocab="https://schema.org/">
                    <?php
                    if(function_exists('bcn_display'))
                    {
                        bcn_display();
                    }?>
                </div>
                <header class="entry-header has-text-align-center header-footer-group">
                    <div class="entry-header-inner section-inner medium">
                        <h1 class="entry-title">Мероприятия</h1>
                    </div><!-- .entry-header-inner -->
                </header>
            </div>

            <div class="content_part">
                <div class="vc_grid-container">
                    <div class="vc_grid">
                        <div class="vc_pageable-slide-wrapper">
                            <?php
                            $args = array(
                                'post_type' => 'event',
                                'publish'   => true,
                                'paged'     => get_query_var('paged'),
                                'posts_per_page'         => '5',
                                'posts_per_archive_page' => '5',
                            );

                            query_posts($args);

                            if ( have_posts() ) : ?>

                                <?php
                                while ( have_posts() ) :
                                    the_post();

                                    get_template_part( 'content-events', get_post_format() );

                                endwhile;

                                the_posts_pagination();
                                ?>

                            <?php else : ?>
                                <?php get_template_part( 'content-events', 'none' ); ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>

        </div><!-- .entry-content -->
    </div><!-- .post-inner -->

</main><!-- #site-content -->

<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>

<?php get_footer(); ?>
