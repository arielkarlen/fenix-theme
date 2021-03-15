</div> <!-- /.container -->

<footer class="footer" role="contentinfo">
    <!--Form-->

    <div class="container">
        <section id="container-form">
            <div class="row">
                <div class="col-12 col-md-6">
                    <h1 class="title-general"><?php echo pll__('¿Tiene alguna consulta?'); ?></h1>
                    <p><?php echo pll__('Puede contactarnos en nuestras líneas telefónicas de lunes a viernes de 8 a 16 hs. Escribiendo a nuestro e mail o completando el formulario de contacto que se encuentra a continuación'); ?></p>
                    <div class="row location-footer">

                        <?php


                        if (is_active_sidebar('phone-footer')) { ?>
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2 pt-2 pr-0 pl-0 text-right">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons-phone.svg" alt="icon-phone">
                                    </div>
                                    <div class="col-9 text-left text-footer">
                                        <?php dynamic_sidebar('phone-footer'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php }

                        if (is_active_sidebar('correo-footer')) { ?>
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2 pt-2 pr-0 pl-0 text-right">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons-mail.svg" alt="icon-mail">
                                    </div>
                                    <div class="col-9 pt-3 text-left text-footer">
                                        <?php dynamic_sidebar('correo-footer'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php }

                        if (is_active_sidebar('linkedin-footer')) { ?>
                            <div class="col-12 ">
                                <div class="row">
                                    <div class="col-2 pt-2 pr-0 pl-0 text-right">
                                        <img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons-linkedin.svg" alt="icon-linkedin">
                                    </div>
                                    <div class="col-9 pt-3 text-left text-footer">
                                        <?php dynamic_sidebar('linkedin-footer'); ?>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-12 col-md-6">


                    <?php echo do_shortcode('[contact-form-7 id="1458" title="Contacto"]'); ?>
                </div>
                <div class="col-3">

                </div>
            </div>
        </section>
    </div>

    <!-- Information -->
    <div class="container-fluid" id="container-imageFooter">
        <section class="image-footer">
            <div class="row">
                <div class="col-3">

                </div>
                <div class="col-12 text-center">

                    <?php
                    $slug = basename(get_permalink());
                    switch ($slug) {
                        case 'division-envasados': ?>
                            <img src="/wp-content/uploads/2020/11/logo-fe-25-footer.svg" alt="img-footer" class="img-fluid">
                    <?php
                            break;

                        default:
                            if (is_active_sidebar('image-footer')) {
                                dynamic_sidebar('image-footer');
                            }
                    }
                    ?>

                </div>
                <div class="col-3">

                </div>
            </div>
        </section>
    </div>

    <div class="container">
        <section class="redes-footer">

            <div class="row location-footer">
                <?php
                if (is_active_sidebar('direccion-footer')) { ?>
                    <div class="col-12 ">
                        <div class="row">
                            <div class="col-2 pt-2 pr-0 pl-0 text-right">
                                <img src="<?php echo get_bloginfo('template_directory'); ?>/img/icons-location.svg" alt="icon-location">
                            </div>
                            <div class="col-9 text-left text-footer">
                                <?php dynamic_sidebar('direccion-footer'); ?>
                            </div>
                        </div>
                    </div>
                <?php
                } ?>

            </div>

        </section>
    </div>

    <div class="container-fluid" id="border-Footer">

    </div>

    </div>
    <!-- /Information -->
    <!-- copyright -->
    <div class="container container-copyright">
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <p class="footer-legal">
                    &copy;
                    <?php echo esc_html(date('Y')); ?>

                    <?php echo pll__('Todos los derechos reservados. Aviso legal'); ?>
                </p>
            </div>
            <div class="col-md-6 col-lg-6 create-logo">
                <p class="footer-legal"> <?php echo pll__('Potenciado por'); ?><a href="//www.possumus.tech" target="_blank"> <img src="<?php echo get_bloginfo('template_directory'); ?>/img/logo-p-k.svg" alt="p+k logo"></a></p>
            </div>
        </div>
    </div>
    <!-- /copyright -->
</footer>
<!-- /footer -->
<?php wp_footer(); ?>

</body>

</html>


<link href="<?php echo get_bloginfo('template_directory'); ?>/libs/fontawesome/css/all.min.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/libs/slick/slick.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/libs/slick/slick-theme.css" rel="stylesheet">
<link href="<?php echo get_bloginfo('template_directory'); ?>/libs/hover/hover-min.css" rel="stylesheet">

<link href="<?php echo get_bloginfo('template_directory'); ?>/develop.css" rel="stylesheet"> <!-- CSS DESARROLLO - UNICOR CON STYLE Y BORRAR -->