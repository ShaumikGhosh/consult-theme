<?php


// adding support for css and js

function consult_css_js(){

    wp_enqueue_style('google-font', consult_fonts_support(), array(), null);

    wp_enqueue_style('flaticon', get_template_directory_uri().'/assets/css/flaticon.css', array(), null, 'all');
    wp_enqueue_style('font-awsome', get_template_directory_uri().'/assets/css/font-awesome.min.css', array(), null, 'all');
    wp_enqueue_style('animate', get_template_directory_uri().'/assets/css/animate.css', array(), null, 'all');
    wp_enqueue_style('text-animation', get_template_directory_uri().'/assets/css/text-animation.css', array(), null, 'all');
    wp_enqueue_style('jquery-fencybox', get_template_directory_uri().'/assets/css/jquery.fancybox.min.css', array(), null, 'all');
    wp_enqueue_style('magnefic-popup', get_template_directory_uri().'/assets/css/magnific-popup.min.css', array(), null, 'all');
    wp_enqueue_style('owl-carousel', get_template_directory_uri().'/assets/css/owl.carousel.min.css', array(), null, 'all');
    wp_enqueue_style('layers', get_template_directory_uri().'/rs-plugin/css/layers.css', array(), null, 'all');
    wp_enqueue_style('settings', get_template_directory_uri().'/rs-plugin/css/settings.css', array(), null, 'all');
    wp_enqueue_style('bootstrap', get_template_directory_uri().'/assets/css/bootstrap.min.css', array(), null, 'all');
    wp_enqueue_style('plugin', get_template_directory_uri().'/assets/css/plugins.css', array(), null, 'all');
    wp_enqueue_style('icon', get_template_directory_uri().'/assets/css/icons.css', array(), null, 'all');
    wp_enqueue_style('menu', get_template_directory_uri().'/assets/css/menu-css.css', array(), null, 'all');
    wp_enqueue_style('main', get_template_directory_uri().'/assets/css/main.css', array(), null, 'all');
    wp_enqueue_style('responsive', get_template_directory_uri().'/assets/css/responsive.css', array(), null, 'all');


    wp_enqueue_script('my-jquery', get_template_directory_uri().'/assets/js/jquery.min.js', array(), null, false);
    wp_enqueue_script('modernizr', get_template_directory_uri().'/assets/js/modernizr.js', array(), null, true);
    wp_enqueue_script('waypoints', get_template_directory_uri().'/assets/js/waypoints.min.js', array(), null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri().'/assets/js/bootstrap.min.js', array(), null, true);
    wp_enqueue_script('plugins', get_template_directory_uri().'/assets/js/plugins.js', array(), null, true);
    wp_enqueue_script('jquery-scrollUp', get_template_directory_uri().'/assets/js/jquery.scrollUp.min.js', array(), null, true);
    wp_enqueue_script('gmaps', get_template_directory_uri().'/assets/js/gmaps.js', array(), null, true);
    wp_enqueue_script('jquery-fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.min.js', array(), null, true);
    wp_enqueue_script('jquery-magnific-popup', get_template_directory_uri().'/assets/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('isotope', get_template_directory_uri().'/assets/js/isotope.pkgd.min.js', array(), null, true);
    wp_enqueue_script('counterup', get_template_directory_uri().'/assets/js/counterup.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel', get_template_directory_uri().'/assets/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('wow', get_template_directory_uri().'/assets/js/wow.min.js', array(), null, true);
    wp_enqueue_script('jquery-lettering', get_template_directory_uri().'/assets/js/jquery.lettering.js', array(), null, true);
    wp_enqueue_script('jquery-textillate', get_template_directory_uri().'/assets/js/jquery.textillate.js', array(), null, true);
    wp_enqueue_script('mixitup', get_template_directory_uri().'/assets/js/mixitup.js', array(), null, true);
    wp_enqueue_script('chart', get_template_directory_uri().'/assets/js/chart.js', array(), null, true);
    wp_enqueue_script('chart-active', get_template_directory_uri().'/assets/js/chart-active.js', array(), null, true);
    wp_enqueue_script('jquery-themepunch-tools', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.tools.min.js', array(), null, true);
    wp_enqueue_script('jquery-themepunch-revolution-min', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-actions-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.actions.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-kenburn-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.kenburn.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-layeranimation-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-migration-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.migration.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-navigation-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.navigation.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-parallax-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.parallax.min.js', array(), null, true);
    wp_enqueue_script('revolution-extension-slideanims.min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.slideanims.min.js', array(), null, true);
    wp_enqueue_script('jquery-themepunch-revolution-min', get_template_directory_uri().'/rs-plugin/js/jquery.themepunch.revolution.min.js', array(), null, true);
    wp_enqueue_script('extensions-revolution-extension-video-min', get_template_directory_uri().'/rs-plugin/js/extensions/revolution.extension.video.min.js', array(), null, true);
    wp_enqueue_script('custom', get_template_directory_uri().'/assets/js/custom.js', array(), null, true);

}

add_action('wp_enqueue_scripts', 'consult_css_js');



// adding google fonts to frontend site *****

function consult_fonts_support(){
    $fonts_url = '';

    $OpenSans = _x('on', 'OpenSans: on or off', 'consult_theme');
    $Montserrat = _x('on', 'Montserrat: on or off', 'consult_theme');

    if($OpenSans != 'off' || $Montserrat != 'off'){

        $font_families = array();

        if ($OpenSans !== 'off'){
            $font_families[] = 'Open Sans:300i,400,400i,600,700,800';
        }

        if ($Montserrat !== 'off'){
            $font_families[] = 'Montserrat:200,300,400,500,600,700,800,900';
        }

        $query_args = array(
            'family' => urlencode(implode('|', $font_families)),
            'subset' => urlencode('latin,latin-ext,cyrillic,vietnames,greek,greek-ext'),
        );
        $fonts_url = add_query_arg($query_args, 'https://fonts.googleapis.com/css');
    }

    return esc_url_raw($fonts_url);
}

