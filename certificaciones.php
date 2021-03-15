<?php
/* 
Template Name: Productos
Autor: P+K Lab
Email: webdevelopment@possumus.tech
*/
get_header();
?>

<section id="contentHeader">
    <div class="container-fluid">

        <div class="row section-certificacionesPresentation">
        <div class="container">
            <div class="col-12 col-xl-9 row-textPresentationCertificaciones">
            <h1 class="title-general text-color pb-3"><?php the_field('titulo_de_pagina'); ?></h1>
            <h3><?php the_field('subtitulo_de_pagina'); ?></h3>
            </div>
            </div>  
        </div>

    </div>
</section>

<section id="fichas" class="text-center fichas-estandares">
    <div class="container d-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-12 col-md-2 card card-padding sep-card">
                <h3 class="titulo-fichasEstandar pb-2">Organic<br>USDA-NOP</h3>
                <img src="/wp-content/uploads/logo1-USDA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/USDA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-2 card  card-padding sep-card">
                <h3 class="titulo-fichasEstandar pb-2">Organic<br>OIA<br><br></h3>
                <img src="/wp-content/uploads/logo2-OIA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/OIA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-2 card  card-padding sep-card">
                <h3 class="titulo-fichasEstandar pb-2">HALAL<br>Certificate<br><br></h3>
                <img src="/wp-content/uploads/logo4-HALAL.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Halal-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-2 card card-padding sep-card">
                <h3 class="titulo-fichasEstandar pb-2">KOSHER<br>Certificate<br><br></h3>
                <img src="/wp-content/uploads/logo5-KOSHER.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Kosher-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-2 card  card-padding sep-card">
                <h3 class="titulo-fichasEstandar pb-2">Certificado<br>IRAM<br><br></h3>
                <img src="/wp-content/uploads/logo-IRAM.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="#"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-2 card card-padding">
                <h3 class="titulo-fichasEstandar pb-2">Global<br>GAP<br><br></h3>
                <img src="/wp-content/uploads/logo8-GLOBALGAP.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Global-Gap.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
        </div>
     
    </div>
    
</section>

<section id="inocuidad" >
<div class="container">
    <div class="row">
        <div class="col-md-12 ">
            <h2 class="title-general text-color pb-3"><?php the_field('titulo_inocuidad'); ?></h2>
            
        </div>
    </div>
    <div class="row">
        <div class="col-12  col-md-6 ">
            <?php the_field('texto_inocuidad_1'); ?>
            
        </div>
        <div class="col-12  col-md-6 ">
            <?php the_field('texto_inocuidad_2'); ?>
            
        </div>
    </div>
</div>
</section>



<?php get_footer(); ?>