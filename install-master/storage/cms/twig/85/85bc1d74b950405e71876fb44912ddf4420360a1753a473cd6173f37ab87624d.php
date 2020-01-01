<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* C:\wamp64\www\atv\install-master/themes/demo/layouts/default.htm */
class __TwigTemplate_6a9443fe5336b99afa4b8c81a18a045790f37780582f6ffa27c61291e54f45f5 extends \Twig\Template
{
    private $source;

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en-US\">
<head>
<link rel=\"shortcut icon\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/themes/alicante/images/favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/themes/alicante/images/favicon.ico\" type=\"image/x-icon\">
<!-- Responsive -->
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
<title>Alicante &#8211; Just another WordPress site</title>
<link rel='dns-prefetch' href='//maps.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
 
<style type=\"text/css\">
\timg.wp-smiley,
\timg.emoji {
\t\tdisplay: inline !important;
\t\tborder: none !important;
\t\tbox-shadow: none !important;
\t\theight: 1em !important;
\t\twidth: 1em !important;
\t\tmargin: 0 .07em !important;
\t\tvertical-align: -0.1em !important;
\t\tbackground: none !important;
\t\tpadding: 0 !important;
\t}
</style>
<link rel='stylesheet' id='wp-block-library-css'  href='themes/demo/assets/css/style.min.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='themes/demo/assets/css/styles.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='themes/demo/assets/css/settings.css?ver=5.3.1.5' type='text/css' media='all' />
 
<link rel='stylesheet' id='woocommerce-layout-css'  href='themes/demo/assets/css/woocommerce-layout.css?ver=3.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='themes/demo/assets/css/woocommerce-smallscreen.css?ver=3.5.4' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='themes/demo/assets/css/woocommerce.css?ver=3.5.4' type='text/css' media='all' />
 
<link rel='stylesheet' id='bootstrap-css'  href='themes/demo/assets/css/bootstrap.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesom-css'  href='themes/demo/assets/css/font-awesome.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css'  href='themes/demo/assets/css/flaticon.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='themes/demo/assets/css/animate.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='hover-css'  href='themes/demo/assets/css/hover.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='themes/demo/assets/css/jquery-ui.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider-css'  href='themes/demo/assets/css/nouislider.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider.pips-css'  href='themes/demo/assets/css/nouislider.pips.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='revolution-slider-css'  href='themes/demo/assets/css/revolution-slider.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='themes/demo/assets/css/jquery.fancybox.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='owl-css'  href='themes/demo/assets/css/owl.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante-main-style-css'  href='themes/demo/assets/css/style.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_custom-style-css'  href='themes/demo/assets/css/custom.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_responsive-css'  href='themes/demo/assets/css/responsive.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_woocommerce-css'  href='themes/demo/assets/css/woocommerce.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante-theme-slug-fonts-css'  href='https://fonts.googleapis.com/css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CRoboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all' />


<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.themepunch.tools.min.js?ver=5.3.1.5'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.themepunch.revolution.min.js?ver=5.3.1.5'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
 

<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI&#038;ver=5.0.4'></script>
<link rel='https://api.w.org/' href='http://www.old2.commonsupport.com/alicante/wp-json/' />
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"http://www.old2.commonsupport.com/alicante/wp-includes/wlwmanifest.xml\" /> 

<link rel=\"canonical\" href=\"http://www.old2.commonsupport.com/alicante/\" />
<link rel='shortlink' href='http://www.old2.commonsupport.com/alicante/' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"http://www.old2.commonsupport.com/alicante/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.old2.commonsupport.com%2Falicante%2F\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"http://www.old2.commonsupport.com/alicante/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.old2.commonsupport.com%2Falicante%2F&#038;format=xml\" />

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>

<!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]-->

<style type=\"text/css\" data-type=\"vc_shortcodes-custom-css\">.vc_custom_1494218396670{padding-top: 40px !important;}</style><noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class=\"home page-template page-template-tpl-visual_composer page-template-tpl-visual_composer-php page page-id-20 woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive\">
<div class=\"page-wrapper\">
        <!-- Header -->
        <header id=\"layout-header\">
            ";
        // line 80
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 81
        echo "        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            ";
        // line 85
        echo $this->env->getExtension('Cms\Twig\Extension')->pageFunction();
        // line 86
        echo "        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            ";
        // line 90
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 91
        echo "        </footer>
</div>
        <!-- Scripts -->
        <script src=\"";
        // line 94
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/jquery.js");
        echo "\"></script>
        <script src=\"";
        // line 95
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/vendor/bootstrap.js");
        echo "\"></script>
        <script src=\"";
        // line 96
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/javascript/app.js");
        echo "\"></script>
        ";
        // line 97
        $_minify = System\Classes\CombineAssets::instance()->useMinify;
        if ($_minify) {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.combined-min.js"></script>'.PHP_EOL;
        }
        else {
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
            echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        }
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras'.($_minify ? '-min' : '').'.css">'.PHP_EOL;
        unset($_minify);
        // line 98
        echo "        ";
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
        // line 99
        echo "
