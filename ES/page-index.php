<?php
/*
 *
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tereré
 * Template Name: Inicio Espanhol
 */
get_header();
?>

<div id="primary" style='margin-bottom: 50px;' class="site-content">
    <div id="content" role="main">
        <?php while (have_posts()) : the_post(); ?>
            <div class="index-img">
                <figure>
                    <?php
                    echo do_shortcode("[metaslider id=140]");
                    ?>
                </figure>
            </div>
            <div class="entry-content-index" id="iniciopag">

                <header class="entry-header linha-prod">
                    <h2 class="entry-header-index" style="text-align: left !important;">
                        Nuestro producto
                    </h2>
                </header>
                <div class="index-produtos">
                    <ul>
                        <li>
                            <a class="chas-naturais" href="produtos/#tabs-5" alt="chas-naturais">
                                <span class="texto-item" style="padding-left: 94px !important; padding-top: 22px !important; font-size: 23px !important;">Mate y Natural</span>
                            </a>
                            <img class="img-01" src="<?= bloginfo('template_url') ?>/img/cha-cha.png" alt="Produtos Terere" width="180"/>
                        </li>
                        <li>
                            <a class="cha-mate" href="produtos/#tabs-6" alt="erva-mate">
                                <span class="texto-item" style="padding-top: 24px !important; padding-left: 76px !important; font-size: 21px !important;">Hielo Del Compañero</span>
                            </a>
                            <img src="<?= bloginfo('template_url') ?>/img/terere-produtos.png" alt="Produtos Terere" width="230"/>
                        </li>
                        <li>
                            <a class="erva-mate" href="produtos/#tabs-4" alt="cha-mate">
                                <span class="texto-item" style="padding-left: 100px !important; padding-top: 22px !important; font-size: 23px !important;">Mate Caliente</span>
                                <img class="img-03" src="<?= bloginfo('template_url') ?>/img/img-erva-mate-espora-ouro.png" alt="Produtos Terere" width="200"/>
                            </a>
                        </li>
                    </ul>
                </div>
                  <div class="center-video">
                    <div class="row">
                        <div class="video-inf">
                            <ul>
                                <li>
                                    <iframe width="300" height="240" src="//www.youtube.com/embed/qDu3d1EUa2E" frameborder="0" allowfullscreen></iframe>
                                </li>
                                <li>
                                   <iframe width="300" height="240" src="//www.youtube.com/embed/4JaclumQt68" frameborder="0" allowfullscreen></iframe>
                                </li>
                                <li>
                                   <iframe width="300" height="240" src="//www.youtube.com/embed/fwQdM-bCCjM" frameborder="0" allowfullscreen></iframe>
                                </li>
                            </ul>     
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile; // end of the loop. ?>
    </div><!-- #content -->
</div><!-- #primary -->
<?php get_sidebar();   ?>
<?php get_footer(); ?>