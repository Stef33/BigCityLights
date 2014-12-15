<?php

/* BigCityBundle:Default:header.html.twig */
class __TwigTemplate_757741e18c1441db30f7cb10fa67e38ffb6d7becdc4fbd037ab4d451067d56de extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('header', $context, $blocks);
    }

    public function block_header($context, array $blocks = array())
    {
        // line 2
        echo "        <header id=\"header\">
            <div id=\"top\">
                <div id=\"logo\">
                    <a href=\"#wrapper\" id=\"sitetitle\" class=\"nav-button current\">Ethnies Cités</a>
                </div>   
                <nav>
                    <ul class=\"navigation\">
                        <li><a href=\"#accueil\" class=\"nav-button\">Accueil</a></li>
                        <li><a href=\"#galerie\" class=\"nav-button\">Galerie Vidéo</a></li>
                        <li><a href=\"#contact\" class=\"nav-button\">Contact</a></li>
                    </ul>
                    ";
        // line 23
        echo "                </nav>
                <div class=\"clear\"></div>
            </div>
        </header>
";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Default:header.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 2,  20 => 1,  189 => 72,  186 => 71,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 17,  86 => 16,  76 => 13,  72 => 12,  68 => 11,  63 => 10,  60 => 9,  54 => 5,  45 => 71,  38 => 16,  36 => 9,  29 => 5,  23 => 1,  103 => 25,  100 => 24,  97 => 23,  93 => 20,  90 => 19,  87 => 18,  83 => 15,  80 => 14,  77 => 13,  73 => 8,  70 => 7,  67 => 6,  61 => 26,  59 => 23,  55 => 21,  53 => 18,  49 => 16,  47 => 75,  41 => 69,  39 => 23,  35 => 4,  32 => 3,);
    }
}
