<?php
/* 
Template Name: DivisionEnvasados
Autor: P+K Lab
Email: webdevelopment@possumus.tech
*/
get_header();
?>

<section id="contentHeader">
    <div class="container">

        <div class="row section-productPresentation">
            <div class="col-12 col-sm-7 col-xl-6 row-textPresentationProduct">
                <h2 class="text-uppercase text-white title-presentationService">
                    <strong> <?php the_field('titulo_pagina'); ?></strong>
                </h2>
                <h4 class="color-white subtitle-presentacionService">
                    <?php the_field('subtitulo_de_pagina'); ?>
                </h4>
                <a href="<?php the_field('link_boton_ver_productos'); ?>" class="btn-viewProduct text-uppercase btn btn-primary background-blue hvr-grow-shadow"> <?php echo pll__('Ver productos'); ?></a>
            </div>
            <div class="col-12 col-sm-5 col-xl-6">
                <img src="/wp-content/uploads/2020/11/marca-header-02.svg" alt="img-product" class="w-100 pb-4">
            </div>
        </div>

    </div>
</section>

<section id="weAre">
    <div class="container">

        <div class="row">
            <div class="col-xl-6 col-md-6 text-center pt-5 pb-5">
                <img src="/wp-content/uploads/2020/11/image-1-copy-3@2x.png" class="img-weAre" alt="we-are">
            </div>
            <div class="col-xl-6 col-md-6">
                <h4 class="ask-weAre text-color"><?php the_field('titulo_seccion_¿quienes_somos'); ?></h4>
                <h2 class="nameCompany-weAre text-color"><?php the_field('nombre_de_la_empresa'); ?></h2>
                <p class="historyCompany-weAre color-blanck">
                    <?php the_field('historia_de_la_empresa'); ?>
                </p>
            </div>
        </div>

    </div>
</section>

<section>
    <div class="container-fluid pr-0 pl-0">

        <div class="row">
            <div class="col-12 parallax"></div>
        </div>

        <div class="row color-textBackground">
            <div class="col-12 col-xl-8 offset-xl-2">
                <p class="text-tecnologyCompany color-black"> <?php the_field('label_imagen'); ?></p>
            </div>
        </div>

    </div>
</section>

<section id="ourFactory">
    <div class="container">

        <div class="row">
            <div class="col-xl-3 d-none d-sm-block"></div>
            <div class="col-12 col-md-8 col-xl-6 col-textFactory">
                <h4 class="text-uppercase text-color subtitle-ourFactory">
                    <?php the_field('label_fabrica_'); ?>
                </h4>
                <h1 class="text-color title-ourFactory pb-5">
                    <?php the_field('titulo_seccion_fabrica'); ?>
                </h1>
                <p class="text-black text-ourFactory">
                    <?php the_field('texto_de_fabrica'); ?>
                </p>
            </div>
            <div class="col-xl-3 d-none d-sm-block"></div>
        </div>

    </div>

    <div class="container-fluid">

        <div class="row">
            <div class="col-12 imageParalax-ourFactory"></div>
        </div>

        <div class="row">
            <div class="col-12 col-md-6 col-lg-6 background-green col-textWeDo">
                <div class="row">
                    <div class="col-12 col-lg-9 offset-lg-2 text-white">
                        <h4 class="subtitle-weDo pb-2">
                            <?php the_field('label_¿como_lo_hacemos'); ?>
                        </h4>
                        <h2 class="title-weDo pb-4">
                            <?php the_field('titulo_de_capacidad_de_llenado_'); ?>
                        </h2>
                        <p class="text-weDo borderText-weDo">
                            <?php the_field('feature_1'); ?>
                        </p>
                        <p class="text-weDo borderText-weDo">
                            <?php the_field('feature_2'); ?>
                        </p>
                        <p class="text-weDo padding-weDo">
                            <?php the_field('feature_3'); ?>
                        </p>
                        <img src="<?php the_field('imagen_15_millones'); ?>" class="image-productNumber w-100" alt="image-product">
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-6  col-textWeDo">

                <div class="content-blanckWeDo">
                    <div class="row border-grayTop">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_1'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.01</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_1'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-grayTop">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_2'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.02</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_2'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-grayTop">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_3'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.03</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_3'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-grayTop">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_4'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.04</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_4'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-grayTop">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_5'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.05</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_5'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row border-grayTop border-grayBottom">
                        <div class="col-12 col-xl-10 offset-xl-1">
                            <div class="row sectionText-weDo">
                                <div class="col-4 text-center">
                                    <img src="<?php the_field('imagen_paso_6'); ?>" alt="automated-equipment" class="imgProcedingWeDo">
                                </div>
                                <div class="col-8 col-xl-6 text-left">
                                    <p class="number-weDo">.06</p>
                                    <h3 class="title-numberWeDo color-weDo text-uppercase">
                                        <?php the_field('titulo_-_paso_6'); ?>
                                    </h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>

    </div>