<div class=\"scroll-to-top scroll-to-target\" data-target=\".main-header\"><span class=\"icon fa fa-long-arrow-up\"></span></div>
<script type=\"text/javascript\">
\tvar c = document.body.className;
\tc = c.replace(/woocommerce-no-js/, 'woocommerce-js');
\tdocument.body.className = c;
</script>
<script type=\"text/javascript\">
\tfunction revslider_showDoubleJqueryError(sliderID) {
\t\tvar errorMessage = \"Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.\";
\t\terrorMessage += \"<br> This includes make eliminates the revolution slider libraries, and make it not work.\";
\t\terrorMessage += \"<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.\";
\t\terrorMessage += \"<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.\";
\t\terrorMessage = \"<span style='font-size:16px;color:#BC0C06;'>\" + errorMessage + \"</span>\";
\t\tjQuery(sliderID).show().html(errorMessage);
\t}
</script>

<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.4'></script>

<script type='text/javascript' src='themes/demo/assets/javascript/bootstrap.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.countdown.js?ver=5.0.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/mixitup.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/owl.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/nouislider.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/validate.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/respond.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/wow.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.easing.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.fancybox.pack.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.fancybox-media.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/appear.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/googlemaps.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/gmaps-setup.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/gmaps.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/script.js?ver=5.0.4'></script>

<script type='text/javascript'>
\tif( ajaxurl === undefined ) var ajaxurl = \"http://www.old2.commonsupport.com/alicante/wp-admin/admin-ajax.php\";
</script>
<script type='text/javascript' src='themes/demo/assets/javascript/comment-reply.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/wp-embed.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/js_composer_front.min.js?ver=5.0.1'></script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\atv\\install-master/themes/demo/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 99,  170 => 98,  155 => 97,  151 => 96,  147 => 95,  143 => 94,  138 => 91,  134 => 90,  128 => 86,  126 => 85,  120 => 81,  116 => 80,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en-US\">
<head>
<link rel=\"shortcut icon\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/themes/alicante/images/favicon.ico\" type=\"image/x-icon\">
<link rel=\"icon\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/themes/alicante/images/favicon.ico\" type=\"image/x-icon\">
<!-- Responsive -->
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0\">
<title>Alicante &#8211; Just another WordPress site</title>
<link rel='dns-prefetch' href='//maps.google.com' />
<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
 
<style type=\"text/css\">
\timg.wp-smiley,
\timg.emoji {
\t\tdisplay: inline !important;
\t\tborder: none !important;
\t\tbox-shadow: none !important;
\t\theight: 1em !important;
\t\twidth: 1em !important;
\t\tmargin: 0 .07em !important;
\t\tvertical-align: -0.1em !important;
\t\tbackground: none !important;
\t\tpadding: 0 !important;
\t}
</style>
<link rel='stylesheet' id='wp-block-library-css'  href='themes/demo/assets/css/style.min.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='themes/demo/assets/css/styles.css?ver=5.1.1' type='text/css' media='all' />
<link rel='stylesheet' id='rs-plugin-settings-css'  href='themes/demo/assets/css/settings.css?ver=5.3.1.5' type='text/css' media='all' />
 
<link rel='stylesheet' id='woocommerce-layout-css'  href='themes/demo/assets/css/woocommerce-layout.css?ver=3.5.4' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='themes/demo/assets/css/woocommerce-smallscreen.css?ver=3.5.4' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='themes/demo/assets/css/woocommerce.css?ver=3.5.4' type='text/css' media='all' />
 
<link rel='stylesheet' id='bootstrap-css'  href='themes/demo/assets/css/bootstrap.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='fontawesom-css'  href='themes/demo/assets/css/font-awesome.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='flaticon-css'  href='themes/demo/assets/css/flaticon.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='animate-css'  href='themes/demo/assets/css/animate.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='hover-css'  href='themes/demo/assets/css/hover.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='jquery-ui-css'  href='themes/demo/assets/css/jquery-ui.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider-css'  href='themes/demo/assets/css/nouislider.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='nouislider.pips-css'  href='themes/demo/assets/css/nouislider.pips.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='revolution-slider-css'  href='themes/demo/assets/css/revolution-slider.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='themes/demo/assets/css/jquery.fancybox.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='owl-css'  href='themes/demo/assets/css/owl.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante-main-style-css'  href='themes/demo/assets/css/style.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_custom-style-css'  href='themes/demo/assets/css/custom.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_responsive-css'  href='themes/demo/assets/css/responsive.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante_woocommerce-css'  href='themes/demo/assets/css/woocommerce.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='alicante-theme-slug-fonts-css'  href='https://fonts.googleapis.com/css?family=Hind%3A300%2C400%2C500%2C600%2C700%7CRoboto%3A100%2C100i%2C300%2C300i%2C400%2C400i%2C500%2C500i%2C700%2C700i%2C900%2C900i&#038;subset=latin%2Clatin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='js_composer_front-css'  href='http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/css/js_composer.min.css?ver=5.0.1' type='text/css' media='all' />


