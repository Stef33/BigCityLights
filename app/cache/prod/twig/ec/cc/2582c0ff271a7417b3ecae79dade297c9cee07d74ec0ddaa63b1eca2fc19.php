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
        // line 68
        echo "    </head>
    <body>
        ";
        // line 70
        $this->displayBlock('body', $context, $blocks);
        // line 74
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

    // line 70
    public function block_body($context, array $blocks = array())
    {
        // line 71
        echo "            
            
        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  185 => 71,  182 => 70,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 17,  86 => 16,  80 => 14,  76 => 13,  72 => 12,  68 => 11,  63 => 10,  60 => 9,  54 => 5,  47 => 74,  45 => 70,  41 => 68,  38 => 16,  36 => 9,  29 => 5,  23 => 1,);
    }
}
