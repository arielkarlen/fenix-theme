<?php
/* 
Template Name: PlantaYTecnología
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
                    <?php the_field('subtitulo_de_la_pagina'); ?>
                </h4>
            </div>
        </div>
    </div>
</section>

<div class="spacing-1"></div>

<section>
    <div class="container">
        <div class="col-12 col-md-11 offset-md-1">
            <p class="text-tecnologia">
                <?php the_field('texto_cuerpo_'); ?>
            </p>
        </div>
    </div>
</section>

<div class="spacing-5"></div>

<section class="section-textTecnologia">
    <div class="container-fluid pt-5">
        <div class="row">
            <div class="col-12 col-md-5 offset-md-1">
                <h2 class="title-tecnologiaPura pb-3"><?php the_field('titulo_de_tecnologia_pura'); ?></h2>
                <p class="text-tecnologiaPura"><?php the_field('texto_de_tecnologia_pura'); ?></p>
            </div>

            <div class="col-12 col-md-6 pr-0">
                <img src=<?php the_field('imagen_tecnologia_pura'); ?> alt="" class="img-fluid">

            </div>

        </div>

    </div>
</section>
<?php
get_footer();
?>