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

/* C:\wamp64\www\atv\install-master/themes/demo/partials/site/footer.htm */
class __TwigTemplate_12e02d94eef52cb6d50a281fc0fe544b97acef24ffe7ac97428f43c3dee0ea2f extends \Twig\Template
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
        echo "<!--Mian Footer-->
\t<!--Main Footer-->
\t<footer class=\"main-footer\">
\t<div class=\"auto-container\">
\t\t<div class=\"upper-box\">
\t\t\t<div class=\"logo-box\">
\t\t\t\t<a href=\"http://www.old2.commonsupport.com/alicante/\"><img src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/06/logo_footer.png\" alt=\"Theme\" title=\"Theme\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"widgets-section\">
\t\t\t<!--Big Column-->
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_about_us-2\" class=\"posts-widget footer-widget widget_bunch_about_us\">
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<div class=\"footer-widget about-widget\">
\t\t\t\t\t\t\t\t<h2>About Museum</h2>
\t\t\t\t\t\t\t\t<!--Widget Content-->
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<div class=\"bold-text\">
\t\t\t\t\t\t\t\t\t\tThe Museum Specialists!
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\tAorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud lorem psum dolor sit amet sed incididunt.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"https://tonatheme.com/m3/alicante/about-us-one/\" class=\"read-more\">Read More &ensp;<span class=\"icon flaticon-right-arrow\"></span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"text-2\" class=\"posts-widget footer-widget widget_text\">
\t\t\t\t\t\t<h2>Quick Links</h2>
\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">About Our Museum</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">On View Of Museum</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Upcoming Exhibitions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Latest News</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Latest Clicks of Museum</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_conatct_info-2\" class=\"posts-widget footer-widget widget_bunch_conatct_info\">
\t\t\t\t\t\t<!--Footer Column / Address Widget-->
\t\t\t\t\t\t<div class=\"footer-widget info-widget\">
\t\t\t\t\t\t\t<h2>Keep In Touch</h2>
\t\t\t\t\t\t\t<!--Widget Content-->
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<!--Contact Info-->
\t\t\t\t\t\t\t\t<ul class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-location-pin\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tCollins Street West,121 <br/>
\t\t\t\t\t\t\t\t\tKing Street, Melbourne.</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-technology-1\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t+(11)123 456 7890,</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-interface\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tinfo@museum.com</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_footer_gallery_post-2\" class=\"posts-widget footer-widget widget_bunch_footer_gallery_post\">
\t\t\t\t\t\t<div class=\"gallery-widget\">
\t\t\t\t\t\t\t<h2>Gallery Widget</h2>
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<div class=\"images-outer clearfix\">
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"column col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; All right Reserved Allicante || 2013 - ";
        // line 104
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</footer>
\t<!--End Main Footer-->";
    }

    public function getTemplateName()
    {
        return "C:\\wamp64\\www\\atv\\install-master/themes/demo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  140 => 104,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!--Mian Footer-->
\t<!--Main Footer-->
\t<footer class=\"main-footer\">
\t<div class=\"auto-container\">
\t\t<div class=\"upper-box\">
\t\t\t<div class=\"logo-box\">
\t\t\t\t<a href=\"http://www.old2.commonsupport.com/alicante/\"><img src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/06/logo_footer.png\" alt=\"Theme\" title=\"Theme\"></a>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"widgets-section\">
\t\t\t<!--Big Column-->
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_about_us-2\" class=\"posts-widget footer-widget widget_bunch_about_us\">
\t\t\t\t\t\t<div class=\"footer-column\">
\t\t\t\t\t\t\t<div class=\"footer-widget about-widget\">
\t\t\t\t\t\t\t\t<h2>About Museum</h2>
\t\t\t\t\t\t\t\t<!--Widget Content-->
\t\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t\t<div class=\"bold-text\">
\t\t\t\t\t\t\t\t\t\tThe Museum Specialists!
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"text\">
\t\t\t\t\t\t\t\t\t\tAorem ipsum dolor sit amet elit sed lum tempor incididunt ut labore el dolore alg minim veniam quis nostrud lorem psum dolor sit amet sed incididunt.
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<a href=\"https://tonatheme.com/m3/alicante/about-us-one/\" class=\"read-more\">Read More &ensp;<span class=\"icon flaticon-right-arrow\"></span></a>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"text-2\" class=\"posts-widget footer-widget widget_text\">
\t\t\t\t\t\t<h2>Quick Links</h2>
\t\t\t\t\t\t<div class=\"textwidget\">
\t\t\t\t\t\t\t<ul class=\"list\">
\t\t\t\t\t\t\t\t<li><a href=\"#\">About Our Museum</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">On View Of Museum</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Upcoming Exhibitions</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Our Latest News</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"#\">Latest Clicks of Museum</a></li>
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_conatct_info-2\" class=\"posts-widget footer-widget widget_bunch_conatct_info\">
\t\t\t\t\t\t<!--Footer Column / Address Widget-->
\t\t\t\t\t\t<div class=\"footer-widget info-widget\">
\t\t\t\t\t\t\t<h2>Keep In Touch</h2>
\t\t\t\t\t\t\t<!--Widget Content-->
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<!--Contact Info-->
\t\t\t\t\t\t\t\t<ul class=\"contact-info\">
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-location-pin\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tCollins Street West,121 <br/>
\t\t\t\t\t\t\t\t\tKing Street, Melbourne.</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-technology-1\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t+(11)123 456 7890,</li>
\t\t\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t\t\t<div class=\"icon\">
\t\t\t\t\t\t\t\t\t\t<span class=\"flaticon-interface\"></span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\tinfo@museum.com</li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-lg-3 col-md-3 col-sm-6 col-xs-12\">
\t\t\t\t\t<div id=\"bunch_footer_gallery_post-2\" class=\"posts-widget footer-widget widget_bunch_footer_gallery_post\">
\t\t\t\t\t\t<div class=\"gallery-widget\">
\t\t\t\t\t\t\t<h2>Gallery Widget</h2>
\t\t\t\t\t\t\t<div class=\"widget-content\">
\t\t\t\t\t\t\t\t<div class=\"images-outer clearfix\">
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/1-7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/8-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/7-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/6-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t\t<figure class=\"image-box\"><a href=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"lightbox-image\" title=\"Image Title Here\" data-fancybox-group=\"footer-gallery\"><img width=\"481\" height=\"419\" src=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg\" class=\"img-responsive wp-post-image\" alt=\"\" srcset=\"http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5.jpg 481w, http://www.old2.commonsupport.com/alicante/wp-content/uploads/2017/05/5-300x261.jpg 300w\" sizes=\"(max-width: 481px) 100vw, 481px\"/></a></figure>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"footer-bottom\">
\t\t<div class=\"auto-container\">
\t\t\t<div class=\"row clearfix\">
\t\t\t\t<div class=\"column col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"copyright\">
\t\t\t\t\t\t&copy; All right Reserved Allicante || 2013 - {{ \"now\"|date(\"Y\") }}
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"column col-md-6 col-sm-12 col-xs-12\">
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"\"><span class=\"fa fa-facebook\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-twitter\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-google-plus\"></span></a>
\t\t\t\t\t\t<a href=\"#\"><span class=\"fa fa-linkedin\"></span></a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t</footer>
\t<!--End Main Footer-->", "C:\\wamp64\\www\\atv\\install-master/themes/demo/partials/site/footer.htm", "");
    }
}
