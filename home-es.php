<?php
/* 
Template Name: Home - ES
Autor: P+K Lab
Email: webdevelopment@possumus.tech
*/
get_header();
?>

<section id="contentHeader">
    <div class="container-fluid">

        <div class="row section-productPresentation">
            <div class="col-12 col-xl-9 row-textPresentationProduct">


            </div>
            <div class="col-12 col-xl-3">
                <img src="/wp-content/uploads/LogoFe.png" alt="img-product" class="w-40 pb-4 logo-25">
            </div>
        </div>

    </div>
</section>

<section id="franja-bienvenidos">
    <div class="container">
        <div class="row">
            <div class="col-12 col-xl-6 col-md-4 text-center">
                <h1 class="title-general title-welcome"><?php echo pll__('Bienvenido'); ?></h1>


            </div>
            <div class="col-12 col-xl-2 col-md-4 border-right border-left col-media">
                <h2>Quality</h2>
                <h2>Food</h2>
                <h2>for the</h2>
                <h2>World</h2>

            </div>
            <div class="col-12 col-xl-3 col-md-4 col-media">
                <img src="/wp-content/uploads/mapa.png" alt="Mapa" alt="img-product" class="w-75 pb-4 logo-25">

            </div>

        </div>
    </div>

</section>
<section id="quienes">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <p class="text-center text-quienes"><?php the_field('quienes_somos'); ?></p>
        </div>
    </div>
</section>

