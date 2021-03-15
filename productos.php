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

        <div class="row section-productosPresentation">
        <div class="container">
            <div class="col-12 col-xl-9 row-textPresentationCertificaciones">
            <h1 class="title-general text-color pb-3"><?php the_field('titulo_la_pagina'); ?></h1>
            <h3><?php the_field('subtitulo_de_pagina'); ?></h3>
            </div>
            </div>  
        </div>

    </div>
</section>



<section id="textosProductos">

        <div class="container">
            <div class="col-12 col-md-12 ">
            <p><?php the_field('texto_productos'); ?></p>
            <img src=<?php the_field('imagen_descriptiva'); ?> alt="" class="img-fluid img-producto">
            </div>
            </div>  
      

</section>

<section id="fichasTecnicas">

        <div class="container">
            <div class="row">
            <div class="col-12 col-md-12 ">
            <h1 class="title-general text-color"><?php the_field('titulo_fichas_tecnicas'); ?></h1>
            <p><?php the_field('subtitulo_fichas_tecnicas'); ?></p>
            </div>
            </div>
    
            </div>  
      <div id="contentFichas" class="container">
          <div class="row">
              <div class="col-12 col-md-6">
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_1'); ?>" target="_blank"><span class="<?php the_field('color_producto_1'); ?> icono"><?php the_field('letra_1'); ?></span> <?php the_field('nombre_1'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_2'); ?>" target="_blank"><span class="<?php the_field('color_producto_2'); ?> icono"><?php the_field('letra_2'); ?></span> <?php the_field('nombre_2'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_3'); ?>" target="_blank"><span class="<?php the_field('color_producto_3'); ?> icono"><?php the_field('letra_3'); ?></span> <?php the_field('nombre_3'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_4'); ?>" target="_blank"><span class="<?php the_field('color_producto_4'); ?> icono"><?php the_field('letra_4'); ?></span> <?php the_field('nombre_4'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_5'); ?>" target="_blank"><span class="<?php the_field('color_producto_5'); ?> icono"><?php the_field('letra_5'); ?></span> <?php the_field('nombre_5'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_6'); ?>" target="_blank"><span class="<?php the_field('color_producto_6'); ?> icono"><?php the_field('letra_6'); ?></span> <?php the_field('nombre_6'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_7'); ?>" target="_blank"><span class="<?php the_field('color_producto_7'); ?> icono"><?php the_field('letra_7'); ?></span> <?php the_field('nombre_7'); ?></p></a>

                  </div>
                  
                  
              </div>

              <div class="col-12 col-md-6">
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_8'); ?>" target="_blank"><span class="<?php the_field('color_producto_8'); ?> icono"><?php the_field('letra_8'); ?></span> <?php the_field('nombre_8'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_9'); ?>" target="_blank"><span class="<?php the_field('color_producto_9'); ?> icono"><?php the_field('letra_9'); ?></span> <?php the_field('nombre_9'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_10'); ?>" target="_blank"><span class="<?php the_field('color_producto_10'); ?> icono"><?php the_field('letra_10'); ?></span> <?php the_field('nombre_10'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_11'); ?>" target="_blank"><span class="<?php the_field('color_producto_11'); ?> icono"><?php the_field('letra_11'); ?></span> <?php the_field('nombre_11'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_12'); ?>" target="_blank"><span class="<?php the_field('color_producto_12'); ?> icono"><?php the_field('letra_12'); ?></span> <?php the_field('nombre_12'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_13'); ?>" target="_blank"><span class="<?php the_field('color_producto_13'); ?> icono"><?php the_field('letra_13'); ?></span> <?php the_field('nombre_13'); ?></p></a>

                  </div>
                  <div class="producto">
                  <!--De acuerdo a la letra que se coloque, es la clase que se aplica-->    
                  <p><a href="<?php the_field('pdf_14'); ?>" target="_blank"><span class="<?php the_field('color_producto_14'); ?> icono"><?php the_field('letra_14'); ?></span> <?php the_field('nombre_14'); ?></p></a>

                  </div>
                  
                  
                  
              </div>
          </div>
      </div>
</section>

<section id="calendario">

        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 ">
                    <h1 class="title-general"><?php the_field('titulo_calendario'); ?></h1>
                    <?php the_field('descripcion_calendario'); ?>
                </div>   
                <div class="col-12 col-md-6 ">
                <img src=<?php the_field('imagen_calendario'); ?> alt="" class="img-fluid">
                </div>    
        </div>
            </div>  
      

</section>



<?php get_footer(); ?>