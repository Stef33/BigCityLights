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
        return array (  103 => 25,  100 => 24,  97 => 23,  93 => 20,  90 => 19,  87 => 18,  83 => 15,  80 => 14,  77 => 13,  73 => 8,  70 => 7,  67 => 6,  61 => 26,  59 => 23,  55 => 21,  53 => 18,  49 => 16,  47 => 13,  41 => 9,  39 => 6,  35 => 4,  32 => 3,);
    }
}
