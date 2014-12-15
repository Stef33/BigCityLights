<?php

/* BigCityBundle:Default:index.html.twig */
class __TwigTemplate_3bb0fa398c5779378ffd4f0b61dc807fa4f3402463900edc9e76b8b921f85161 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'header' => array($this, 'block_header'),
            'accueil' => array($this, 'block_accueil'),
            'galerie' => array($this, 'block_galerie'),
            'contact' => array($this, 'block_contact'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
    
    ";
        // line 6
        $this->displayBlock('header', $context, $blocks);
        // line 9
        echo "    
    
    <section id=\"wrapper\">\t
    
            ";
        // line 13
        $this->displayBlock('accueil', $context, $blocks);
        // line 16
        echo "        
       
            ";
        // line 18
        $this->displayBlock('galerie', $context, $blocks);
        // line 21
        echo "        
        
            ";
        // line 23
        $this->displayBlock('contact', $context, $blocks);
        // line 26
        echo "            
    </section>
";
    }

    // line 6
    public function block_header($context, array $blocks = array())
    {
        // line 7
        echo "        ";
        $this->env->loadTemplate("BigCityBundle:Default:header.html.twig")->display($context);
        // line 8
        echo "    ";
    }

    // line 13
    public function block_accueil($context, array $blocks = array())
    {
        // line 14
        echo "                ";
        $this->env->loadTemplate("BigCityBundle:Default:accueil.html.twig")->display($context);
        // line 15
        echo "            ";
    }

    // line 18
    public function block_galerie($context, array $blocks = array())
    {
        // line 19
        echo "                ";
        $this->env->loadTemplate("BigCityBundle:Default:galerie.html.twig")->display($context);
        // line 20
        echo "            ";
    }

    // line 23
    public function block_contact($context, array $blocks = array())
    {
        // line 24
        echo "                ";
        $this->env->loadTemplate("BigCityBundle:Default:contact.html.twig")->display($context);
        // line 25
        echo "            ";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 23,  90 => 19,  87 => 18,  77 => 13,  53 => 18,  49 => 16,  56 => 30,  62 => 38,  20 => 1,  40 => 4,  479 => 162,  473 => 161,  468 => 158,  460 => 155,  456 => 153,  452 => 151,  443 => 149,  439 => 148,  436 => 147,  434 => 146,  429 => 144,  426 => 143,  422 => 142,  412 => 134,  408 => 132,  406 => 131,  401 => 130,  397 => 129,  392 => 126,  386 => 122,  383 => 121,  380 => 120,  378 => 119,  373 => 116,  367 => 112,  364 => 111,  361 => 110,  359 => 109,  354 => 106,  340 => 105,  336 => 103,  321 => 101,  313 => 99,  311 => 98,  308 => 97,  304 => 95,  297 => 91,  293 => 90,  284 => 89,  282 => 88,  277 => 86,  267 => 85,  263 => 84,  257 => 81,  251 => 80,  246 => 78,  240 => 77,  234 => 74,  228 => 73,  223 => 71,  219 => 70,  213 => 69,  207 => 68,  198 => 67,  181 => 66,  176 => 65,  170 => 61,  168 => 60,  146 => 58,  142 => 56,  128 => 50,  125 => 44,  107 => 36,  38 => 6,  144 => 53,  141 => 51,  135 => 47,  126 => 45,  109 => 41,  103 => 25,  67 => 6,  61 => 26,  47 => 13,  105 => 24,  93 => 20,  76 => 16,  72 => 14,  68 => 12,  27 => 2,  91 => 20,  84 => 28,  94 => 39,  88 => 6,  79 => 17,  59 => 23,  21 => 1,  44 => 21,  31 => 8,  28 => 3,  225 => 96,  216 => 90,  212 => 88,  205 => 84,  201 => 83,  196 => 80,  194 => 79,  191 => 78,  189 => 77,  186 => 76,  180 => 72,  172 => 67,  159 => 61,  154 => 59,  147 => 55,  132 => 48,  127 => 46,  121 => 45,  118 => 44,  114 => 42,  104 => 36,  100 => 24,  78 => 39,  75 => 23,  71 => 19,  58 => 9,  34 => 11,  26 => 2,  24 => 3,  25 => 4,  19 => 1,  70 => 7,  63 => 24,  46 => 7,  22 => 2,  163 => 59,  155 => 58,  152 => 49,  149 => 48,  145 => 46,  139 => 55,  131 => 51,  123 => 41,  120 => 40,  115 => 39,  106 => 36,  101 => 32,  96 => 21,  83 => 15,  80 => 14,  74 => 16,  66 => 15,  55 => 21,  52 => 15,  50 => 10,  43 => 7,  41 => 9,  37 => 3,  35 => 4,  32 => 3,  29 => 3,  184 => 70,  178 => 71,  171 => 62,  165 => 58,  162 => 57,  157 => 60,  153 => 54,  151 => 53,  143 => 54,  138 => 51,  136 => 50,  133 => 43,  130 => 47,  122 => 43,  119 => 42,  116 => 35,  111 => 37,  108 => 37,  102 => 30,  98 => 31,  95 => 34,  92 => 33,  89 => 19,  85 => 25,  81 => 40,  73 => 8,  64 => 41,  60 => 23,  57 => 11,  54 => 10,  51 => 14,  48 => 16,  45 => 8,  42 => 7,  39 => 6,  36 => 10,  33 => 4,  30 => 3,);
    }
}
