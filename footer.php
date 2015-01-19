<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage StylusGrafy
 * @since Tererê
 */
?>
</div><!--#page!-->
</div><!-- #main .wrapper -->
</div><!-- #fundo -->

<?php wp_footer(); ?>
<div class="border"></div>
<footer id="colophon" role="contentinfo" style="bottom: 0; width: 100%;">
    <div class="site-info">
        <div class="centro-result">
            <div class="sf-r">
                <div class="social-medias">
                    <span>
                        <a href="https://www.facebook.com/terere.com.br?fref=ts" title="Tereré® Zaionc® no Facebook" target="_blank">
                            <img src="<?= bloginfo('template_url') ?>/img/icon-social-facebook.png" alt="Tereré no Facebook"/>
                        </a>
                    </span>
                </div>
                <div class="tweet">
                    <span>
                        <a href="https://twitter.com/tzaionc" title="Tereré® Zaionc® no Twitter" target="_blank">
                              <img src="<?= bloginfo('template_url') ?>/img/icon-social-twitter.png" alt="Tereré no Twitter"/>
                        </a>
                    </span>
                </div>
                <div class="tweet">
                    <span>
                        <a href="http://www.youtube.com/channel/UCwsZRrtESPnQB99Wz0YtU9w" title="Tereré® Zaionc® no Youtube" target="_blank">
                            <img src="<?= bloginfo('template_url') ?>/img/icon-social-youtube.png" alt="Tereré no Youtube"/>
                        </a>
                    </span>
                </div>
                <div class="tweet">
                    <span>
                        <a href="https://plus.google.com/u/0/102367294251787812632/posts" title="Tereré® Zaionc® no Google+" target="_blank">
                            <img src="<?= bloginfo('template_url') ?>/img/icon-social-google.png" alt="Tereré no Google"/>
                        </a>
                    </span>
                </div>
                <div>
                    <div style="width: 100px; margin: 0 auto;">
                        <img src="<?= bloginfo('template_url') ?>/img/img-codigo-qr-terere.png" alt="Código QR Erva-Mate Tereré"/>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .site-info -->
    <span class="sf">
        <div class="adrs">
            <?php do_action('terere_credits'); ?>
            <address>
                <span>Rua Antônio Zaions, 100</span><br />
                <?php
                if (is_page(array(92, 104, 96, 94, 98, 2))) :
                    ?>
                    <span><strong>Phone:</strong> (42) 3543 1220 – Fax: (42) 3543 1188</span><br />
                    <?php
                else :
                    ?>
                    <span><strong>Telefone:</strong> (42) 3543 1220 – Fax: (42) 3543 1188</span><br />
                <?php
                endif;
                ?>
                <span>CEP 84635-000 – Paulo Frontin – Paraná – Brasil</span>
            </address>
        </div>
    </span>     
</footer><!-- #colophon -->
</body>
</html>