</section>

<section id="different-packaging">
    <div class="container">

        <div class="row">
            <div class="col-xl-8 offset-xl-2 text-packing mb-5 mb-xl-0">
                <h4 class="text-uppercase text-color subtitle-ourFactory">
                    <?php the_field('label_tipo_de_empaque'); ?>
                </h4>
                <h1 class="text-color title-ourFactory">
                    <?php the_field('titulo_tipo_de_empaque'); ?>
                </h1>
                <p class="text-black text-ourFactory">
                    <?php the_field('texto_tipo_de_empaque'); ?>
                </p>
            </div>
        </div>

        <div class="row row-formatPacking">
            <div class="col-md-4 col-lg-4 offset-lg-1 col-xl-4 offset-xl-1">
                <div class="standar-packing background-blue mb-2">
                    <p class="textFormatPackingStandar color-white text-uppercase text-center">
                        <?php echo pll__('Formato estándar'); ?>
                    </p>
                </div>

                <div class="transparent-packing background-grey mb-2">
                    <p class="textFormatPackingTransparent color-white text-uppercase text-center">
                    <?php echo pll__('Transparente'); ?>
                    </p>
                </div>

                <div class="recyclable-packing background-green mb-2">
                    <p class="textFormatPackingrecyclable color-white text-uppercase text-center">
                        <?php echo pll__('Reciclables'); ?>
                    </p>
                </div>

            </div>
            <div class="col-md-8 col-lg-7 col-xl-7">
                <div class="back-texto"><?php echo pll__('Diseños personalizados'); ?></div>
                <div class="fondo-circulos fondo-gris">
                    <div class="circle-rojo small-circle"></div>
                    <div class="circle-naranja small-circle"></div>
                    <div class="circle-verde small-circle"></div>
                    <div class="circle-magenta small-circle"></div>
                    <div class="circle-marron small-circle"></div>
                    <div class="circle-amarillo small-circle"></div>
                </div>
                <div class="back-texto mt-3 capacidad-text"><?php echo pll__('Capacidad'); ?></div>
                <div class="fondo-circulos mt-3"><?php echo pll__('Hasta 1000g/ml'); ?></div>
            </div>
        </div>
    </div>

    <div class="container packingImageRow mt-5 mt-xl-0">
        <div class="m-auto">
            <img src="<?php echo the_field('imagen_distintos_empaques'); ?>" alt="packing-class" class="w-100">
        </div>
    </div>
    </div>
</section>

<section id="flavors-product">

    <div class="container d-none d-sm-none d-md-block">
        <div class="row row-flavors">
            <div class="col-md-12 col-lg-12">
                <h2 class="title-flavors text-center text-uppercase"><?php echo pll__('Sabores'); ?></h2>
            </div>

            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-manzana.jpg" alt="flavors-1" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Manzana'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-pera.jpg" alt="flavors-2" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Pera'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-durazno.jpg" alt="flavors-3" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Durazno'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-damasco.jpg" alt="flavors-4" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Damasco'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-banana.jpg" alt="flavors-5" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Banana'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-ciruela.jpg" alt="flavors-6" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Ciruela'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 img-flavors text-center">
                <img src="/wp-content/uploads/thumb-sabores-mango.jpg" alt="flavors-7" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Mango'); ?>
                </h5>
            </div>

            <div class="col-md-3 col-lg-2 text-center">
                <img src="/wp-content/uploads/thumb-sabores-frutilla.jpg" alt="flavors-8" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Frutilla'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <img src="/wp-content/uploads/thumb-sabores-pinna.jpg" alt="flavors-9" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Piña'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <img src="/wp-content/uploads/thumb-sabores-naranja.jpg" alt="flavors-10" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Naranja'); ?>
                </h5>
            </div>
            <div class="col-md-3 col-lg-2 text-center">
                <img src="/wp-content/uploads/thumb-sabores-zapallo.jpg" alt="flavors-11" class="img-radiusFlavors">
                <h5 class="text-uppercase name-flavors pt-3">
                    <?php echo pll__('Zapallo'); ?>
                </h5>
            </div>

        </div>
    </div>

    <div class="container-fluid d-sm-block d-md-none">
        <div class="row">
            <div class="col-12">
                <h2 class="title-flavors text-center"><?php echo pll__('Sabores'); ?></h2>
            </div>
            <div class="col-12">
                <div class="slider-flavors">
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-manzana.jpg" alt="flavors-1" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Manzana'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-pera.jpg" alt="flavors-2" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Pera'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-durazno.jpg" alt="flavors-3" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Durazno'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-damasco.jpg" alt="flavors-4" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Damasco'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-banana.jpg" alt="flavors-5" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Banana'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-ciruela.jpg" alt="flavors-6" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Ciruela'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-mango.jpg" alt="flavors-7" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Mango'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-frutilla.jpg" alt="flavors-8" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Frutilla'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-pinna.jpg" alt="flavors-8" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Piña'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-naranja.jpg" alt="flavors-9" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Naranja'); ?>
                        </h5>
                    </div>
                    <div class="center text-center">
                        <img src="/wp-content/uploads/thumb-sabores-zapallo.jpg" alt="flavors-9" class="img-slider img-radiusFlavors">
                        <h5 class="text-uppercase name-flavors pt-3">
                            <?php echo pll__('Zapallo'); ?>
                        </h5>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="formulations">
    <div class="container">
        <div class="row row-formulations">

            <div class="col-12 col-md-6 col-xl-6 col-textFormulations">
                <h4 class="subtitle-formulaciones text-uppercase">
                    <?php the_field('label_formulaciones'); ?>
                </h4>
                <h2 class="title-formulaciones">
                    <?php the_field('titulos_formulaciones'); ?>
                </h2>
                <p class="text-Formulations">
                    <?php the_field('texto_formulaciones'); ?>
                </p>
            </div>
            <div class="col-12 col-md-6 col-xl-6">
                <img src="<?php echo the_field('imagenes_formulaciones'); ?>" alt="product-group" class="text-center w-100">
            </div>
        </div>
        <div class="row">
            <div class="col-12 ">
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_1'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_2'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_3'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_4'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_5'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_6'); ?>
                </div>
                <div class="border-tag d-inline-block text-uppercase mr-2 mb-3">
                    <?php echo pll__('Slug_7'); ?>
                </div>
            </div>

        </div>
    </div>
