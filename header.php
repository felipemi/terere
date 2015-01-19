<?php
/*
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tererê
 */
?>
<?php
/* require_once('mobile_device_detect.php');
  mobile_device_detect(true,true,true,true,true,true,'http://www.terere.com.br/mobile',false);
  $pagina = end(explode("/", $_SERVER['PHP_SELF'])); */
?>
<!DOCTYPE html>
<!--[if IE 7]><html class="no-js ie7 lt-ie9 lt-ie8" <?php language_attributes(); ?>><![endif]-->
<!--[if IE 8]><html class="no-js ie8 lt-ie9" <?php language_attributes(); ?>><![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html class="no-js" <?php language_attributes(); ?>>
    <!--<![endif]-->
    <head>
        <meta charset="<?php bloginfo('charset'); ?>" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php wp_title('|', true, 'right'); ?></title>
        <link href="<?php echo get_template_directory_uri(); ?>/images/favicon.ico" rel="shortcut icon" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/style.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/resources/demos/style.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/jquery-ui.css"/>
        <link rel="stylesheet" href="<?php bloginfo('template_url') ?>/css/lightbox.css"/>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/lightbox.js"></script>
        <script type="text/javascript" language="javascript">
            $(function () {
                $("#tabs").tabs();
            });
        </script>
        <!--[if lt IE 9]>
        <script src="<?php echo get_template_directory_uri(); ?>/js/html5.min.js" type="text/javascript"></script>
        <![endif]-->
        <?php wp_head(); ?>
    </head>

    <body <?php body_class(); ?>>
        <header id="masthead" class="site-header" role="banner">
            <div id="bandeiras">
                <div class="ban-pib">
                    <ul>
                        <li>
                            <a href="http://www.terere.com.br" target="_top" title="Portuguese">
                                <img src="<?= bloginfo('template_url') ?>/img/img-bandeira-brazil.png" alt="Bandeira Brazil Terere" width="30"/>  
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(92); ?>" target="_top" title="English">
                                <img src="<?= bloginfo('template_url') ?>/img/img-bandeira-reino-unido.png" alt="Bandeira Reino Unido Terere" width="30"/>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo get_page_link(124); ?>" target="_top" title="Spanish">
                                <img src="<?= bloginfo('template_url') ?>/img/img-bandeira-espanha.png" alt="Bandeira Espanha Terere" width="30"/>
                            </a>

                        </li>
                    </ul>
                </div>
            </div>
            <?php if (get_header_image()) : ?>
                <div class="cabecalho">  
                    <h1>
                        <a href="<?php echo esc_url(home_url('/')); ?>">
                            <img src="<?= bloginfo('template_url') ?>/img/logo.png" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="Tererê Zionc"/>
                        </a>
                    <?php endif; ?>
                </h1>
                <div class="zaionc"></div>
                <?php
                if (is_page(array(92, 104, 96, 94, 98))) {
                    ?>
                    <a class="boneco-index-english" href="#" title="Tereré® Zaionc® Ecommerce">
                        Tereré Zaionc Ecommerce English
                    </a>
                    <?php
                } else if (is_page(array(124, 126, 128, 130, 132))) {
                    ?>
                    <a class="boneco-index-espanhol" href="#" title="Tereré® Zaionc® Ecommerce">
                        Tereré Zaionc Ecommerce Espanhol
                    </a>
                    <?php
                } else {
                    ?>
                    <a class="boneco-index" href="#" title="Tereré® Zaionc® Ecommerce">
                        Tereré Zaionc Ecommerce
                    </a>
                    <?php
                }
                ?>
            </div>

            <hgroup>
                <h2 class="site-title">
                    <a href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" rel="home"><?php bloginfo('name'); ?></a>
                </h2>
                <h2 class="site-description"><?php bloginfo('description'); ?></h2>
            </hgroup>

            <nav id="site-navigation" class="main-navigation" role="navigation">
                <h3 class="menu-toggle"><?php _e('Menu', 'twentytwelve'); ?></h3>
                <a class="assistive-text" href="#content" title="<?php esc_attr_e('Skip to content', 'Terere'); ?>"><?php _e('Skip to content', 'twentytwelve'); ?></a>
                <?php
                if (is_page(array(92, 104, 96, 94, 98))) {
                    ?>
                    <div class="menu-menu-terere-container">
                        <ul id="menu-menu-terere" class="nav-menu">
                            <?php $endereco = $_SERVER ['REQUEST_URI']; ?>
                            <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page <?php
                            if ($endereco == '/home-us/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> page_item page-item-11 menu-item-13">
                                <a title="Home. Tereré" href="http://www.terere.com.br/?page_id=92">Home</a>
                            </li>
                            <li id="menu-item-23" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/about-us/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-23">
                                <a title="About US" href="http://www.terere.com.br/?page_id=104">About US</a>
                            </li>
                            <li id="menu-item-16" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/products/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-16">
                                <a title="Products" href="http://www.terere.com.br/?page_id=98">Products</a>
                            </li>
                            <li id="menu-item-15" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/contact/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-15">
                                <a title="Contact US" href="http://www.terere.com.br/?page_id=94">Contact US</a>
                            </li>
                            <li id="menu-item-14" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/buying-wholesale/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-14">
                                <a title="Buying Wholesale" href="http://www.terere.com.br/?page_id=96">Buying Wholesale</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                } else if (is_page(array(124, 126, 128, 130, 132))) {
                    ?>
                    <div class="menu-menu-terere-container">
                        <ul id="menu-menu-terere" class="nav-menu">
                            <?php $endereco = $_SERVER ['REQUEST_URI']; ?>
                            <li id="menu-item-13" class="menu-item menu-item-type-post_type menu-item-object-page <?php
                            if ($endereco == '/inicio/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> page_item page-item-11 menu-item-13">
                                <a title="Inicio. Tereré" href="http://www.terere.com.br/?page_id=124">Inicio</a>
                            </li>
                            <li id="menu-item-23" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/sobre-nosotros/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-23">
                                <a title="Sobre Nosotros" href="http://www.terere.com.br/?page_id=126">Sobre Nosotros</a>
                            </li>
                            <li id="menu-item-16" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/productos/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-16">
                                <a title="Productos" href="http://www.terere.com.br/?page_id=128">Productos</a>
                            </li>
                            <li id="menu-item-15" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/contactenos/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-15">
                                <a title="Contáctenos" href="http://www.terere.com.br/?page_id=130">Contáctenos</a>
                            </li>
                            <li id="menu-item-14" class="menu-item menu-item-type-post_type <?php
                            if ($endereco == '/comercio-al-por-mayor-de-compras/') {
                                echo "current-menu-item";
                            } else {
                                echo "";
                            }
                            ?> menu-item-object-page menu-item-14">
                                <a title="Comercio al por mayor de compras" href="http://www.terere.com.br/?page_id=132">Comercio al por mayor de compras</a>
                            </li>
                        </ul>
                    </div>
                    <?php
                } else {
                    ?>
                    <?php wp_nav_menu(array('menu' => 'menu-terere', 'theme_location' => 'primary', 'menu_class' => 'nav-menu')); ?>
                    <?php
                }
                ?>
            </nav><!-- #site-navigation -->
        </header><!-- #masthead -->  

        <div id="fundo">
            <div id="page" class="hfeed site">
                <div id="main" class="wrapper">
