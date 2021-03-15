jQuery(document).ready(function() {
    // menú
    jQuery('#openNav').on('click', function() {
        jQuery('#menuMobile').css("width", "70%");
    });

    jQuery('#closeNav').on('click', function() {
        jQuery('#menuMobile').css("width", "0%");
    });

    // Btn menú escritorio

    jQuery('#openNavDesktop').on('click', function() {
        jQuery('#menuDesktop').css("width", "40%");
    });

    jQuery('#closedNavDesktop').on('click', function() {
        jQuery('#menuDesktop').css("width", "0%");
    });

    // menu fixed

    jQuery(window).scroll(function() {
        if (jQuery(window).scrollTop() > 0) {

            if (screen.width > 768) {

                // jQuery("#container-header").removeClass("container");
                // jQuery("#container-header").addClass("container-fluid");
                //jQuery('#header').removeClass("text-center");
                jQuery('#container-header').removeClass("line-header");
                jQuery('#container-header').addClass('background-white');

            } else {

                // jQuery("#container-header").removeClass("container");
                // jQuery("#container-header").addClass("container-fluid");
                jQuery("#container-header").removeClass("line-header");

            }

            jQuery('#openNavDesktop').removeClass('color-white');
            jQuery('#container-header').addClass('fixed-top');
            // jQuery('#navmenu').addClass('background-white');
            jQuery('#logo-header').attr('src','/wp-content/uploads/2020/11/logo-iso-cuadrado.svg');
            jQuery('#headerOpacity').removeClass('opacity');
            

            

        } else {
            jQuery("#container-header").removeClass("container-fluid");
            jQuery("#container-header").addClass("container");
            //jQuery('#header').addClass("text-center");
            jQuery('#container-header').addClass("line-header");
            jQuery('#container-header').removeClass('fixed-top');
            // jQuery('#navmenu').removeClass('background-white');
            jQuery('#container-header').removeClass('background-white');
            jQuery('#openNavDesktop').addClass('color-white');
            jQuery('#logo-header').attr('src','/wp-content/uploads/logo-ful-wht.svg');
            jQuery('#headerOpacity').addClass('opacity');
        }
    });

    /*Carruseles */
    jQuery('.slider-flavors').slick({
        infinite: true,
        dots: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 7000,
    });


    jQuery('.slider-queHacemos').slick({
        infinite: true,
        arrows: false,
        dots: true,
        slidesToShow: 3,
        autoplay: true,
        autoplaySpeed: 7000,
        responsive: [{
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }

        ]
    });
    //mapa 

    var canvas, stage, exportRoot, anim_container, dom_overlay_container, fnStartAnimation;

    function init() {
        canvas = document.getElementById("canvas");
        anim_container = document.getElementById("animation_container");
        dom_overlay_container = document.getElementById("dom_overlay_container");
        images = images || {};
        var loader = new createjs.LoadQueue(false);
        loader.addEventListener("fileload", handleFileLoad);
        loader.addEventListener("complete", handleComplete);
        loader.loadManifest(lib.properties.manifest);
    }

    function handleFileLoad(evt) {
        if (evt.item.type == "image") {
            images[evt.item.id] = evt.result;
        }
    }

    function handleComplete(evt) {
        //This function is always called, irrespective of the content. You can use the variable "stage" after it is created in token create_stage.
        var queue = evt.target;
        var ssMetadata = lib.ssMetadata;
        for (i = 0; i < ssMetadata.length; i++) {
            ss[ssMetadata[i].name] = new createjs.SpriteSheet({
                "images": [queue.getResult(ssMetadata[i].name)],
                "frames": ssMetadata[i].frames
            })
        }
        exportRoot = new lib.mapa();
        stage = new createjs.Stage(canvas);
        stage.addChild(exportRoot);
        stage.enableMouseOver();
        //Registers the "tick" event listener.
        fnStartAnimation = function() {
            createjs.Ticker.setFPS(lib.properties.fps);
            createjs.Ticker.addEventListener("tick", stage);
        }
        //Code to support hidpi screens and responsive scaling.
        function makeResponsive(isResp, respDim, isScale, scaleType) {
            var lastW, lastH, lastS = 1;
            window.addEventListener('resize', resizeCanvas);
            resizeCanvas();

            function resizeCanvas() {
                var w = lib.properties.width,
                    h = lib.properties.height;
                var iw = window.innerWidth,
                    ih = window.innerHeight;
                var pRatio = window.devicePixelRatio || 1,
                    xRatio = iw / w,
                    yRatio = ih / h,
                    sRatio = 1;
                if (isResp) {
                    if ((respDim == 'width' && lastW == iw) || (respDim == 'height' && lastH == ih)) {
                        sRatio = lastS;
                    } else if (!isScale) {
                        if (iw < w || ih < h)
                            sRatio = Math.min(xRatio, yRatio);
                    } else if (scaleType == 1) {
                        sRatio = Math.min(xRatio, yRatio);
                    } else if (scaleType == 2) {
                        sRatio = Math.max(xRatio, yRatio);
                    }
                }
                canvas.width = w * pRatio * sRatio;
                canvas.height = h * pRatio * sRatio;
                canvas.style.width = dom_overlay_container.style.width = anim_container.style.width = w * sRatio + 'px';
                canvas.style.height = anim_container.style.height = dom_overlay_container.style.height = h * sRatio + 'px';
                stage.scaleX = pRatio * sRatio;
                stage.scaleY = pRatio * sRatio;
                lastW = iw;
                lastH = ih;
                lastS = sRatio;
            }
        }
        makeResponsive(true, 'width', true, 1);
        fnStartAnimation();
    }
});