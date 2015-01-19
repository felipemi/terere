<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Terere
 * @since Terere
 */
get_header();
?>

<div id="primary" class="site-content">
    <div id="content" role="main">

        <article id="post-0" class="post error404 no-results not-found">
            <header class="entry-header">
                <h2 class="entry-title"><?php _e('Nada Encontrado.', 'terere'); ?></h2>
            </header>

            <div class="entry-content">
                <p><?php _e('Desculpe. Mas nada foi encontrado', 'terere'); ?></p>
                <span>
                    <p class="erro404">Erro 404. Página não encontrada. Digite novamente sua url</p>
                </span>
            </div><!-- .entry-content -->
        </article><!-- #post-0 -->

    </div><!-- #content -->
</div><!-- #primary -->

<?php get_footer(); ?>