<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.themepunch.tools.min.js?ver=5.3.1.5'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.themepunch.revolution.min.js?ver=5.3.1.5'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
 

<script type='text/javascript' src='http://maps.google.com/maps/api/js?key=AIzaSyCRvBPo3-t31YFk588DpMYS6EqKf-oGBSI&#038;ver=5.0.4'></script>
<link rel='https://api.w.org/' href='http://www.old2.commonsupport.com/alicante/wp-json/' />
<link rel=\"wlwmanifest\" type=\"application/wlwmanifest+xml\" href=\"http://www.old2.commonsupport.com/alicante/wp-includes/wlwmanifest.xml\" /> 

<link rel=\"canonical\" href=\"http://www.old2.commonsupport.com/alicante/\" />
<link rel='shortlink' href='http://www.old2.commonsupport.com/alicante/' />
<link rel=\"alternate\" type=\"application/json+oembed\" href=\"http://www.old2.commonsupport.com/alicante/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.old2.commonsupport.com%2Falicante%2F\" />
<link rel=\"alternate\" type=\"text/xml+oembed\" href=\"http://www.old2.commonsupport.com/alicante/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fwww.old2.commonsupport.com%2Falicante%2F&#038;format=xml\" />

<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>

<!--[if lte IE 9]><link rel=\"stylesheet\" type=\"text/css\" href=\"http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css\" media=\"screen\"><![endif]-->

<style type=\"text/css\" data-type=\"vc_shortcodes-custom-css\">.vc_custom_1494218396670{padding-top: 40px !important;}</style><noscript><style type=\"text/css\"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript></head>
<body class=\"home page-template page-template-tpl-visual_composer page-template-tpl-visual_composer-php page page-id-20 woocommerce-no-js wpb-js-composer js-comp-ver-5.0.1 vc_responsive\">
<div class=\"page-wrapper\">
        <!-- Header -->
        <header id=\"layout-header\">
            {% partial 'site/header' %}
        </header>

        <!-- Content -->
        <section id=\"layout-content\">
            {% page %}
        </section>

        <!-- Footer -->
        <footer id=\"layout-footer\">
            {% partial 'site/footer' %}
        </footer>
</div>
        <!-- Scripts -->
        <script src=\"{{ 'assets/vendor/jquery.js'|theme }}\"></script>
        <script src=\"{{ 'assets/vendor/bootstrap.js'|theme }}\"></script>
        <script src=\"{{ 'assets/javascript/app.js'|theme }}\"></script>
        {% framework extras %}
        {% scripts %}

<div class=\"scroll-to-top scroll-to-target\" data-target=\".main-header\"><span class=\"icon fa fa-long-arrow-up\"></span></div>
<script type=\"text/javascript\">
\tvar c = document.body.className;
\tc = c.replace(/woocommerce-no-js/, 'woocommerce-js');
\tdocument.body.className = c;
</script>
<script type=\"text/javascript\">
\tfunction revslider_showDoubleJqueryError(sliderID) {
\t\tvar errorMessage = \"Revolution Slider Error: You have some jquery.js library include that comes after the revolution files js include.\";
\t\terrorMessage += \"<br> This includes make eliminates the revolution slider libraries, and make it not work.\";
\t\terrorMessage += \"<br><br> To fix it you can:<br>&nbsp;&nbsp;&nbsp; 1. In the Slider Settings -> Troubleshooting set option:  <strong><b>Put JS Includes To Body</b></strong> option to true.\";
\t\terrorMessage += \"<br>&nbsp;&nbsp;&nbsp; 2. Find the double jquery.js include and remove it.\";
\t\terrorMessage = \"<span style='font-size:16px;color:#BC0C06;'>\" + errorMessage + \"</span>\";
\t\tjQuery(sliderID).show().html(errorMessage);
\t}
</script>

<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.1.1'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.5.4'></script>

<script type='text/javascript' src='themes/demo/assets/javascript/bootstrap.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.countdown.js?ver=5.0.4'></script>
<script type='text/javascript' src='http://www.old2.commonsupport.com/alicante/wp-content/plugins/js_composer/assets/lib/bower/isotope/dist/isotope.pkgd.min.js?ver=5.0.1'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/mixitup.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/owl.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/nouislider.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/validate.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/respond.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/wow.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.easing.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.fancybox.pack.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/jquery.fancybox-media.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/appear.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/googlemaps.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/gmaps-setup.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/gmaps.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/script.js?ver=5.0.4'></script>

<script type='text/javascript'>
\tif( ajaxurl === undefined ) var ajaxurl = \"http://www.old2.commonsupport.com/alicante/wp-admin/admin-ajax.php\";
</script>
<script type='text/javascript' src='themes/demo/assets/javascript/comment-reply.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/wp-embed.min.js?ver=5.0.4'></script>
<script type='text/javascript' src='themes/demo/assets/javascript/js_composer_front.min.js?ver=5.0.1'></script>
</body>
</html>", "C:\\wamp64\\www\\atv\\install-master/themes/demo/layouts/default.htm", "");
    }
}
