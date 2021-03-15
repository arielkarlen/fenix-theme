<?php

//css 

function wpdocs_override_stylesheets()
{
    wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/libs/bootstrap/bootstrap.min.css','4.5.3','all');
    wp_enqueue_style( 'cssCustom', get_template_directory_uri() . '/style.css','1.0','all');
}
add_action('wp_enqueue_scripts', 'wpdocs_override_stylesheets');

// Permite subir svg
function dmc_add_svg_mime_types($mimes) {
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes', 'dmc_add_svg_mime_types');

// Importo jquery al footer
wp_enqueue_script(
    'jquery',
    get_template_directory_uri() . '/libs/jquery/jquery.min.js',
    array(),
    false,
    true
);

// Importo jquery al footer
wp_enqueue_script(
    'preloader',
    get_template_directory_uri() . '/js/preloader.js',
    array(),
    false,
    true
);

//desactiva editor de bloques
add_filter('use_block_editor_for_post', '__return_false', 10);



// Importo js libreria slick
wp_enqueue_script(
    'slick-script',
    get_template_directory_uri() . '/libs/slick/slick.min.js',
    array(),
    false,
    true
);

// Importo js al footer
wp_enqueue_script(
    'customer-script',
    get_template_directory_uri() . '/js/customer.js',
    array(),
    false,
    true
);

// Importo js al footer
wp_enqueue_script(
    'createjs-script',
    get_template_directory_uri() . '/libs/createjs/createjs.min.js',
    array(),
    false,
    true
);
// Importo js al footer
wp_enqueue_script(
    'mapa-script',
    get_template_directory_uri() . '/mapa/mapa.js',
    array(),
    false,
    true
);

// Añado logo personalizado al header
add_theme_support('custom-logo');
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');

// Menú del sitio
function register_menu_site()
{
    register_nav_menu('menu-site', __('Menú del sitio'));
}
add_action('init', 'register_menu_site');

// Activo las traducciones
add_action('init', function () {
    pll_register_string('fenix', 'Page Not Found');
});


// Widget para footer - imagen
register_sidebar(array(
    'name' => 'Imagen de footer',
    'id' => 'image-footer',
    'description' => 'Imagen que aparece al pie de todas las páginas del sitio',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Widget para footer - Dirección
register_sidebar(array(
    'name' => 'Direccion que aparece en el footer',
    'id' => 'direccion-footer',
    'description' => 'Aquí se agrega la direccion que aparece en el footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Widget para footer - Teléfono
register_sidebar(array(
    'name' => 'Telefono que aparece en el footer',
    'id' => 'phone-footer',
    'description' => 'Aquí se agrega el número que aparece en el footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Widget para footer - Correo
register_sidebar(array(
    'name' => 'Correo que aparece en el footer',
    'id' => 'correo-footer',
    'description' => 'Aquí se agrega el correo que aparece en el footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

// Widget para footer - Red Social
register_sidebar(array(
    'name' => 'Linkedin que aparece en el footer',
    'id' => 'linkedin-footer',
    'description' => 'Aquí se agrega el correo que aparece en el footer',
    'before_widget' => '<aside id="%1$s" class="widget %2$s">',
    'after_widget' => '</aside>',
    'before_title' => '<h3 class="widget-title">',
    'after_title' => '</h3>',
));

//Strings para traducciones
pll_register_string('Bienvenido', 'Bienvenido', 'Home');
pll_register_string('saberMas', 'Saber Más', 'Home');
pll_register_string('plantaTec', 'Planta y Tecnología', 'Home');
pll_register_string('fichaTec', 'Ver ficha técnica', 'Home');
pll_register_string('certificados', 'Ver todos los certificados', 'Home');

pll_register_string('Formato Estándar', 'Formato estándar', 'División Envasados');
pll_register_string('Ver productos', 'Ver productos', 'División Envasados');
pll_register_string('Transparente', 'Transparente', 'División Envasados');
pll_register_string('Reciclables', 'Reciclables', 'División Envasados');
pll_register_string('Diseños personalizados', 'Diseños personalizados', 'División Envasados');
pll_register_string('Capacidad', 'Capacidad', 'División Envasados');
pll_register_string('Sabores', 'Sabores', 'División Envasados');
pll_register_string('Manzana', 'Manzana', 'División Envasados'); //sabor copaking
pll_register_string('Pera', 'Pera', 'División Envasados'); //sabor copaking
pll_register_string('Durazno', 'Durazno', 'División Envasados'); //sabor copaking
pll_register_string('Damasco', 'Damasco', 'División Envasados'); //sabor copaking
pll_register_string('Banana', 'Banana', 'División Envasados'); //sabor copaking
pll_register_string('Ciruela', 'Ciruela', 'División Envasados'); //sabor copaking
pll_register_string('Mango', 'Mango', 'División Envasados'); //sabor copaking
pll_register_string('Frutilla', 'Frutilla', 'División Envasados'); //sabor copaking
pll_register_string('Piña', 'Piña', 'División Envasados'); //sabor copaking
pll_register_string('Naranja', 'Naranja', 'División Envasados'); //sabor copaking
pll_register_string('Zapallo', 'Zapallo', 'División Envasados'); //sabor copaking
pll_register_string('Hasta 1000g/ml', 'Hasta 1000g/ml', 'División Envasados');
pll_register_string('Slug_1', 'Slug_1', 'División Envasados');
pll_register_string('Slug_2', 'Slug_2', 'División Envasados');
pll_register_string('Slug_3', 'Slug_3', 'División Envasados');
pll_register_string('Slug_4', 'Slug_4', 'División Envasados');
pll_register_string('Slug_5', 'Slug_5', 'División Envasados');
pll_register_string('Slug_6', 'Slug_6', 'División Envasados');
pll_register_string('Slug_7', 'Slug_7', 'División Envasados');

pll_register_string('hablemos', 'Hablemos', 'Header');

pll_register_string('consulta', 'Puede contactarnos en nuestras líneas telefónicas de lunes a viernes de 8 a 16 hs. Escribiendo a nuestro e mail o completando el formulario de contacto que se encuentra a continuación', 'footer');
pll_register_string('texto-consulta', '¿Tiene alguna consulta?', 'footer');
pll_register_string('disclaimer', 'Todos los derechos reservados. Aviso legal', 'footer');
pll_register_string('potenciado', 'Potenciado por', 'footer');

pll_register_string('Brasil', 'Brasil', 'Mercados y clientes');
pll_register_string('Usa', 'Usa', 'Mercados y clientes');
pll_register_string('Chile', 'Chile', 'Mercados y clientes');
pll_register_string('Panamá', 'Panamá', 'Mercados y clientes');
pll_register_string('Costa rica', 'Costa rica', 'Mercados y clientes');
pll_register_string('Guatemala', 'Guatemala', 'Mercados y clientes');
pll_register_string('Puerto rico', 'Puerto rico', 'Mercados y clientes');
pll_register_string('México', 'México', 'Mercados y clientes');
pll_register_string('Canadá', 'Canadá', 'Mercados y clientes');
pll_register_string('Francia', 'Francia', 'Mercados y clientes');
pll_register_string('Portugal', 'Portugal', 'Mercados y clientes');
pll_register_string('Inglaterra', 'Inglaterra', 'Mercados y clientes');
pll_register_string('Alemania', 'Alemania', 'Mercados y clientes');
pll_register_string('Holanda', 'Holanda', 'Mercados y clientes');
pll_register_string('Latvia', 'Latvia', 'Mercados y clientes');
pll_register_string('Rusia', 'Rusia', 'Mercados y clientes');
pll_register_string('Polonia', 'Polonia', 'Mercados y clientes');
pll_register_string('Angola', 'Angola', 'Mercados y clientes');
pll_register_string('Israel', 'Israel', 'Mercados y clientes');
pll_register_string('Japón', 'Japón', 'Mercados y clientes');
pll_register_string('Australia', 'Australia', 'Mercados y clientes');
pll_register_string('Perú', 'Perú', 'Mercados y clientes');

// mapa shortcode
function wpb_demo_shortcode() { 
    include get_template_directory() . '/partials/mapa.php';
} 
// register shortcode
add_shortcode('mapa', 'wpb_demo_shortcode'); 
