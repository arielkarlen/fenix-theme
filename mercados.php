<?php
/* 
Template Name: Mercados y clientes
Autor: P+K Lab
Email: webdevelopment@possumus.tech
*/
get_header();
?>

<section id="headerPageInterior" style="background-image: url(<?php the_field('imagen_background_titulo_'); ?>);
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    margin-top: -100px;">
    <div class="container">

        <div class="row section-productPresentation">
            <div class="col-12 col-sm-12 col-xl-12 row-textPresentationProduct">
                <h2 class="text-white title-presentationService pb-0 mb-0">
                    <?php the_field('titulo_de_pagina'); ?>
                </h2>
                <h4 class="text-white pb-4 subtitle-bannerTecnologia">
                    <?php the_field('subtitulo_de_la_pagina_'); ?>
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="spacing-2"></div>

<section class="client-section"> 
    <div class="container">
        <div class="row">
            <div class="col-12">
                <p class="text-client pb-4"><?php the_field('text-clientes'); ?></p>

                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Usa'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Brasil'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Chile'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Perú'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Panamá'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Costa rica'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Guatemala'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Puerto rico'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('México'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Canadá'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Francia'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Portugal'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Inglaterra'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Alemania'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Holanda'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Latvia'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Rusia'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Polonia'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Angola'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Israel'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Japón'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3 text-pais">
                    <?php echo pll__('Australia'); ?>
                </div>

                <p class="text-client pt-4 "><?php the_field('text-clientes-2'); ?></p>

            </div>
        </div>
    </div>
</section>

<section class="maps pt-4">
    <?php echo do_shortcode("[mapa]"); ?>
</section>
<?php get_footer(); ?>