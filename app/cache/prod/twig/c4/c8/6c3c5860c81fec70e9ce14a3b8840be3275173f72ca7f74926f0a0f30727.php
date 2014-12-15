<?php

/* BigCityBundle:Default:footer.html.twig */
class __TwigTemplate_c4c86c3c5860c81fec70e9ce14a3b8840be3275173f72ca7f74926f0a0f30727 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('footer', $context, $blocks);
    }

    public function block_footer($context, array $blocks = array())
    {
        echo "\t
    <div id=\"footer\">
        <ul>
            <li>© etniescites.com</li>
            <li><a class=\"nav-button current\" href=\"#wrapper\">⇑ Top</a></li>
        </ul>
    </div>
";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Default:footer.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  78 => 39,  64 => 41,  62 => 38,  25 => 4,  56 => 30,  44 => 21,  19 => 1,  26 => 2,  20 => 1,  189 => 72,  186 => 71,  146 => 33,  142 => 32,  138 => 31,  134 => 30,  130 => 29,  126 => 28,  122 => 27,  118 => 26,  114 => 25,  110 => 24,  106 => 23,  102 => 22,  98 => 21,  94 => 20,  89 => 17,  86 => 16,  76 => 13,  72 => 12,  68 => 11,  63 => 10,  60 => 9,  54 => 5,  45 => 71,  38 => 16,  36 => 9,  29 => 5,  23 => 1,  103 => 25,  100 => 24,  97 => 23,  93 => 20,  90 => 19,  87 => 18,  83 => 15,  80 => 40,  77 => 13,  73 => 38,  70 => 7,  67 => 6,  61 => 26,  59 => 23,  55 => 21,  53 => 18,  49 => 16,  47 => 75,  41 => 69,  39 => 23,  35 => 4,  32 => 12,);
    }
}
