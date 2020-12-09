<?php
/**
 * Template Name: News Template
 * Template Post Type: page
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */


/*Если нет нужной страницы то установить 404*/
/*так как на первой странице 10 а на остальных по 9 то получаем первый отдельно*/
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$first_post = 0;
    $arg_posts =  array(
        'order'        => 'DESC',
        'posts_per_page ' => 1,
        'numberposts' =>1,
        'post_type' => 'news',
        'post_status' => 'publish',
        'publish'   => true,
        // 'meta_key'			=> 'sort_tech',
        'orderby'			=> 'date',
    );
    $posts = get_posts($arg_posts);
    if(!empty($posts))
    {
        $first_post = $posts[0]->ID;
    }

/*Основные данные*/
$arg_posts =  array(
    'order'        => 'DESC',
    'posts_per_page' => 5,
    'post_type' => 'news',
    'post_status' => 'publish',
    'orderby'			=> 'date',
    'paged'          => $paged,
    'post__not_in'=>array($first_post)//Если  уже выбран пост то исключим его из выборки
);

$query = new WP_Query($arg_posts);
if (!$query->have_posts())
{
    global $wp_query;
    $wp_query->set_404();
    add_action( 'wp_title', function () {
        return '404: Not Found';
    }, 9999 );
    status_header( 404 );
    nocache_headers();
    require get_404_template();
    exit;
}
get_header();

?>

