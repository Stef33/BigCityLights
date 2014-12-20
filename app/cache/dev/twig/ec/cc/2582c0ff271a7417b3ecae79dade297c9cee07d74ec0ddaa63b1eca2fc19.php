<?php

/* ::base.html.twig */
class __TwigTemplate_eccc2582c0ff271a7417b3ecae79dade297c9cee07d74ec0ddaa63b1eca2fc19 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <!--[if lt IE 9]>
        \t<scirpt src=\"http://html5shim.googlelecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 16
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 69
        echo "    </head>
    <body>
        ";
        // line 71
        $this->displayBlock('body', $context, $blocks);
        // line 75
        echo "        
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "Ethnies Cités - Le site de la diversité urbaine";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/css/style.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/css/640.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen and (max-width: 999px)\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/css/320.css"), "html", null, true);
        echo "\" type=\"text/css\" media=\"screen and (max-width: 639px)\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/css/colorbox.css"), "html", null, true);
        echo "\"/>
            <link rel=\"stylesheet\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/css/lightview/lightview.css"), "html", null, true);
        echo "\" type=\"text/css\"/>
        ";
    }

    // line 16
    public function block_javascripts($context, array $blocks = array())
    {
        // line 17
        echo "            <!--[if lt IE 9]>
            <script src=\"http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js\"></script>
            <![endif]-->
            <script type=\"text/javascript\" src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery-1.9.1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/swfobject.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/spinners/spinners.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/lightview/lightview.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery-migrate-1.1.1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 25
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery-ui-1.10.1.custom.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.scrollTo-1.4.3.1.min.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.parallax-1.1.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.scrollorama.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.easing.1.3.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.scrolldeck.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.colorbox.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bigcity/js/generale.js"), "html", null, true);
        echo "\"></script>
            <script type=\"text/javascript\">

            \$(document).ready(function(){
                    
                    //.parallax(xPosition, adjuster, inertia, outerHeight) 
                    //xPosition - Position horizontale de l'élément (css)
                    //adjuster - La position Y de départ
                    //inertia - Vitesse en fonction du Scroll. Exemple: 0.1 est 1/10 ème de la vitesse du scroll. 2 = deux fois la vitesse du scroll.
                    //outerHeight (true/false) - Whether or not jQuery should use it's outerHeight option to determine when a section is in the viewport
                        \$('#slide1').parallax(\"center\", 0, 0.1, true);
                        \$('#slide2').parallax(\"center\", 1200, 0.1, true);
                        \$('#slide3').parallax(\"center\", 2400, 0.1, true);
                    });
            </script>
            <script type=\"text/javascript\">
            
            \$(document).ready(function() {
                var deck = new \$.scrolldeck({
                buttons: '.nav-button',
                slides: '.slide',
                duration: 600,
                easing: 'easeInOutExpo',
                offset: -80
                              
                });
                
            \$('#SelectMenu').on('change', function(){
                var slide = \$('#SelectMenu option:selected').val()+'_but';
                \$(slide).click();
                });
            });
            
            </script>

        ";
    }

    // line 71
    public function block_body($context, array $blocks = array())
    {
        // line 72
        echo "            
            
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  134 => 30,  110 => 24,  86 => 16,  23 => 1,  97 => 23,  90 => 19,  87 => 18,  77 => 13,  53 => 18,  49 => 16,  56 => 30,  62 => 38,  20 => 1,  40 => 4,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 33,  142 => 32,  128 => 50,  125 => 44,  107 => 36,  38 => 16,  144 => 53,  141 => 51,  135 => 47,  126 => 28,  109 => 41,  103 => 25,  67 => 6,  61 => 26,  47 => 75,  105 => 24,  93 => 20,  76 => 13,  72 => 12,  68 => 11,  27 => 2,  91 => 20,  84 => 28,  94 => 20,  88 => 6,  79 => 17,  59 => 23,  21 => 1,  44 => 21,  31 => 8,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 72,  186 => 71,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 26,  114 => 25,  104 => 36,  100 => 24,  78 => 39,  75 => 23,  71 => 19,  58 => 9,  34 => 11,  26 => 2,  24 => 3,  25 => 4,  19 => 1,  70 => 7,  63 => 10,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 23,  101 => 32,  96 => 21,  83 => 15,  80 => 14,  74 => 16,  66 => 15,  55 => 21,  52 => 15,  50 => 10,  43 => 7,  41 => 69,  37 => 3,  35 => 4,  32 => 3,  29 => 5,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 31,  136 => 50,  133 => 43,  130 => 29,  122 => 27,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 22,  98 => 21,  95 => 34,  92 => 33,  89 => 17,  85 => 25,  81 => 40,  73 => 8,  64 => 41,  60 => 9,  57 => 11,  54 => 5,  51 => 14,  48 => 16,  45 => 71,  42 => 7,  39 => 6,  36 => 9,  33 => 4,  30 => 3,);
    }
}