</section>

<section id="certificate">

    <div class="container d-none d-sm-none d-md-block">
        <div class="row text-center row-certificate">

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-usda.svg" alt="certification-usda">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-iram.svg" alt="certification-iram">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-oia.svg" alt="certification-oia">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-fda.svg" alt="certification-fda" class="pt-5">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-celiaquia.svg" alt="certification">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificacion-cosher.png" alt="certification-coche">
            </div>

            <div class="col-md-6 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificaciones-global.svg" alt="certification-global" class="pt-5">
            </div>

            <div class="col-md-6 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificacion-fssc-22000.png" alt="certification-fssc" class="pt-5">
            </div>

            <div class="col-md-4 col-xl-4 pb-5">
                <img src="/wp-content/uploads/certificacion-plan-based.png" alt="certification-based">
            </div>

        </div>
    </div>

    <div class="container d-sm-block d-md-none">
        <div class="row">
            <div class="col-12">
                <div class="slider-flavors text-center">
                    <div>
                        <img src="/wp-content/uploads/certificaciones-usda.svg" alt="certification-usda" class="img-slider pt-4">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificacion-fssc-22000.png" alt="certification-fssc" class="w-100 padding-cer1 img-slider">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificaciones-iram.svg" alt="certification-iram" class="img-slider pt-4">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificaciones-fda.svg" alt="certification-fda" class="img-slider padding-car2">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificaciones-oia.svg" alt="certification-oia" class="img-slider pt-4">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificaciones-celiaquia.svg" alt="certification" class="img-slider pt-4">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificacion-cosher.png" alt="certification-coche" class="img-slider pt-4">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificaciones-global.svg" alt="certification-global" class="img-slider padding-car2">
                    </div>

                    <div>
                        <img src="/wp-content/uploads/certificacion-plan-based.png" alt="certification-based" class="img-slider pt-4">
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section id="experience">
    <div class="container">
        <div class="row row-experience">
            <div class="col-md-4 offset-md-1 col-xl-4 text-center">
                <img src="/wp-content/uploads/experiencia.png" alt="experience" class="w-100"> 
            </div>
            <div class="col-md-7 col-xl-6 pt-3">
                <h4 class="subtitle-experience text-uppercase">
                    <?php the_field('label_experiencia_'); ?>
                </h4>
                <h2 class="title-experience">
                    <?php the_field('titulo_experiencia'); ?>
                </h2>
            </div>
        </div>
    </div>
</section>