<main id="site-content" role="main">
    <?if(have_posts()):?>
    <?//the_post();?>
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
                        <section id="news_1" class="vc_section">
                            <div class="vc_row wpb_row vc_row-fluid">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">
                                            <div class="vc_row wpb_row vc_inner vc_row-fluid nav_сertificates_group_blocks_content_all nav_сertificates_group_blocks_first">
                                                <div class="news-grid-style wpb_column vc_column_container vc_col-sm-12">
                                                    <div class="vc_column-inner">
                                                        <div class="wpb_wrapper">
                                                            <div class="vc_grid-container-wrapper vc_clearfix">
                                                                <div class="vc_grid-container vc_clearfix wpb_content_element vc_basic_grid awards">
                                                                    <div class="vc_grid vc_row vc_grid-gutter-30px vc_pageable-wrapper vc_hook_hover">
                                                                        <?if($paged==1):?>
                                                                            <?if($first_post):?>
                                                                                <?foreach ($posts as $post):?>
                                                                                    <?setup_postdata($post);?>
                                                                                    <?get_template_part( 'template-parts/content-news-big', get_post_format() );?>
                                                                                <?endforeach;?>
                                                                            <?endif;?>
                                                                            <?$printed = 0;?>
                                                                            <? while ( $query->have_posts() ) : $query->the_post(); ?>
                                                                                <?if($printed==0):?>
                                                                                    <?get_template_part( 'template-parts/content-news-big', get_post_format() );?>
                                                                                <?else:?>
                                                                                    <?get_template_part( 'template-parts/content-news-small', get_post_format() );?>
                                                                                <?endif;?>
                                                                                <?$printed++;?>
                                                                                <?if($printed==3):?>
                                                                        <div class="alternative_cards background-transparent-border-grey-400 news-style wpb_column vc_column_container vc_col-sm-4 vc_col-has-fill">
                                                                            <div class="vc_column-inner vc_custom_1603991097750">
                                                                                <div class="wpb_wrapper">
                                                                                    <h3 style="color: #0a0a0a;text-align: left;font-family:Abril Fatface;font-weight:400;font-style:normal"
                                                                                        class="vc_custom_heading">Пресс-<br>служба</h3>
                                                                                    <div class="wpb_raw_code wpb_content_element wpb_raw_html">
                                                                                        <div class="wpb_wrapper">
                                                                                            <div class="phone-image-mail">
                                                                                                <div class="phone-text-img">
                                                                                                    <img src="/wp-content/uploads/2020/10/phone.png">
                                                                                                    <p class="text-body-2">+7 (495) 725 66 38, доб.
                                                                                                        1149</p>
                                                                                                </div>
                                                                                                <div class="mail-text-img">
                                                                                                    <img src="/wp-content/uploads/2020/10/mail.png">
                                                                                                    <p class="text-body-2">pr@splat.ru</p>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                    <div class="vc_btn3-container  button-l button-transparent-red popmake-popup-news-form vc_btn3-inline">
                                                                                        <a class="vc_general vc_btn3 vc_btn3-size-md vc_btn3-shape-rounded vc_btn3-style-modern vc_btn3-color-grey"
                                                                                           href="#" title="">
                                                                                            Задать вопрос
                                                                                        </a>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                                <?endif;?>
                                                                                <?php endwhile; wp_reset_postdata()?>
                                                                        <?else:?>
                                                                            <?$printed = 0;?>
                                                                            <? while ( $query->have_posts() ) : $query->the_post(); ?>
                                                                                <?get_template_part( 'template-parts/content-news-small', get_post_format() );?>
                                                                            <?php endwhile; wp_reset_postdata()?>
                                                                        <?endif;?>
    <?/*
                                                                        <div class="vc_grid-item vc_clearfix vc_col-sm-6 vc_visible-item custom-post-1772 medium-news-not-bg not-pad fadeIn animated">
                                                                            <div class="vc_grid-item-mini vc_clearfix vc_is-hover">
                                                                                <div class="vc_gitem-animated-block " >
                                                                                    <div class="vc_gitem-zone vc_gitem-zone-a custom-post-1772 vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 medium-news-not-bg not-pad">
                                                                                        <div class="vc_gitem-zone-mini">
                                                                                            <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                                                <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                                                    <div class="wpb_text_column wpb_content_element ">
                                                                                                        <div class="wpb_wrapper">
                                                                                                            <div class="fon-plashka"></div>

                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div class="vc_gitem-acf field_5f9a973881314">
                                                                                                        20 октября 2020
                                                                                                    </div>
                                                                                                    <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                                        <div style="text-align: left">
                                                                                                            <a href="https://splat-global.pixelproject.ru/news/h-m-ustanovila-v-magazine-apparat-dlja-prevrashhenija-staroj-odezhdy-v-novuju"
                                                                                                               class="vc_gitem-link"
                                                                                                               title="H&amp;M установила в магазине аппарат для превращения старой одежды  в новую">H&amp;M
                                                                                                                установила в
                                                                                                                магазине аппарат для
                                                                                                                превращения старой
                                                                                                                одежды в новую</a>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                    <div field_5f9a97b08c1cd=""
                                                                                                         class="vc_gitem-acf field_5f9a97b08c1cd">
                                                                                                        Компания SPLAT представляет
                                                                                                        новинку от BioMio – линию
                                                                                                        гигиенического ухода для рук
                                                                                                        BIO-GEL с антибактериальным
                                                                                                        действием.
                                                                                                    </div>
                                                                                                    <div class="wpb_single_image wpb_content_element post-img vc_align_center">
                                                                                                        <figure class="wpb_wrapper vc_figure">
                                                                                                            <a href="https://splat-global.pixelproject.ru/news/h-m-ustanovila-v-magazine-apparat-dlja-prevrashhenija-staroj-odezhdy-v-novuju"
                                                                                                               class="vc_gitem-link vc_single_image-wrapper vc_box_border_grey post-img"
                                                                                                               title="H&amp;M установила в магазине аппарат для превращения старой одежды  в новую"></a>
                                                                                                        </figure>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_grid-item vc_clearfix vc_col-sm-6 vc_visible-item custom-post-1779 small-news-bg fadeIn animated">
                                                                            <div class="vc_grid-item-mini vc_clearfix">
                                                                                <div class="vc_gitem-animated-block">
                                                                                <div class="vc_gitem-zone vc_gitem-zone-a custom-post-1779 vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 small-news-bg">
                                                                                    <div class="vc_gitem-zone-mini">
                                                                                        <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                                            <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                                                <div class="wpb_text_column wpb_content_element ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="fon-plashka"></div>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div class="vc_gitem-acf field_5f9a973881314">
                                                                                                    1 октября 2020
                                                                                                </div>
                                                                                                <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                                    <div style="text-align: left"><a
                                                                                                                href="https://splat-global.pixelproject.ru/news/perekrjostok-i-splat-zapustili-proekt-po-pererabotke-zubnyh-shhjotok"
                                                                                                                class="vc_gitem-link"
                                                                                                                title="«Перекрёсток» и SPLAT запустили проект по переработке зубных щёток">«Перекрёсток»
                                                                                                            и SPLAT запустили проект
                                                                                                            по переработке зубных
                                                                                                            щёток</a></div>
                                                                                                </div>
                                                                                                <div class="vc_gitem-acf field_5f9a97b08c1cd">
                                                                                                    Торговая сеть «Перекрёсток» и
                                                                                                    компания SPLAT запустили
                                                                                                    совместный проект по сбору и
                                                                                                    переработке пластиковых зубных
                                                                                                    щёток
                                                                                                </div>
                                                                                                <div class="wpb_single_image wpb_content_element post-img vc_align_center">
                                                                                                    <figure class="wpb_wrapper vc_figure">
                                                                                                        <a href="https://splat-global.pixelproject.ru/news/perekrjostok-i-splat-zapustili-proekt-po-pererabotke-zubnyh-shhjotok"
                                                                                                           class="vc_gitem-link vc_single_image-wrapper vc_box_border_grey post-img"
                                                                                                           title="«Перекрёсток» и SPLAT запустили проект по переработке зубных щёток"><img
                                                                                                                    width="384"
                                                                                                                    height="395"
                                                                                                                    src="https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-5.png"
                                                                                                                    class="vc_single_image-img attachment-full"
                                                                                                                    alt=""
                                                                                                                    loading="lazy"
                                                                                                                    srcset="https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-5.png 384w, https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-5-292x300.png 292w"
                                                                                                                    sizes="(max-width: 384px) 100vw, 384px"></a>
                                                                                                    </figure>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                        <div class="vc_grid-item vc_clearfix vc_col-sm-6 vc_visible-item custom-post-1775 small-news-photo last fadeIn animated">
                                                                            <div class="vc_grid-item-mini vc_clearfix ">
                                                                                <div class="vc_gitem-animated-block ">
                                                                                <div class="vc_gitem-zone vc_gitem-zone-a custom-post-1775 vc-gitem-zone-height-mode-auto vc-gitem-zone-height-mode-auto-1-1 small-news-photo last">
                                                                                    <div class="vc_gitem-zone-mini">
                                                                                        <div class="vc_gitem_row vc_row vc_gitem-row-position-top">
                                                                                            <div class="vc_col-sm-12 vc_gitem-col vc_gitem-col-align-">
                                                                                                <div class="wpb_text_column wpb_content_element ">
                                                                                                    <div class="wpb_wrapper">
                                                                                                        <div class="fon-plashka"></div>

                                                                                                    </div>
                                                                                                </div>
                                                                                                <div field_5f9a973881314=""
                                                                                                     class="vc_gitem-acf field_5f9a973881314">
                                                                                                    1 октября 2020
                                                                                                </div>
                                                                                                <div class="vc_custom_heading vc_gitem-post-data vc_gitem-post-data-source-post_title">
                                                                                                    <div style="text-align: left">
                                                                                                        <a href="https://splat-global.pixelproject.ru/news/h-m-ustanovila-v-magazine-apparat-dlja-prevrashhenija-staroj-odezhdy-v-novuju-2"
                                                                                                           class="vc_gitem-link"
                                                                                                           title="H&amp;M установила в магазине аппарат для превращения старой одежды в новую">H&amp;M
                                                                                                            установила в
                                                                                                            магазине аппарат для
                                                                                                            превращения старой
                                                                                                            одежды в новую</a>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <div field_5f9a97b08c1cd=""
                                                                                                     class="vc_gitem-acf field_5f9a97b08c1cd">
                                                                                                    Компания SPLAT представляет
                                                                                                    новинку от BioMio – линию
                                                                                                    гигиенического ухода для рук
                                                                                                    BIO-GEL с антибактериальным
                                                                                                    действием.
                                                                                                </div>
                                                                                                <div class="wpb_single_image wpb_content_element post-img vc_align_center">
                                                                                                    <figure class="wpb_wrapper vc_figure">
                                                                                                        <a href="https://splat-global.pixelproject.ru/news/h-m-ustanovila-v-magazine-apparat-dlja-prevrashhenija-staroj-odezhdy-v-novuju-2"
                                                                                                           class="vc_gitem-link vc_single_image-wrapper vc_box_border_grey post-img"
                                                                                                           title="H&amp;M установила в магазине аппарат для превращения старой одежды в новую"><img
                                                                                                                    width="320"
                                                                                                                    height="100"
                                                                                                                    src="https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-4.png"
                                                                                                                    class="vc_single_image-img attachment-full"
                                                                                                                    alt=""
                                                                                                                    loading="lazy"
                                                                                                                    srcset="https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-4.png 320w, https://splat-global.pixelproject.ru/wp-content/uploads/2020/10/news-4-300x94.png 300w"
                                                                                                                    sizes="(max-width: 320px) 100vw, 320px"></a>
                                                                                                    </figure>
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
    */?>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <?
                        $content = ob_get_clean();
                        echo splat_apply_meta_on_content($content);
                        //the_content();

                    ?>

                </div><!-- .entry-content -->
            </div><!-- .post-inner -->

            <div class="section-inner">
                <?php
                edit_post_link();
                twentytwenty_the_post_meta( get_the_ID(), 'single-bottom' );
                if ( post_type_supports( get_post_type( get_the_ID() ), 'author' ) && is_single() ) {

                    get_template_part( 'template-parts/entry-author-bio' );

                }
                ?>
            </div><!-- .section-inner -->
            <?php
            global $wp_query;
            $temp_query = $wp_query;
            $wp_query   = NULL;
            $wp_query   = $query;
            ?>
            <?php get_template_part( 'template-parts/pagination' ); ?>
            <?php
            $wp_query = NULL;
            $wp_query = $temp_query;
            ?>
        </article><!-- .post -->
    <?endif;?>
<?php get_template_part( 'template-parts/footer-menus-widgets' ); ?>
<?php get_footer(); ?>