<section id="hacemos">

    <div class="container-fluid">

        <div class="row">

            <div class="col-12 col-md-6 col-hacemos">
                <h1 class="title-general text-color title-weAre"><?php the_field('titulo_que_hacemos'); ?></h1>
                <p class="color-black text-hacemos"><?php the_field('descripcion_que_hacemos'); ?></p>
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow btn-desktop" href="<?php the_field('enlace_que_hacemos'); ?>" role="button"><?php echo pll__('Saber Más'); ?></a>

            </div>
            <div class="col-12 col-md-6">
                <div class="slider-queHacemos">

                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                            Puré de Damasco Concentrado 30/32ºBrix

                        </p>
                    </div>
                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                        Pure de Ciruela Deshidratada D`Agen 30/32ºBrix
                        </p>
                    </div>
                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                        Puré de pera concentrado 30/32ºBrix
                        </p>
                    </div>
                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                        Pure de Manzana concentrado 30/32ºBrix
                        </p>
                    </div>
                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                        Pure de Membrillo concentrado 12/18ºBrix
                        </p>
                    </div>
                    <div class="sombras-queHacemos m-3 text-center">
                        <img src="/wp-content/uploads/pure-min.png" class="img-slider pb-2 pt-2 " alt="img-pure">
                        <p class="text-sliderQueHacemos pb-2">
                            Puré de Zapallo 12/14ºBrix
                        </p>
                    </div>


                </div>
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow btn-movile" href="<?php the_field('enlace_que_hacemos'); ?>" role="button"><?php echo pll__('Saber Más'); ?></a>
            </div>

        </div>

    </div>
</section>


<section id="cultivos" class="text-center">

    <div class="container">
        <h1 class="title-general color-white mb-3"><?php the_field('titulo_seccion_cultivos'); ?></h1>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <p class="color-white text-cultivos"><?php the_field('descripcion_seccion_cultivos'); ?></p>
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow text-uppercase" href="<?php the_field('enlace_cultivos'); ?>" role="button"><?php echo pll__('Planta y Tecnología'); ?></a>
            </div>
        </div>

    </div>
</section>

<section id="estandares" class="text-center">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <h1 class="title-general text-color pb-3"><?php the_field('titulo_estandares'); ?></h1>
            <p class="text-estandar color-black"><?php the_field('descripcion_estandares'); ?></p>
        </div>
    </div>
</section>

<section id="fichas" class="text-center">
    <div class="container d-none d-sm-none d-md-block">
        <div class="row">
            <div class="col-12 col-md-3 card sep-card card-padding">
                <h3 class="titulo-fichasEstandar pb-2">Organicasd<br>USDA-NOP</h3>
                <img src="/wp-content/uploads/logo1-USDA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/USDA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-3 card sep-card card-padding">
                <h3 class="titulo-fichasEstandar pb-2">Organic<br>OIA</h3>
                <img src="/wp-content/uploads/logo2-OIA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/OIA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-3 card sep-card card-padding">
                <h3 class="titulo-fichasEstandar pb-2">HALAL<br>Certificate</h3>
                <img src="/wp-content/uploads/logo4-HALAL.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Halal-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
            <div class="col-12 col-md-3 card card-padding">
                <h3 class="titulo-fichasEstandar pb-2">KOSHER<br>Certificate</h3>
                <img src="/wp-content/uploads/logo5-KOSHER.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Kosher-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
            </div>
        </div>
        <div class="row text-center todoscert">

            <div class="col-md-12">
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow" href="<?php the_field('enlace_estandares'); ?>" role="button"><?php echo pll__('Ver todos los certificados'); ?></a>
            </div>

        </div>
    </div>
    <!--Slider-->
    <div class="container-fluid d-sm-block d-md-none">
        <div class="row">
        
            <div class="col-12">
                <div class="slider-flavors">
                    <div>
                        <div class="row">
                            <div class="col-12 col-md-3 card card-padding">
                            <h3 class="titulo-fichasEstandar pb-2">Organicasd<br>USDA-NOP<br><br></h3>
                <img src="/wp-content/uploads/logo1-USDA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/USDA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="row">
                            <div class="col-12 col-md-3 card card-padding">
                            <h3 class="titulo-fichasEstandar pb-2">Organic<br>OIA<br><br></h3>
                <img src="/wp-content/uploads/logo2-OIA.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/OIA_Organic.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="row">
                            <div class="col-12 col-md-3 card card-padding">
                            <h3 class="titulo-fichasEstandar pb-2">HALAL<br>Certificate<br><br></h3>
                <img src="/wp-content/uploads/logo4-HALAL.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Halal-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
                            </div>
                        </div>
                    </div>
                    <div>
                    <div class="row">
                            <div class="col-12 col-md-3 card card-padding">
                            <h3 class="titulo-fichasEstandar pb-2">KOSHER<br>Certificate<br><br></h3>
                <img src="/wp-content/uploads/logo5-KOSHER.png" class="img-fluid pb-3" alt="img-ficha">
                <a class="text-uppercase" href="/wp-content/uploads/Kosher-Certificate.pdf" target="_blank"><?php echo pll__('Ver ficha técnica'); ?></a>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>




<section id="tecnologia">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-md-6">
                <img src=<?php the_field('imagen'); ?> alt="" class="img-fluid">

            </div>
            <div class="col-12 col-md-4  col-md-offset-3">
                <h1 class="title-general text-color pb-3"><?php the_field('titulos_tecnologias'); ?></h1>
                <p class="text-estandar color-black"><?php the_field('descripcion_tecnologias'); ?></p>
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow text-uppercase" href="<?php the_field('enlace_tecnologias'); ?>" role="button"><?php echo pll__('Planta y Tecnología'); ?></a>
            </div>
        </div>
    </div>

</section>
<section id="mercados">
    <div class="container-fluid">

        <div class="row">
            <div class="col-12 col-md-12">
                <h1 class="title-general text-color pb-3"><?php the_field('titulo_mercados'); ?> </h1>
                <p><?php the_field('descripcion_mercados'); ?> </p>
            </div>
        </div>


    </div>

</section>


<?php echo do_shortcode("[mapa]"); ?>


<div class="section pt-3 pb-5" id="saber-mas">
    <div class="container">
        <div class="row text-center">
            <div class="col-12">
                <a class="btn btn-primary botones-enlaces hvr-grow-shadow text-uppercase" href="<?php the_field('enlace_mercados'); ?>" role="button"><?php echo pll__('Saber Más'); ?></a>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>