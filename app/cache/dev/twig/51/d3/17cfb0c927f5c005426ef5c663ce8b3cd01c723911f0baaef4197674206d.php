<?php

/* BigCityBundle:Contact:email.txt.twig */
class __TwigTemplate_51d317cfb0c927f5c005426ef5c663ce8b3cd01c723911f0baaef4197674206d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "Hello,

You have received a message on Ethnies Cités.


From: ";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "email", array(), "array"), "html", null, true);
        echo "

First Name: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "prenom", array(), "array"), "html", null, true);
        echo "

Last Name: ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "nom", array(), "array"), "html", null, true);
        echo "

Phone: ";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "phone", array(), "array"), "html", null, true);
        echo "

Message:

";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["post"]) ? $context["post"] : $this->getContext($context, "post")), "message", array(), "array"), "html", null, true);
        echo "




";
    }

    public function getTemplateName()
    {
        return "BigCityBundle:Contact:email.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 16,  41 => 12,  36 => 10,  31 => 8,  26 => 6,  19 => 1,);
    }
}