<section id="client" class="color-textBackground">
    <div class="container container-client ">
        <div class="row">
            <div class="col-12 text-center">
                <h2 class="title-client">
                    <?php the_field('titulos_clientes'); ?>
                </h2>
            </div>
        </div>

        <div class="d-none d-sm-none d-md-block">
            <div class="row">
                <div class="col-md-4 col-xl-4 text-center pb-4">
                    <img src="<?php the_field('imagen_zummy'); ?>" alt="zummy" class="pb-2">
                    <p class="text-client color-black">
                        <?php the_field('texto_cliente_zummy'); ?>
                    </p>
                </div>
                <div class="col-md-4 col-xl-4 text-center pb-4">
                    <img src="<?php the_field('imagen_nutribaby'); ?>" alt="nutriBaby" class="pb-2">
                    <p class="text-client color-black">
                        <?php the_field('texto_cliente_nutribaby'); ?>
                    </p>
                </div>
                <div class="col-md-4 col-xl-4 text-center pb-4">
                    <img src="<?php the_field('imagen_cocacola'); ?>" alt="cocaCola" class="pb-4">
                    <p class="text-client color-black pt-1">
                        <?php the_field('texto_cliente_coca_cola'); ?>
                    </p>
                </div>
                <div class="col-md-6 col-xl-6 text-center pb-4">
                    <img src="<?php the_field('imagen_heinz'); ?>" alt="heinz" class="pb-2">
                    <p class="text-client color-black">
                        <?php the_field('texto_cliente_heinz'); ?>
                    </p>
                </div>
                <div class="col-md-6 col-xl-6 text-center pb-4">
                    <img src="<?php the_field('imagen_netle'); ?>" alt="nestle" class="pb-2">
                    <p class="text-client color-black">
                        <?php the_field('texto_cliente_nestle'); ?>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="d-sm-block d-md-none">
        <div class="row">
            <div class="col-12 text-center">
                <div class="slider-flavors">
                    <div>
                        <img src="<?php the_field('imagen_zummy'); ?>" alt="zummy" class="img-slider pb-2">
                        <p class="text-client color-black pl-2 pr-2">
                            <?php the_field('texto_cliente_zummy'); ?>
                        </p>
                    </div>
                    <div>
                        <img src="<?php the_field('imagen_nutribaby'); ?>" alt="nutriBaby" class="pb-2 img-slider">
                        <p class="text-client color-black pl-2 pr-2">
                            <?php the_field('texto_cliente_nutribaby'); ?>
                        </p>
                    </div>
                    <div>
                        <img src="<?php the_field('imagen_cocacola'); ?>" alt="cocaCola" class="pb-4 img-slider">
                        <p class="text-client color-black pl-2 pr-2">
                            <?php the_field('texto_cliente_coca_cola'); ?>
                        </p>
                    </div>
                    <div>
                        <img src="<?php the_field('imagen_heinz'); ?>" alt="heinz" class="pb-2 img-slider">
                        <p class="text-client color-black pl-2 pr-2">
                            <?php the_field('texto_cliente_heinz'); ?>
                        </p>
                    </div>
                    <div>
                        <img src="<?php the_field('imagen_netle'); ?>" alt="nestle" class="pb-2 img-slider">
                        <p class="text-client color-black pl-2 pr-2">
                            <?php the_field('texto_cliente_nestle'); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="origin">
    <div class="container container-origin">
        <div class="row">
            <div class="col-md-8 offset-md-2 col-lg-4 offset-lg-4 content-origin">
                <h2 class="title-origin pb-5">
                    <?php the_field('titulo_origen_'); ?>
                </h2>
                <img src="/wp-content/uploads/image-origin.png" alt="origen" class="pb-5 img-slider">
                <p class="text-origin">
                    <?php the_field('texto_origen'); ?>
                </p>
            </div>
        </div>
    </div>
</section>

<section id="origin-natural">
    <div class="container">
        <div class="row">
            <div class="offset-lg-2 col-lg-8 text-center">
                <div class="text-originNatural">
                    <h4 class="subtitle-experience subtitle-origenNatural text-uppercase text-white">
                        <?php the_field('label_natural'); ?>
                    </h4>
                    <h2 class="title-originNatural text-white pb-3">
                        <?php the_field('titulo_natural_'); ?>
                    </h2>
                    <p class="text-white">
                        <?php the_field('texto_natural_'); ?>
                    </p>
                </div>
                <div class="image-originNatural">
                    <div class="row">
                        <div class="col-md-4 offset-md-2 col-6">
                            <img src="/wp-content/uploads/logo-sedex.svg" class="img-origin" alt="sedex">
                        </div>
                        <div class="col-md-4 col-6">
                            <img src="/wp-content/uploads/certificaciones-global-1.svg" class="img-origin img-global" alt="global">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section id="companyLogo">
    <div class="container">
        <div class="row">

            <div class="offset-1 offset-lg-3 offset-md-2 col-10 col-lg-6 content-companyLogo">
                <img src="<?php the_field('logo'); ?>" alt="Fe Group" class="pb-5 img-feGroup">
                <div class="line">
                    <h4 class="text-blue subtitle-slogan pb-3 text-uppercase">
                        <?php the_field('logo_frase'); ?>
                    </h4>
                </div>
                <h4 class="text-green pt-3 subtitle-ubicationCompany text-uppercase">
                    <?php the_field('logo_ubicacion_'); ?>
                </h4>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>