<?php
/**
 * Template Name: Шаблон для верстки контакты
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */
get_header();
?>

<main id="site-content" role="main">
    <?if(have_posts()):?>
    <?the_post();?>
        <article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

            <div class="post-inner <?php echo is_page_template( 'templates/template-full-width.php' ) ? '' : 'thin'; ?> ">

                <div class="entry-content">

                    <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
                        <?php
                        if(function_exists('bcn_display'))
                        {
                            bcn_display();
                        }
                        ?>
                    </div>
                    <header class="entry-header has-text-align-center<?php echo esc_attr( $entry_header_classes ); ?>">
                        <div class="entry-header-inner section-inner medium">
                            <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                        </div><!-- .entry-header-inner -->
                    </header><!-- .entry-header -->
                    <?php 
                        ob_start();
                        ?>
                         <link rel="stylesheet" href="style-contact.css">
                         <div class="container-contact">
                                <h4>
                                    <p class="text">Уже более 100 миллионов человек во всем мире выбирают наши решения, которые делают людей счастливее. SPLAT GLOBAL – международная компания с представительствами в 12 странах мира. Нашу продукцию можно найти на полках магазинов более чем 70 государств.</p>
                                </h4>
                                <img src="https://raw.githubusercontent.com/VarlamKing/sait/c3aa22e64f0240b7bdfa081ce9699eb1940d856c/maps.svg" alt="photo" class="img" width="1430" height="700">
                                </div>
                        <?
                        $content = ob_get_clean();
                        echo splat_apply_meta_on_content($content);
                        //the_content();

                    ?>

                </div><!-- .entry-content -->
            </div><!-- .post-inner -->

            <div class="section-inner">

            </div><!-- .section-inner -->

        </article><!-- .post -->
    <?endif;?>

<?php get_footer(); ?>
